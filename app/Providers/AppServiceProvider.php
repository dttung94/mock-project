<?php

namespace App\Providers;

use App\Contracts\Services\Api\CategoryServiceInterface;
use App\Contracts\Services\Api\DepartmentServiceInterface;
use App\Contracts\Services\Api\UserServiceInterface;
use App\Services\Api\CategoryService;
use App\Services\Api\DepartmentService;
use App\Services\Api\UserService;
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
        $services = [
            [
                UserServiceInterface::class,
                UserService::class
            ],
        ];

        $services = [
            [
                CategoryServiceInterface::class,
                CategoryService::class
            ],
        ];

        $services = [
            [
                DepartmentServiceInterface::class,
                DepartmentService::class
            ],
        ];

        foreach ($services as $service) {
            $this->app->bind(
                $service[0],
                $service[1]
            );
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
