<?php
session_start(); //starts the PHP session
 //Go load page...IF its not there..Oh stats_cdf_well
require('dbconnection.php'); //Go to load page...If its not ther...Get it..It needs to be there

if(isset ($_POST['username'])){ //executes only if the page has been set
  $username = $_POST['username'];
  $password = $_POST['password'];

  //SQL statement to execute
  $sql = "SELECT username, password FROM users WHERE username = '$username'"; //SURROUND VARIABLES WITH SINGLE QUOTES

  //Execute the SQL and return array to $result
  $result = $conn->query($sql); //this says take the connection we have and execute the named query....In this case it is called sql..Then stored in a variable called result
//result holds the entire table..iin our case it only holds one row becuase of our where clause in line 11
  while ($row = $result->fetch_assoc()){ //fetch all the info and store it in a result called row..It pulls individually from result one by one
    if ($username == $row['username'] && password_verify($password, $row['password'])) //THE STUFF IN YELLOW 'USERNAME' AND PASSWORD MUST BE THE SAME AS THE DB FIELDS..They are directly tied
    {
      $_SESSION ['username'] = $username;
    }

  }

}
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <?php


  if (isset ($_POST['logout'])) { //if the post variable has been set,
    unset($_SESSION['username']);
  }

   ?>
  <body>
    <div align="center">
    <a href='password.php'>Home</a>
    <a href='register.php'> | Register</a>

    <?php
      echo "<a href=\"users.php\"> | Users</a>";
      if(isset($_SESSION['username'])){ //Show the upload button when logged in
        echo "<a href=\"upload.php\"> | Upload</a>";
          echo "<a href=\"users.php\"> | Users</a>";
      }
      ?>
    </div>

    <form action="" method="post">
      <input type="text" name="username" placeholder="Username"> <br />
      <input type="password" name="password">
      <br />
      <input type ="submit" value="Go">
      <br />
      <input type="submit" name="logout" value="logout"> <!--Submit button makes the page reload !-->
    </form>

    <?php
      echo "Logged in as: " . $_SESSION['username'];
     ?>

  </body>
</html>
