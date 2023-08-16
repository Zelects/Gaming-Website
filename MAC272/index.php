<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>JnR - Home</title>
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
    background-color: whitesmoke;
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

  body.light-mode {
      background-color: #f9f9f9;
      color: #000;
    }
    
   
    body.dark-mode {
      background-color: #333;
      color: black;
    }
    .search-container {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 20px;
}

.search-container input[type="text"] {
  padding: 10px;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  width: 300px;
}

.search-container button {
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  margin-left: 10px;
}

.search-container button:hover {
  background-color: lightblue;
}
.container {
            margin-right: 20px;
            text-align: center;
        }
        h1 {
            font-size: 32px;
            color: #333;
        }
</style>
</head>
<body>

 <?php
    
    if (isset($_GET['username'])) {
        $username = $_GET['username'];
    }
    ?>

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

    <div class="search-container">
    <input type="text" id="search-input" placeholder="Search items...">
    <button onclick="searchItems()">Search</button>
  </div>
  <body class="light-mode">
<button onclick="toggleDarkMode()">Dark Mode/Light Mode</button>

<div class="container">
        <h1>Welcome <?php echo htmlspecialchars($username); ?>!</h1>
    </div>

    <section class="main">
        <h2 class="item-category">Best Selling</h2>
        <div class="item-container">
            <div class="item-card">
                <div class="item-image">
                    <img src="asus_3060ti.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=asus_3060ti" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=asus_3060ti" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">ASUS NVIDIA GeForce RTX 3060 Ti</h2>
                    <span class="item-price">Before: <del>$699.99</del></span>
        <br>
        <span class="item-price">Now: $599.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="lg_tv.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=lg_tv" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=lg_tv" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">LG OLED48C1PUB 48" Class (48.2" Diag.) 4K Ultra HD Smart OLED TV</h2>
                    <span class="item-price">$1,499.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="ryzen_5600x.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=ryzen_5600x" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=ryzen_5600x" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">AMD Ryzen 5 5600X Vermeer 3.7GHz 6-Core</h2>
                    <span class="item-price">$299.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="intel_12700k.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=intel_12700k" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=intel_12700k" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Intel Core i7-12700K Alder Lake 3.6GHz 12-Core</h2>
                    <span class="item-price">$319.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="corsair_32gb.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=corsair_32gb" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=corsair_32gb" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Corsair Vengeance RGB RT 32GB (2 x 16GB) DDR4-3600</h2>
                    <span class="item-price">$169.99</span>
                </div>
            </div>
        </div>


        <h2 class="item-category">Graphics Cards</h2>
        <div class="item-container">
            <div class="item-card">
                <div class="item-image">
                    <img src="evga_3080ti.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=evga_3080ti" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=evga_3080ti" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">EVGA NVIDIA GeForce RTX 3080 Ti</h2>
                    <span class="item-price">$1399.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="asus_3060ti1.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=asus_3060ti1" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=asus_3060ti1" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">ASUS NVIDIA GeForce RTX 3060 Ti</h2>
                    <span class="item-price">$599.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="asus_3070ti.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=asus_3070ti" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=asus_3070ti" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">ASUS NVIDIA GeForce RTX 3070 Ti</h2>
                    <span class="item-price">Before: <del>$999.99</del></span>
        <br>
        <span class="item-price"> Now: $799.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="msi_3080.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=msi_3080" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=msi_3080" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">ASUS - NVIDIA GeForce RTX 4090 Overclock 24GB</h2>
                    <span class="item-price">$1,999.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="rtx_30603x.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=rtx30603x" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=rtx30603x" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">RTX 3060 24GB 3X</h2>
                    <span class="item-price">$1,199.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="rtx_4090.webp" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=rtx_4090" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=rtx_4090" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">MSI - NVIDIA GeForce RTX 4090 Ti VENTUS3X 8G OC LHR</h2>
                    <span class="item-price">Before: <del>$3499.99</del></span>
        <br>
        <span class="item-price">Now: $2899.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="GTX1660.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=GTX1660" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=GTX1660" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">MSI - NVIDIA GeForce RTX 3060 Ti VENTUS3X 8G </h2>
                    <span class="item-price">$399.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="rtx4090.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=rtx4090" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=rtx4090" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">NVIDIA GeForce RTX 12GB</h2>
                    <span class="item-price">$899.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="geforce3050.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=geforce3050" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=geforce3050" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">NVIDIA GeForce 3050</h2>
                    <span class="item-price">Before: <del>$719.99</del></span>
        <br>
        <span class="item-price">Now: $519.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="evga_3090ti.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=evga_3090ti" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=evga_3090ti" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">EVGA NVIDIA GeForce RTX 3090 Ti</h2>
                    <span class="item-price">$2,199.99</span>
                </div>
            </div>
        </div>


        <h2 class="item-category">Processors</h2>
        <div class="item-container">
            <div class="item-card">
                <div class="item-image">
                    <img src="intel_12700k.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=intel_12700k" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=intel_12700k" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Intel Core i7-12700K Alder Lake 3.6GHz 12-Core</h2>
                    <span class="item-price">$449.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="ryzen_5600x.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=ryzen_5600x" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=ryzen_5600x" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">AMD Ryzen 5 5600X Vermeer 3.7GHz 6-Core</h2>
                    <span class="item-price">Before: <del>$499.99</del></span>
        <br>
        <span class="item-price">Now: $299.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="ryzen_5800x.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=ryzen_5800x" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=ryzen_5800x" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">AMD Ryzen 7 5800X Vermeer 3.8GHz 8-Core</h2>
                    <span class="item-price">$449.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="intel_12600k.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=intel_12600k" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=intel_12600k" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Intel Core i5-12600K Alder Lake 3.7GHz 10-Core</h2>
                    <span class="item-price">$319.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="AMD.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=AMD" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=AMD" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">AMD Ryzen 7900x 12 - Core 24-Thread</h2>
                    <span class="item-price">$499.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="RYZEN.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=RYZEN" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=RYZEN" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">AMD Ryzen 4600G 6-Core 12-Thread</h2>
                    <span class="item-price">$154.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="IC.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=IC" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=IC" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Intel Core i9 11900K 8-Core 5.3 GHz</h2>
                    <span class="item-price">$329.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="IC1.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=IC" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=IC" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Intel Core i9 10900l 10-Core 5.3 GHz</h2>
                    <span class="item-price">$499.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="i9.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=i9" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=i9" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Intel Core i9(12th Gen) 12900KS 16 - Core 2.50 GHz</h2>
                    <span class="item-price">$499.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="ryzen_5700x.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=ryzen_5700x" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=ryzen_5700x" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">AMD Ryzen 7 5700X Vermeer 3.4GHz 8-Core</h2>
                    <span class="item-price">$299.99</span>
                </div>
            </div>
        </div>


        <h2 class="item-category">Memory</h2>
        <div class="item-container">
            <div class="item-card">
                <div class="item-image">
                    <img src="gskill_32gb.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=gskill_32gb" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=gskill_32gb" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">G.Skill Ripjaws V 32GB (2 x 16GB) DDR4-3200</h2>
                    <span class="item-price">$211.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="corsair_32gb.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=corsair_32gb" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=corsair_32gb" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Corsair Vengeance RGB RT 32GB (2 x 16GB) DDR4-3600</h2>
                    <span class="item-price">Before: <del>$269.99</del></span>
        <br>
        <span class="item-price">Now: $169.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="gskill_16gb.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=gskill_16gb" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=gskill_16gb" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">G.Skill Ripjaws V 16GB (2 x 8GB) DDR4-3200</h2>
                    <span class="item-price">$114.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="corsair_32gbpro.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=corsair_32gbpro" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=corsair_32gbpro" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Corsair Vengeance RGB Pro 32GB (2 x 16GB) DDR4-3200</h2>
                    <span class="item-price">Before: <del>$219.99</del></span>
        <br>
        <span class="item-price">Now: $179.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="Gskill.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=Gskill" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=Gskill" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Gskill trident 32GB (2 x 16GB) SDRAM DDR5 6400</h2>
                    <span class="item-price">$199.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="olo.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=olo" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=olo" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">OLOy DDR4 RAM 16GB (2x8GB) 3200 MHz CL16</h2>
                    <span class="item-price">$49.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="cos.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=cos" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=cos" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Corsair Vengeance RGB PRO 16GB (2 x 8 GB) DDR4 3200MHz</h2>
                    <span class="item-price">$79.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="tem.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=tem" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=tem" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">TEAMGROUP T-Force Vulcan Z DDR4 32GB 3200MHz CL 16</h2>
                    <span class="item-price">$59.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="king.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=king" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=king" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Kingston FURY Beast 32GB 3200MT DDR4 CL16 Intel XMP</h2>
                    <span class="item-price">Before: <del>$109.99</del></span>
        <br>
        <span class="item-price">Now: $89.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="tg_16gb.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=tg_16gb" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=tg_16gb" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">TeamGroup T-FORCE VULCAN Z 16GB (2 x 8GB) DDR4-3200</h2>
                    <span class="item-price">$89.99</span>
                </div>
            </div>
        </div>


        <h2 class="item-category">Peripherals</h2>
        <div class="item-container">
            <div class="item-card">
                <div class="item-image">
                    <img src="lg_monitor.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=lg_monitor" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=lg_monitor" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">LG 27MP400-B.AUS 27" Full HD (1920 x 1080) 75Hz LED Monitor</h2>
                    <span class="item-price">$179.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="logitechmkbwireless.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=logitechmkbwireless" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=logitechmkbwireless" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Logitech MK320 Series Wireless Desktop Keyboard and Mouse</h2>
                    <span class="item-price">Before: <del>$59.99</del></span>
        <br>
        <span class="item-price">Now: $29.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="steel_keyboard.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=steel_keyboard" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=steel_keyboard" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">SteelSeries Apex 5 RGB Gaming Keyboard</h2>
                    <span class="item-price">$99.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="logi_mouse.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=logi_mouse" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=logi_mouse" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Logitech G G502 HERO Gaming Mouse</h2>
                    <span class="item-price">$99.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="RD.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=RD" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=RD" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Redragon Gaming Mouse 8000 DPI - 9 Programmable Macro Buttons</h2>
                    <span class="item-price">$29.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="key.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=key" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=key" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">Redragon H556 RGB LED Blacklit Wired Mechanical Gaming Keyboard</h2>
                    <span class="item-price">Before: <del>$149.99</del></span>
        <br>
        <span class="item-price">Now: $79.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="LG.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=LG" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=LG" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">LG UltraGear QHD 34-Inch Curved Gaming Monitor HDR 10 Compatible</h2>
                    <span class="item-price">$399.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="odd.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=odd" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=odd" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">SAMSUNG 49" Odyssey Neo G9 G95NA Gaming Monitor 4K ULTRA UHD</h2>
                    <span class="item-price">$1599.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="asus.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=asus" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=asus" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">ASUS ROG Strix 32" HDMI 2.1 DSC Gaming Monitor 4K UHD (3840 x2160)</h2>
                    <span class="item-price">Before: <del>$899.99</del></span>
        <br>
        <span class="item-price">Now: $799.99</span>
                </div>
            </div>
            <div class="item-card">
                <div class="item-image">
                    <img src="lg_tv.jpg" class="item-thumbnail" alt="picture of item">
                    <a href="cart.php?item=lg_tv" class="item-btn">Add to Cart</a>
                    <a href="wishlist.php?item=lg_tv" class="item-btn">Add to Wishlist</a>
                </div>
                <div class="item-info">
                    <h2 class="item-name">LG OLED48C1PUB 48" Class (48.2" Diag.) 4K Ultra HD Smart OLED TV</h2>
                    <span class="item-price">$1,499.99</span>
                </div>
            </div>
        </div>

        <script>
      function searchItems() {
        var input = document.getElementById("search-input").value.toLowerCase();
        var items = document.getElementsByClassName("item-card");

        for (var i = 0; i < items.length; i++) {
          var name = items[i].getElementsByClassName("item-name")[0].innerText.toLowerCase();

          if (name.includes(input)) {
            items[i].style.display = "";
          } else {
            items[i].style.display = "none";
          }
        }
      }
    </script>


<script>
    function toggleDarkMode() {
      var body = document.body;
      body.classList.toggle("dark-mode");
    }
  </script>
    </section>

    <footer>
    <p>&copy; 2023 JnR Electronics. All rights reserved.</p>
  </footer>
</body>

</html>