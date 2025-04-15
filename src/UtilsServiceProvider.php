<?php

namespace Datalogix\Utils;

use Datalogix\BuilderMacros\BuilderMacroServiceProvider;
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

        $this->callAfterResolving('translator', fn ($translator) => $translator->addPath(__DIR__.'/../lang'));
    }
}
