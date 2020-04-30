<?php

//method cloning
//object cloning


spl_autoload_register(function($class){
    include_once "classes/".$class.".php";
  });

  $obj= new Language();

  $obj->setCat("OOP");
  $obj->setFramework("LARAVEL");
   


  $obj1 = clone $obj;
  $obj->setCat("PHP");
  $obj->setFramework("CodeIgnitor");

  echo $obj->getCat()."</br>";
  echo $obj->getFramework()."</br>"; 

  echo $obj1->getCat()."</br>";
  echo $obj1->getFramework()."</br>";

  



?>