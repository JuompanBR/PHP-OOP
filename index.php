<?php

require_once realpath("vendor/autoload.php");

use App\Encapsulation\Car;
use App\Inheritance\Bike;

$car1 = new Car('toyota', 'mls350', 2018);
$bike1 = new Bike('red', 30, 'mountain');

echo $car1->getCarInfo() . "\n";
echo $bike1->describe();