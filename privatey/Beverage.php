<?php

declare(strict_types=1);

/* EXERCISE 1
- [x] Create a class beverage.
- [x] Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
- [?] Have a default value "cold" in the construct for temperature.
- [x] Remember for now we will use properties and methods that can be accessed from everywhere.
- [x] Make a getInfo function which returns "This beverage is <temperature> and <color>."
- [x] Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
- [x] print the getInfo on the screen.
- [x] print the temperature on the screen.
- [x] USE TYPEHINTING EVERYWHERE!
*/

class Beverage {

  // Create Properties which can be accessed everywhere
  public string $color;
  // var_dump($this->color); // error doesnt work
  public float $price;
  public string $temperature; 

  // public $color;
  // var_dump($this->color); // doesnt show


  // $color = 'red'; 

  // create Construct
  public function __construct(string $color, float $price, string $temperature){
      $this->color = $color;
      $this->price = $price;
      $this->temperature = $temperature;
      // Setting the default value
      // cold is  not obtained, so

      $this->temperature="cold";
  }

  // Create function(method) which can be accessed everywhere
  public function getInfo() {
    // if(!empty($temperature))
    // {
    //     $this->temperature=$temperature;
    // }
    return "This beverage is {$this->temperature} and {$this->color}. <br>";
  }

  // var_dump($color);
}

?>