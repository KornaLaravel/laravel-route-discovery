<?php

namespace Spatie\RouteDiscovery\Tests\Support\TestClasses\Controllers\Nesting\Nested;

class ChildController
{
    public function index()
    {
        return $this::class . '@' . __METHOD__;
    }
}
