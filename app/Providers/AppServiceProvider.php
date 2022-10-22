<?php

namespace App\Providers;

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
        $this->app->bind('path.public', function() {
        $manifest = [
                '/public/build/manifest.json', 
                '/resources/views/layouts/guest.blade.php'
            ];
        $manifestResult = implode("", $manifest);
        
        $manifestString = base_path().$manifestResult;
        
        return $manifestString;
        });
    }
}
