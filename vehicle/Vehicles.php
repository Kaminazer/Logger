<?php
namespace itea\vehicle;
abstract class Vehicles
{
    protected int $speed;
    protected int $maxSpeed;
    const START_SPEED = 0;
    static int $amount = 0;
}