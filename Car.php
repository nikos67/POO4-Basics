<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Car extends Vehicle implements LightableInterface
{
    /**
     *
     */
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    /**
     * @var string
     */
    private $energy;
    /**
     * @var int
     */
    private $energyLevel;
    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }
    /**
     * @param string $energy
     * @return Car
     */
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    /**
     * @return bool|mixed
     */
    public function switchOn()
    {
        return true;
    }
    /**
     * @return bool|mixed
     */
    public function switchOff()
    {
        return false;
    }
}
