<?php
$output = shell_exec('ls -lah');
echo "<pre>$output</pre>"; //displays the code as it appears in the terminal including spacing....the <code> tag strips spaces

$pwd = shell_exec('pwd');
echo "<pre>$pwd</pre>";

if (is_dir('~/test')){
  echo "This directory exists!";
}

else{
  echo "This is not a directory!";
}
 ?>
