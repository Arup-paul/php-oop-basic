<?php


spl_autoload_register(function($class){
  include_once "classes/".$class.".php";
});


class LateStaticBinding extends StaticBinding{
    public  static function getClass(){
        return __CLASS__;
    }
}


 $StaticBinding = new StaticBinding();
 $StaticBinding->framework();
 $LateStaticBinding = new LateStaticBinding();
 $LateStaticBinding->framework();





?>