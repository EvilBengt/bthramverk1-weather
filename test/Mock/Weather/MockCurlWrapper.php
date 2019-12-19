<?php

namespace EVB\Weather;

/**
 * Mock class for EVB\Weather\CurlWrapper
 */
class MockCurlWrapper extends CurlWrapper
{
    private $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function fetch(string $url) : string
    {
        return $this->response;
    }
}
