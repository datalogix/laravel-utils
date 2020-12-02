<?php

namespace Datalogix\Utils\Tests;

use Datalogix\Utils\Http\Middleware\HttpsProtocolMiddleware;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;

class DefaultValuesTest extends TestCase
{
    public function testModelUnguarded()
    {
        $this->assertTrue(Model::isUnguarded());
    }

    public function testEventsLocaleUpdated()
    {
        Event::fake();

        $this->app->setLocale('en');

        Event::assertDispatched('Illuminate\Foundation\Events\LocaleUpdated');
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
