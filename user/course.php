<?php
require "functions.php";
cekSession();
$semester = $_GET["semester"] ?? null;
if (is_null($semester)) {
	header("Location: ./materi.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website EduPTI</title>
    <link rel="stylesheet" href="materilatsol.css" />
</head>

<body>
    <!-- Membuat navigation bar -->
    <header>
        <div class="logo">EduPTI</div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="navbar">
            <ul style="list-style-type: none">
                <li><a href="./">Home</a></li>
                <li><a href="./materi.php" class="active">Materi</a></li>
                <li><a href="./latsol.php">Latihan Soal</a></li>
                <li><a href="./sinaubareng.php">Sinau Bareng</a></li>
                <li><a class="cta" href="./logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <script>
    hamburger = document.querySelector(".hamburger");
    hamburger.onclick = function() {
        navBar = document.querySelector(".navbar");
        navBar.classList.toggle("active");
    };
    </script>

    <section class="sec">
        <h2>Materi</h2>
        <div class="search">
            <form action="" class="searchbar">
                <input type="text" placeholder="Cari materi" name="search" />
                <button type="submit">
                    <img src="gambar/search.png" />
                </button>
            </form>
        </div>

        <div class="matkul">
            <div class="container">
                <div class="box">
                    <h3>Software Development Process</h3>
                    <a href="#">Lihat</a>
                </div>
                <div class="box">
                    <h3>Cyber Warfare</h3>
                    <a href="#">Lihat</a>
                </div>
                <div class="box">
                    <h3>Technology</h3>
                    <a href="#">Lihat</a>
                </div>
                <div class="box">
                    <h3>Quake Game Engine</h3>
                    <a href="#">Lihat</a>
                </div>
                <div class="box">
                    <h3>Inside a Computer</h3>
                    <a href="#">Lihat</a>
                </div>
                <div class="box">
                    <h3>History of Computer</h3>
                    <a href="#">Lihat</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>