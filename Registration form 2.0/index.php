 

<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
    <form action="index.php" method="post">
<h1>I welcome you all</h1> <br>

username: <input type="text" name="username"><br><br>
password: <input type="password" name="password"><br><br>
<input type="submit" name="submit" value="Register">
</form>
    
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username= filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password= filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username)){
        echo"Please enter username";
    }
    elseif(empty($password)){
        echo"Please enter password";
    }
    else{
       $sql= "INSERT INTO `project1` ( `username`, `password`) VALUES ( '$username', '$password')"; 
       mysqli_query($conn,$sql);
       echo"registration succesfull";
    }

}
mysqli_close($conn);
?>
