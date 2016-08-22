<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller;

class F_ContactController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$site = 'contact';
		return view('frontend.contact.main', compact('site'));
	}

}
