<?php

namespace App\Services;

class EmailNotificationService implements NotificationServiceInterface
{
    public function send($message)
    {
        // Send email
        return 'Email notification: ' . $message;
    }
}