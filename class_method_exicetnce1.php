<?php

include "class_method_exicetnce2.php";


if(class_exists("Student")){
    $s = new Student();
    if(method_exists($s,'describe')){
        $s->describe();
    }else{
        echo "method not found";
    }
   
}else{
    echo "Class not found";
}



?>