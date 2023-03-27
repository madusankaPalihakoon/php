<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<form action="login.php" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br><br>
		
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		
		<input type="submit" value="Login" name="Login">
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

// Check if the login form has been submitted
if(isset($_POST['Login']))
{
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query database for user
    $sql = "SELECT * FROM userlog WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    // Check if user exists and password is correct
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Check if password matches
        if ($password == $row['password']) {
            // Start session and set user ID
            //session_start();
            //$_SESSION['user_id'] = $row['id'];

            // Redirect to home page
            header("Location: home.php");
            exit();
        }
    }

    // Show error message
    echo "Invalid username or password.";

    // Close database connection
    mysqli_close($conn);
}
?>
