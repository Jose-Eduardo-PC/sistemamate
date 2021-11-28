<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialLoginController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();
        $user = User::firstOrNew(['facebook_id' => $facebookUser->getId()]);
        if (!$user->exists) {
            $user->name = $facebookUser->getName();
            $user->email = $facebookUser->getEmail();
            $user->genero = 'binario';
            $user->rol_id = '1';
            $user->save();
        }

        Auth::login($user);
        return redirect()->route('admin')->with('success', 'bienvenido' . $user->name);
    }
}
