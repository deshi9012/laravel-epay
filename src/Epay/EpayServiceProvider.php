<?php

namespace Deshi\Epay\Epay;

use Illuminate\Support\ServiceProvider;

class EpayServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        //
        $upOne = realpath(__DIR__ . '/..');
        
        $this->publishes([
            $upOne.'/config/epay.php'=>config_path('epay.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        
        $this->app->bind('epay','Deshi\Epay\Epay\Epay');
            
    }


}
