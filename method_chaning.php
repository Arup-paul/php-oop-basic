<?php


spl_autoload_register(function($class_name){
    include "Classes/".$class_name.".php";
});

//$obj->method1->method2();




$php  = new Php();
echo $php->getValue(10,12)->getResult();





?>