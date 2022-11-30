<?php
require "functions.php";
cekSession();
$allSinauBareng = query("SELECT * FROM sinau_bareng");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Video Sinau Bareng</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="./">
                        <span class="title">EduPTI</span>
                    </a>
                </li>

                <li>
                    <a href="./">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="tambahMatkul.php">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Tambah Mata Kuliah</span>
                    </a>
                </li>

                <li>
                    <a href="tambahMateri.php">
                        <span class="icon">
                            <ion-icon name="documents-outline"></ion-icon>
                        </span>
                        <span class="title">Tambah Materi</span>
                    </a>
                </li>

                <li>
                    <a href="tambahLatsol.php">
                        <span class="icon">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </span>
                        <span class="title">Tambah Latihan Soal</span>
                    </a>
                </li>

                <li>
                    <a href="tambahVideo.php">
                        <span class="icon">
                            <ion-icon name="videocam-outline"></ion-icon>
                        </span>
                        <span class="title">Tambah Video</span>
                    </a>
                </li>
                <li>
                    <a href="listDataMentor.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Data Calon Mentor</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>

            <!-- ======================= List ================== -->
            <div class="list">
                <div class="containerlist">
                    <h1>List Video</h1>
                    <?php foreach ($allSinauBareng as $item): ?>
                    <div class="box">
                        <h3><?= $item["judul"] ?></h3>
                        <div class="button">
                            <a href="editVideo.php?id=<?= $item[
                            	"id_sinau_bareng"
                            ] ?>">Edit</a>
                            <a onclick="return confirm('Apakah kamu yakin akan menghapus mata kuliah ini?')" href="deleteData.php?type=sinau_bareng&id=<?= $item[
                            	"id_sinau_bareng"
                            ] ?>">Hapus</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- =========== Scripts =========  -->
            <script src="assets/js/main.js"></script>

            <!-- ====== ionicons ======= -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>