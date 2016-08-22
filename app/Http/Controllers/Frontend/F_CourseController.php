<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
use App\Course;
use App\Category;
use App\Unit;
use App\KnowledgeUnit;
use Ghanem\Rating\Models\Rating;
use App\Http\Requests\Admin\CourseRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class F_CourseController extends Controller
{
	/**
	* Show the courses dashboard.
	*
	* @return Response
	*/
	public function grid()
	{
		$site = 'courses';

		$courses = Course::where('active', 1)
		->orderBy('name', 'asc')
		->paginate(3);

		$categories = Category::all();

		return view('frontend.course.grid', compact('site', 'courses', 'categories'));
	}

	/*
	* Show the course detail page (SLUG)
	*
	* @return Response
	*/
	public function detail($slug)
	{
		$course = Course::findBySlugOrId($slug);

		$units = Unit::where('course_id',$course->id)
		->orderBy('order', 'asc')
		->get();

		$knowledgeunits = KnowledgeUnit::whereIn('unit_id', $units->lists('id')->toArray())
		->get();

		return view('frontend.course.detail', compact('course', 'units', 'knowledgeunits'));
	}

	/*
	* Show the course detail page (SLUG)
	*
	* @return Response
	*/
	public function rate($slug, $rate)
	{
		$course = Course::findBySlugOrId($slug);
		$user = Auth::user();

		$rating = Rating::where('author_id', $user->id)
						 ->where('ratingable_id', $course->id)
						 ->where('ratingable_type','App\Course')
						 ->first();
		if($rating){
			$rating->rating = (int)$rate;
			$rating->save();
		} else {
			$rating = $course->rating([
				'rating' => (int)$rate
			], $user);
		}
		//dd($rating);
		return redirect()->intended('/courses/'.$course->slug);
	}

	/*
	* Show the course detail page (ID)
	*
	* @return Response
	*/
	public function detail_old($id)
	{
		$course = Course::findOrFail($id);

		$units = Unit::where('course_id',$id)
		->orderBy('order', 'asc')
		->get();

		$knowledgeunits = KnowledgeUnit::whereIn('unit_id', $units->lists('id')->toArray())
		->get();

		return view('frontend.course.detail', compact('course', 'units', 'knowledgeunits'));
	}
}
