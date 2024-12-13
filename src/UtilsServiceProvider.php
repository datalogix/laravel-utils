<?php

namespace Datalogix\Utils;

use Datalogix\Translation\TranslationServiceProvider;
use Datalogix\Utils\Http\Middleware\HttpsProtocolMiddleware;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
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
        $this->app->register(TranslationServiceProvider::class, true);
        $this->mergeConfigFrom(__DIR__.'/../config/utils.php', 'utils');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootPublishes();
        $this->bootModel();
        $this->bootLocale();
        $this->bootSchema();
        $this->bootHttps();
        $this->bootPaginator();
        $this->bootVite();
    }

    /**
     * Bootstrap publishes.
     *
     * @return void
     */
    private function bootPublishes()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../config/utils.php' => config_path('utils.php')], 'config');
            $this->publishes([__DIR__.'/../lang' => function_exists('lang_path') ? lang_path() : resource_path('lang')], 'lang');
        }

        $this->callAfterResolving('translator', function ($translator) {
            $translator->addPath(__DIR__.'/../lang');
        });
    }

    /**
     * Bootstrap model.
     *
     * @return void
     */
    private function bootModel()
    {
        if (method_exists(Model::class, 'shouldBeStrict')) {
            Model::shouldBeStrict(config('utils.model.strict'));
        }

        Model::unguard(config('utils.model.unguard'));
    }

    /**
     * Bootstrap locale.
     *
     * @return void
     */
    private function bootLocale()
    {
        if ($category = config('utils.locale.category')) {
            setlocale($category, $this->app->getlocale());

            $this->app->events->listen('Illuminate\Foundation\Events\LocaleUpdated', function () use ($category) {
                setlocale($category, $this->app->getlocale());
            });
        }
    }

    /**
     * Bootstrap schema.
     *
     * @return void
     */
    private function bootSchema()
    {
        if ($schemaDefaultStringLength = config('utils.schema.defaultStringLength')) {
            Schema::defaultStringLength($schemaDefaultStringLength);
        }
    }

    /**
     * Bootstrap https.
     *
     * @return void
     */
    private function bootHttps()
    {
        if (config('utils.https.middleware')) {
            $kernel = $this->app->make(Kernel::class);
            $kernel->prependMiddleware(HttpsProtocolMiddleware::class);
        }

        if (config('utils.https.forceScheme')) {
            URL::forceScheme('https');
        }
    }

    /**
     * Bootstrap paginator.
     *
     * @return void
     */
    private function bootPaginator()
    {
        if ($paginatorDefaultView = config('utils.paginator.defaultView')) {
            Paginator::defaultView($paginatorDefaultView);
        }

        if ($paginatorDefaultSimpleView = config('utils.paginator.defaultSimpleView')) {
            Paginator::defaultSimpleView($paginatorDefaultSimpleView);
        }
    }

    /**
     * Bootstrap vite.
     *
     * @return void
     */
    private function bootVite()
    {
        if (class_exists(Vite::class) && method_exists(Vite::getFacadeRoot(), 'usePrefetchStrategy')) {
            Vite::usePrefetchStrategy(config('utils.vite.strategy'));
        }
    }
}
