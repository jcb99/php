<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $nflTeams[] = "Broncos";
      $nflTeams[] = "Bears";
      $nflTeams[] = "Titans";

      echo count($nflTeams); //predeterminied count funciton tells you how many elements are in that array

      //Creating your own funciton
      echo "<br /> <br />";
      echo distance(); // Here is where the funciton "distance" is actually called
      
      function distance(){
        $rate = 50;
        $time = 4;
        echo $rate * $time ;

      }
    ?>


  </body>
</html>
