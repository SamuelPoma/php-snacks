<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

           // while(count($arrayNumbers) < 15 ){
       	   //  $randomNumber = rand(1,15);
       	   //  $arrayNumbers[$randomNumber] = $randomNumber;
           // }
           // while(count($arrayNumbers) < 15) {
           //   $randomNumber =  rand(1,15);
           //   $arrayNumbers[$randomNumber] = $randomNumber;
           //
           //   var_dump($arrayNumbers);
           // }

           // genero un numero random
          $randomNumber = range(1,15);
          // utilizzo shuffle per l'ordine casuale all'interno dell ciclo
          shuffle($randomNumber);
          // stampo i quindici numeri random
          for ($i = 0; $i < 30; $i ++) {
          echo  $randomNumber[$i].' ';
          }
      ?>
  </body>
</html>
