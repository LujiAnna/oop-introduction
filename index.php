<?php

declare(strict_types=1);

// test
// echo 'hello world!';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Create  a class beverage
// TODO: include/require it here in index, maybe

require 'Beverage.php';
require 'Beer.php';

echo "<br><br> Exercise 1:<br>";
// Instantiate an object which represents cola
$cola = new Beverage('black', 2, '');
// ERROR: assign a variable doesn't work, shows Color: {this->color}, this has to be a variable as $this
// $cola->color = 'Cyan';
// $cola->getInfo();
// var_dump($cola);

// call getInfo method
echo $cola->getInfo();

// Instantiate an object which represents Duvel

// $Duvel = new Beer('Duvel', 0.85);
$Duvel = new Beer("blond", 3.5, "", "Duvel", 0.85);

// var_dump($Duvel);

echo "<br><br> Exercise 2:<br>";
echo $Duvel -> getAlcoholpercentage();
// print tAlcoholpercentage in a different way 
echo "Alcohol percentage : ";
echo $Duvel ->name = 'Duvel';
echo $Duvel ->alcoholopercentage = 0.85;

echo "<br>";
// print Color
echo "Color : ";
echo $Duvel ->color = 'blond';
// print Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
echo "<br>";
echo $Duvel -> getInfo();

?>