<?php

namespace itea\vehicle;

class Gps
{
    protected $pointA;
    protected $pointB;

    public function routeBuilding(string $pointA, string $pointB)
    {
        return "A route from $pointA to $pointB has been created.";
    }
}