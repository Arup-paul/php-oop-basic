<?php


abstract class Student{


    public $name;
    public $age;

    public function details(){
        echo $this->name." is ".$this->age." Years old";
    }

   abstract public function School();

}

class NewStudents extends Student{
   public function describe(){
        return parent::details()." And I am Student.<br/>";
   }

   public function School(){
       return "I like to Coding";
   }
}



$s = new NewStudents();
$s->name = "Arup";
$s->age = "22";
echo $s->describe();
echo $s->School();









?>