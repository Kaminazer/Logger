<?php
require_once 'movableInterface.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bike.php';

use vehicle\Car;
use vehicle\Bike;

echo Car::showCount().PHP_EOL;

$car1 = new Car(150);
echo Car::showCount().PHP_EOL;
echo PHP_EOL;
echo $car1->start().PHP_EOL;
echo $car1->up(15).PHP_EOL;
echo $car1->stop().PHP_EOL;
echo PHP_EOL;

echo Bike::showCount().PHP_EOL;

$bike = new Bike(125);
echo Bike::showCount().PHP_EOL;
echo PHP_EOL;
echo $bike->start().PHP_EOL;
echo $bike->up(15).PHP_EOL;
echo $bike->up(10).PHP_EOL;
echo $bike->down(100).PHP_EOL;
echo $bike->up(160).PHP_EOL;
echo $bike->stop().PHP_EOL;
echo PHP_EOL;


