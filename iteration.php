<?php

  spl_autoload_register(function($class){
       include_once "classes/".$class.".php";
  });


  $class  = new Php();
  echo "outside class";
  foreach($class as $key=>$value){
      echo"<pre>";
      echo "$key=> $value";
      echo"</pre>";
  }
  $class->iteratorInner();
  $class->iteratorInners();





?>