<?php

namespace Datalogix\Utils\Tests;

use Datalogix\Utils\UtilsServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class TestCase extends AbstractPackageTestCase
{
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
