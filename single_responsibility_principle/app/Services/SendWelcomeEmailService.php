<?php

namespace App\Services;

// According to the Single Responsibility Principle, this class should only be responsible for sending welcome emails.
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmailService
{
    public function send($user)
    {
        Mail::to($user->email)->send(new WelcomeEmail($user));
    }
}