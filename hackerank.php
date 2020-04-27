<?php

// //1st day
// $handle = fopen ("php://stdin","r");
// $i = 4;
// $d = 4.0;
// $s = "HackerRank ";
// // Declare second integer, double, and String variables.
//    $b = 12;
//    $c = 4.0;
//    $g = "is the best place to learn and practice coding!";
// // Read and save an integer, double, and String to your variables.
//      fscanf($handle,'%i',$b);
//      fscanf($handle,'%f',$c);
//      $g = fgets($handle);
// // Print the sum of both integer variables on a new line.
//    echo $i+$b;
//    echo "\n";
// // Print the sum of the double variables on a new line.
//    printf("%.1f",$d+$c);
//     echo "\n";
// // Concatenate and print the String variables on a new line
//   echo $s.$g;
// // The 's' variable above should be printed first.

// fclose($handle);




//2nd day

// Complete the solve function below.
// function solve($meal_cost, $tip_percent, $tax_percent) {
//   $meal_cost = 12.0;
//   $tip_percent=20;
//   $tax_percent = 8;

// }

// $stdin = fopen("php://stdin", "r");

//       $meal_cost = (float) fgets($stdin);
//       $tip_percent = (float) fgets($stdin);
//       $tax_percent = (float) fgets($stdin);

//  $tip = $meal_cost*($tip_percent/100);
//   $tax = $meal_cost*($tax_percent/100);
//   $totalCost = $meal_cost+$tip+$tax;
//   $totalCost = round($totalCost);
//   echo $totalCost;

// fscanf($stdin, "%lf\n", $meal_cost);

// fscanf($stdin, "%d\n", $tip_percent);

// fscanf($stdin, "%d\n", $tax_percent);

// solve($meal_cost, $tip_percent, $tax_percent);

// fclose($stdin);


//day 3
// $handle = fopen("php://stdin", "r");
// fscanf($handle, "%d\n", $test);
// if($test%2!=0){
//     echo "Weird";
// }else{
//     switch($test){
//         case($test>21):
//             echo "Not Weird";
//             break;     
//          case($test>=2 && $test<=5):
//             echo "Not Weird";
//             break;      
//           case($test >=6 && $test <=20):
//             echo "Weird";
//             break;
//     }
// }

// or 

// if($N%2 != 0){
//     echo "Weird";
// }else{
//     if($N >=6 && $N <=20){
//         echo "Weird";
//     }elseif($N>=2 && $N<=5){
//         echo "Not Weird";
//     }elseif($N > 21){
//          echo "Not Weird";
//     }
// }

// fclose($handle);


  ?>