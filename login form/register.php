<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form action="register.php" method="post">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br><br>
		
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		
		<input type="submit" value="Register" name="Register">
	</form>
</body>
</html>

<?php
// Define database connection variables
$host = "localhost";
$user = "root";
$password = "";
$database = "register";

// Connect to database
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//check regiter button
if(isset($_POST['Register']))
{
// Get form data
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Insert data into users table
$sql="insert into users value ('$email','$username','$password')";
//$sql = "INSERT INTO users VALUE ('$email', '$username', '$password')";
if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Insert data into userlog table
$sql1 = "INSERT INTO userlog VALUE ('$username', '$password')";
//$sql1 = "INSERT INTO userlog (username, password) VALUES ('$username', '$password')";
if (mysqli_query($conn, $sql1)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
}

?>
