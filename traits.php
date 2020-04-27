<?php



trait Java{
  public function javaCoder(){
      return "I love Java.</br>";
  }
}



// trait php{
//     public function phpCoder(){
//         return "I Love Php.</br>";
//     }
// }

// trait JavaPhp{
//     use Java, php;
// }



class CoderOne{
   use Java;
   public function javaCoders(){
    return "I love Php.</br>";
}
}





$c1 = new CoderOne();
echo $c1->javaCoder();
echo $c1->javaCoders();
//echo $c1->phpCoder();









?>