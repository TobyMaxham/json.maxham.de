<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('jsonpretty', function ($data = [], int $status = 200, array $headers = [], int $options = 0) {
            $response = Response::json($data, $status, $headers, $options);
            $response->setEncodingOptions(JSON_PRETTY_PRINT);
            return $response;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
