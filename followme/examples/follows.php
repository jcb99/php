<?php

$followers="SELECT * FROM fm_follows;";
$result = $conn->query($followers);
echo $result;
 ?>
