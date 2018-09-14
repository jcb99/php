<?php
  if (!isset($_SESSION)){ //Check to see if the session global variable...This is better than isset because it can create errors in the back logs...
                          //If the session variable is not set, then set it..else do nothing
    session_start();
  }

  if (!isset($_SESSION['username'])) //someone must be logged in to proceed
  // you could do this.....die ("No");
  header('Location: password.php'); //this kicks the user back to the login screen....whenever you use header, it is a string but you must use "Location: " in fron of it
  //This can't be executed after HTML has been loaded so it must be before the HTML

var_dump($_POST['upload']);
echo "<hr />";
var_dump($_FILES['upload']); //Takes whatever is in the parans and tells you all about it
//The below is only submitted when someone hits the submit button..does not run as soon as the page loads
  if (isset($_FILES['upload'])) { //This checks to see if post data has been submitted into upload....In the form below the input type is called upload..Thats what we're referring to
    $target_dir = "uploads/"; //the target directory of the file...will be on the server in the same PHP directory as this file
    $target_file = $target_dir . basename($_FILES['upload']['name']); //The actual file name is pulled from the basename...The basename function pulls the rest of the file path out and keeps just the name and extension

    $uploadVerification = true;

    //Check to see if the file already exists
    if file_exists($target_file){
        $uploadVerification = false;
        $ret = "This file already exists."
    }

    if ($uploadVerification) { //if this value is true
        move_uploaded_file($_FILES['upload']['tmp_name'], $target_file); //moves the uploaded file from memory to this location
    }

  }
 ?>

 Upload your file.

 <form action = "" method="post" enctype="multipart/form-data">
   <!-- We must have the enctype="multipart/form-data in order for the browser to understand that this isn't just normal post data..Otherwise the form won't work"  -->
   <input type="file" name="upload">
   <br>
   <input type="submit" name="Submit">
 </form>

 <h5 style="color: blue;">
   <?php
    if ($ret) {echo $ret;}
   ?>
 </h5>
