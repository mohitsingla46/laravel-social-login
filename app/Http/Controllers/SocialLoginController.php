<?php

namespace App\Http\Controllers;

use App\Services\SocialLoginService;
use Illuminate\Support\Facades\Auth;
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
        if(Auth::user()){
            return redirect('dashboard');
        }
        else{
            return view('index');
        }
    }

    public function github_login()
    {
        return Socialite::driver('github')->redirect();
    }

    public function github_redirect()
    {
        $result = $this->socialService->redirect('github');
        if ($result) {
            return redirect('dashboard');
        } else {
            return redirect('/');
        }
    }

    public function facebook_login()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebook_redirect()
    {
        $result = $this->socialService->redirect('facebook');
        if ($result) {
            return redirect('dashboard');
        } else {
            return redirect('/');
        }
    }

    public function google_login()
    {
        return Socialite::driver('google')->redirect();
    }

    public function google_redirect()
    {
        $result = $this->socialService->redirect('google');
        if ($result) {
            return redirect('dashboard');
        } else {
            return redirect('/');
        }
    }

    public function linkedin_login()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function linkedin_redirect()
    {
        $result = $this->socialService->redirect('linkedin');
        if ($result) {
            return redirect('dashboard');
        } else {
            return redirect('/');
        }
    }

    public function x_login()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function x_redirect()
    {
        $result = $this->socialService->redirect('twitter');
        if ($result) {
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
}
