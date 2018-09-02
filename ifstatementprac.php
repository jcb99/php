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

      if (220>200) {
        echo "This distance is too far"
      }

     ?>
  </body>
</html>
