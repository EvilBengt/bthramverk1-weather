<?php

namespace EVB\Weather;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test IpLocator for Weather.
 */
class IpLocatorTest extends TestCase
{
    /**
     * Setup before each testcase
     */
    public function setUp()
    {
        $this->di = new DIFactoryConfig();
        $this->di->loadServices(ANAX_INSTALL_PATH . "/test/config/di");
    }

    /**
     * Test getGeoInfo() method.
     * Gets info.
     */
    public function testGetGeoInfo()
    {
        $data = [
            "continent_name" => "test",
            "country_name" => "test",
            "region_name" => "test",
            "city" => "test",
            "zip" => "test"
        ];

        $curl = new \EVB\Weather\MockCurlWrapper(\json_encode($data));

        $sut = new IpLocator("test", $curl);

        $result = $sut->getGeoInfo("test");

        $this->assertEquals($data, $result);
    }
}
