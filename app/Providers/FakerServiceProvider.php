<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\Factory as FakerFactory;
use Faker\Generator as FakerGenerator;

// https://medium.com/laravel-news/fake-localized-data-and-laravel-c4cdbecb2c31
class FakerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->registerFaker();
    }

    /**
     * Register the faker generator class.
     *
     * @return void
     */
    protected function registerFaker()
    {
        // we can get this job done with config 'faker_locale' => 'en_IN',
        $this->app->singleton(FakerGenerator::class, function () {
            return FakerFactory::create('en_IN');
        });
    }
}
