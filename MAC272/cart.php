<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style1.css">
  <meta charset="UTF-8">
  <title>JnR - Cart</title>
  <style>
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

  


  .main {
    margin: 20px;
  }
  
  .item-category {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .item-container {
    display: flex;
    flex-wrap: wrap;
  }
  
  .item-card {
    width:200px;
    padding: 10px;
    margin: 10px;
    border: 1px solid #ddd;
    background-color: #f9f9f9;
    border-radius: 4px;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
  }
  
  .item-image {
    text-align: center;
  }
  
  .item-thumbnail {
    width: 150px;
    height: 150px;
  }
  
  .item-info {
    text-align: center;
  }
  
  .item-name {
    font-size: 16px;
    margin-bottom: 5px;
  }
  
  .item-price {
    font-size: 18px;
    color: #007bff;
  }
  
  .item-btn {
    display: block;
    width: 85%;
    margin-top: 10px;
    padding: 8px 16px;
    font-size: 14px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .item-btn:hover {
    background-color: #0056b3;
   
  }
  footer {
    padding: 5px;
    background-color: grey;
    text-align: center;
    font-size: 12px;
  }
  .order-btn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  padding: 10px 20px;
  font-size: 14px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.order-btn:hover {
  background-color: #0056b3;
}
</style>
</head>

<body>
<div class="logo" style="text-align: center;">
    <img src="logo2.png" alt="JnS Logo" style="margin-left: 560px; width: 190px; height: 190px;">
    
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

  <section class="main">
    <h2 class="section-title">Shopping Cart</h2>

    <?php
    session_start();


    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
    }

    $items = [
      'asus_3060ti' => [
        'image' => 'asus_3060ti.jpg',
        'name' => 'ASUS NVIDIA GeForce RTX 3060 Ti',
        'price' => 599.99
      ],

      'lg_tv' => [
        'image' => 'lg_tv.jpg',
        'name' => 'LG OLED48C1PUB 48" Class (48.2" Diag.) 4K Ultra HD Smart OLED TV',
        'price' => 1,499.99
      ],

      'ryzen_5600x' => [
        'image' => 'ryzen_5600x.jpg',
        'name' => 'AMD Ryzen 5 5600X Vermeer 3.7GHz 6-Core',
        'price' => 299.99
      ],

      'intel_12700k' => [
        'image' => 'intel_12700k.jpg',
        'name' => 'Intel Core i7-12700K Alder Lake 3.6GHz 12-Core',
        'price' => 449.99
      ],

      'corsair_32gb' => [
        'image' => 'corsair_32gb.jpg',
        'name' => 'Corsair Vengeance RGB RT 32GB (2 x 16GB) DDR4-3600',
        'price' => 169.99
      ],

      'evga_3080ti' => [
        'image' => 'evga_3080ti.jpg',
        'name' => 'EVGA NVIDIA GeForce RTX 3080 Ti',
        'price' => 1399.99
      ],

      'asus_3060ti1' => [
        'image' => 'asus_3060ti1.jpg',
        'name' => 'ASUS NVIDIA GeForce RTX 3060 Ti',
        'price' => 799.99
      ],

      'asus_3070ti' => [
        'image' => 'asus_3070ti.jpg',
        'name' => 'ASUS NVIDIA GeForce RTX 3070 Ti',
        'price' => 799.99
      ],

      'msi_3080' => [
        'image' => 'msi_3080.jpg',
        'name' => 'MSI NVIDIA GeForce RTX 3080',
        'price' => 2199.99
      ],
      'rtx_30603x' => [
        'image' => 'rtx_30603x.jpg',
        'name' => 'RTX 3060 24GB 3X',
        'price' => 1199.99
      ],
      'rtx_4090' => [
        'image' => 'rtx_4090.webp',
        'name' => 'MSI - NVIDIA GeForce RTX 4090 Ti VENTUS3X 8G OC LHR',
        'price' => 2899.99
      ],
      'GTX1660' => [
        'image' => 'GTX1660.jpg',
        'name' => 'MSI - NVIDIA GeForce RTX 3060 Ti VENTUS3X 8G ',
        'price' => 399.99
      ],
      'rtx4090' => [
        'image' => 'rtx4090.jpg',
        'name' => 'NVIDIA GeForce RTX 12GB 4090',
        'price' => 899.99
      ],
      'geforce3050' => [
        'image' => 'geforce3050.jpg',
        'name' => 'NVIDIA GeForce 3050',
        'price' => 519.99
      ],

      'evga_3090ti' => [
        'image' => 'evga_3090ti.jpg',
        'name' => 'EVGA NVIDIA GeForce RTX 3090 Ti',
        'price' => 449.99
      ],

      'AMD' => [
        'image' => 'AMD.jpg',
        'name' => 'AMD Ryzen 7900x 12 - Core 24-Thread',
        'price' => 499.99
      ],

      'RYZEN' => [
        'image' => 'RYZEN.jpg',
        'name' => 'AMD Ryzen 4600G 6-Core 12-Thread',
        'price' => 159.99
      ],

      'IC' => [
        'image' => 'IC.jpg',
        'name' => 'Intel Core i9 11900K 8-Core 5.3 GHz',
        'price' => 329.99
      ],
      'IC1' => [
        'image' => 'IC1.jpg',
        'name' => 'Intel Core i9 10900l 10-Core 5.3 GHz',
        'price' => 499.99
      ],
      'i9' => [
        'image' => 'i9.jpg',
        'name' => 'Intel Core i9(12th Gen) 12900KS 16 - Core 2.50 GHz',
        'price' => 499.99
      ],
      'Gskill' => [
        'image' => 'Gskill.jpg',
        'name' => 'Gskill trident 32GB (2 x 16GB) SDRAM DDR5 6400',
        'price' => 499.99
      ],
      'olo' => [
        'image' => 'olo.jpg',
        'name' => 'OLOy DDR4 RAM 16GB (2x8GB) 3200 MHz CL16',
        'price' => 499.99
      ],
      'cos' => [
        'image' => 'cos.jpg',
        'name' => 'Corsair Vengeance RGB PRO 16GB (2 x 8 GB) DDR4 3200MHz',
        'price' => 499.99
      ],
      'tem' => [
        'image' => 'tem.jpg',
        'name' => 'TEAMGROUP T-Force Vulcan Z DDR4 32GB 3200MHz CL 16',
        'price' => 499.99
      ],
      'king' => [
        'image' => 'king.jpg',
        'name' => 'Kingston FURY Beast 32GB 3200MT DDR4 CL16 Intel XMP',
        'price' => 499.99
      ],

      'intel_12700k' => [
        'image' => 'intel_12700k.jpg',
        'name' => 'Intel Core i7-12700K Alder Lake 3.6GHz 12-Core',
        'price' => 319.99
      ],

      'ryzen_5600x' => [
        'image' => 'ryzen_5600x.jpg',
        'name' => 'AMD Ryzen 5 5600X Vermeer 3.7GHz 6-Core',
        'price' => 299.99
      ],

      'ryzen_5800x' => [
        'image' => 'ryzen_5800x.jpg',
        'name' => 'AMD Ryzen 7 5800X Vermeer 3.8GHz 8-Core',
        'price' => 449.99
      ],

      'intel_12600k' => [
        'image' => 'intel_12600k.jpg',
        'name' => 'Intel Core i5-12600K Alder Lake 3.7GHz 10-Core',
        'price' => 319.99
      ],

      'ryzen_5700x' => [
        'image' => 'ryzen_5700x.jpg',
        'name' => 'AMD Ryzen 7 5700X Vermeer 3.4GHz 8-Core',
        'price' => 299.99
      ],

      'gskill_32gb' => [
        'image' => 'gskill_32gb.jpg',
        'name' => 'G.Skill Ripjaws V 32GB (2 x 16GB) DDR4-3200',
        'price' => 211.99
      ],

      'corsair_32gb' => [
        'image' => 'corsair_32gb.jpg',
        'name' => 'Corsair Vengeance RGB RT 32GB (2 x 16GB) DDR4-3600',
        'price' => 169.99
      ],

      'gskill_16gb' => [
        'image' => 'gskill_16gb.jpg',
        'name' => 'G.Skill Ripjaws V 16GB (2 x 8GB) DDR4-3200',
        'price' => 114.99
      ],

      'corsair_32gbpro' => [
        'image' => 'corsair_32gbpro.jpg',
        'name' => 'Corsair Vengeance RGB Pro 32GB (2 x 16GB) DDR4-3200',
        'price' => 179.99
      ],

      'tg_16gb' => [
        'image' => 'tg_16gb.jpg',
        'name' => 'TeamGroup T-FORCE VULCAN Z 16GB (2 x 8GB) DDR4-3200',
        'price' => 89.99
      ],

      'lg_monitor' => [
        'image' => 'lg_monitor.jpg',
        'name' => 'LG 27MP400-B.AUS 27" Full HD (1920 x 1080) 75Hz LED Monitor',
        'price' => 179.99
      ],

      'logitechmkbwireless' => [
        'image' => 'logitechmkbwireless.jpg',
        'name' => 'Logitech MK320 Series Wireless Desktop Keyboard and Mouse',
        'price' => 29.99
      ],

      'steel_keyboard' => [
        'image' => 'steel_keyboard.jpg',
        'name' => 'SteelSeries Apex 5 RGB Gaming Keyboard',
        'price' => 99.99
      ],

      'logi_mouse' => [
        'image' => 'logi_mouse.jpg',
        'name' => 'Logitech G G502 HERO Gaming Mouse',
        'price' => 99.99
      ],

      'lg_tv' => [
        'image' => 'lg_tv.jpg',
        'name' => 'LG OLED48C1PUB 48" Class (48.2" Diag.) 4K Ultra HD Smart OLED TV',
        'price' => 1499.99
      ],
      'RD' => [
        'image' => 'RD.jpg',
        'name' => 'Redragon Gaming Mouse 8000 DPI - 9 Programmable Macro Buttons',
        'price' => 29.99
      ],
      'key' => [
        'image' => 'key.jpg',
        'name' => 'Redragon H556 RGB LED Blacklit Wired Mechanical Gaming Keyboard',
        'price' => 79.99
      ],
      'LG' => [
        'image' => 'LG.jpg',
        'name' => 'LG UltraGear QHD 34-Inch Curved Gaming Monitor HDR 10 Compatible',
        'price' => 399.99
      ],
      'odd' => [
        'image' => 'odd.jpg',
        'name' => 'SAMSUNG 49" Odyssey Neo G9 G95NA Gaming Monitor 4K ULTRA UHD',
        'price' => 1599.99
      ],
      'asus' => [
        'image' => 'asus.jpg',
        'name' => 'ASUS ROG Strix 32" HDMI 2.1 DSC Gaming Monitor 4K UHD (3840 x2160)',
        'price' => 799.99
      ],
    ];

    if (isset($_GET['item'])) {
      $item = $_GET['item'];

      if (isset($items[$item])) {

        if (!isset($_SESSION['cart'][$item])) {
          $itemDetails = $items[$item];
          $image = $itemDetails['image'];
          $name = $itemDetails['name'];
          $price = $itemDetails['price'];
          $amount = 1;

          $total = $price * $amount;

          $_SESSION['cart'][$item] = [
            'image' => $image,
            'name' => $name,
            'price' => $price,
            'amount' => $amount,
            'total' => $total
          ];
        } else {

          $_SESSION['cart'][$item]['amount']++;
          $_SESSION['cart'][$item]['total'] = $_SESSION['cart'][$item]['price'] * $_SESSION['cart'][$item]['amount'];
        }
      } else {
        echo '<p class="error">Item not found.</p>';
      }
    } else {
      echo 'Proceed To Checkout';
    }

    if (isset($_GET['delete'])) {
      $deleteItem = $_GET['delete'];
      if (isset($_SESSION['cart'][$deleteItem])) {
        unset($_SESSION['cart'][$deleteItem]);
      }
    }

    $totalPrice = 0;
    if (!empty($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $item => $itemDetails) {
        echo '<div class="cart-item">';
        echo '<img src="' . $itemDetails['image'] . '" class="cart-item-thumbnail" alt="Item Image">';
        echo '<div class="cart-item-info">';
        echo '<h3 class="cart-item-name">' . $itemDetails['name'] . '</h3>';
        echo '<p class="cart-item-price">$' . $itemDetails['price'] . '</p>';
        echo '<p class="cart-item-amount">Amount: ' . $itemDetails['amount'] . '</p>';
        echo '<p class="cart-item-total">Total: $' . $itemDetails['total'] . '</p>';
        echo '<a href="cart.php?delete=' . $item . '" class="delete-btn">Delete</a>';
        echo '</div>';
        echo '</div>';

        $totalPrice += $itemDetails['total'];
      }
    }

    if (!empty($_SESSION['cart'])) {
      echo '<h3 class="total-price">Total Price: $' . $totalPrice . '</h3>';
    }
    ?>
 <a href="orders.php" class="order-btn">Checkout</a>
  </section>
 
  <footer>
 
    <p>&copy; 2023 JnR Electronics. All rights reserved.</p>
  </footer>

</body>

</html>