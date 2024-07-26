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

    public function github_login(Request $request)
    {
        return Socialite::driver('github')->redirect();
    }

    public function github_redirect(Request $request)
    {
        $user = Socialite::driver('github')->user();
        if ($user) {
            $this->socialService->SaveGitHubUser($user);
            return redirect('dashboard');
        } else {
            return redirect('/');
        }
    }
}
