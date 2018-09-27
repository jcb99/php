<?php
//Check to see if session has started
if (!isset($_SESSION)){  //If the session variable is not set, then set it..else do nothing
  session_start();
}

if(!isset($_SESSION['username'])){ //send em back to log in
  header('Location: login.php');
}

if(isset($_GET['id']) && $_GET['edit']=="EDIT"){
require('dbconnection.php'); //bring in database connection
$sql = "SELECT * FROM users WHERE userid = " . $_GET['id'];
$result = $conn->query($sql);




echo "<form action = \"\" method = \"post\">";

while ($row = $result->fetch_assoc()) {
  echo "<input name = \"userid\" type=\"text\" disabled value = \"" . $row['userid'] . "\">";
  echo "<br />";
  echo "<input name = \"username\" type=\"text\" value = \"" . $row['username'] . "\">";
  echo "<br />";
  //echo "<input name = \"password\" type=\"text\" value = \"" . $row['password'] . "\" placeholder=\"New Password\">";
  echo "<input name = \"password\" type=\"text\" value = \"\" placeholder=\"New Password\">";
  echo "<br />";
  echo "<input type=\"submit\" name=\"submit\" value=\"change\">";

}

echo "</form>";


}


else{
  echo "You should not be here...";
}

if (isset($_POST['username']) && isset($_POST['submit'])){

  $uname = $_POST['username'];
  $uname = str_replace(" ", "", $uname);
  //$uname = strip_tags($uname);

      if($uname != ""){
        $uname = $_POST['username'];
        $uname = str_replace(" ", "", $uname);
        $uname = strip_tags($uname);
        $update = "UPDATE users SET username = \"" .  $uname . "\" WHERE userid = " . $_GET['id'];
        $conn->query($update);
        header('Location: users.php');
      }


      else{
        echo "Yo idiot that is not a username";
      }
}



if (isset($_POST['password']) && isset($_POST['submit'])){
  if ($_POST['password'] != "") {
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_BCRYPT);
    $update = "UPDATE users SET password = \"" .  $password . "\" WHERE userid = " . $_GET['id'];
    $conn->query($update);
    header('Location: users.php');
  }

}


?>
