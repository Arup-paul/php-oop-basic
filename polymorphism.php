<?php

 class UserData{

    public $user;
    public $userId;


    public function __construct($name,$id){
        $this->user = $name;
        $this->id = $id;

        
    }

    public  function display(){
        echo "Username is {$this->user} and userid is {$this->id}";
    
    }


  
}

class Admin extends UserData{
     public $level;
     public  function display(){
        echo "Username is {$this->user} and userid is {$this->id} and user level is {$this->level}";
    }
}


$user = "Arup";
$id = "22";
$obj = new UserData($user,$id);
echo "</br>";
$obj->display();
echo "</br>";

$ad  = new Admin($user,$id);
$ad->level = "Administrator";
$ad->display();
echo "</br>";
if($ad instanceof UserData){
  echo "inherited ";
}








?>