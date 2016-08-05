<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Country;
use App\Gender;
use App\Education;
use App\Http\Requests\Frontend\UserRequest;

class F_UserController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$user = Auth::user();
		$countries = Country::lists('name', 'id')->toArray();
		$genders = Gender::lists('name', 'id')->toArray();
		$educations = Education::lists('name', 'id')->toArray();
		return view('frontend.user.profile', compact('user', 'countries', 'genders', 'educations'));
	}

	public function saveprofile(UserRequest $request)
	{
		$user = Auth::user();
		
		// File upload
		$old_name = $user->name;
		$old_filename = $old_name . '-' . $user->id . '.jpg';
	    $filename = $old_name . '-' . $user->id . '.jpg'; //$request['name']
	 
	    $file = $request->file('image');
        $update = false;
        
        if (Storage::disk('local')->has($old_filename)) {
            $old_file = Storage::disk('local')->get($old_filename);
            Storage::disk('local')->put($filename, $old_file);
            $update = true;
        }
        if ($file) {
            Storage::disk('local')->put($filename, File::get($file));
        }
        if ($update && $old_filename !== $filename) {
            Storage::delete($old_filename);
        }

        // Delete image from request->all() 
		$user_data = $request->all();

        if ($request->hasFile('image')) {
        	unset($user_data['image']);
        }

        // Save user data
        $user->update($user_data);
		return redirect()->route('profile');
	}

	public function getUserImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }

}