<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\FileService;

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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
