<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function createUser($user, $provider)
    {
        return User::updateOrCreate([
            'provider_id' => $user->getId(),
            'provider'    => $provider,
        ], [
            'name'            => $user->getName() ?? '',
            'email'           => $user->getEmail(),
            'image'           => $user->getAvatar() ?? '',
            'provider_id'     => $user->getId(),
            'provider'        => $provider,
            'provider_object' => json_encode($user),
        ]);
    }

    public function getUserById($id)
    {
        return $this->userModel->find($id);
    }
}
