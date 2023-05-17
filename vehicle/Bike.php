<?php
namespace vehicle;
class Bike extends vehicle implements movableInterface
{
    public function __construct(int $maxSpeed)
    {
        if ($maxSpeed <= self::START_SPEED )
        {
            throw new \Exception(
            "It is not possible to create an object of the bike class with a negative or zero maximum speed."
            );
        }
        $this->maxSpeed = $maxSpeed;
        $this->speed = self::START_SPEED;
        self::$amount++;
    }
    static function showCount ()
    {
        return "The number of objects of class Bike: ".self::$amount;
    }
    public function start()
    {
        return "Start engine bike";
    }

    public function stop()
    {
        return "Stop engine bike";
    }
    public function up(int $unit)
    {
        $this->speed += $unit;
        if ($this->speed > $this->maxSpeed)
        {
            $this->speed = $this->maxSpeed;
            return "Max speed bike's is $this->speed km/h.";
        }
        return "The bike's speed was increased by $unit km/h. The current speed is $this->speed km/h.";
    }
    public function down(int $unit)
    {
        $this->speed -= $unit;
        if ($this->speed < self::START_SPEED)
        {
            $this->speed = self::START_SPEED;
            return "Min speed bike's is $this->speed km/h.";
        }
        return "The bike's speed was reduced by $unit km/h. The current speed is $this->speed km/h.";
    }
}
