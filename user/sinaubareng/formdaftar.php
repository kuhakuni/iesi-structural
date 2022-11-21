<?php
require "../functions.php";
cekSession();
global $conn;
$nim = $_SESSION["nim"];
$data = query("SELECT id_mhs,nim, nama from mahasiswa WHERE nim = '$nim'")[0];
$angkatan = substr($data["nim"], 0, 2);

if (isset($_POST["daftar-mentor"])) {
	$nama = htmlspecialchars($_POST["nama"]);
	$id_mhs = htmlspecialchars($_POST["id_mhs"]);
	$nim = htmlspecialchars($_POST["nim"]);
	$angkatan = htmlspecialchars($_POST["angkatan"]);
	$pilihan_mengajar = htmlspecialchars($_POST["pilihan_mengajar"]);
	$file_cv = htmlspecialchars($_POST["file_cv"]);
	$nomor_wa = htmlspecialchars($_POST["nomor_wa"]);

	$check = mysqli_query(
		$conn,
		"INSERT INTO pendaftaran_mentor (id_mhs, nama, nim, angkatan, pilihan_mengajar, file_cv, nomor_wa) VALUES ($id_mhs,'$nama', '$nim', '$angkatan', '$pilihan_mengajar', '$file_cv', '$nomor_wa')"
	);
	if ($check) {
		header("Location: ./sinaubareng.php");
		exit();
	} else {
		echo "
            <script>
                alert('Pendaftaran gagal');
                window.location.reload();
            </script>
            ";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website EduPTI</title>
    <link rel="stylesheet" href="form.css">
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
            <ul style="list-style-type: none;">
                <li><a href="/user/">Home</a></li>
                <li><a href="/user/materi/semester.php">Materi</a></li>
                <li><a href="/user/latsol/semester.php">Latihan Soal</a></li>
                <li><a href="/user/sinaubareng/sinaubareng.php" class="active">Sinau Bareng</a></li>
                <li><a class="cta" href="/user/logout.php">Logout</a></li>
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
        <div class="container">
            <div class="content">
                <div class="title">Pendaftaran Mentor Sinau Bareng</div>
                <form action="" method="POST">
                    <div class="user-details">
                        <input type="hidden" name="id_mhs" value="<?= $data[
                        	"id_mhs"
                        ] ?>">
                        <div class="input-box">
                            <span class="details">Nama Lengkap</span>
                            <input type="text" name="nama" value="<?= $data[
                            	"nama"
                            ] ?>" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details">NIM</span>
                            <input type="text" value="<?= $data[
                            	"nim"
                            ] ?>" name="nim" readonly placeholder="Masukkan NIM">
                        </div>
                        <div class="input-box">
                            <span class="details">Angkatan</span>
                            <input type="text" name="angkatan" placeholder="Masukkan angkatan"
                                value="20<?= $angkatan ?>" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details">Pilihan Mengajar</span>
                            <select name="pilihan_mengajar">
                                <option value="Administrasi Basis Data">Administrasi Basis Data</option>
                                <option value="Pemrograman Dasar">Pemrograman Dasar</option>
                                <option value="Pemrograman Lanjut">Pemrograman Lanjut</option>
                                <option value="Dasar Basis Data">Dasar Basis Data</option>
                                <option value="Perkembangan Peserta Didik">Perkembangan Peserta Didik</option>
                                <option value="Arsitektur dan Organisasi Komputer">Arsitektur dan Organisasi Komputer
                                </option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">Link CV</span>
                            <input type="text" name="file_cv" placeholder="Masukkan link google drive CV" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Nomor Whatsapp</span>
                            <input type="text" name="nomor_wa" placeholder="Masukkan nomor whatsapp" required>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" name="daftar-mentor" value="Daftar" />
                    </div>
            </div>