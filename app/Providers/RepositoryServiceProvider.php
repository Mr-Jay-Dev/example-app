<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\DataRepositoryInterface;
use App\Interfaces\MainRepositoryInterface;
use App\Repositories\DataRepository;
use App\Repositories\MainRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            DataRepositoryInterface::class,
            DataRepository::class
        );

        $this->app->bind(
            MainRepositoryInterface::class,
            MainRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
