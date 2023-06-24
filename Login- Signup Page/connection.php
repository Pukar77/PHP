<?php


$db_SERVER="localhost";
$db_username="root";
$db_password="";
$db_database="project";
$conn="";

$conn=mysqli_connect($db_SERVER, $db_username, $db_password, $db_database);

if($conn){
echo("connected succesfully");
}
else{
    echo("Connection failed");
}
?>