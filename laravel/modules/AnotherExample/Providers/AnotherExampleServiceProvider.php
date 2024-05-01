<?php

namespace Modules\AnotherExample\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\AnotherExample\Services\AnotherImplementationOfService;
use Modules\AnotherExample\Services\Contracts\AnotherExampleService;

class AnotherExampleServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
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
