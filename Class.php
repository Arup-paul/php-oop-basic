<?php


class Person {
     public $name;   //property 
     public $age;   //property

     public function PersonName($value){   //method
         echo "Person Name Is :".$this->name = $value."</br>";
     }

     public function PersonAge($value){  //method
        echo "Person Age Is:".$this->age = $value;
     }




}

$obj1 = new Person;   ///object

$obj1->name = "Arup Paul";   //-> is object operator

 $obj1->PersonName(""); 
 $obj1->PersonAge('10'); 
    








?>