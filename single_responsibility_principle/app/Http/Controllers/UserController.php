<?php

namespace App\Http\Controllers;

use App\Services\SendWelcomeEmailService;
use App\Services\UserCreatorService;
use Illuminate\Http\Request;


// According to the Single Responsibility Principle, controllers sholud only be repsonsible for handling HTTP requests.
class UserController extends Controller
{
    public function store(Request $request, UserCreatorService $userCreatorService, SendWelcomeEmailService $sendWelcomeEmailService)
    {
        $user = $userCreatorService->create($request->all());
        $sendWelcomeEmailService->send($user);

        return response()->json(['message' => 'User created successfully'], 2001);
    }
}
