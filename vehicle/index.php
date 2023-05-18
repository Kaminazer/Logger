<?php
/*require_once 'movableInterface.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bike.php';*/
require_once __DIR__."/../autoload.php";
spl_autoload_register(
    [
        "Autoload\Autoload",
        "loading"
    ]
);
use itea\vehicle\Car;
use itea\vehicle\Bike;
use itea\vehicle\sportCars\Ferrari;
use itea\vehicle\sportCars\company\Lamborgini;

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

$ferrari = new Ferrari();
$ferrari->showModel();
echo PHP_EOL;
$ferrari = new Lamborgini();
$ferrari->showModel();



