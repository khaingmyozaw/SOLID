<?php

namespace App\Providers;

use App\Services\ActivityService;
use App\Services\BaseUserService;
use App\Services\NotificationService;
use App\Services\UserActivityInterface;
use App\Services\UserNotificationInterface;
use App\Services\UserRegistrationInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRegistrationInterface::class, BaseUserService::class);
        $this->app->bind(UserNotificationInterface::class, NotificationService::class);
        $this->app->bind(UserActivityInterface::class, ActivityService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
