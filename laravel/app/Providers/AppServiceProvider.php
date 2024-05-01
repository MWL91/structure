<?php

namespace App\Providers;

use App\Services\AnotherImplementationOfService;
use App\Services\Contracts\AnotherExampleService;
use App\Services\Contracts\ExampleService;
use App\Services\ExampleImplementationOfService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ExampleService::class, ExampleImplementationOfService::class);
        $this->app->bind(AnotherExampleService::class, AnotherImplementationOfService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
