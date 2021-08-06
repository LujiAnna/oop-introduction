<?php

declare(strict_types=1);

// test
// echo 'hello world!';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Ex:1
require 'Beverage.php';
// Ex: 3
require 'Beer.php';

echo "<br><br>This is All Exercise 3:<br><br>";


echo "<br><br> Print as Exercise 1:<br>";
// Instantiate an object which represents cola
$cola = new Beverage('black', 2, '');
// ERROR: assign a variable doesn't work, shows Color: {this->color}, this has to be a variable as $this
// $cola->color = 'Cyan';
// $cola->getInfo();
// var_dump($cola);

// call getInfo method
echo $cola->getInfo();

// All below might not be working
$Duvel = new Beer("blond", 3.5, "", "Duvel", 0.85);
// var_dump($Duvel);

echo "<br><br> Print as Exercise 2:<br>";

// print Alcoholpercentage in a different way 
echo "Alcohol percentage of: ";


// echo $Duvel ->name = 'Duvel';
// set it
$Duvel->setName("Duvel");
// read it
echo $Duvel->getName();

echo ' is ';

// echo $Duvel ->alcoholopercentage = 0.85;
// set it
$Duvel->setAlcoholPercentage(0.85);
// read it
echo $Duvel->getAlcoholPercentage();

// using function to access
echo "<br><br> Alt: Using function:<br>";
echo $Duvel -> getAlcoholpercentageFunction();



echo "<br>";
// print Color from parent of light from blond
echo "Print 'light' Color : ";

// echo $Duvel ->color = 'Duvel';
// no need to change ths since it IS already public
echo $Duvel ->color = 'light';
// can later change this by using function instead 

// Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
// Make sure that you use the variables and not just this text line.
// Print this method on the screen on a new line.


// print Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
echo "<br>";
// echo $Duvel -> getInfo();

?>