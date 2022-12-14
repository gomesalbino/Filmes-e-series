<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        if(app()->environment('production')){
        URL::forceScheme('https');

    }
        // $this->app->bind('path.public', function () {
        //     return base_path().'/public/build/manifest.json';
        // });
    }
}
