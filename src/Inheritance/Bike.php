<?php

namespace App\Inheritance;

use App\Inheritance\Vehicle;

/**
 * Class Bike Describes a bike
 * 
 * @package App
 */
class Bike extends Vehicle
{
    /**
     * @var string The type of the bike, e.g., mountain, road, etc.
     */
    private string $type;

    /**
     * Contructor for the Bike class
     * 
     * @param string color The color the bike
     * @param float speed The maximum speed of the bike
     * @param string type The type of the bike
     * @return void
     */
    public function __construct(string $color, float $speed, string $type)
    {
        // Call the parent constructor
        parent::__construct($color, $speed);
        $this->type = $type;
    }

    /**
     * Describe the bike properties
     * 
     * @return void
     */
    public function describe(): void 
    {
        echo "{$this->color} {$this->speed} {$this->type}";
    }
}