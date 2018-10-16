<?php

$conn = new mysqli('localhost', 'jake', 'southhills#', 'jake');
if($conn->connect_error){
  die("Cannot connect: " . $conn->connect_error);
}?>
