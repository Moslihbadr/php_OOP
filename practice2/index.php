<?php

// define class
class Student {

  // define properties
  private $studentID;
  private $name;
  private $age;
  private $grade;
  
  // get methods

  public function getStudentID() {
    return $this->studentID;
  }

  public function getName() {
    return $this->name;
  }

  public function getAge() {
    return $this->age;
  }

  public function getGrade() {
    return $this->grade;
  }

    // set methods

  public function setStudentID($value) {
    $this->studentID = $value;
  }

  public function setName($value) {
    $this->name = $value;
  }

  public function setAge($value) {
    $this->age = $value;
  }

  public function setGrade($value) {
    $this->grade = $value;
  }

  // displayDetails method
  public function displayDetails() {
    echo "<pre>
      Student ID : $this->studentID .
      Name : $this->name .
      Age : $this->age . 
      Grade : $this->grade .
    </pre>";
  }
}

// define StudentManager class
class StudentManager {
  

  // define properties
  private $studentsList = array();

  // add student method
  public function addStudent($student) {
    array_push($this->studentsList, $student);
  }

// remove student method
public function removeStudent($studentID) {
  for ($i = 0; $i < count($this->studentsList); $i++) {
      $ID = $this->studentsList[$i]->getStudentID(); 
      if ($studentID == $ID) {
          unset($this->studentsList[$i]);
          $this->studentsList = array_values($this->studentsList); // Reindex the array
          break;
      }
  }
}

  // show student list method
  public function showStudentList() {
    foreach ($this->studentsList as $student) {
      $studentID = $student->getStudentID();
      $name = $student->getName();
      $age = $student->getAge();
      $grade = $student->getGrade();

      echo "<pre>
          Student ID: $studentID
          Name: $name
          Age: $age
          Grade: $grade
          </pre>";
    }
  }

}

// Instantiate a new Student object
$student = new Student();
$student->setStudentID(121);
$student->setName('Badr');
$student->setAge(21);
$student->setGrade(8);

$student1 = new Student();
$student1->setStudentID(131);
$student1->setName('Ilyas');
$student1->setAge(18);
$student1->setGrade(8);

$student2 = new Student();
$student2->setStudentID(141);
$student2->setName('Youssef');
$student2->setAge(18);
$student2->setGrade(8);

$student3 = new Student();
$student3->setStudentID(151);
$student3->setName('Ahmed');
$student3->setAge(19);
$student3->setGrade(8);

$student4 = new Student();
$student4->setStudentID(161);
$student4->setName('Jamal');
$student4->setAge(18);
$student4->setGrade(8);

// Instantiate a new StudentManager object
$student_maanger = new StudentManager();
$student_maanger->addStudent($student);
$student_maanger->addStudent($student1);
$student_maanger->addStudent($student2);
$student_maanger->addStudent($student3);
$student_maanger->addStudent($student4);

$student_maanger->removeStudent(121);
$student_maanger->removeStudent(151);

$student_maanger->showStudentList();
