<?php
echo (basename($_SERVER['PHP_SELF']) == "password.php") ? "<strong><a href=password.php>Home</a></strong>" : "<a href=password.php>Home</a>";
echo (basename($_SERVER['PHP_SELF']) == "register.php") ? "<strong><a href=register.php>Register</a></strong>" : "<a href=register.php>Register</a>";
echo (basename($_SERVER['PHP_SELF']) == "upload.php") ? "<strong><a href=upload.php>Upload</a></strong>" : "<a href=upload.php>Upload</a>";
echo (basename($_SERVER['PHP_SELF']) == "users.php") ? "<strong><a href=users.php>Users</a></strong>" : "<a href=users.php>Users</a>";
 ?>
