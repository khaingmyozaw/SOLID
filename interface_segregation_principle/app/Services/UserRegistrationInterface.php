<?php

namespace App\Services;

interface UserRegistrationInterface {
    public function registerUser(array $data);
    public function updateUser(int $id, array $data);
    public function deleteUser(int $id);
}