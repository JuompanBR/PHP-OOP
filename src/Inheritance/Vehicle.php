<?php

namespace App\Inheritance;

/**
 * Class Vehicle Describes a vehicle
 * @package App
 */
class Vehicle 
{
    /**
     * @var string The color of the vehicle
     */
    protected string $color;

    /**
     * @var string The speed of the vehicle
     */
    protected float $speed;

    /**
     * Constructor for the Vehicle class
     * 
     * @param string $color The color of the vehicle
     * @param int $speed The speed maximum speed of the vehicle in km/h
     * @return void
     */
    public function __construct(string $color, float $speed=4)
    {
        $this->color = $color;
        $this->speed = $speed;
    }

    /**
     * Describe the vehicle properties
     * 
     * @return void
     */
    public function describe(): void
    {
        echo "{$this->color} {$this->speed}";
    }

}

