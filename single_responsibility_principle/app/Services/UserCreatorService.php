<?php

namespace App\Services;

use App\Models\User;

// According to the Single Responsibility Principle, this class should only be responsible for creating users.
class UserCreatorService
{
    public function create($data)
    {
        return User::create($data);
    }
}