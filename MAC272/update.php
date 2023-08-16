<html>
	<head>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-image:url(background2.PNG);
			margin: 0;
			padding: 20px;
		}

		h2 {
			text-align: center;
			color: white;
		}

		form {
			width: 300px;
			margin: 20px auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		label {
			display: inline-block;
			width: 100px;
			margin-bottom: 10px;
			color: #333;
		}

		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 8px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type="submit"] {
			width: 100%;
			background-color: blue;
			color: white;
			padding: 10px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		

		input[type="submit"]:hover {
			background-color: #0045a0;
		}

		input[type="submit"]:focus {
			outline: none;
		}
		
	</style>
</head>
<body>
	
	<?php
		$host = "localhost";
		$user = "root";
		$password = "";
		$database = "test";

		$conn = mysqli_connect($host, $user, $password, $database);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$id = $_GET["id"];
		$sql = "SELECT * FROM users WHERE id=$id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		} else {
			echo "User not found in the database.";
			exit();
		}

		if (isset($_POST['submit'])) {
			$name = $_POST["name"];
			$email = $_POST["email"];
			$username = $_POST["username"];
			$password = $_POST["password"];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$zipcode = $_POST['zipcode'];
			$country = $_POST['country'];

			$sql = "UPDATE users SET name='$name', email='$email', username='$username', password='$password' WHERE id=$id";
			if (mysqli_query($conn, $sql)) {
				echo "Updated";
			} else {
				echo "Not Updated" . mysqli_error($conn);
			}
		}

		mysqli_close($conn);
	?>

	<h2>Update</h2>

	<form method="POST">
	<table>
  <tr>
    <td><label for="name">Name:</label></td>
    <td><input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"></td>
  </tr>
  <tr>
    <td><label for="email">Email:</label></td>
    <td><input type="text" id="email" name="email" value="<?php echo $row['email']; ?>"></td>
  </tr>
  <tr>
    <td><label for="username">Username:</label></td>
    <td><input type="text" id="username" name="username" value="<?php echo $row['username']; ?>"></td>
  </tr>
  <tr>
    <td><label for="password">Password:</label></td>
    <td><input type="password" id="password" name="password" value="<?php echo $row['password']; ?>"></td>
  </tr>
  <tr>
  <tr>
			<td>Address:</td>
			<td><input type="text" name="address" value="<?php echo $row['address']; ?>"></td>
		</tr>

		<tr>
			<td>City:</td>
			<td><input type="text" name="city" value="<?php echo $row['city']; ?>"></td>
		</tr>

		<tr>
			<td>State:</td>
			<td><input type="text" name="state" value="<?php echo $row['state']; ?>"></td>
		</tr>

		<tr>
			<td>ZIP Code:</td>
			<td><input type="text" name="zipcode" value="<?php echo $row['zipcode']; ?>"></td>
		</tr>

		<tr>
			<td>Country:</td>
			<td><input type="text" name="country" value="<?php echo $row['country']; ?>"></td>
		</tr>
    <td></td>
    <td><a><input type="submit" name="submit" value="Update"></a> <a href="index.php">Home</a></td>
  </tr>
</table>
</body>

</html>