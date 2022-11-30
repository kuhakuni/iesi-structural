<?php
require "functions.php";
cekSession();
$jumlahMatkul = getCountQuery("SELECT COUNT(*) AS TOTAL FROM mata_kuliah");
$jumlahMateri = getCountQuery("SELECT COUNT(*) AS TOTAL FROM materi");
$jumlahLatsol = getCountQuery("SELECT COUNT(*) AS TOTAL FROM latihan_soal");
$jumlahSinauBareng = getCountQuery(
	"SELECT COUNT(*) AS TOTAL FROM sinau_bareng"
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><?= $jumlahMatkul ?></div>
                        <div class="cardName">
                            <a href="listMatkul.php">Mata Kuliah</a>
                        </div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="book-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?= $jumlahMateri ?></div>
                        <div class="cardName"><a href="listMateri.php">Materi</a></div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="documents-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?= $jumlahLatsol ?></div>
                        <div class="cardName"><a href="listLatsol.php">Latihan Soal</a></div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="document-text-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?= $jumlahSinauBareng ?></div>
                        <div class="cardName"><a href="listVideo.php">Sinau Bareng</a></div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="videocam-outline"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>