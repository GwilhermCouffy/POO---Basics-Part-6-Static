<?php

require_once 'Vehicule.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{

    private string $energy;

    private int $energyLevel ;

    private bool $hasParkBrake;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy) {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }


    public function getEnergy(): string {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): string {
        return $this->energylevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function start() {
        
        if ($this->hasParkBrake == true) {
            throw new Exception("le frein a main est levé");
        }
        return "Démarrage du moteur, activation des phares et lancement du gps. </br>";
    }

    public function setParkBrake(bool $hasParkBrake) 
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function switchon(): string
    {
        return "true";
    }

    public function switchoff(): string
    {
        return "false";
    }
}