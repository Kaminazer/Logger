<?php

class car extends vehicle implements movableInterface
{
    const START_SPEED = 0;
    public function __construct(int $maxSpeed)
    {
        if ($maxSpeed > self::START_SPEED )
        {
            $this->maxSpeed = $maxSpeed;
        }
        $this->maxSpeed = 90;
        $this->speed = self::START_SPEED;
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