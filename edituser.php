<?php
//Check to see if session has started
if (!isset($_SESSION)){  //If the session variable is not set, then set it..else do nothing
  session_start();
}

if(!isset($_SESSION['username'])){ //send em back to log in
  header('Location: login.php');
}

if(isset($_GET['id']) && $_GET['edit']=="edit"){
require('dbconnection.php'); //bring in database connection
$sql = "SELECT * FROM users WHERE userid = " . $_GET['id'];
$result = $conn->query($sql);

echo "<form action = \"\" method = \"post\">";

while ($row = $result->fetch_assoc()) {
  echo "<input name = \"userid\" type=\"text\" disabled value = \"" . $row['userid'] . "\">";
  echo "<br />";
  echo "<input name = \"username\" type=\"text\" disabled value = \"" . $row['username'] . "\">";
  echo "<br />";
  echo "<input name = \"password\" type=\"text\" disabled value = \"" . $row['password'] . "\">";
  echo "<br />";
  echo "<input type=\"submit\" name=\"submit\" value=\"change\">";

}

echo "</form>";


}

else{
  echo "You should not be here...";
}
