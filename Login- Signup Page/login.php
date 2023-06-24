<?php

include('connection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql= "select * from project1 where
    username='$username' and password='$password'";

    $result = mysqli_query($conn, $sql);
    if($result){
    $num=mysqli_num_rows($result);

    if($num>0) {
        session_start();
        $_SESSION['username']=$username;
        header('location: home.php');
    } else {
        echo "Invalid username or password";
    }
}
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1>Welcome To Login Page</h1>
    <form action="login.php" method="post">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="Login" value="Submit">
    </form>
</body>
</html> 