<?php
require "../functions.php";
cekSession();
$semesters = query("SELECT * FROM semester");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website EduPTI</title>
    <link rel="stylesheet" href="../semester.css" />
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
                <li><a href="/user/">Home</a></li>
                <li><a href="/user/materi/semester.php" class="active">Materi</a></li>
                <li><a href="/user/latsol/semester.php">Latihan Soal</a></li>
                <li><a href="/user/sinaubareng/sinaubareng.php">Sinau Bareng</a></li>
                <li><a class="cta" href="/user/logout.php">Logout</a></li>
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
            <?php foreach ($semesters as $semester): ?>
            <div class="box">
                <a href="./matkul.php?semester=<?= $semester[
                	"id_semester"
                ] ?>"><?= $semester["semester"] ?></a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>