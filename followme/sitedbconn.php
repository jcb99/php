<?php

$connection = new mysqli("localhost", "jake", "southhills#", "jake");
if($connection->connect_error){
  die("Cannot connect: " . $connection->connect_error)
}?>
