<?php

namespace App\Http\Controllers\Frontend;

use App\Course;
use Illuminate\Routing\Controller;

class F_HomeController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$site = 'home';

		$latest = Course::where('active', 1)
			            ->orderBy('created_at', 'desc')
			            ->take(4)
			            ->get();

		$next = $latest;

		return view('frontend.home.home', compact('site', 'latest', 'next'));
	}

}
