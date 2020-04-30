<?php

trait Php {
    public function PhpCoder() {
        return "I Love PHP</br>";

    }
}

// trait Java {
//     public function JavaCoder() {
//         return "I Love Java</br>";

//     }
// // }
// trait JavaPhp{
//   use Java,Php;
// }

class CoderOne {
    use Php;
    public function PhpCoder() {
      return "I Love PHP laravel</br>";

  }

}

// class coderTwo {
//     use Php;
// }

$c1 = new CoderOne;
echo $c1->PhpCoder();
//echo $c1->PhpCoder();
// $c2 = new coderTwo;
// echo $c2->PhpCoder();

?>