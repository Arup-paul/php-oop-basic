<?php


interface School{
    public function mySchool();
}

interface College{
    public function myCollege();
}

interface Vercity{
    public function myVercity();
}

class Teacher implements School,College,Vercity{

     public function __construct(){
         $this->mySchool();
         $this->myCollege();
         $this->myVercity();
     }
   
     public function mySchool(){
         echo "I am a School Teacher.<br/>";
     }
     public function myCollege(){
        echo "I am a College Teacher.<br/>";
    }
    public function myVercity(){
        echo "I am a Vercity Teacher.";
    }
}

$obj = new Teacher();















?>