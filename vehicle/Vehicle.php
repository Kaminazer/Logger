<?php
namespace vehicle;
abstract class vehicle
{
    protected int $speed;
    protected int $maxSpeed;
    const START_SPEED = 0;
    static int $amount = 0;
}