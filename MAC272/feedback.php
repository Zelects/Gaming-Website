<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$feedback = $_POST['feedback'];

	$host="localhost";
	$user="root";
	$password="";
	$database="test";

	$conn=  mysqli_connect($host, $user, $password, $database);
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "CREATE TABLE IF NOT EXISTS users3 (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(30) NOT NULL,
		email VARCHAR(50) NOT NULL,
		feedback VARCHAR(300) NOT NULL
	)";
	if (mysqli_query($conn, $sql)) {
		echo "sent feedback!!!";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}

	$sql = "INSERT INTO users3 (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
	if (mysqli_query($conn, $sql)) {
		header("Location: feedback_sent.php");;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer Feedback</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 20px;
		}

		h1 {
			text-align: center;
			margin-bottom: 30px;
		}

		form {
			max-width: 500px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			border: 3px solid #ccc;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		}

		table {
			width: 100%;
		}

		td {
			padding: 10px;
		}

		input[type="text"],
		input[type="email"],
		textarea {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			resize: vertical;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}
		.navbar {
			background-image: url(logo6.jpg);
  background-size: 100% 100%;
  background-repeat: no-repeat;
  padding: 15px;
}

.nav-list {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
}

.nav-item {
  margin-right: 10px;
}

.nav-item a {
  color: #fff;
  text-decoration: none;
  padding: 5px;
}

.nav-item a:hover {
  background-color: red;
}
.logo {
  position: relative;
  background-image: url("logo.PNG");
  background-size: cover;
  background-position: center;
  padding: 20px;
  text-align: center;
  color: #fff;
}

.logo-title {
  font-size: 36px;
  margin-top: 10px;
}

.logo img {
  width: 150px; 
  height: auto;
  margin-right: 10px; 
}
footer {
    padding: 5px;
    background-color: grey;
    text-align: center;
    font-size: 12px;
  }
	</style>
</head>
<div class="logo" style="text-align: center;">
    <img src="logo2.png" alt="JnS Logo" style="margin-left: 41px; width: 190px; height: 190px;">
    
</div>

    <nav class="navbar">
        <ul class="nav-list">
            <li class="nav-item"><a href="login.php">Login</a></li>
            <li class="nav-item"><a href="register.php">Register</a></li>
            <li class="nav-item"><a href="index.php">Home</a></li>
            <li class="nav-item"><a href="wishlist.php">Wishlist</a></li>
            <li class="nav-item"><a href="cart.php">Cart</a></li>
			<li class="nav-item"><a href="view_orders.php">Orders</a></li>
            <li class="nav-item"><a href="feedback.php">Feedback</a></li>
            
        </ul>
    </nav>

	
<body>
	<h1>Customer Feedback</h1>
	<div>
		<form action="feedback.php" method="post">
			<table>
				<tr>
					<td>Your Name:</td>
					<td><input type="text" name="name" required></td>
				</tr>
				<tr>
					<td>Your Email:</td>
					<td><input type="email" name="email" required></td>
				</tr>
				<tr>
					<td>Your Feedback:</td>
					<td><textarea name="feedback" rows="6" cols="50" required></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Send Feedback"></td>
				</tr>
			</table>
		</form>
	</div>
	<footer>
    <p>&copy; 2023 JnR Electronics. All rights reserved.</p>
  </footer>
</body>
</html>