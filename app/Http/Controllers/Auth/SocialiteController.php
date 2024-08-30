<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class SocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $this->handleUser($user);
        return redirect()->to('/home');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $this->handleUser($user);
        return redirect()->to('/home');
    }

    private function handleUser($socialUser)
    {
        $user = User::firstOrCreate([
            'email' => $socialUser->getEmail(),
        ], [
            'name' => $socialUser->getName(),
            'avatar' => $socialUser->getAvatar(),
            'password' => bcrypt('asfqwf'), // Tạo mật khẩu ngẫu nhiên
        ]);

        Auth::login($user);
    }
}
