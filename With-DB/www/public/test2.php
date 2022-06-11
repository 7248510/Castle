<?php
$mysqli = new mysqli("mysql","test","horriblepassword","testDB");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else {
    echo "This succesfully connects!";
}
?> 