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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Team</title>
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
    <header>
		<img id="icon-shop" src="Brand/Logo_NIKE.svg-removebg-preview.png" alt="" >
        <a href="logout.php"><img id="icon-logout" src="Brand/logout_FILL1_wght400_GRAD0_opsz48.png" alt=""></a>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="reference.php">Shop</a></li>
				<li><a href="about.php">About Us</a></li>
			</ul>
		</nav>
	</header>
    <main>
        <div class="team-container">
            <div class="team-card">
                <img src="Kelompok/IMG_9154.jpg" alt="">
                <p>Yulianus Shefryo Henrij</p>
                <p>220211060190</p>
            </div>
            <div class="team-card">
                <img src="Kelompok/WhatsApp Image 2024-06-06 at 16.44.42_1221d5ab.jpg" alt="">
                <p>Lordy Lawrence Parihala</p>
                <p>220211060365</p>
            </div>
            <div class="team-card">
                <img src="Kelompok/WhatsApp Image 2024-06-06 at 20.16.53_d47695d8.jpg" alt="">
                <p>Nathanael Alexandro Pangindahen</p>
                <p>2220211060201</p>
            </div>
            <div class="team-card">
                <img src="Kelompok/IMG_8363.jpg" alt="">
                <p>Novenia Theresia Wowor</p>
                <p>220211060238</p>
            </div>
        </div>
        <!-- Repeat the above section for each team member -->
    </main>
</body>
</html>