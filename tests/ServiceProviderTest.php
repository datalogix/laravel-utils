<?php

use Datalogix\BuilderMacros\BuilderMacroServiceProvider;
use Datalogix\ErrorPages\ErrorPagesServiceProvider;
use Datalogix\Sensible\SensibleServiceProvider;
use Datalogix\Utils\Tests\TestCase;
use Datalogix\Utils\UtilsServiceProvider;
use Datalogix\Validation\ValidationServiceProvider;
use Illuminate\Support\ServiceProvider;

uses(TestCase::class);

test('is a service provider', function () {
    expect($this->app->getProvider(UtilsServiceProvider::class))->toBeInstanceOf(ServiceProvider::class);
});

test('provides a list of services', function () {
    expect((new UtilsServiceProvider($this->app))->provides())->toBe([]);
});

test('registers the bundled providers', function () {
    foreach ([
        BuilderMacroServiceProvider::class,
        ErrorPagesServiceProvider::class,
        SensibleServiceProvider::class,
        ValidationServiceProvider::class,
    ] as $provider) {
        expect($this->app->getProvider($provider))->not->toBeNull("{$provider} is not registered.");
    }
});

test('publishes the lang files', function (string $tag) {
    $paths = ServiceProvider::pathsToPublish(UtilsServiceProvider::class, $tag);

    expect(array_map(realpath(...), array_keys($paths)))->toBe([realpath(__DIR__.'/../lang')]);
    expect(array_values($paths))->toBe([lang_path()]);
})->with(['laravel-utils-lang', 'lang']);
