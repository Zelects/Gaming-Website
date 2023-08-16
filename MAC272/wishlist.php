<?php

session_start();

if (!isset($_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = array(); 
}



if (isset($_GET['item'])) {
    
    $item = $_GET['item'];
    $itemDetails = getItemDetails($item);

    
    $_SESSION['wishlist'][] = $itemDetails;
}


function getItemDetails($itemName) {
    
    $itemDetails = array(
        'asus_3060ti' => array(
            'name' => 'ASUS NVIDIA GeForce RTX 3060 Ti',
            'price' => '$599.99',
            'image' => 'asus_3060ti.jpg'
        ),
        'lg_tv' => array(
            'name' => 'LG OLED48C1PUB 48" Class (48.2" Diag.) 4K Ultra HD Smart OLED TV',
            'price' => '$1,499.99',
            'image' => 'lg_tv.jpg'
        ),
       
            'asus_3060ti' => array(
              'image' => 'asus_3060ti.jpg',
              'name' => 'ASUS NVIDIA GeForce RTX 3060 Ti',
              'price' => 599.99
            ),
      
            'lg_tv' => array(
              'image' => 'lg_tv.jpg',
              'name' => 'LG OLED48C1PUB 48" Class (48.2" Diag.) 4K Ultra HD Smart OLED TV',
              'price' => 1499.99
            ),
      
            'ryzen_5600x' => array(
              'image' => 'ryzen_5600x.jpg',
              'name' => 'AMD Ryzen 5 5600X Vermeer 3.7GHz 6-Core',
              'price' => 299.99
            ),
      
            'intel_12700k' => array(
              'image' => 'intel_12700k.jpg',
              'name' => 'Intel Core i7-12700K Alder Lake 3.6GHz 12-Core',
              'price' => 449.99
            ),
      
            'corsair_32gb' => array(
              'image' => 'corsair_32gb.jpg',
              'name' => 'Corsair Vengeance RGB RT 32GB (2 x 16GB) DDR4-3600',
              'price' => 169.99
            ),
      
            'evga_3080ti' => array(
              'image' => 'evga_3080ti.jpg',
              'name' => 'EVGA NVIDIA GeForce RTX 3080 Ti',
              'price' => 1399.99
            ),
      
            'asus_3060ti1' => array(
              'image' => 'asus_3060ti1.jpg',
              'name' => 'ASUS NVIDIA GeForce RTX 3060 Ti',
              'price' => 799.99
            ),
      
            'asus_3070ti' => array(
              'image' => 'asus_3070ti.jpg',
              'name' => 'ASUS NVIDIA GeForce RTX 3070 Ti',
              'price' => 799.99
            ),
      
            'msi_3080' => array(
              'image' => 'msi_3080.jpg',
              'name' => 'MSI NVIDIA GeForce RTX 3080',
              'price' => 2199.99
            ),

            'rtx_30603x' => array(
              'image' => 'rtx_30603x.jpg',
              'name' => 'RTX 3060 24GB 3X',
              'price' => 1199.99
            ),
            'rtx_4090' => array(
              'image' => 'rtx_4090.webp',
              'name' => 'MSI - NVIDIA GeForce RTX 4090 Ti VENTUS3X 8G OC LHR',
              'price' => 2899.99
            ),
            'GTX1660' => array(
              'image' => 'GTX1660.jpg',
              'name' => 'MMSI - NVIDIA GeForce RTX 3060 Ti VENTUS3X 8G ',
              'price' => 399.99
            ),
            'rtx4090' => array(
              'image' => 'rtx4090.jpg',
              'name' => 'NVIDIA GeForce RTX 12GB 4090',
              'price' => 899.99
    ),
            'geforce3050' => array(
              'image' => 'geforce3050.jpg',
              'name' => 'NVIDIA GeForce 3050',
              'price' => 519.99
            ),
      
            'evga_3090ti' => array(
              'image' => 'evga_3090ti.jpg',
              'name' => 'EVGA NVIDIA GeForce RTX 3090 Ti',
              'price' => 449.99
            ),
            'AMD' => array(
              'image' => 'AMD.jpg',
              'name' => 'AMD Ryzen 7900x 12 - Core 24-Thread',
              'price' => 499.99
            ),
      
            'RYZEN' => array(
              'image' => 'RYZEN.jpg',
              'name' => 'AMD Ryzen 4600G 6-Core 12-Thread',
              'price' => 159.99
            ),
      
            'IC' => array(
              'image' => 'IC.jpg',
              'name' => 'Intel Core i9 11900K 8-Core 5.3 GHz',
              'price' => 329.99
            ),
            'IC1' => array(
              'image' => 'IC1.jpg',
              'name' => 'Intel Core i9 10900l 10-Core 5.3 GHz',
              'price' => 499.99
            ),
            'i9' => array(
              'image' => 'i9.jpg',
              'name' => 'Intel Core i9(12th Gen) 12900KS 16 - Core 2.50 GHz',
              'price' => 499.99
            ),
            'intel_12700k' => array(
              'image' => 'intel_12700k.jpg',
              'name' => 'Intel Core i7-12700K Alder Lake 3.6GHz 12-Core',
              'price' => 319.99
            ),
            'Gskill' => array(
              'image' => 'Gskill.jpg',
              'name' => 'Gskill trident 32GB (2 x 16GB) SDRAM DDR5 6400',
              'price' => 499.99
            ),
            'olo' => array(
              'image' => 'olo.jpg',
              'name' => 'OLOy DDR4 RAM 16GB (2x8GB) 3200 MHz CL16',
              'price' => 499.99
            ),
            'cos' => array(
              'image' => 'cos.jpg',
              'name' => 'Corsair Vengeance RGB PRO 16GB (2 x 8 GB) DDR4 3200MHz',
              'price' => 499.99
            ),
            'tem' => array(
              'image' => 'tem.jpg',
              'name' => 'TEAMGROUP T-Force Vulcan Z DDR4 32GB 3200MHz CL 16',
              'price' => 499.99
            ),
            'king' => array(
              'image' => 'king.jpg',
              'name' => 'Kingston FURY Beast 32GB 3200MT DDR4 CL16 Intel XMP',
              'price' => 499.99
            ),
            'ryzen_5600x' => array(
              'image' => 'ryzen_5600x.jpg',
              'name' => 'AMD Ryzen 5 5600X Vermeer 3.7GHz 6-Core',
              'price' => 299.99
            ),
      
            'ryzen_5800x' => array(
              'image' => 'ryzen_5800x.jpg',
              'name' => 'AMD Ryzen 7 5800X Vermeer 3.8GHz 8-Core',
              'price' => 449.99
            ),
      
            'intel_12600k' => array(
              'image' => 'intel_12600k.jpg',
              'name' => 'Intel Core i5-12600K Alder Lake 3.7GHz 10-Core',
              'price' => 319.99
            ),
      
            'ryzen_5700x' => array(
              'image' => 'ryzen_5700x.jpg',
              'name' => 'AMD Ryzen 7 5700X Vermeer 3.4GHz 8-Core',
              'price' => 299.99
            ),
      
            'gskill_32gb' => array(
              'image' => 'gskill_32gb.jpg',
              'name' => 'G.Skill Ripjaws V 32GB (2 x 16GB) DDR4-3200',
              'price' => 211.99
            ),
      
            'corsair_32gb' => array(
              'image' => 'corsair_32gb.jpg',
              'name' => 'Corsair Vengeance RGB RT 32GB (2 x 16GB) DDR4-3600',
              'price' => 169.99
            ),
      
            'gskill_16gb' => array(
              'image' => 'gskill_16gb.jpg',
              'name' => 'G.Skill Ripjaws V 16GB (2 x 8GB) DDR4-3200',
              'price' => 114.99
            ),
      
            'corsair_32gbpro' => array(
              'image' => 'corsair_32gbpro.jpg',
              'name' => 'Corsair Vengeance RGB Pro 32GB (2 x 16GB) DDR4-3200',
              'price' => 179.99
            ),
      
            'tg_16gb' => array(
              'image' => 'tg_16gb.jpg',
              'name' => 'TeamGroup T-FORCE VULCAN Z 16GB (2 x 8GB) DDR4-3200',
              'price' => 89.99
            ),
      
            'lg_monitor' => array(
              'image' => 'lg_monitor.jpg',
              'name' => 'LG 27MP400-B.AUS 27" Full HD (1920 x 1080) 75Hz LED Monitor',
              'price' => 179.99
            ),
      
            'logitechmkbwireless' => array(
              'image' => 'logitechmkbwireless.jpg',
              'name' => 'Logitech MK320 Series Wireless Desktop Keyboard and Mouse',
              'price' => 29.99
            ),
      
            'steel_keyboard' => array(
              'image' => 'steel_keyboard.jpg',
              'name' => 'SteelSeries Apex 5 RGB Gaming Keyboard',
              'price' => 99.99
            ),
      
            'logi_mouse' => array(
              'image' => 'logi_mouse.jpg',
              'name' => 'Logitech G G502 HERO Gaming Mouse',
              'price' => 99.99
            ),
      
            'lg_tv' => array(
              'image' => 'lg_tv.jpg',
              'name' => 'LG OLED48C1PUB 48" Class (48.2" Diag.) 4K Ultra HD Smart OLED TV',
              'price' => 1499.99
            ),
            'RD' => array(
              'image' => 'RD.jpg',
              'name' => 'Redragon Gaming Mouse 8000 DPI - 9 Programmable Macro Buttons',
              'price' => 29.99
            ),
            'key' => array(
              'image' => 'key.jpg',
              'name' => 'Redragon H556 RGB LED Blacklit Wired Mechanical Gaming Keyboard',
              'price' => 79.99
            ),
            'LG' => array(
              'image' => 'LG.jpg',
              'name' => 'LG UltraGear QHD 34-Inch Curved Gaming Monitor HDR 10 Compatible',
              'price' => 399.99
            ),
            'odd' => array(
              'image' => 'odd.jpg',
              'name' => 'SAMSUNG 49" Odyssey Neo G9 G95NA Gaming Monitor 4K ULTRA UHD',
              'price' => 1599.99
            ),
            'asus' => array(
              'image' => 'asus.jpg',
              'name' => 'ASUS ROG Strix 32" HDMI 2.1 DSC Gaming Monitor 4K UHD (3840 x2160)',
              'price' => 799.99
            ),
        );
        
    

    
    if (array_key_exists($itemName, $itemDetails)) {
        return $itemDetails[$itemName];
    }

    return null; 

    if (isset($_POST['item_key'])) {
        $itemKey = $_POST['item_key'];
    
        if (array_key_exists($itemKey, $_SESSION['wishlist'])) {
            unset($_SESSION['wishlist'][$itemKey]);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>JnS - Wishlist</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
  }
  
  h1 {
    text-align: center;
    color: #333;
  }
  
  .wishlist-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  .wishlist-item {
    width: 300px;
    margin: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
  }
  
  .wishlist-item img {
    max-width: 100%;
    height: auto;
  }
  
  .item-name {
    margin-top: 10px;
    font-size: 18px;
    color: #333;
  }
  
  .item-price {
    display: block;
    font-size: 16px;
    color: #888;
    margin-top: 5px;
  }
  .remove-button {
    background-color: #3399ff;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.remove-button:hover {
    background-color: #0088cc;
}

.remove-button:active {
    background-color: #99ccff;
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

    <h1>Wishlist</h1>
    <div class="wishlist-container">
        <?php
        foreach ($_SESSION['wishlist'] as $key => $item) {
            echo '<div class="wishlist-item">';
            echo '<img src="' . $item['image'] . '" alt="picture of item">';
            echo '<h2 class="item-name">' . $item['name'] . '</h2>';
            echo '<span class="item-price">' . $item['price'] . '</span>';
            echo '<form method="post" action="remove_item.php">';
            echo '<input type="hidden" name="item_key" value="' . $key . '">';
            echo '<button type="submit" class="remove-button">Remove</button>';
            echo '</form>';
            echo '</div>';
        }
        ?>
    </div>
    <footer>
    <p>&copy; 2023 JnR Electronics. All rights reserved.</p>
  </footer>
</body>

</html>