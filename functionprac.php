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
      distance(25, 40); // Here is where the funciton "distance" is actually called

      function distance($rate, $time){
        //$rate = 50; //Instead we can use these as parameters
        //$time = 4;
        $distance = $rate * $time ; //The function now runs and stores the value of rate * time in the distance variable
        return $distance; //returns this value

      }
    ?>


  </body>
</html>
