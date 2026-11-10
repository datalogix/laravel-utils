<?php

namespace Datalogix\Utils;

use Datalogix\BuilderMacros\BuilderMacroServiceProvider;
use Datalogix\ErrorPages\ErrorPagesServiceProvider;
use Datalogix\Sensible\SensibleServiceProvider;
use Datalogix\Validation\ValidationServiceProvider;
use Illuminate\Support\ServiceProvider;

class UtilsServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register(): void
    {
        $this->app->register(BuilderMacroServiceProvider::class);
        $this->app->register(ErrorPagesServiceProvider::class);
        $this->app->register(SensibleServiceProvider::class);
        $this->app->register(ValidationServiceProvider::class);
    }

    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../lang' => lang_path()], 'lang');
        }

        $this->callAfterResolving('translator', function ($translator) {
            $translator->addPath(__DIR__.'/../lang');

            // The last path wins, so the application's path is added again to keep precedence over the package.
            $translator->addPath($this->app->langPath());
        });
    }
}
