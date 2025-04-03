<?php

declare(strict_types=1);

use App\Car;

// Instantiate the car object
$car1 = new Car('Toyota', 'mls350', 2018);

// Output the car details
echo $car1->getCarInfo();
