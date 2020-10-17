<?php

namespace Datalogix\Utils;

use Carbon\Carbon;
use Datalogix\Utils\Http\Middleware\HttpsProtocolMiddleware;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class UtilsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/utils.php', 'utils');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../config/utils.php' => config_path('utils.php')], 'config');
            $this->publishes([__DIR__.'/../resources/lang' => resource_path('lang')], 'lang');
        }

        if ($locale = config('utils.locale')) {
            setlocale(LC_ALL, $locale);
            Carbon::setLocale($locale);
            $this->app->setlocale($locale);
        }

        if ($schemaDefaultStringLength = config('utils.schema.defaultStringLength')) {
            Schema::defaultStringLength($schemaDefaultStringLength);
        }

        if (config('utils.middleware.forceHttps')) {
            $kernel = $this->app->make(Kernel::class);
            $kernel->prependMiddleware(HttpsProtocolMiddleware::class);

            URL::forceScheme('https');
        }

        if ($paginatorDefaultView = config('utils.paginator.defaultView')) {
            Paginator::defaultView($paginatorDefaultView);
        }

        if ($paginatorDefaultSimpleView = config('utils.paginator.defaultSimpleView')) {
            Paginator::defaultSimpleView($paginatorDefaultSimpleView);
        }
    }
}
