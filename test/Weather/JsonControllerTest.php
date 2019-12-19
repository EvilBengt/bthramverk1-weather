<?php

namespace EVB\Weather;

// use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;
use AnaxMocks\MockDI;
use AnaxMocks\MockPage;

/**
 * Test JsonController for Weather.
 */
class JsonControllerTest extends TestCase
{
    /**
     * Subject under test.
     *
     * @var JsonController
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
        $this->sut = new JsonController();
        $this->sut->setDI($this->di);
    }

    /**
     * Test the route "doc" (GET).
     */
    public function testDocAction()
    {
        $page = new MockPage();

        $this->di->set("page", $page);
        

        $result = $this->sut->docActionGet();

        $this->assertInternalType("array", $result->args);
        $this->assertArrayHasKey("title", $result->args);
        $this->assertInternalType("string", $result->args["title"]);
        $this->assertNotEmpty($result->adds);
    }

    /**
     * Test the "renderPage" method.
     * No errors.
     */
    public function testRenderPage()
    {
        $argSearch = [];
        $argResult = [
            [
                "currently" => [
                    "summary" => "test",
                    "precipProbability" => 1,
                    "temperature" => 1,
                    "apparentTemperature" => 1,
                    "windSpeed" => 1,
                    "windGust" => 1
                ],
                "hourly" => [
                    "summary" => "test",
                    "data" => [
                        [
                            "time" => 1576249313,
                            "summary" => "test",
                            "precipProbability" => 1,
                            "temperature" => 1,
                            "apparentTemperature" => 1,
                            "windSpeed" => 1,
                            "windGust" => 1
                        ]
                    ]
                ],
                "daily" => [
                    "summary" => "test",
                    "data" => [
                        [
                            "time" => 1576249313,
                            "summary" => "test",
                            "precipProbability" => 1,
                            "temperatureMin" => 1,
                            "temperatureMax" => 1,
                            "apparentTemperatureMin" => 1,
                            "apparentTemperatureMax" => 1,
                            "windSpeed" => 1,
                            "windGust" => 1
                        ]
                    ]
                ],
            ],
            [
                "daily" => [
                    "data" => [
                        [
                            "time" => 1576249313,
                            "summary" => "test",
                            "precipProbability" => 1,
                            "temperatureMin" => 1,
                            "temperatureMax" => 1,
                            "apparentTemperatureMin" => 1,
                            "apparentTemperatureMax" => 1,
                            "windSpeed" => 1,
                            "windGust" => 1
                        ]
                    ]
                ]
            ]
        ];
        $argMapLink = "test";
        $argError = "";

        $result = $this->sut->renderPage($argSearch, $argResult, $argMapLink, $argError);

        $this->assertInternalType("array", $result);
        $this->assertInternalType("array", $result[0]);
        $this->assertArrayHasKey("forecast", $result[0]);
        $this->assertArrayHasKey("historical", $result[0]);
        $this->assertArrayHasKey("poweredBy", $result[0]);
    }

    /**
     * Test the "renderPage" method.
     * With errors.
     *
     * @return void
     */
    public function testRenderPageError()
    {
        $result = $this->sut->renderPage([], [], "test", "test");

        $this->assertInternalType("array", $result);
        $this->assertInternalType("array", $result[0]);
        $this->assertArrayHasKey("error", $result[0]);
        $this->assertEquals("test", $result[0]["error"]);
    }
}
