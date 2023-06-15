 <?php
if (isset($_POST['Name'])) {
$servername = "localhost";
$username = "root";
$password = "";
$database="pukar";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$sql="INSERT INTO `pukar1` (`Name`, `Email`, `Password`) VALUES ('$Name', '$Email', '$password')";
if ($con->query($sql) == true) {
  // echo "Successfully inserted";
} else {
  echo "ERROR: $sql <br>" . $con->error;
}

$con->close();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
</head>
<body>
  <h2>Registration Form</h2>
  <form action="index.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="Name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="Email" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" value="Submit">
  </form>
</body>
</html>

  

 