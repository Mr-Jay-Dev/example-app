<?php

namespace App\Providers;

use App\Interfaces\CampaignRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\DataRepositoryInterface;
use App\Interfaces\MainRepositoryInterface;
use App\Repositories\CampaignRepository;
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

        $this->app->bind(
            CampaignRepositoryInterface::class,
            CampaignRepository::class
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
