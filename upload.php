<?php
  if (!isset($_SESSION)){ //Check to see if the session global variable...This is better than isset because it can create errors in the back logs...
                          //If the session variable is not set, then set it..else do nothing
    session_start();
  }

  if (!isset($_SESSION['username'])) //someone must be logged in to proceed
  // you could do this.....die ("No");
  header('Location: password.php'); //this kicks the user back to the login screen....whenever you use header, it is a string but you must use "Location: " in fron of it
  //This can't be executed after HTML has been loaded so it must be before the HTML

  else{
      echo "<a href=\"upload.php\">Upload</a>";
      echo "<a href=\"users.php\"> | Users</a>";
      echo "<br />";
  }

var_dump($_POST['upload']);
echo "<hr />";
var_dump($_FILES['upload']); //Takes whatever is in the parans and tells you all about it
//The below is only submitted when someone hits the submit button..does not run as soon as the page loads
  if (isset($_FILES['upload'])) { //This checks to see if post data has been submitted into upload....In the form below the input type is called upload..Thats what we're referring to

    if (!file_exists("uploads")){ //if the uploads directory does not exist, create it
        mkdir("uploads/");
    }

    if(!file_exists("uploads/" . $_SESSION['username'])){ //if uploads/student does not exist..we create it..this is dynamic..dependent on the username
      mkdir("uploads/" . $_SESSION['username']);
    }

    $target_dir = "uploads/" . $_SESSION['username'] . "/"; //the target directory of the file...will be on the server in the same PHP directory as this file...we must append the "/" because we are uploading this to a directory
    $target_file = $target_dir . basename($_FILES['upload']['name']); //The actual file name is pulled from the basename...The basename function pulls the rest of the file path out and keeps just the name and extension

    $uploadVerification = true;

    //Check to see if the file already exists..if it does it sets the uploadVerification to false and it wont enter the if statement for if($uploadVerification == true)
    if (file_exists($target_file)){
        $uploadVerification = false;
        $ret = "This file already exists.";
    }

    //Checks the file type to see if it is an approved type
    $file_type = $_FILES['upload']['type'];

    switch ($file_type) { //Switch case for the file types that are allowed to be uploaded
      case 'image/jpeg':
        $uploadVerification = true;
        break;

      case 'image/png':
        $uploadVerification = true;
        break;

      case 'image/gif':
        $uploadVerification = true;
        break;

      case 'application/pdf':
        $uploadVerification = true;
        break;

      default:
        $uploadVerification = false;
        $ret = "Sorry! It appears your file type is not supported! Only JPEGs, PNGs, PDFs, and GIFs.";
    }

    if ($_FILES['upload']['size'] > 1000000) {
      $uploadVerification = false;
      $ret = "This file is too large. Please upload a smaller file.";
    }


//If the target file name already exists the $uploadVerification will be false and will not upload the file and won't execute the code below
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

 <h5 style="color: red;">
   <?php
    if ($ret) {echo $ret;}
   ?>
 </h5>
