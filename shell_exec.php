<?php
$output = shell_exec('ls -lah');
echo "<pre>$output</pre>"; //displays the code as it appears in the terminal including spacing....the <code> tag strips spaces

$pwd = shell_exec('pwd');
$pwd = rtrim($pwd);
echo "<pre>$pwd</pre>";

echo $pwd . '/' . 'test';
if (is_dir($pwd . '/' . 'test')){
  echo "<br>This directory exists!";
  $a=array="Hi", "Hello";
  echo array_values($a);
}

else{
  echo "This is not a directory!";
  exec('mkdir test');
  echo "We have created it for you!";
}
 ?>