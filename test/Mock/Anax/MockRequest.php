<?php

namespace AnaxMocks;

class MockRequest
{
    private $get;

    public function getGet($key = null, /** @scrutinizer ignore-unused */ $default = null)
    {
        if (\array_key_exists($key, $this->get)) {
            return $this->get[$key];
        } else {
            return null;
        }
    }

    public function setGet($key, $value)
    {
        $this->get[$key] = $value;
    }
}
