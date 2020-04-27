<?php


spl_autoload_register(function($class){
  include_once "classes/".$class.".php";
});


class phpChild extends Php{
    public function cms(){
        echo "Child class  Class Name ".__CLASS__."</br>";
        echo "Child class Function and Class Name ".get_class($this)."</br>";
    }
    public function outputChild(){
       parent::framework();
    }
}

$php = new phpChild();
$php->framework();
echo "</hr>";
$php->cms();
echo "</hr>";
$php->outputChild();






?>