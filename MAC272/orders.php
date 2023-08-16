<!DOCTYPE html>
<html>
<head>
<style>
	body {
		font-family: Arial, sans-serif;
		background-color: #f1f1f1;
		margin: 0;
		padding: 20px;
	}

	h1 {
		text-align: center;
		color: #333;
	}

	table {
		width: 500px;
		margin: 20px auto;
		border-collapse: collapse;
		border: 5px solid #ccc;
		background-color: #fff;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	}

	table td {
		padding: 10px;
	}

	table tr:nth-child(even) {
		background-color: grey;
	}

	table tr:nth-child(odd) {
		background-color: grey;
	}

	table tr:first-child {
		font-weight: bold;
		background-color: grey;
		color: black;
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

	.order-placed {
		margin-top: 20px;
		text-align: center;
		font-weight: bold;
		color: #333;
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



.navbar {
    background-image: url(logo6.jpg);
  background-size: 100% 100%;
  background-repeat: no-repeat;
  padding: 15px;
  opacity: 0.9;
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
  footer {
    padding: 5px;
    background-color: grey;
    text-align: center;
    font-size: 12px;
  }

</style>
</head>
<body>

<div class="logo" style="text-align: center;">
    <img src="logo2.png" alt="JnS Logo" style="margin-left: 40px; width: 190px; height: 190px;">
    
</div>

  <nav class="navbar">
    <ul class="nav-list">
      <li class="nav-item"><a href="login.php">Login</a></li>
      <li class="nav-item"><a href="register.php">Register</a></li>
      <li class="nav-item"><a href="index.php">Home</a></li>
      <li class="nav-item"><a href="wishlist.php">Wishlist</a></li>
      <li class="nav-item"><a href="orders.php">Orders</a></li>
      <li class="nav-item"><a href="cart.php">Cart</a></li>
	  <li class="nav-item"><a href="feedback.php">Feedback</a></li>
    </ul>
  </nav>
  <h1>Order Form</h1>
<table>
	<form action="orders.php" method="post">
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td>
		</tr>

		<tr>
			<td>Address:</td>
			<td><input type="text" name="address" value="<?php echo $row['address']; ?>"></td>
		</tr>


        <tr>
		<tr>
  <td>Phone Number:</td>
  <td><input type="tel" name="phone_number" id="phone_number" required></td>
</tr>

<tr>
  <td>Email:</td>
  <td><input type="email" name="email" required></td>
</tr>
<tr>
  <td>Credit Card Number:</td>
  <td>
    <input type="text" name="credit_card" id="credit_card" required>
  </td>
</tr>

		<tr>
			<td>Expiration Date:</td>
			<td><input type="text" name="expiration_date" required></td>
		</tr>

		<tr>
  <td>CVV:</td>
  <td><input type="text" name="cvv" maxlength="4" required></td>
</tr>

        <tr>
  			<td>Total Price:</td>
  			<td>
    			<?php
    			session_start();
    			$totalPrice = 0;

    			if (!empty($_SESSION['cart'])) {
      				foreach ($_SESSION['cart'] as $item => $itemDetails) {
        				$totalPrice += $itemDetails['total'];
      				}
    			}

    			echo '<input type="text" name="total_price" value="' . $totalPrice . '" readonly required>';
    			?>
  			</td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Place Order"></td>
		</tr>
	</form>
</table>
<footer>
    <p>&copy; 2023 JnR Electronics. All rights reserved.</p>
  </footer>

</body>
</html>

<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$credit_card = $_POST['credit_card'];
$expiration_date = $_POST['expiration_date'];
$cvv = $_POST['cvv'];
$total_price = $_POST['total_price'];

$host="localhost";
	$user="root";
	$password="";
	$database="test";

	$conn = mysqli_connect($host, $user, $password, $database);
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

$sql = "CREATE TABLE IF NOT EXISTS orders (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(30) NOT NULL,
	address VARCHAR(50) NOT NULL,
	phone_number VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	credit_card VARCHAR(50) NOT NULL,
	expiration_date VARCHAR(50) NOT NULL,
	cvv VARCHAR(50) NOT NULL,
	total_price VARCHAR(50) NOT NULL
	)";

if (mysqli_query($conn, $sql)) {
	echo "Orders placed ";
} else {
	echo "Error creating table: " . mysqli_error($conn);
}
$sql = "INSERT INTO orders (username, address, phone_number, email, credit_card, expiration_date, cvv, total_price)
          VALUES ('$username', '$address', '$phone_number', '$email', '$credit_card', '$expiration_date', '$cvv', '$total_price')";
if (mysqli_query($conn, $sql)) {
	echo "Please check your orders";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>