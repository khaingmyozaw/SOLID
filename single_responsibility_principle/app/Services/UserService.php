<?php

namespace App\Services;

/**
 * This is bad practice because it's not following the Single Responsibility Principle.
 * 
 * Check @UserCreatorService and @SendWelcomeEmailService for better examples.
 */
class UserService
{
    public function userCreate($data)
    {
        // Create user
    }

    public function sendWelcomeEmail($user)
    {
        // Send welcome email
    }

    public function logActivity($user, $activity)
    {
        // Log activity
    }
}