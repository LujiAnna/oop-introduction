<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/* EXERCISE 3
- [x] Copy the code of exercise 2 to here and delete everything related to cola.
- [x] Make all properties private.
- [x] Make all the other prints work without error. 
- [x] After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
- [?] Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
- Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/


// When you declare a method (function) or a property (variable) as private, those methods and properties can be accessed by:
// The same class that declared it.
// Outsider members cannot access those variables. Outsiders in the sense that they are not object instances of the declared class itself and even the classes that inherit the declared class.

// private scope when you want your property/method to be visible in its own class only.

// visibility restricted to its own class only
// Error: Parse error: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST) in /Applications/MAMP/htdocs/oop-introduction/Light.php on line 30
// How to access private properties: https://www.lambda-out-loud.com/posts/accessing-private-properties-php/

class Beer extends Beverage 
{
 private string $name;
 private float $alcoholpercentage;


  // $this->name = $name;
  // $this->alcoholpercentage = $alcoholpercentage;

  // retrieve and change the property
public function getName(): string
{
    return $this->name;
}

public function setName(string $name): void
{
    $this->name = $name;
}

  // retrieve and change the property
  public function getAlcoholPercentage(): float
  {
      return $this->alcoholpercentage;
  }
  // change property
  public function setAlcoholPercentage(float $alcoholpercentage): void
  {
      $this->alcoholpercentage = $alcoholpercentage;
  }


  // using the function
public function getAlcoholpercentageFunction()
{
  // return "This {$this->name} has {$this->alcoholpercentage}% alcohol. <br>";
  return "This {$this-> getName()} has {$this-> getAlcoholPercentage()}% alcohol. <br>";

}

public function __construct (string $color, float $price, string $temperature, string $name, float $alcoholpercentage) 
{

  // accessing private info
  $this->name = $name;
  $this->alcoholpercentage = $alcoholpercentage;
  //   parent:: is the special name for parent class which when used in a member function.To use the parent to call 
  // the parent class constructor to initialize the parent class so that the object inherits the class assignment to give a name. 


  parent::__construct ($color, $price, $temperature);

}

}

// private method

// private function beerInfo()
// {
// //  return "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."

// }


echo "<br><br> Exercise 3:<br>";
