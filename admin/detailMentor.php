<?php require "functions.php";
cekSession();
if (!isset($_GET["id"])) {
	echo "
    <script>
    window.history.back();
    </script>
    ";
	exit();
}
$id = $_GET["id"];
$data = query("SELECT * FROM pendaftaran_mentor WHERE id_pendaftaran = $id")[0];
if (is_null($data)) {
	header("Location: ./");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css" />
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

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>

            <div class="title">Detail Calon Mentor</div>
            <div class="content">
                <form action="#">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Nama Lengkap</span>
                            <input type="text" value="<?= $data[
                            	"nama"
                            ] ?>" disabled />
                        </div>

                        <div class="input-box">
                            <span class="details">NIM</span>
                            <input type="text" value="<?= $data[
                            	"nim"
                            ] ?>" disabled />
                        </div>

                        <div class="input-box">
                            <span class="details">Angkatan</span>
                            <input type="text" value="<?= $data[
                            	"angkatan"
                            ] ?>" disabled />
                        </div>

                        <div class="input-box">
                            <span class="details">Pilihan Mengajar</span>
                            <input type="text" value="<?= $data[
                            	"pilihan_mengajar"
                            ] ?>" disabled />
                        </div>

                        <div class="input-box">
                            <span class="details">Link CV</span>
                            <input type="text" value="<?= $data[
                            	"file_cv"
                            ] ?>" disabled />
                        </div>

                        <div class="input-box">
                            <span class="details">Nomor Whatsapp</span>
                            <input type="text" value="<?= $data[
                            	"nomor_wa"
                            ] ?>" disabled />
                        </div>
                    </div>
                </form>
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