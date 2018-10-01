<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //THIS SAYS ONLY IF THERE IS ANY POST DATA..sO WE DON'T END UP QUERYING THE DB WHEN WE DON'T NEED TO
  require('dbconnection.php');
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password = password_hash($password, PASSWORD_BCRYPT); //This is for PHP version 5.5 and up....5.4 and down doesn't recognize this password hash function
  $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')"; //Insert whatever is in the variables above
  $conn->query($sql); //to run the query
  header('Location: password.php');
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php require('navbar.php');  ?>
    <form action="" method="post">
        <h4>Register Here!</h4>
        Enter a username:
        <input type="text" name="username" placeholder="Username"><br>
        Enter a password:
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" value="Sign Up!">
    </form>
  </body>
</html>
