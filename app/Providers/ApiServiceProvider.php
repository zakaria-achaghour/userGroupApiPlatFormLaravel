<?php
namespace App\Providers;

use ApiPlatform\State\ProviderInterface;
use App\State\GroupProvider;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(GroupProvider::class, function (Application $app) {
            return new GroupProvider();
        });

        $this->app->tag([GroupProvider::class], ProviderInterface::class);
    }
}