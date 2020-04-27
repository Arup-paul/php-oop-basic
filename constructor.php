<?php


class Person {
     public $name;   //property 
     public $age;   //property

     public function __construct($name,$age){
         $this->name = $name;
         $this->age = $age;
     }

 

     public function PersonDetails(){   //method
         echo "Person Name Is : {$this->name}  and Person age is {$this->age}";
     }

  




}

$obj1 = new Person("Arup","22");   ///object
$obj1->PersonDetails();
 
    








?>