<?php

namespace App\Services;

use App\Models\User;

class NotificationService implements UserNotificationInterface
{
    public function notifyUser(int $id, string $message)
    {
        /* Some notification codes are here */
    }
}