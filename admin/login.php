<?php
require "functions.php";
if (isset($_SESSION["admin"])) {
	header("Location: ./");
	exit();
}
if (isset($_POST["login"])) {
	loginAdmin($_POST);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Login | Admin</title>
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Login Admin</div>
        <div class="content">
            <form action="" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">NIM</span>
                        <input type="text" name="nim" placeholder="Masukkan NIM" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" placeholder="Masukkan password" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="login" value="Login" />
                </div>
            </form>
        </div>
    </div>

</body>

</html>