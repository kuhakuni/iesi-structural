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
    <link rel="stylesheet" href="style.css" />
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
                <li><a href="/user/" class="active">Home</a></li>
                <li><a href="/user/materi/semester.php">Materi</a></li>
                <li><a href="/user/latsol/semester.php">Latihan Soal</a></li>
                <li><a href="/user/sinaubareng/sinaubareng.php">Sinau Bareng</a></li>
                <li><a class="cta" href="/user/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <!-- Memasukkan background dan judul website -->
    <section class="parallax">
        <img src="./gambar/bgheader.png" id="bgheader" />
        <h2 id="text">Website EduPTI</h2>
    </section>

    <!-- Membuat section kedua website yang berisi fitur -->
    <section class="sec">
        <h2>Fitur Website</h2>
        <div class="fitur">
            <!-- Membuat responsive card yang berisi 3 fitur -->
            <div class="container">
                <div class="box">
                    <div class="icon">01</div>
                    <div class="content">
                        <h3>Materi Kuliah</h3>
                        <p>
                            Berisi kumpulan materi kuliah dari berbagai
                            semester dan mata kuliah
                        </p>
                        <a href="./materi/semester.php">Selengkapnya</a>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">02</div>
                    <div class="content">
                        <h3>Latihan Soal</h3>
                        <p>
                            Berisi kumpulan latihan soal dari berbagai
                            semester dan mata kuliah
                        </p>
                        <a href="./latsol/semester.php">Selengkapnya</a>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">03</div>
                    <div class="content">
                        <h3>Sinau Bareng</h3>
                        <p>
                            Berisi pendaftaran mentor dan kumpulan video
                            record Sinau Bareng
                        </p>
                        <a href="./sinaubareng/sinaubareng.php">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <h4>Made with love by Departemen PTI Mengajar KBMPTI FILKOM UB</h4>
    </section>

    <script src="script.js"></script>

    <script>
    hamburger = document.querySelector(".hamburger");
    hamburger.onclick = function() {
        navBar = document.querySelector(".navbar");
        navBar.classList.toggle("active");
    };
    </script>
</body>

</html>