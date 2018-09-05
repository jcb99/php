<?php session_start() //starts the PHP session
include() //Go load page...IF its not there..Oh stats_cdf_well
require() //Go to load page...If its not ther...Get it..It needs to be there

 ?> 



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (isset ($_POST['logout'])) { //if the post variable has been set,
    unset($_SESSION['username']);
  }

   ?>
  <body>
    <form action="" method="post">
      <input type="text" name="username" placeholder="Username"> <br />
      <input type="password" name="password">
      <br />
      <input type ="submit" value="Go">
      <br />
      <input type="submit" name="logout" value="logout"> <!--Submit button makes the page reload !-->
    </form>

    <?php

      if (isset($username) && isset($password)) {
        if ($username == "jake" && $password == "password") {
          $_SESSION['username'] = $username;
        }
        /*echo "<br>";
        echo "Your username was $username";
        echo"<br>";
        echo "Your password was $password"; */
      }

      echo "Logged in as: " . $_SESSION['username'];
     ?>

  </body>
</html>
