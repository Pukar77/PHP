
<?php
include('connection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO project1 (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "Data inserted successfully";
    } else {
        echo "Error in inserting data";
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
    <h1>Welcome To Signup Page</h1>
    <form action="index.php" method="post">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>