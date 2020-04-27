<?php

 class UserData{

    public $user;
    public $userId;
    public $age = "25";


    public function __construct($name,$id){
        $this->user = $name;
        $this->id = $id;

        
    }

    public  function display(){
        echo "Username is {$this->user} and userid is {$this->id}";
        echo "</br>";
        echo $this->age." Inside Class";
    }


  
}

class Admin extends UserData{
     public $level;
     public  function display(){
        echo "Username is {$this->user} and userid is {$this->id} and user level is {$this->level}";
        echo "</br>";
        echo $this->age." In The Sub Class";
    }
}


$user = "Arup";
$id = "22";
$obj = new UserData($user,$id);
echo "</br>";
$obj->display();
echo "</br>";

$user = "Admin";
$id = "2";
$ad  = new Admin($user,$id);
$ad->level = "Administrator";
$ad->display();
echo $obj->age;
echo "</br>";






?>