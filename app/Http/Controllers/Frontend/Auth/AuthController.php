<?php

namespace App\Http\Controllers\Frontend\Auth;

use Auth;
use Validator;
use App\User;
use App\UserAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Laravel\Socialite\Contracts\Factory as Socialite;

class AuthController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
    * Handle social authentication.
    */
    public function auth(Socialite $socialite, $provider){

        return $socialite->with($provider)->redirect();

    }

    /**
    * Handle sociel authentication callback.
    */
    public function authCallback(Socialite $socialite, $provider){

        $auth = $socialite->with($provider)->user();

        $userAuth = UserAuth::where('uid', '=', $auth->getId())->first();

        if($userAuth){
            $user = $userAuth->user;
        }else{
            if($auth->getEmail()){
                $user = User::where('email', '=', $auth->getEmail())->first();

                // check empty Nickname
                $username = $auth->getNickname();
                if(is_null($username) or $username == ''){
                    $username = $auth->getEmail();
                }

                if (is_null($user)) {
                    $user = User::create([
                        'name' => $auth->getName(),
                        'username' => $username,
                        'email' => $auth->getEmail()
                    ]);
                }
            }else{
                $user = User::create([
                    'name' => $auth->getName(),
                    'username' => $auth->getNickname()
                ]);
            }

            $userAuth = UserAuth::create([
                'provider' => $provider,
                'uid' => $auth->getId(),
            ]);

            $userAuth->user()->associate($user);
            $userAuth->save();
        }

        Auth::loginUsingId($user->id);

        return redirect()->intended('/')
        ->with(array('message' => 'Your are now logged in!', 'message_type' => 'success'));

    }

}
