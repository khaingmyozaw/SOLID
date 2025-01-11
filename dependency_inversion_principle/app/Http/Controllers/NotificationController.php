<?php

namespace App\Http\Controllers;

use App\Services\NotificationServiceInterface;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    protected $notificationService;
    public function __construct(NotificationServiceInterface $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function sendNotification()
    {
        return $this->notificationService->send('Hello, our user?');
    }
}
