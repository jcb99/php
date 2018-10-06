<?php
$cookie_name = "user";
$cookie_value = "johnny5";

$last_visited_cookie = "lastvisit";
$last_visited_cookie_val = "something";
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php  //checking to see if a cookie has been mb_ereg_search_setpos


     if (isset ($_COOKIE['user']) && (isset ($_COOKIE['lastvisit']))) //cookie name variable in the brackets
     {
       $last_visited = $_COOKIE['lastvisit'];

       if (isset ($last_visited))
          {

      //$instant = date("F j, Y, g:i a", $last_visited );
       echo "You have been here before... Your last visit was..." . date("F j, Y, g:i a", $last_visited );
       //setcookie($last_visited_cookie, $instant, time() + (86400), "/");
     }
   }

     else{
       echo "Welcome. This is your first time here...";
       setcookie($cookie_name, $cookie_value, time() + (86400), "/"); //86400 * 30 is 30 days...we currently have it set to 60 seconds...86400 is the number of seconds in a day ....the slash means if it is multiple directories we can read it...
       setcookie($last_visited_cookie, $last_visited_cookie_val, time() + (86400), "/");
     }

     ?>
   </body>
 </html>
