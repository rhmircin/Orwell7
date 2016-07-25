<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Validator;
use App\UserAuth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Laravel\Socialite\Contracts\Factory as Socialite;

class AuthController extends Controller
{
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
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


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
