<?php
$cookie_name = "user";
$cookie_value = "johnny5";

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php  //checking to see if a cookie has been mb_ereg_search_setpos

     $year = 31536000 + time() ;

     if (isset ($_COOKIE['user'])) //cookie name variable in the brackets
     {
       echo "You have been here before...";
       echo date();
     }

     else{
       echo "Welcome. This is your first time here...";
       setcookie($cookie_name, $cookie_value, time() + (86400), "/", $year); //86400 * 30 is 30 days...we currently have it set to 60 seconds...86400 is the number of seconds in a day ....the slash means if it is multiple directories we can read it...
       echo $year + time();
     }

     ?>
   </body>
 </html>
