<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function distance ($rate, $time){
        $distance = $rate * $time;
        return $distance;

      }

      echo distance(44, 5);

      if (distance(44, 5) < 200) {
        echo "<br />";
        echo "This distance is too far";
      }

      else {
        //echo "<br />";
        echo "<br />This distance is too little.";
      }

     ?>
  </body>
</html>
