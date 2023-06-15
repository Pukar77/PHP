<?php

$db_server="localhost";
$db_username="root";
$db_password="";
$db_name="project";
$db_conn="";

// Create connection
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 //echo "Connected successfully";
?>


