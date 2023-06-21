<?php

// define the Item class
class Item {
  // define properties
  private $title;
  private $author;
  private $publicationYear;
  private $status;   // available or borrowed

  // Item class constructor
  public function __construct($title, $author, $publicationYear, $status) {
    $this->title = $title;
    $this->author = $author;
    $this->publicationYear = $publicationYear;
    $this->status = $status;
  }

  // get methods
  public function getTitle() {
    return $this->title;
  }

  public function getAuthor() {
    return $this->author;
  }

  public function getPublicationYear() {
    return $this->publicationYear;
  }

  public function getStatus() {
    return $this->status;
  }

}

// define the Book class
class Book extends Item {
  // define properties
  private $numberOfPages;

  // class Book constructor
  public function __construct($title, $author, $publicationYear, $status, $numberOfPages) {
    parent::__construct($title, $author, $publicationYear, $status); // this will call your parent constructor
    $this->numberOfPages = $numberOfPages;
  }

  
  public function displayDetails(){
    echo "Title : ". $this->getTitle() . "<br>";
    echo "Author : ". $this->getAuthor() . "<br>";
    echo "Publication Year : ". $this->getPublicationYear() . "<br>";
    echo "Status : ". $this->getStatus() . "<br>";
    echo "Number Of Pages : ". $this->numberOfPages . "<br> <hr>";
  }

}

// define the DVD class
class DVD extends Item {
  // define properties
  private $duration; // in minutes

    // class DVD constructor
    public function __construct($title, $author, $publicationYear, $status, $duration) {
      parent::__construct($title, $author, $publicationYear, $status); // this will call your parent constructor
      $this->duration = $duration;
    }

  public function displayDetails(){
    echo "Title : ". $this->getTitle() . "<br>";
    echo "Author : ". $this->getAuthor() . "<br>";
    echo "Publication Year : ". $this->getPublicationYear() . "<br>";
    echo "Status : ". $this->getStatus() . "<br>";
    echo "Duration : ". $this->duration . " minutes <br><hr>";
  }

}


// Instantiate a new Book object
$book = new Book('Ice & Fire', 'George R. R. Martin', '1991', 'available',12000);
$book->displayDetails();

// Instantiate a new DVD object
$book = new DVD('The Little prince', 'Saint-Exupéry', '1943', 'borrowed',300);
$book->displayDetails();