<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Social;
use Validator;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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

    protected $redirectPath = '/';

    protected $loginPath = '/auth/login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'password' => 'required|confirmed|min:6',
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

    public function getSocialRedirect($provider) {
        $providerKey = \Config::get('services.' . $provider);
        if ( empty($providerKey ) )
            return view('pages.status')
                ->with('error','No such provider');

        return Socialite::with($provider)->redirect();
    }

    public function getSocialHandle($provider) {
        $user = Socialite::driver( $provider )->user();
        $socialUser = null;

        $userCheck = User::where('email', '=', $user->email)->first();

        // Create new user id doesn't exists
        if(!empty($userCheck)) {
            $socialUser = $userCheck;
        } else {
            $socialUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'avatar' => $user->avatar
            ]);
        }
        // End
        
        // Update social information
        if ($socialUser->google() and $provider == 'google') {
            $socialUser->google()->save($this->fillSocialData($user));
        }

        if ($socialUser->facebook() and $provider == 'facebook') {
            $socialUser->facebook()->save($this->fillSocialData($user));
        }

        if ($socialUser->twitter() and $provider == 'twitter') {
            $socialUser->twitter()->save($this->fillSocialData($user));
        }
        // End

        // Authenticate user
        Auth::login($socialUser);
        // End

        return redirect()->route('home');
    }

    public function fillSocialData($user) {
        $socialData = new Social;

        $socialData->id = $user->id;
        $socialData->name = $user->name;
        $socialData->avatar = $user->avatar;
        $socialData->info = $user->user;

        return $socialData;
    }
}
