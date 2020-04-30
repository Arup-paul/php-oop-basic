 <?php

   class StaticBinding{

    public static function framework(){
       // echo "Laravel is a FrameWork</br>";
       echo static::getClass()."</br>";

    }


    // public function getFramework(){
    //     self::framework();
    // }

    public  static function getClass(){
        return __CLASS__;
    }
   }
 
 
 
 ?>