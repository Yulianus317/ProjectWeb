<?php

session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shop Website</title>
	<link rel="stylesheet" href="css/reference.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<header>
		<img id="icon-shop"src="Brand/Logo_NIKE.svg-removebg-preview.png" alt="" >
        <a href="logout.php"><img id="icon-logout" src="Brand/logout_FILL1_wght400_GRAD0_opsz48.png" alt=""></a>
        <img id="icon-bag" src="Brand/shopping-bag-regular-24.png" alt="">
        <div class="cart">
            <h2 class="cart-title">Your cart</h2>
            <div class="cart-content"></div>
            <!-- Total -->
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">Rp.0</div>
            </div>
            <!-- Buy Button -->
            <button type="button" class="btn-buy">Buy Now</button>
            <!--Cart Close-->
            <i class='bx bx-x' id="close-cart"></i>
        </div>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="reference.php">Shop</a></li>
				<li><a href="about.php">About Us</a></li>
			</ul>
		</nav>
        
	</header>

	<main>
        <div class="product-container" id="product-container">
            <div class="product">
                <img class = "product-img" src="Product/Tatum.jpg" alt="">
                <h2 class="card-title">Tatum 1 "St. Louis"</h2>
                <p class="card-description">Basketball Shoes</p>
                <p class="card-price">Rp.1909000</p>
                <button class="btn-add">Add to Cart</button>
            </div>
            <div class="product">
                <img class = "product-img" src="Product/Zion.jpg" alt="">
                <h2 class="card-title">ZION 2 PF</h2>
                <p class="card-description">Basketball Shoes</p>
                <p class="card-price">Rp.1909000</p>
                <button class="btn-add">Add to Cart</button>
            </div>
            <div class="product">
                <img class = "product-img" src="Product/jordan 13.jpeg" alt="">
                <h2 class="card-title">Air Jordan 13 Retro</h2>
                <p class="card-description">Men's Shoes</p>
                <p class="card-price">Rp.2889000</p>
                <button class="btn-add">Add to Cart</button>
            </div>
            <div class="product">
                <img class = "product-img" src="Product/whynot.jpg" alt="${item.name}">
                <h2 class="card-title">Jordan Why Not .6 PF</h2>
                <p class="card-description">Men's Shoes</p>
                <p class="card-price">Rp.2379000</p>
                <button class="btn-add">Add to Cart</button>
            </div>
            <div class="product">
                <img class = "product-img" src="Product/stadium.jpg" alt="${item.name}">
                <h2 class="card-title">Jordan Stadium 90</h2>
                <p class="card-description">Men's Shoes</p>
                <p class="card-price">Rp.2199000</p>
                <button class="btn-add">Add to Cart</button>
            </div>
            <div class="product">
                <img class = "product-img" src="Product/seriesmid.jpg" alt="${item.name}">
                <h2 class="card-title">Jordan Series Mid</h2>
                <p class="card-description">Men's Shoes</p>
                <p class="card-price">Rp.1459000</p>
                <button class="btn-add">Add to Cart</button>
            </div>
            <div class="product">
                <img class = "product-img" src="Product/retro 6.jpg" alt="${item.name}">
                <h2 class="card-title">Air Jordan 6 Retro</h2>
                <p class="card-description">Men's Shoes</p>
                <p class="card-price">Rp.3099000</p>
                <button class="btn-add">Add to Cart</button>
            </div>
            <div class="product">
                <img class = "product-img" src="Product/airjordan1low.jpg" alt="${item.name}">
                <h2 class="card-title">Air Jordan 1 Low</h2>
                <p class="card-description">Men's Shoes</p>
                <p class="card-price">Rp.1859000</p>
                <button class="btn-add">Add to Cart</button>
            </div>
        </div>
	</main>
    <script src="js/cart.js"></script>
</body>
</html>