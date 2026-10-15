<?php

namespace Datalogix\Utils\Tests;

use Datalogix\Utils\UtilsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [UtilsServiceProvider::class];
    }
}
