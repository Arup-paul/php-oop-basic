<?php  include "Function.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work With Method And Object</title>
</head>
<body>

    <form action="" method="post">
       <table>
           <tr>
              <td>Enter The First Input:</td>
              <td><input type="number" name="first"></td>
           </tr>
           <tr>
              <td>Enter The Second Input:</td>
              <td><input type="number" name="second"></td>
           </tr>

           <tr>
              <td></td>
              <td><input type="submit" name="calculation" value="submit"></td>
           </tr>
       </table>
    </form>

    <?php
     if(isset($_POST['calculation'])){
         $num1 = $_POST['first'];
         $num2 = $_POST['second'];

         if (empty($num1) || empty($num2)){
             echo "<span style='color:#EE6554'>Field Must Not Be Empty</span>";
         }else{
             echo "First Number is = ".$num1."</br>";
             echo "Second Number is = ".$num2."</br>";
            $cal = new Calculation;
              $cal->Cal($num1,$num2);
            // $cal->Sub($num1,$num2);
            // $cal->Mul($num1,$num2);
            // $cal->Div($num1,$num2);
            // $cal->Mod($num1,$num2);
                         
        }
     }

?>
</body>
</html>