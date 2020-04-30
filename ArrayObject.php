<?php


//Array object


// spl_autoload_register(function($class){
//     include_once "classes/".$class.".php";
//   });


   

  $arr = array("PHP","VUE","LARAVEL","OOP");
  $coding = new ArrayObject($arr);
  $coding->append("Java");
  $iterator = $coding->getIterator();
  while($iterator->valid()){
      echo $iterator->current()."</br>";
      $iterator->next();
  }




?>