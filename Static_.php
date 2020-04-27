<?php

class UserData{

    public $user;
    public $userId;
    const NAME = "Arup Paul";
    public static $age = "30";


    public function __construct($name,$id){
        $this->user = $name;
        $this->id = $id;

        echo "Username is {$this->user} and userid is {$this->id}";
    }

    public static function display(){
        echo "Full Name is ".UserData::NAME."</br>";
        echo "Age is:".self::$age;
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
UserData::display();




?>