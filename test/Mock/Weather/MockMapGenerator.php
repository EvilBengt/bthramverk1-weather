<?php

namespace EVB\Weather;

/**
 * Mock class for EVB\Weather\MapGenerator
 */
class MockMapGenerator
{
    public function MakeLink(float $latitude, float $longitude) : string
    {
        return "test";
    }
}
