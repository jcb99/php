<?php
//Check to see if session has started
if (!isset($_SESSION)){  //If the session variable is not set, then set it..else do nothing
  session_start();
}

if(!isset($_SESSION['username'])){
  header('Location: login.php');
}

//Bring in database connection
require('dbconnection.php')


//Create the SQL query
$sql = "SELECT * FROM users";

//Execute the SQL Query
$result = $conn->query($sql);


//Close DB connection
$conn->close();
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
      <table>
        <tr>
          <th>User ID</th>
          <th>Username</th>
          <th>Password Hash</th>
        </tr>


        <?php
          //Loops through all of the table records

          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
              echo "<td>" . $row['userid'] . "</td>";
              echo "<td>" . $row['username'] . "</td>";
              echo "<td>" . $row['password'] . "</td>";

            echo "</tr>";
          }

        ?>



      </table>
   </body>
 </html>
