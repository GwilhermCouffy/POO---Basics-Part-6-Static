<?php

require_once 'Vehicule.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchon(): string
    {
        if ($this->getCurrentSpeed() >= 10)
        {
            return "true";
        }
        return "false";
    }

    public function switchoff(): string
    {
        return "false";
    }
}