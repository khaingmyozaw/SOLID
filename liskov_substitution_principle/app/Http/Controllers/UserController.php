<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function show($id) 
    {
        $user = $this->userRepository->findById($id);

        return response()->json($user);
    }

    public function findByEmail(Request $request)
    {
        $email = $request->input('email');
        $user = $this->userRepository->findByEmail($email);

        return response()->json($user);
    }
}
