<?php

namespace Datalogix\Utils\Tests;

use Carbon\Carbon;
use Datalogix\Utils\Http\Middleware\HttpsProtocolMiddleware;
use Datalogix\Utils\UtilsServiceProvider;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Database\Schema\Builder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use Orchestra\Testbench\TestCase;

class DefaultValuesTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            UtilsServiceProvider::class
        ];
    }

    public function testLocale()
    {
        $this->assertEquals('en', $this->app->getLocale());
        $this->assertEquals('en', Carbon::getLocale());
    }

    public function testSchemaDefaultStringLength()
    {
        $this->assertEquals(150, Builder::$defaultStringLength);
    }

    public function testHttpsIsDisabledOnDevelopmentMode()
    {
        $kernel = $this->app->make(Kernel::class);
        $this->assertFalse($kernel->hasMiddleware(HttpsProtocolMiddleware::class));
        $this->assertEquals('http://localhost', Url::to('/'));
    }

    public function testPaginatorDefaultView()
    {
        $this->assertEquals('pagination::tailwind', Paginator::$defaultView);
        $this->assertEquals('pagination::simple-tailwind', Paginator::$defaultSimpleView);
    }
}
