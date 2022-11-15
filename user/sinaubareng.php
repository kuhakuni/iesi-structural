<?php
require "functions.php";
cekSession();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website EduPTI</title>
    <link rel="stylesheet" href="sinaubareng.css">
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
                <li><a href="./latsol.php">Latihan Soal</a></li>
                <li><a href="./sinaubareng.php" class="active">Sinau Bareng</a></li>
                <li><a class="cta" href="./logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <script>
    hamburger = document.querySelector(".hamburger");
    hamburger.onclick = function() {
        navBar = document.querySelector(".navbar");
        navBar.classList.toggle("active");
    }
    </script>

    <section class="sec">
        <h2>Sinau Bareng</h2>
        <div class="box">
            <p>Sinau Bareng adalah salah satu program kerja dari Departemen PTI Mengajar KBMPTI FILKOM UB.
                Pada program ini, diadakan belajar bersama mahasiswa PTI menjelang ujian yang akan dijelaskan
                oleh mentor dari seorang mahasiswa. Pada Sinau Bareng akan dijelaskan terkait materi pembelajaran,
                latihan soal tahun-tahun sebelumnya, dan juga dapat melakukan tanya jawab secara langsung dengan mentor.
            </p>
        </div>

        <div class="pendaftaran">
            <div class="content">
                <h3>Pendaftaran Mentor Sinau Bareng</h3>
                <a class="daftar" href="#">Daftar Sekarang</a>
            </div>
        </div>

        <h1>Video Record</h2>

            <div class="record">
                <div class="container">
                    <div class="box">
                        <a href="#">Semester 1</a>
                    </div>
                    <div class="box">
                        <a href="#">Semester 2</a>
                    </div>
                    <div class="box">
                        <a href="#">Semester 3</a>
                    </div>
                    <div class="box">
                        <a href="#">Semester 4</a>
                    </div>
                    <div class="box">
                        <a href="#">Semester 5</a>
                    </div>
                    <div class="box">
                        <a href="#">Semester 6</a>
                    </div>
                </div>
            </div>
    </section>