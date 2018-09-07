<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //THIS SAYS ONLY IF THERE IS ANY POST DATA..sO WE DON'T END UP QUERYING THE DB WHEN WE DON'T NEED TO
  require('dbconnection.php');
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "INSERT INTO users (username,password) VALUES()" ('$username','$password'); //Insert whatever is in the variables above
  $conn->query($sql); //to run the query
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
        <input type="text" name="username"><br>
        <input type="password" name=""><br>
        <input type="text" name="" value="">
    </form>
  </body>
</html>
