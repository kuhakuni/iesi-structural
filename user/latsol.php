<?php
require "functions.php";
cekSession();
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
                <li><a href="./materi.php">Materi</a></li>
                <li><a href="./latsol.php" class="active">Latihan Soal</a></li>
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
        <h2>Latihan Soal</h2>
        <div class="search">
            <form action="" class="searchbar">
                <input type="text" placeholder="Cari latihan soal" name="q" />
                <button type="submit">
                    <img src="gambar/search.png" />
                </button>
            </form>
        </div>

        <div class="matkul">
            <div class="container">
                <div class="box">
                    <h3>Latihan Soal UTS Tahun 2021</h3>
                    <a href="#">Lihat</a>
                </div>
                <div class="box">
                    <h3>Latihan Soal UAS Tahun 2021</h3>
                    <a href="#">Lihat</a>
                </div>
                <div class="box">
                    <h3>KUIS 1 Tahun 2021</h3>
                    <a href="#">Lihat</a>
                </div>
                <div class="box">
                    <h3>KUIS 2 Tahun 2021</h3>
                    <a href="#">Lihat</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>