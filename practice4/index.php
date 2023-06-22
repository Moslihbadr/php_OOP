<?php

// define the Vehicle class
abstract class Vehicle {
  // properties
  protected $brand;
  protected $color;

  // constructor
  public function __construct($brand, $color) {
    $this->brand = $brand;
    $this->color = $color;
  }

  //abstract methods
  abstract public function honk();
  abstract public function displayDetails();
}

// define the Car class
class Car extends Vehicle{
  // properties
  private $numberOfDoors;
  private $seatingCapacity;

  //constructor
  public function __construct($brand, $color, $numberOfDoors, $seatingCapacity) {
    parent::__construct($brand, $color);

    $this->numberOfDoors = $numberOfDoors;
    $this->seatingCapacity = $seatingCapacity;
  }

  // displayDetails method
  public function displayDetails() {
    echo"Brand : $this->brand<br>";
    echo"Color : $this->color<br>";
    echo"Number Of Doors : $this->numberOfDoors<br>";
    echo"Seating Capacity : $this->seatingCapacity<br><hr>";
  }


  // honk method
  public function honk() {
    echo 'Beep beep<br>';
  }
  
  // openRoof method
  public function openRoof() {
    echo 'The roof is opening<br>';
  }
  
  // openRoof method
  private $speed = 0;
  public function accelerate() {
    $this->speed += 20;
    echo "$this->speed Km/h <br>";
  }

}

// define the Motorcycle class
class Motorcycle extends Vehicle{
  // properties
  private $EngineDisplacement;
  private $maxSpeed;

  //constructor
  public function __construct($brand, $color, $EngineDisplacement, $maxSpeed) {
    parent::__construct($brand, $color);

    $this->EngineDisplacement = $EngineDisplacement;
    $this->maxSpeed = $maxSpeed;
  }

  // displayDetails method
  public function displayDetails() {
    echo"Brand : $this->brand<br>";
    echo"Color : $this->color<br>";
    echo"Engine Displacement : $this->EngineDisplacement<br>";
    echo"Maximum Speed : $this->maxSpeed<br><hr>";
  }

  // honk method
  public function honk() {
    echo 'Veep veep<br>';
  }

  // wheelie method
  public function wheelie() {
    echo 'The motorcycle is wheeling<br>';
  } 

  // startEngine method
  public function startEngine() {
    echo 'The engine is ready<br>';
  } 
}

$car = new Car("BMW", "green", "4", 8);
$car->accelerate();
$car->openRoof();
$car->honk();
$car->displayDetails();

$moto = new Motorcycle("BMW", "green", "4", 8);
$moto->wheelie();
$moto->startEngine();
$moto->honk();
$moto->displayDetails();
