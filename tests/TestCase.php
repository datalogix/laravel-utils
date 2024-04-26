<?php

namespace Datalogix\Utils\Tests;

use Carbon\Laravel\ServiceProvider as CarbonServiceProvider;
use Datalogix\Utils\UtilsServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class TestCase extends AbstractPackageTestCase
{
    protected static function getServiceProviderClass(): string
    {
        return UtilsServiceProvider::class;
    }

    protected static function getRequiredServiceProviders(): array
    {
        return [CarbonServiceProvider::class];
    }
}
