<?php


class Person {
     public $name;   //property 
     public $age;   //property

     public function __construct($name,$age){
         $this->name = $name;
         $this->age = $age;
     }

     public function setId($id){
         $this->id = $id;
     }

     public function __destruct(){
         if(!empty($this->id)){
             echo "Saving Person";
         }
     }

  

  




}

$obj1 = new Person("Arup","22");   ///object
$obj1->setId(22);
unset($obj1);
 
    








?>