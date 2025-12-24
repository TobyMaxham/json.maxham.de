<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Response::macro('jsonpretty', function ($data = [], int $status = 200, array $headers = [], int $options = 0) {
            $response = Response::json($data, $status, $headers, $options);
            $response->setEncodingOptions(JSON_PRETTY_PRINT);
            return $response;
        });
    }
}
