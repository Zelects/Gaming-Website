<!DOCTYPE html>
<html>
<head>
<style>
	.container {
		max-width: 600px;
		margin: 0 auto;
		padding: 20px;
		font-family: Arial, sans-serif;
	}

	.order-box {
		border: 2px solid #333;
		border-radius: 10px;
		padding: 20px;
		margin-bottom: 20px;
	}

	h1 {
		text-align: center;
		color: #333;
		margin-bottom: 20px;
	}

	.row {
		margin-bottom: 10px;
	}

	.row label {
		font-weight: bold;
		display: inline-block;
		width: 120px;
	}

	.row span {
		display: inline-block;
		margin-left: 10px;
	}

	hr {
		border: none;
		border-top: 1px dashed #ccc;
		margin: 20px 0;
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

<div class="container">
	<h1>Order Receipt</h1>

	<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "test";

	$conn = mysqli_connect($host, $user, $password, $database);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM orders";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<div class="order-box">';
			
			echo '<div class="row">';
			echo '<label>Order ID:</label><span>' . $row['id'] . '</span>';
			echo '</div>';

			echo '<div class="row">';
			echo '<label>Username:</label><span>' . $row['username'] . '</span>';
			echo '</div>';

			echo '<div class="row">';
			echo '<label>Address:</label><span>' . $row['address'] . '</span>';
			echo '</div>';

			echo '<div class="row">';
			echo '<label>Phone Number:</label><span>' . $row['phone_number'] . '</span>';
			echo '</div>';

			echo '<div class="row">';
			echo '<label>Email:</label><span>' . $row['email'] . '</span>';
			echo '</div>';

			echo '<div class="row">';
			echo '<label>Credit Card:</label><span>' . maskCreditCard($row['credit_card']) . '</span>';
			echo '</div>';

			echo '<div class="row">';
			echo '<label>Expiration Date:</label><span>' . maskExpirationDate($row['expiration_date']) . '</span>';
			echo '</div>';

			echo '<div class="row">';
			echo '<label>CVV:</label><span>' . maskCVV($row['cvv']) . '</span>';
			echo '</div>';

			echo '<div class="row">';
			echo '<label>Total Price:</label><span>' . $row['total_price'] . '</span>';
			echo '</div>';

			echo '</div>'; 

			echo '<hr>';
		}
	} else {
		echo '<div class="row">No orders found.</div>';
	}

	mysqli_close($conn);

	function maskCreditCard($creditCard) {
		 $masked = str_repeat('*', strlen($creditCard) - 4) . substr($creditCard, -4);
		 return $masked;
	}

	function maskExpirationDate($expirationDate) {
		 $masked = '**/' . substr($expirationDate, -2);
		 return $masked;
	}

	function maskCVV($cvv) {
		 $masked = str_repeat('*', strlen($cvv));
		 return $masked;
	}
	?>
</div>
<footer>
    <p>&copy; 2023 JnR Electronics. All rights reserved.</p>
  </footer>
</body>
</html>