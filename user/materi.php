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
    <link rel="stylesheet" href="semester.css" />
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

    <div class="semester">
        <div class="container">
            <div class="box">
                <a href="course.php?semester=1">Semester 1</a>
            </div>
            <div class="box">
                <a href="course.php?semester=2">Semester 2</a>
            </div>
            <div class="box">
                <a href="course.php?semester=3">Semester 3</a>
            </div>
            <div class="box">
                <a href="course.php?semester=4">Semester 4</a>
            </div>
            <div class="box">
                <a href="course.php?semester=5">Semester 5</a>
            </div>
            <div class="box">
                <a href="course.php?semester=6">Semester 6</a>
            </div>
        </div>
    </div>
</body>

</html>