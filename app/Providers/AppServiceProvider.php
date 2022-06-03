<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Laravel\Passport\Passport;

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
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    
    {
 	Schema::defaultStringLength(191);       
//$this->registerPolicies();
 
        if (! $this->app->routesAreCached()) {
            Passport::routes();
        }
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
