<?php

class Vehicle
{
    // Доступно только в классе и в классах наследниках
    protected $engine;

    // Доступно только в этом классе
    private $test;
}

class Car
{
    // Доступно только в этом классе
    private $transmission;

    // Доступно только в классе и в классах наследниках
    protected $electricity;

    public function __construct($engine, $transmission, $electricity)
    {
        $this->engine = $engine;
        $this->transmission = $transmission;
        $this->electricity = $electricity;
    }

    // Защищенный внутренний метод
    protected function startEngine()
    {
        return 'Я автомобиль с двигателем ' . $this->engine . ' и коробкой ' . $this->transmission;
    }

    public function move($pointA, $pointB, $cargo)
    {
        echo  $this->startEngine();
        echo ' везу груз ' . $cargo . ' с точки ' . $pointA . ' в точку ' . $pointB;
        echo PHP_EOL;
    }
}


// CLIENT CODE

$car = new Car('Ford', 'something', [
    'provoda'
]);

// echo $car->engine . PHP_EOL; // Так нельзя
$car->move('Киев', 'Одесса', 'Ноутбук');