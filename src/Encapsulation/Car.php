<?php

namespace App\Encapsulation;

use App\Inheritance\Vehicle;

class Car extends Vehicle
{
    /**
     * @var string The brand name of the car
     */
    public string $brand;

    /**
     * @var string The model name of the car
     */
    public string $model;

    /**
     * @var int The year of the car
     */
    public int $year;
    
    /**
     * Car constructor
     * 
     * @param string $brand The brand name of the car.
     * @param string $model The model name of the car.
     * @param int    $year The year of the car.
     */
    public function __construct(string $brand, string $model, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    /**
     * Get the car's full description
     * 
     * @return string The car's brand, model, and year as a formatted string
     */

    public function getCarInfo(): string
    {
        return "$this->year $this->brand $this->model";
    }
}