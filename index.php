<?php

require_once './Bicycle.php';

$bike = new Bicycle('blue');
var_dump($bike);
/*$bike->setColor("blue");*/
$bike->setCurrentSpeed(0);
var_dump($bike);
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . "km/h" . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo :' . $bike->getCurrentSpeed() . 'kh/h' . '<br>';
echo $bike->brake();

require_once './Car.php';

$car = new Car('pink', 4, 'Hydrogen');
var_dump($car);
/*$car->setColor("pink");*/
$car->setCurrentSpeed(0);
var_dump($car);
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . "km/h" . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . 'kh/h' . '<br>';
echo $car->brake();
