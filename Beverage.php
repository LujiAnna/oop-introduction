<?php

declare(strict_types=1);


class Beverage {

  // Create Properties which can be accessed everywhere
  // TODO: Error!! Type hinting gives syntax error - Version PHP
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