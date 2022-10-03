<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Dashboard
        $this->app->bind(
            'App\Interfaces\DashboardRepositoryInterface',
            'App\Repository\DashboardRepository'
        );
        // DashboardService
        $this->app->bind(
            'App\Interfaces\DashboardServiceInterface',
            'App\Services\DashboardService'
        );
        // Pages
        $this->app->bind(
            'App\Interfaces\PagesRepositoryInterface',
            'App\Repository\PagesRepository'
        );
        // System
        $this->app->bind(
            'App\Interfaces\SystemRepositoryInterface',
            'App\Repository\SystemRepository'
        );
        // SystemService
        $this->app->bind(
            'App\Interfaces\SystemServiceInterface',
            'App\Services\SystemService'
        );
        // Page
        $this->app->bind(
            'App\Interfaces\PageRepositoryInterface',
            'App\Repository\PageRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('vendor.pagination.default');
    }
}
