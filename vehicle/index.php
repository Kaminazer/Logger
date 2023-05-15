<?php
require_once 'movableInterface.php';
require_once 'vehicle.php';
require_once 'car.php';
require_once 'bike.php';

$car1 = new Car(-150);
echo $car1->start().PHP_EOL;

echo $car1->up(15).PHP_EOL;
echo $car1->up(10).PHP_EOL;
echo $car1->down(100).PHP_EOL;
echo $car1->up(190).PHP_EOL;
echo $car1->stop().PHP_EOL;
echo PHP_EOL;

$bike = new Bike(-200);
echo $bike->start().PHP_EOL;
echo $bike->up(15).PHP_EOL;
echo $bike->up(10).PHP_EOL;
echo $bike->down(100).PHP_EOL;
echo $bike->up(160).PHP_EOL;
echo $bike->stop().PHP_EOL;
echo PHP_EOL;


