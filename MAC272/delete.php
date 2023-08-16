<!DOCTYPE html>
<html>
<head>
	<title>JnR Website</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-image:url(background2.PNG);
		}

		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		h1 {
			text-align: center;
			color: #333;
		}

		a {
			text-decoration: none;
			padding: 8px 12px;
			background-color: #3498db;
			color: #fff;
			border-radius: 5px;
		}

		a:hover {
			background-color: #2980b9;
		}

		.confirmation {
			margin-top: 20px;
			text-align: center;
		}

		.error {
			color: red;
			text-align: center;
		}

		form {
			margin-top: 20px;
			text-align: center;
		}

		input[type="submit"] {
			padding: 8px 20px;
			background-color: #2ecc71;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #27ae60;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>JnR Electronics</h1>

		<?php
			$host = "localhost";
			$user = "root";
			$password = "";
			$database = "test";

			$conn = mysqli_connect($host, $user, $password, $database);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			if (isset($_GET["id"])) {
				$id = $_GET["id"];

				if (isset($_GET["confirm"])) {
					$sql = "DELETE FROM users WHERE id=$id";
					if (mysqli_query($conn, $sql)) {
						echo "<div class='confirmation'>Record deleted</div>";
					} else {
						echo "<div class='error'>Error: " . mysqli_error($conn) . "</div>";
					}
				} else {
					echo "<div class='confirmation'>Are you sure you want to delete this record?</div>";
					echo "<div class='confirmation'><a href='?id=$id&confirm=true'>Yes, delete the ID</a></div>";
				}
			} else {
				echo "<div class='error'>Invalid request</div>";
			}

			mysqli_close($conn);
		?>

		<form action="Register.php" method="post">
			<input type="submit" value="Register" name="Register page" />
		</form>
	</div>
</body>
</html>