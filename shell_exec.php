<?php
$output = shell_exec('ls -lah');
echo "<pre>$output</pre>"; //displays the code as it appears in the terminal including spacing....the <code> tag strips spaces

$pwd = shell_exec('pwd');
$pwd = rtrim($pwd);
echo "<pre>$pwd</pre>";

echo $pwd . '/' . 'test';
if (is_dir($pwd . '/' . 'test1')){
  echo "<br>This directory exists!";
}

else{
  echo "This is not a directory!";
  exec('mkdir testing');
}
 ?>
