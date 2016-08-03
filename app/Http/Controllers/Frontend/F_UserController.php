<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Country;
use App\Gender;
use App\Education;

class F_UserController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$user = Auth::user();
		$age = 24;
		$countries = Country::lists('name', 'id')->toArray();
		$genders = Gender::lists('name', 'id')->toArray();
		$educations = Education::lists('name', 'id')->toArray();
		return view('frontend.user.profile', compact('user', 'countries', 'genders', 'educations', 'age'));
	}

	public function saveprofile(Request $request)
	{
		$user = Auth::user();
		$user->update($request->all());
		return redirect()->intended('/profile');
	}

}
