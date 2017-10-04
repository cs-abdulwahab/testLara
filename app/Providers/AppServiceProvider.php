<?php

namespace App\Providers;

use Iber\Generator\ModelGeneratorProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
      //      $this->app->register(\Way\Generators\GeneratorsServiceProvider::class);
        //    $this->app->register(\Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class);
     //       $this->app->register(ModelGeneratorProvider::class);

            if ($this->app->environment() == 'local') {
                $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
            }

        }
    }
}
