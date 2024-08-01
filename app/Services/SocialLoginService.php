<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function redirect($type)
    {
        try {
            $user = Socialite::driver($type)->user();
            if ($user) {
                $this->saveUser($user, $type);
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function saveUser($user, $provider)
    {
        $userAdded = $this->userRepository->createUser($user, $provider);
        Auth::login($userAdded);
    }

    public function logout()
    {
        Auth::logout();
    }
}
