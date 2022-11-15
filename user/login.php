<?php
require "functions.php";
if (isset($_SESSION["user"])) {
	header("Location: ./");
	exit();
}
if (isset($_POST["login"])) {
	loginAkun($_POST);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Login </title>
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Login</div>
        <div class="content">
            <form action="" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">NIM</span>
                        <input type="number" placeholder="Masukkan NIM" name="nim" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Masukkan password" name="password" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Login" name="login" />
                </div>
                <div class="info">
                    <h4>Belum memiliki akun? <a href="registrasi.php">Register</a></h4>
                </div>
            </form>
        </div>
    </div>

</body>

</html>