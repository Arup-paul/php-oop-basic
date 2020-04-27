<?php

spl_autoload_register(function($class_name){
    //echo "$class_name"."<br/>";
    include "Classes/".$class_name.".php";
});



$obj = new Php();
new Java($obj);
 
// $nums = array(
//     array('Number One',10,10),
//     array('Number Two',20,20)
// );
// $obj->getValue($nums);





?>