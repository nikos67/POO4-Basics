<?php
require_once 'Skate.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'LightableInterface.php';
$car = new Car('blue', 4, 'electric');
$bike = new Bicycle('red',1,3);
var_dump($bike);
echo $car->switchOn();
echo "<br>";
echo $car->switchOff();
$bike->setCurrentSpeed(20);
var_dump($bike);
echo $bike->switchOn();
echo "<br>";
echo $bike->switchOff();
