<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'Speedometer.php';

$bike = new Bicycle("blue", 1);
$twingo = new Car("red", 4, "fuel");
$grosCamion = new Truck("pink", 3, "fuel", 1);

//on passe aux root
//tout marche sur les routes résidentielles !
$residentialWay = new ResidentialWay();
$residentialWay->addVehicle($twingo);
$residentialWay->addVehicle($grosCamion);
$residentialWay->addVehicle($bike);

//var_dump($residentialWay->getCurrentVehicle());

//on ajoute une voiture et un camion sur l'autoroute, et ça ne marche pas avec le vélo
$motorWay = new MotorWay();
$motorWay->addVehicle($twingo);
$motorWay->addVehicle($grosCamion);
$motorWay->addVehicle($bike);

//var_dump($motorWay->getCurrentVehicle());

//ici, seul les vélos peuvent rouler !
$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($bike);
$pedestrianWay->addVehicle($grosCamion);
$pedestrianWay->addVehicle($twingo);

//var_dump($pedestrianWay->getCurrentVehicle());

//echo $residentialWay->$currentVehicle[0]; 

echo "</br>";

//on passe a poo 3 
$freinAMain = false;
$twingo->setParkBrake($freinAMain);

try {
   echo $twingo->start();
} catch (Exception $erreur) {
    echo "Tu as oublié de baisser le frein à main gros nigaud ! </br>";
    $twingo->setParkBrake(false);
    echo "Maintenant c'est fait ! </br>";
}
finally {
    echo "Ma voiture roule comme un donut.</br>";
}

//on test les méthodes switchon et off
echo $twingo->switchon()."</br>";
echo $twingo->switchoff()."</br>";

$bike->setCurrentSpeed(8);
echo $bike->switchon()."</br>";
echo $bike->switchoff()."</br>";
$bike->setCurrentSpeed(12);
echo $bike->switchon()."</br>";

//test des methodes static
echo Speedometer::convertKmToMiles(10);
echo "</br>";
echo Speedometer::convertMilesToKm(10);