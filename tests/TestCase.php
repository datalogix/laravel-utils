<?php

namespace Datalogix\Utils\Tests;

use Datalogix\Translation\TranslationServiceProvider;
use Datalogix\Utils\UtilsServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class TestCase extends AbstractPackageTestCase
{
    /**
     * Get the required service providers.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     *
     * @return string[]
     */
    protected function getRequiredServiceProviders($app)
    {
        return [TranslationServiceProvider::class];
    }

    /**
     * Get the service provider class.
     *
     * @return string
     */
    protected function getServiceProviderClass()
    {
        return UtilsServiceProvider::class;
    }
}
