<?php

namespace Datalogix\Utils\Tests;

use Datalogix\Utils\UtilsServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class TestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     */
    protected static function getServiceProviderClass(): string
    {
        return UtilsServiceProvider::class;
    }
}
