<?php

declare(strict_types=1);

/* EXERCISE 2
- [x] Make class beer that extends from Beverage.
- [x] Create the properties name (string) and alcoholpercentage (float).
- [x] Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
- [x] Remember for now we will use properties and methods that can be accessed from everywhere.
- [x] Make a getAlcoholpercentage function which returns the alocoholpercentage.
- [x] Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
- [x] Also the name equal to Duvel and the alcohol percentage to 8,5%
- [x] print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
- [x] Make sure that each print is on a different line.
- [?] Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
find out what this error is first
- [x] USE TYPEHINTING EVERYWHERE!
*/

class Beer extends Beverage 
{
 public string $name;
 public float $alcoholpercentage;

 public function getAlcoholpercentage(){
  return "This {$this->name} has {$this->alcoholpercentage}% alcohol. <br>";
// if VARIABLE needs to be passes/accessed, need to pass variable $newName
// $this->name = $newName;
}

public function __construct (string $color, float $price, string $temperature, string $name, float $alcoholpercentage) 
{

  $this->name = $name;
  $this->alcoholpercentage = $alcoholpercentage;
  //   parent:: is the special name for parent class which when used in a member function.To use the parent to call 
  // the parent class constructor to initialize the parent class so that the object inherits the class assignment to give a name. 


  parent::__construct ($color, $price, $temperature);

}



}