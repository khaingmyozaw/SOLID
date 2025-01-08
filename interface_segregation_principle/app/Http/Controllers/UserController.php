<?php

namespace App\Http\Controllers;

use App\Services\UserRegistrationInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserRegistrationInterface $userService)
    {
        $this->userService = $userService;
    }

    public function store(Request $request)
    {
        $this->userService->registerUser($request->all());
    }
}
