<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <?php
  $username = $_POST['username'];
  $password = $_POST['password'];
   ?>
  <body>
    <form action="" method="post">
      <input type="text" name="username" placeholder="Username"> <br />
      <input type="password" name="password">
      <input type ="submit" value="go">
      <br>
    </form>

    <?php

      if (isset($username) && isset($password)) {
        echo "<br>";
        echo "Your username was $username";
        echo"<br>";
        echo "Your password was $password";
      }

     ?>

  </body>
</html>