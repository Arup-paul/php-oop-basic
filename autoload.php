<?php



// include "Classes/Oop.php";
// include "Classes/Php.php";
// include "Classes/Java.php";

spl_autoload_register(function($class_name){
    echo "$class_name"."<br/>";
    include "Classes/".$class_name.".php";
});
  


$oop  = new Oop();
echo "<br/>";
$php  = new Php();
echo "<br/>";
$java = new Java();
echo "<br/>";




?>