<?php

namespace Datalogix\Utils;

use Datalogix\BuilderMacros\BuilderMacroServiceProvider;
use Datalogix\ErrorPages\ErrorPagesServiceProvider;
use Datalogix\Sensible\SensibleServiceProvider;
use Datalogix\Validation\ValidationServiceProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Translation\FileLoader;

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

        $this->app->extend('translation.loader', fn ($loader, $app) => $this->withLangPath($loader, $app->langPath()));
    }

    /**
     * Add the package lang path before the application one, so the application can override it.
     */
    protected function withLangPath(mixed $loader, string $appLangPath): mixed
    {
        if (! $loader instanceof FileLoader) {
            return $loader;
        }

        $paths = $loader->paths();
        $index = array_search($appLangPath, $paths, true);

        array_splice($paths, $index === false ? count($paths) : $index, 0, [__DIR__.'/../lang']);

        $fileLoader = new FileLoader($this->app['files'], $paths);

        foreach ($loader->jsonPaths() as $path) {
            $fileLoader->addJsonPath($path);
        }

        foreach ($loader->namespaces() as $namespace => $hint) {
            $fileLoader->addNamespace($namespace, $hint);
        }

        return $fileLoader;
    }

    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../lang' => lang_path()], 'lang');
        }
    }
}
