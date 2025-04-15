<?php

namespace Datalogix\Utils\Tests;

use Datalogix\Utils\UtilsServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class TestCase extends AbstractPackageTestCase
{
    protected static function getServiceProviderClass(): string
    {
        return UtilsServiceProvider::class;
    }
}
