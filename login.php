<?php

session_start();

if(isset($_SESSION["login"])) {
	header("Location: index.php");
}


require 'functions.php';

if(isset($_POST["register"])) {
    if(register($_POST) > 0) {
        echo "
            <script>
                alert('user baru berhasil ditambahkan');
            </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}

if(isset($_POST['login'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
			$_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>


	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" id="username" placeholder="User name" required="">
					<input type="email" name="email" id="email" placeholder="Email" required="">
					<input type="password" name="password" id="password" placeholder="Password" required="">
					<button type="submit" name="register">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" id="email" placeholder="Email" required="">
					<input type="password" name="password" id="password" placeholder="Password" required="">
					<button class="log" type="submit" name="login">Login</button>
				</form>
			</div>
	</div>
</body>
</html>