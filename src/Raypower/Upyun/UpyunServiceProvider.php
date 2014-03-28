<?php namespace Raypower\Upyun;

use Illuminate\Support\ServiceProvider;
use UpYun\UpYun;

class UpyunServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('raypower/upyun');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['upyun'] = $this->app->share(function ($app) {

            return new UpYun(
                $app['config']['raypower/upyun::bucket_name'],
                $app['config']['raypower/upyun::username'],
                $app['config']['raypower/upyun::password'],
                $app['config']['raypower/upyun::end_point'],
                $app['config']['raypower/upyun::timeout']
            );
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('upyun');
    }

}
