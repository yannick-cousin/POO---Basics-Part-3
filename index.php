<?php

//Vehicles
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

//HighWay
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

//Create Vehicle
$lisa = new Bicycle('red',1, 2);
$maggie = new Bicycle('blue',1, 2);
$homer = new Car('pink',5, 'fuel');
$marge = new Car('white',5, 'fuel');
$bart = new Truck('black', 2, 4, 100);
$milhouse = new Truck('yellow', 2, 4, 100);

//Create HighWay
$autoroute = new MotorWay();
$rocade = new MotorWay();
$rue = new ResidentialWay();
$allee = new ResidentialWay();
$chemin = new PedestrianWay();
$champs = new PedestrianWay();

var_dump($autoroute);
var_dump($rue);
var_dump($chemin);

$autoroute->addVehicle($homer);
$autoroute->addVehicle($lisa);
$autoroute->addVehicle($bart);

$chemin->addVehicle($lisa);
$chemin->addVehicle($maggie);
$chemin->addVehicle($milhouse);

$rue->addVehicle($homer);
$rue->addVehicle($marge);
$rue->addVehicle($lisa);
$rue->addVehicle($maggie);
$rue->addVehicle($bart);
$rue->addVehicle($milhouse);

var_dump($autoroute);
var_dump($chemin);
var_dump($rue);