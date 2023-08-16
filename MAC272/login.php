<!DOCTYPE html>
<html>
<head>
<style>
	html, body {
  height: 100%;
}
		body {
			font-family: Arial, sans-serif;
			background-image: url("background2.png");
			background-size: cover;
			background-repeat: no-repeat;
			margin: 0;
			padding: 20px;
			color: white;
		}

		h1 {
			text-align: center;
		color: transparent;
		margin-left: 565px;
		
		
		width: 200px;
		height: 200px;
		line-height: 200px;
		background-image: url("banner2.png");
		background-size: cover;
		background-repeat: no-repeat;
		}

		form {
			width: 500px;
			margin-left: 400px;
			padding: 20px;
			background-color: transparent;
			border: 5px solid #ccc;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 8px;
			margin-bottom: 10px;
			border: 5px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			
		}

		input[type="submit"] {
			width: 100%;
			background-color: #333;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #555;
		}

		input[type="submit"]:focus {
			outline: none;
		}
	</style>
	<title>Login Form</title>
</head>
<body>
	<h1>Login</h1>
	<form action="login.php" method="post">
	Username: 
		<input type="text" name="username" required><br>
	Password: 
	<input type="password" name="password" required><br>

	<input type="submit" name="submit" value="Login">
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "test";

    $conn = mysqli_connect($host, $user, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      
        header("Location: index.php?username=" . urlencode($username));
        exit;
    } else {
       
        header("Location: Register.php");
        exit;
    }

    mysqli_close($conn);
}
?>