<?php
// Bicycle.php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Bicycle extends Vehicle implements LightableInterface
{
    /**
     * Bicycle constructor.
     * @param string $color
     * @param int $nbSeats
     * @param int $nbWheel
     */
    public function __construct(string $color, int $nbSeats, int $nbWheel)
    {
        parent::__construct($color, $nbSeats);
    }
    /**
     * @return int|bool
     */
    public function switchOn()
    {
        if ( $this->currentSpeed > 10) {
            return true;
        }
    }
    /**
     * @return bool
     */
    public function switchOff()
    {
        return false;
    }
}