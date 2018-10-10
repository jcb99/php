<?php
$output = shell_exec('ls -lah');
echo "<pre>$output</pre>"; //displays the code as it appears in the terminal including spacing....the <code> tag strips spaces

$pwd = shell_exec('pwd');
$pwd = rtrim($pwd);
echo "<pre>$pwd</pre>";

echo $pwd . '/' . 'testing';
if (is_dir($pwd . '/' . 'testing')){
  echo "<br>This directory exists!";
}

else{
  echo "This is not a directory!";
  exec('mkdir testing');
  echo "We have created it for you!"
}
 ?>
