<?php

namespace App\Http\Controllers;

use App\Services\SocialLoginService;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    protected $socialService;

    public function __construct(SocialLoginService $socialService)
    {
        $this->socialService = $socialService;
    }

    public function index()
    {
        return view('index');
    }

    public function github_login()
    {
        return Socialite::driver('github')->redirect();
    }

    public function github_redirect()
    {
        $user = Socialite::driver('github')->user();
        if ($user) {
            $this->socialService->SaveGitHubUser($user);
            return redirect('dashboard');
        } else {
            return redirect('/');
        }
    }

    public function logout()
    {
        $this->socialService->logout();
        return redirect('/');
    }

    public function facebook_login()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebook_redirect()
    {
        $user = Socialite::driver('facebook')->user();
        if ($user) {
            $this->socialService->SaveFacebookUser($user);
            return redirect('dashboard');
        } else {
            return redirect('/');
        }
    }
}
