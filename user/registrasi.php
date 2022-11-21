<?php
require "functions.php";
if (isset($_SESSION["nim"])) {
	header("Location: ./");
	exit();
}
if (isset($_POST["registrasi"])) {
	if ($_POST["password"] == $_POST["confirmpass"]) {
		createAkun($_POST);
	} else {
		echo "
        <script>
            alert('Konfirmasi password tidak sama!');
            history.back();
        </script>
        ";
	}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Registrasi </title>
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Register</div>
        <div class="content">
            <form action="" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nama Lengkap</span>
                        <input type="text" placeholder="Masukkan nama lengkap" name="nama" required>
                    </div>
                    <div class="input-box">
                        <span class="details">NIM</span>
                        <input type="number" placeholder="Masukkan NIM" name="nim" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" placeholder="Masukkan email" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Masukkan password" name="password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Konfirmasi Password</span>
                        <input type="password" placeholder="Konfirmasi password" name="confirmpass" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Register" name="registrasi" />
                </div>
                <div class="info">
                    <h4>Sudah memiliki akun? <a href="login.php">Login</a></h4>
                </div>
            </form>
        </div>
    </div>

</body>

</html>