<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\FileEloquentInterface;
use App\Interfaces\ProjectEloquentInterface;
use App\Repositories\FileEloquentRepository;
use App\Repositories\ProjectEloquentRepository;

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
        $this->app->bind(
            ProjectEloquentInterface::class, ProjectEloquentRepository::class
        );

        $this->app->bind(
            FileEloquentInterface::class, FileEloquentRepository::class
        );
    }
}
