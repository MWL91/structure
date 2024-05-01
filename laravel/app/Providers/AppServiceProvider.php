<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\AnotherExample\Services\AnotherImplementationOfService;
use Modules\AnotherExample\Services\Contracts\AnotherExampleService;
use Modules\Example\Services\Contracts\ExampleService;
use Modules\Example\Services\ExampleImplementationOfService;

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
