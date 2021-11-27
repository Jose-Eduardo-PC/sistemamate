<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUser;

class LoginController extends Controller
{


    use AuthenticatesUser;


    protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->redirect();
    }

    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($driver)
    {
        $user = Socialite::driver($driver)->user();

        // $user->token;
    }
}
