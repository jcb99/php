<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div align="center">
      <?php
      echo (basename($_SERVER['PHP_SELF']) == "password.php") ? "<strong><a href=password.php>Home</a></strong>" : "<a href=password.php>Home</a>";
      echo (basename($_SERVER['PHP_SELF']) == "register.php") ? "<strong><a href=register.php> | Register</a></strong>" : "<a href=register.php> | Register</a>";
      if(isset($_SESSION['username'])){
          echo (basename($_SERVER['PHP_SELF']) == "upload.php") ? "<strong><a href=upload.php> | Upload</a></strong>" : "<a href=upload.php> | Upload</a>";
          echo (basename($_SERVER['PHP_SELF']) == "users.php") ? "<strong><a href=users.php> | Users</a></strong>" : "<a href=users.php> | Users</a>";

        }
       ?>
    </div>
  </body>
</html>
