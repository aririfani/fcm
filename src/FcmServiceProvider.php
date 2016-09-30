<?php

namespace Aririfani\Fcm;

use Illuminate\Support\ServiceProvider;
use Aririfani\Fcm\FcmHelper;

class FcmServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    protected $fcm;

    public function boot()
    {
        $this->fcm = new FcmHelper;   
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('fcm',function() {
            return $this->fcm;
        });
    }
}
