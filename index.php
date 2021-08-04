<?php

declare(strict_types=1);

/* EXERCISE 1
- [x] Create a class beverage.
- [x] Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
Have a default value "cold" in the construct for temperature.
- [x] Remember for now we will use properties and methods that can be accessed from everywhere.
- [x] Make a getInfo function which returns "This beverage is <temperature> and <color>."
- [x] Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
- [x] print the getInfo on the screen.
- [x] print the temperature on the screen.
- [x] USE TYPEHINTING EVERYWHERE!
*/

// test
// echo 'hello world!';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Create  a class beverage
// TODO: include/require it here in index, maybe

require 'Beverage.php';

// create class
$cola = new Beverage('black', 2, '');
// ERROR: assign a variable doesn't work, shows Color: {this->color}, this has to be a variable as $this
// $cola->color = 'Cyan';
// $cola->getInfo();
// var_dump($cola);
echo $cola->getInfo();

?>