<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\FileService;
use App\Services\CatalogService;
use App\Services\PermissionService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(FileService::class, function(){
            return app(FileService::class);
        });
        $this->app->bind(CatalogService::class, function() {
            return app(CatalogService::class);
        });
        $this->app->bind(PermissionService::class, function() {
            return app(PermissionService::class);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
