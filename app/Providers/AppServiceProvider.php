<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Repositories\PostRepositoryInterface;
use App\Repositories\NormalPostRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->contract();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    public function contract ()
    {
       // $this->app->singleton(PostRepositoryInterface::class, NormalPostRepository::class);
    }
}
