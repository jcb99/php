<?php
//Setting up a database connection
$db_host = 'localhost'; //We are never leaving this specific so we are using local host (it is installed on our PHP server already)...Could replace that with an IP
$db_user = "jake"; //name to login to DB
$db_password = "southhills#"; //Password to log into mysql
$db_name = "jake"; //name of DB within mysql
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);// This is passing in the 4 parameters defined above..Conn is short for connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); //Die kills the entire page..Nothing else executes...Then we append the error
}
//We want the mysqli not mysql
 ?>
