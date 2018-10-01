<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div align="center">
      <?php
      echo (basename($_SERVER['PHP_SELF']) == "password.php") ? "<strong><a href=password.php style=\"text-decoration: none\">|Home</a></strong>" : "<a href=password.php style=\"text-decoration: none\">|Home</a>";
      echo "|&nbsp&nbsp";
      echo (basename($_SERVER['PHP_SELF']) == "register.php") ? "<strong><a href=register.php>|Register</a style=\"text-decoration: none\"></strong>" : "<a href=register.php style=\"text-decoration: none\">|Register</a>";
      echo "|&nbsp&nbsp";
      if(isset($_SESSION['username'])){
          echo (basename($_SERVER['PHP_SELF']) == "upload.php") ? "<strong><a href=upload.php>|Upload</a></strong style=\"text-decoration: none\">" : "<a href=upload.php style=\"text-decoration: none\">|Upload</a>";
          echo "|&nbsp&nbsp";
          echo (basename($_SERVER['PHP_SELF']) == "users.php") ? "<strong><a href=users.php style=\"text-decoration: none\">|Users|</a></strong>" : "<a href=users.php style=\"text-decoration: none\">|Users|</a>";
        }
       ?>
       <br />
    </div>
  </body>
</html>
