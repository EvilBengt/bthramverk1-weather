<?php

namespace AnaxMocks;

class MockDI implements \Psr\Container\ContainerInterface
{
    private $services;

    public function get($id)
    {
        if (\array_key_exists($id, $this->services)) {
            return $this->services[$id];
        } else {
            return null;
        }
    }

    public function set(string $name, $service)
    {
        $this->services[$name] = $service;
    }

    public function has($id)
    {
        return true;
    }
}
