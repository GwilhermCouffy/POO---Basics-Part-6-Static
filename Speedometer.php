<?php

class Speedometer {

    public static function convertKmToMiles(float $distancekm): float
    {
        return $distancekm*0.621;
    }
    
    public static function convertMilesToKm(float $distanceMiles): float
    {
        return $distanceMiles*1.609;
    }
}