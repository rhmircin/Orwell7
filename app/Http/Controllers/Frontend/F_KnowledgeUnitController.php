<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\KnowledgeUnit;
use App\Unit;
use App\Course;
use Illuminate\Http\Request;
use Carbon\Carbon;

class F_KnowledgeUnitController extends Controller
{
	/*
	 * Show the course detail page
	 *
	 * @return Response
	 */
	public function detail($slug_course, $slug)
	{
		$knowledgeunit = KnowledgeUnit::findBySlugOrId($slug);
		$course = Course::findBySlugOrId($slug_course);

		return view('frontend.knowledgeunit.detail', compact('knowledgeunit', 'course'));
	}

	public function detail_old($id_course, $id)
	{
		$knowledgeunit = KnowledgeUnit::findOrFail($id);
		$course = Course::findOrFail($id_course);

		return view('frontend.knowledgeunit.detail', compact('knowledgeunit', 'course'));
	}
}
