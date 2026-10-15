<?php

namespace Datalogix\Utils\Tests;

use Datalogix\BuilderMacros\BuilderMacroServiceProvider;
use Datalogix\ErrorPages\ErrorPagesServiceProvider;
use Datalogix\Sensible\SensibleServiceProvider;
use Datalogix\Utils\UtilsServiceProvider;
use Datalogix\Validation\ValidationServiceProvider;
use Illuminate\Support\ServiceProvider;

class ServiceProviderTest extends TestCase
{
    public function test_is_a_service_provider()
    {
        $this->assertInstanceOf(ServiceProvider::class, $this->app->getProvider(UtilsServiceProvider::class));
    }

    public function test_provides_a_list_of_services()
    {
        $this->assertIsArray((new UtilsServiceProvider($this->app))->provides());
    }

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
