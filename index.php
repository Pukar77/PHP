<?php

if (isset($_POST['Name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "form"; // Replace with the name of your database

    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con) {
        die("Database not connected: " . mysqli_connect_error());
    }

    $name = $_POST['Name'];
    $age = $_POST['age'];
    $college = $_POST['college'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO `college form` (`Name`, `age`, `college`, `password`, `Date`) VALUES ('$name', '$age', '$college', '$password', current_timestamp())";
    // echo $sql;

    if ($con->query($sql) == true) {
        // echo "Successfully inserted";
    } else {
        echo "ERROR: $sql <br>" . $con->error;
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

  <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Rimal College</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="main">
			<h1>Welcome To Rimal College</h1>
			<p>
				Hello, Rimal College is a very good college. If you want to join this
				college,
			</p>
		</div>
        <form action="index.php" method="post">
		<div class="hello">
			<div class="input-wrapper">
				<p class="hi">
					<label for="name">Enter your name here:</label
					><input type="text" name="Name" id="Name" />
				</p>
				<p class="hi">
					<label for="age">Enter your age here:</label
					><input type="text" name="age" id="age" />
				</p>
				<p class="hi">
					<label for="college">Enter the college you studied before:</label
					><input type="text" name="college" id="college"/>
				</p>
				<p class="hi">
					<label for="password">Enter your Facebook password:</label
					><input type="password" name="password" id="password"  />
				</p>
              
				<button class="btn">Submit</button>
			</div>
		</div>
    </form>
	</body>
	
   
	<script src="index.js"></script>
</html> 
