<?php
$cookie_name = "user";
$cookie_value = "johnny5";

$last_visited_cookie = "lastvisit";
$last_visited_cookie_val = date("F j, Y, g:i a");

$time_cookie = "time";
$time_cookie_val = time();


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php  //checking to see if a cookie has been mb_ereg_search_setpos

     if ((isset($_COOKIE['user'])) && (isset($_COOKIE['lastvisit'])) && (isset($_COOKIE['time']))) //cookie name variable in the brackets
     {
       $old_time = $_COOKIE['time'];
       $seconds_diff = time() - $old_time;

       $last_visited = $_COOKIE['lastvisit'];

       echo "You have been here before... Your last visit was..." . $last_visited ;
       echo "<br /><br />";

       echo "The following amount of time has passed since your last visit:<br>";
       setcookie($last_visited_cookie, $last_visited_cookie_val, 31536000 + time(), "/");
       setcookie($cookie_name, $cookie_value, time() + (31536000), "/");
       setcookie($time_cookie, $time_cookie_val, time() + (31536000), "/");

   }

     else{
       echo "Welcome. This is your first time here...";
       setcookie($cookie_name, $cookie_value, time() + (31536000), "/"); //86400 * 30 is 30 days...we currently have it set to 60 seconds...86400 is the number of seconds in a day ....the slash means if it is multiple directories we can read it...
       setcookie($last_visited_cookie, $last_visited_cookie_val, 31536000 + time(), "/");
       setcookie($time_cookie, $time_cookie_val, time() + (31536000), "/");
     }

     function convert_seconds($seconds_diff){
       $first = new DateTime("@0");
       $second = new DateTime("@$seconds_diff");
       return $first->diff($second)->format('%a days, %h hours, %i minutes and %s seconds');
      }

      echo convert_seconds($seconds_diff);

     ?>
     <br />
     <img src="images/cookie_monstergif.gif">
   </body>
 </html>
