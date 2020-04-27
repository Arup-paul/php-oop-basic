<?php

class UserData{

    public $user;
    public $userId;


    public function __construct($name,$id){
        $this->user = $name;
        $this->id = $id;

        echo "Username is {$this->user} and userid is {$this->id}";
    }


    public function __destruct(){
         unset($this->user);
         unset($this->id);
    }
}

$user = "Arup";
$id = "22";
$obj = new UserData($user,$id);




?>