<?php
require 'Bicycle.php';
require 'Car.php';

/*création instance classe bicycle*/

$bike = new Bicycle('blue', 15);      


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle('yellow', 15);
$tornado = new Bicycle('black', 20);


/*création instance classe Car*/

$car = new Car('red', 4, 'gasoline');
$car->setCurrentCarSpeed(50);
$car->setEnergyLevel(80);
var_dump($car);

echo $car->start();
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentCarSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentCarSpeed() . ' km/h' . '<br>';
echo $car->brake();



