<?php

namespace Datalogix\Utils\Tests;

use Datalogix\BuilderMacros\BuilderMacroServiceProvider;
use Datalogix\ErrorPages\ErrorPagesServiceProvider;
use Datalogix\Sensible\SensibleServiceProvider;
use Datalogix\Utils\UtilsServiceProvider;
use Datalogix\Validation\ValidationServiceProvider;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Illuminate\Support\ServiceProvider;

class ServiceProviderTest extends TestCase
{
    use ServiceProviderTrait;

    public function test_registers_the_bundled_providers()
    {
        foreach ([
            BuilderMacroServiceProvider::class,
            ErrorPagesServiceProvider::class,
            SensibleServiceProvider::class,
            ValidationServiceProvider::class,
        ] as $provider) {
            $this->assertNotNull($this->app->getProvider($provider), "{$provider} is not registered.");
        }
    }

    public function test_publishes_the_lang_files()
    {
        $paths = ServiceProvider::pathsToPublish(UtilsServiceProvider::class, 'lang');

        $this->assertSame([realpath(__DIR__.'/../lang')], array_map('realpath', array_keys($paths)));
        $this->assertSame([lang_path()], array_values($paths));
    }
}
