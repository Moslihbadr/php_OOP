<?php

// define a class called "Product"
class Product {

  // define properties
  private $name;
  private $price;
  private $description;

  // get methods

  function get_name() {
    return $this->name;
  }

  function get_price() {
    return $this->price;
  }

  function get_description() {
    return $this->description;
  }

  // set methods

  function set_name($value) {
    $this->name = $value;
  }

  function set_price($value) {
    $this->price = $value;
  }

  function set_description($value) {
    $this->description = $value;
  }

  // displayDetails method
  function  displayDetails() {
    echo "<pre>
      Name : $this->name .
      Price : $this->price .
      Description : $this->description .
      </pre>";
  }

}

// Instantiate new objects
$product1 = new Product();
$product2 = new Product();
$product3 = new Product();

$product1->set_name('TV');
$product1->set_price(12000);
$product1->set_description('a 50 inches and Full HD TV');
$product1->displayDetails();
// echo "<pre>";
// var_dump($product1);
// echo "</pre>";


$product2->set_name('IPHONE');
$product2->set_price(11000);
$product2->set_description('13 pro max, 256gb storage, 32gb RAM');
$product2->displayDetails();
// echo "<pre>";
// var_dump($product2);
// echo "</pre>";


$product3->set_name('CAR');
$product3->set_price(150000);
$product3->set_description('Audi Q8');
$product3->displayDetails();
// echo "<pre>";
// var_dump($product3);
// echo "</pre>";
