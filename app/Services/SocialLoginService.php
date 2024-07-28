<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class SocialLoginService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function SaveGitHubUser($user)
    {
        $provider = 'GitHub';
        $userAdded = $this->userRepository->createUser($user, $provider);
        Auth::login($userAdded);
    }

    public function logout()
    {
        Auth::logout();
    }

    public function SaveFacebookUser($user)
    {
        $provider = 'Facebook';
        $userAdded = $this->userRepository->createUser($user, $provider);
        Auth::login($userAdded);
    }
}
