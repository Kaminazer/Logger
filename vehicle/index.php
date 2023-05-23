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
use itea\vehicle\Driver;
use itea\vehicle\Gps;

echo Car::showCount().PHP_EOL;
$gps = new Gps();
$car1 = new Car(150, $gps);
echo Car::showCount().PHP_EOL;
echo PHP_EOL;
$driver = new Driver();
print_r($driver->drive($car1));



