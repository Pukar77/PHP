<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['username']; ?>, You have logged in succesfully</h1>
<div>
    <a href="logout.php">Log out</a>
</div>
</body>
</html>