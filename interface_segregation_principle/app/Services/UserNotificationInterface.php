<?php

namespace App\Services;

interface UserNotificationInterface
{
    public function notifyUser(int $id, string $message);
}