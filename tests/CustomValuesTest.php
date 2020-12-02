<?php

namespace Datalogix\Utils\Tests;

use Datalogix\Utils\Http\Middleware\HttpsProtocolMiddleware;
use Datalogix\Utils\UtilsServiceProvider;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Orchestra\Testbench\TestCase;

class CustomValuesTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            UtilsServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app->config->set('utils', [
            'model' => [
                'unguard' => false,
            ],

            'locale' => [
                'category' => LC_TIME,
            ],

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

    public function testModelUnguarded()
    {
        $this->assertFalse(Model::isUnguarded());
    }

    public function testLocale()
    {
        $this->app->setLocale('en');

        $this->assertEquals('01 January 2020', Carbon::parse('2020-01-01')->formatLocalized('%d %B %Y'));
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
