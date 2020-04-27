<?php

class UserData{

    public $user;
    public $userId;
    const NAME = "Arup Paul";


    public function __construct($name,$id){
        $this->user = $name;
        $this->id = $id;

        echo "Username is {$this->user} and userid is {$this->id}";
    }

    public function display(){
        echo "Full Name is ".UserData::NAME;
    }


    public function __destruct(){
         unset($this->user);
         unset($this->id);
    }
}

$user = "Arup";
$id = "22";
$obj = new UserData($user,$id);
echo "</br>";
$obj->display();




?>