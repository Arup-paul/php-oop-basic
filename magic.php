<?php




class Student{
    
    public $name;

    public function describe(){
        echo "I am a Student.<br/>";
    }

    public function __get($pm){
        echo "$pm Does not exist.<br/>";
    }

    public function __set($pm,$value){
        echo "We set $pm = $value.<br/>";
    }

    public function __call($pm,$value){
       echo "There is ".$pm." Method and arguments:".implode(',',$value);
    }
}




$s = new Student();
$s->describe();
$s->Arup;
$s->age = 15;

$s->notExist('2','5','7');

















?>