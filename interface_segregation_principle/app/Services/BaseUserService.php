<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;

class BaseUserService implements UserRegistrationInterface
{
    public function registerUser(array $data)
    {
        $validator = Validator($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'passsword' => 'required|string|min:8',
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data["password"] = bcrypt($data["password"]);
        $user = User::create($data);    

        return response()->json([
            'message' => 'User created successfully.',
            'user' => $user,
        ], 201);
    }

    public function updateUser(int $id, array $data)
    {
        try {
            $user = User::findOrFail($id);
            $validator = Validator($data, [
                'name' => 'sometimes|string|max:255',
                'email' => 'sometimes|email|unique:users,email' . $id,
                'password' => 'sometimes|string|min:8',
            ]);
    
            if ($validator->fails()){
                return response()->json(['errors' => $validator->errors()], 422);
            }
    
            if ($data['password']) {
                $data['password'] = bcrypt($data['password']);
            }
            
            $user->update($data);
            
            return response()->json([
                'message' => 'User updated successfully.',
                'user' => $user,
            ]);
        }catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'User not found!'], 404);
        }
    }

    public function deleteUser(int $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return response()->json(['message' => 'User deleted successfully!']);
        }catch (ModelNotFoundException $e) {
            return response()->json(['error', 'User not found!'], 404);
        }
    }
}