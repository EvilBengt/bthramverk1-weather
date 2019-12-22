<?php

namespace EVB\Weather;

/**
 * Mock class for EVB\Weather\MapGenerator
 */
class MockMapGenerator
{
    public function MakeLink(/** @scrutinizer ignore-unused */ float $latitude, /** @scrutinizer ignore-unused */ float $longitude) : string
    {
        return "test";
    }
}
