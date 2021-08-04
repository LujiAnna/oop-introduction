<?php

//declare(strict_types=1);

/* EXERCISE 3
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/

class Beer extends Beverage 
{
 public string $name;
 public float $alcoholpercentage;

public function __construct (string $color, float $price, string $temperature, string $name, float $alcoholpercentage) {

  $this->name = $name;
  $this->alcoholpercentage = $alcoholpercentage;
  //   parent:: is the special name for parent class which when used in a member function.To use the parent to call 
  // the parent class constructor to initialize the parent class so that the object inherits the class assignment to give a name. 


  parent::__construct ($color, $price, $temperature);

}

public function getAlcoholpercentage(){
  return "This {$this->name} has {$this->alcoholpercentage}% alcohol. <br>";

}

}