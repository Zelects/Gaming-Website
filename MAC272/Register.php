<!DOCTYPE html>
<html>
<head>
<style>
	html, body {
		height: 100%;
		margin: 0;
		padding: 0;
	}

	body {
		font-family: Arial, sans-serif;
		background-image: url("background2.png");
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
	}

	h1 {
		text-align: center;
		color: transparent;
		width: 200px;
		height: 200px;
		line-height: 200px;
		background-image: url("banner5.png");
		background-size: cover;
		background-repeat: no-repeat;
		margin-left: 600px;
	}

	table {
		width: 400px;
		margin-left: 500px;
		border-collapse: collapse;
		border: 5px solid #ccc;
		background-color: transparent;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		color:white;
	}

	table td {
		padding: 3px;
	}

	table tr:nth-child(even) {
		background-color: transparent;
		font-weight: bold;
	}

	table tr:nth-child(odd) {
		background-color: transparent;
		font-weight: bold;
	}

	table tr:first-child {
		font-weight: bold;
		background-color: transparent;
		color: whitesmoke;
	}

	input[type="text"],
	input[type="email"],
	input[type="password"],
	input[type="tel"],
	input[type="text"]:disabled {
		width: 100%; 
		padding: 8px 12px; 
		border: 5px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	input[type="submit"] {
		width: auto;
		background-color: #333;
		color: #fff;
		padding: 10px 20px;
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
<h1>Registration Form</h1>
</head>
<body>
<table>
	<form action="Register.php" method="post">
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" required></td>
		</tr>

		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" required></td>
		</tr>

		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" required></td>
		</tr>

		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" required></td>
		</tr>

		<tr>
			<td>Address:</td>
			<td><input type="text" name="address" required></td>
		</tr>

		<tr>
			<td>City:</td>
			<td><input type="text" name="city" required></td>
		</tr>

		<tr>
			<td>State:</td>
			<td><input type="text" name="state" required></td>
		</tr>

		<tr>
			<td>ZIP Code:</td>
			<td><input type="text" name="zipcode" required></td>
		</tr>

		<tr>
			<td>Country:</td>
			<td><input type="text" name="country" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Register"></td>
		</tr>
	</form>
	
	<form action="view.php" method="post">
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="View page"></td>
		</tr>
	</form>
</table>

</body>
</html>

<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$country = $_POST['country'];

	$host="localhost";
	$user="root";
	$password="";
	$database="test";

	$conn = mysqli_connect($host, $user, $password, $database);
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "CREATE TABLE IF NOT EXISTS users (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(30) NOT NULL,
		email VARCHAR(50) NOT NULL,
		username VARCHAR(30) NOT NULL,
		password VARCHAR(50) NOT NULL,
		address VARCHAR(50) NOT NULL,
		city VARCHAR(50) NOT NULL,
		state VARCHAR(50) NOT NULL,
		zipcode INT(32) NOT NULL,
		country VARCHAR(50) NOT NULL
		)";
	if (mysqli_query($conn, $sql)) {
		echo "Table created successfully. ";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}

	$sql = "INSERT INTO users (name, email, username, password, address, city, state, zipcode, country) VALUES ('$name', '$email', '$username', '$password', '$address' , '$city' , '$state' , '$zipcode', '$country')";
	if (mysqli_query($conn, $sql)) {
		header("Location: login.php");
		} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>