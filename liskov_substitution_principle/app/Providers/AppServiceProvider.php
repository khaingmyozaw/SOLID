<?php

namespace App\Providers;

use App\Repositories\CachedUserRepository;
use App\Repositories\EloquentUserRepository;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind the interface to the default implementation. (production purpose)
        $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);

        // For testing purpose
        // $this->app->bind(UserRepositoryInterface::class, function ($app) {
        //     return new  CachedUserRepository($app->make(EloquentUserRepository::class));
        // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
