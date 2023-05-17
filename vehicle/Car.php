<?php
namespace vehicle;
class Car extends vehicle implements movableInterface
{
    public function __construct(int $maxSpeed)
    {
        if ($maxSpeed <= self::START_SPEED )
        {
            throw new \Exception(
            "It is not possible to create an object of the car class with a negative or zero maximum speed."
            );
        }
        $this->maxSpeed = $maxSpeed;
        $this->speed = self::START_SPEED;
        self::$amount++;
    }
    static function showCount ()
    {
        return "The number of objects of class Car: ".self::$amount;
    }
    public function start()
    {
        return "Start engine";
    }

    public function stop()
    {
        return "Stop engine";
    }

    public function up(int $unit)
    {
        $this->speed += $unit;
        if ($this->speed > $this->maxSpeed)
        {
            $this->speed = $this->maxSpeed;
            return "Max speed car's is $this->speed km/h.";
        }
        return "The car's speed was increased by $unit km/h. The current speed is $this->speed km/h.";
    }
    public function down(int $unit)
    {
        $this->speed -= $unit;
        if ($this->speed < self::START_SPEED)
        {
            $this->speed = self::START_SPEED;
            return "Min speed car's is $this->speed km/h.";
        }
        return "The car's speed was reduced by $unit km/h. The current speed is $this->speed km/h.";
    }
}