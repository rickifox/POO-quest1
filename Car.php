<?php

class Car
{
    // Attributs

    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $currentSpeed;

    /**
     * @var int
     */
    private $nbSeats;

    /**
     * @var int
     */
    private $nbWheels;

    /**
     * @var string;
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    // Methods 

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    /**
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    /**
     * @return int
     *
     */
    public function getCurrentSpeed() : int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int /$currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    /**
     * @return int
     *
     */
    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }

    /**
     * @param int /$nbSeats
     * @return void
     */
    public function setNbSeats(int $nbSeats): void
    {
        if($nbSeats >= 0){
            $this->nbSeats = $nbSeats;
        }
    }

      /**
     * @return int
     *
     */
    public function getNbWheels() : int
    {
        return $this->nbWheels;
    }

    /**
     * @param int /$nbWheels
     * @return void
     */
    public function setNbWheels(int $nbWheels): void
    {
        if($nbWheels >= 0){
            $this->nbWheels = $nbWheels;
        }
    }

    /**
     * @return string
     */
    public function getEnergy() : string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy) : void
    {
        $this->energy = $energy;
    }

    /**
     * @return int
     *
     */
    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }

    /**
     * @param int /$energyLevel
     * @return void
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        if($energyLevel >= 0){
            $this->energyLevel = $energyLevel;
        }
    }

    /**
     * @return string
     */
    public function start()
    {
        return "Car started.";
    }

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}
