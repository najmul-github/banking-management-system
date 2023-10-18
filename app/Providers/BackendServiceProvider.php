<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\Default\DefaultService',
            'App\Services\Default\DefaultServiceImp',
        );   
        $this->app->bind(
            'App\Services\Users\UserService',
            'App\Services\Users\UserServiceImp',
        );  
        $this->app->bind(
            'App\Services\Transactions\TransactionService',
            'App\Services\Transactions\TransactionServiceImp',
        );       
        
        $this->app->bind(
            'App\Repositories\Default\DefaultRepository',
            'App\Repositories\Default\DefaultRepositoryImp',
        );
        $this->app->bind(
            'App\Repositories\Users\UserRepository',
            'App\Repositories\Users\UserRepositoryImp',
        );
        $this->app->bind(
            'App\Repositories\Transactions\TransactionRepository',
            'App\Repositories\Transactions\TransactionRepositoryImp',
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
