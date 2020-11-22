<?php

namespace Datalogix\LaravelUtils\Tests;

use Carbon\Carbon;
use Datalogix\LaravelUtils\Http\Middleware\HttpsProtocolMiddleware;
use Datalogix\LaravelUtils\LaravelUtilsServiceProvider;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Database\Schema\Builder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use Orchestra\Testbench\TestCase;

class CustomValuesTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelUtilsServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app->config->set('utils', [
            'locale' => 'pt_BR',
            'schema' => [
                'defaultStringLength' => null,
            ],
            'middleware' => [
                'forceHttps' => true,
            ],
            'paginator' => [
                'defaultView' => 'paginator-defaultView',
                'defaultSimpleView' => 'paginator-defaultSimpleView',
            ],
        ]);
    }

    public function testLocale()
    {
        $this->assertEquals('pt_BR', $this->app->getLocale());
        $this->assertEquals('pt_BR', Carbon::getLocale());
    }

    public function testSchemaDefaultStringLength()
    {
        $this->assertEquals(255, Builder::$defaultStringLength);
    }

    public function testHttpsEnabled()
    {
        $kernel = $this->app->make(Kernel::class);
        $this->assertTrue($kernel->hasMiddleware(HttpsProtocolMiddleware::class));
        $this->assertEquals('https://localhost', Url::to('/'));
    }

    public function testPaginatorDefaultView()
    {
        $this->assertEquals('paginator-defaultView', Paginator::$defaultView);
        $this->assertEquals('paginator-defaultSimpleView', Paginator::$defaultSimpleView);
    }
}
