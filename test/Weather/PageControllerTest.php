<?php

namespace EVB\Weather;

// use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

use AnaxMocks\MockDI;
use AnaxMocks\MockRequest;
use AnaxMocks\MockPage;

/**
 * Test PageController for Weather.
 */
class PageControllerTest extends TestCase
{
    /**
     * Subject under test.
     *
     * @var PageController
     */
    private $sut;

    /**
     * DI container / Service Locator mock.
     *
     * @var MockDI
     */
    private $di;

    /**
     * Setup before each test.
     *
     * @return void
     */
    public function setUp()
    {
        $this->di = new MockDI();
        $this->sut = new PageController();
        $this->sut->setDI($this->di);
    }

    /**
     * Test the route "index" (GET).
     * With IP.
     */
    public function testIndexActionGetIP()
    {
        $request = new MockRequest();
        $request->setGet("search", "example");
        $request->setGet("ip", "8.8.8.8");

        $this->di->set("page", new MockPage());
        $this->di->set("request", $request);
        $this->di->set("ipLocator", new MockIpLocator([]));
        $this->di->set("mapGenerator", new MockMapGenerator);
        $this->di->set("exampleWeather",
            new ExampleWeather(
                (new ExampleWeatherConfig())->get()
            )
        );


        $res = $this->sut->indexActionGet();
        $this->assertIsObject($res);
    }

    /**
     * Test the route "index" (GET).
     * Without IP.
     */
    public function testIndexActionGetNoIP()
    {
        $request = new MockRequest();
        $request->setGet("search", "example");

        $this->di->set("page", new MockPage());
        $this->di->set("request", $request);
        $this->di->set("exampleWeather",
            new ExampleWeather(
                (new ExampleWeatherConfig())->get()
            )
        );


        $res = $this->sut->indexActionGet();
        $this->assertIsObject($res);
    }
}
