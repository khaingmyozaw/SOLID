<?php

namespace App\Providers;

use App\Services\EmailNotificationService;
use App\Services\NotificationServiceInterface;
use App\Services\SMSNotificationService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->bind(
        //     'App\Services\NotificationServiceInterface',
        //     'App\Services\EmailNotificationService'
        // );

        $this->app->bind(NotificationServiceInterface::class, EmailNotificationService::class);

        // (OR)
        // $this->app->bind(NotificationServiceInterface::class, SMSNotificationService::class);
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
