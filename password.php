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
      <br>
      <input type ="submit" value="go">
    </form>

    <?php

      if (isset($username) && isset($password)) {
        if ($username == "jake" && password == "password") {
          $_SESSION['username'] = $username;
        }
        echo "<br>";
        echo "Your username was $username";
        echo"<br>";
        echo "Your password was $password";
      }

      echo "Logged in as: " . $_SESSION['username'];
     ?>

  </body>
</html>
