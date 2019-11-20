<?php
// Bicycle.php
require_once 'Vehicle.php';
class Skate extends Vehicle
{
    /**
     * Skate constructor.
     * @param string $color
     * @param int $nbSeats
     * @param int $nbWheel
     */
    public function __construct(string $color, int $nbSeats, int $nbWheel)
    {
        parent::__construct($color, $nbSeats);
    }
}