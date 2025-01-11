<?php

namespace App\Services;

class SMSNotificationService implements NotificationServiceInterface
{
    public function send ($message) {
        // Send SMS
        return 'SMS notification: ' . $message; 
    }
}