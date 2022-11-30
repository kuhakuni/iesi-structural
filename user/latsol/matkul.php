<?php
require "../functions.php";
cekSession();
$id_semester = $_GET["semester"] ?? null;
if (is_null($id_semester)) {
	header("Location: ./semester.php");
	exit();
}
if (isset($_GET["q"])) {
	$search = $_GET["q"];
	$matkul = query(
		"SELECT * FROM mata_kuliah WHERE id_semester = '$id_semester' AND nama_matkul LIKE '%$search%'"
	);
} else {
	$matkul = query(
		"SELECT * FROM mata_kuliah WHERE id_semester = '$id_semester'"
	);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website EduPTI</title>
    <link rel="stylesheet" href="../matkul.css">
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
                <li><a href="/user/latsol/semester.php" class="active">Latihan Soal</a></li>
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
    }
    </script>

    <section class="sec">
        <h2>Mata Kuliah</h2>
        <div class="search">
            <form action="" method="GET" class="searchbar">
                <input type="text" placeholder="Cari mata kuliah" name="q">
                <input type="hidden" name="semester" value="<?= $id_semester ?>">
                <button type="submit">
                    <img src="../gambar/search.png" />
                </button>
            </form>
        </div>
        <div class="matkul">
            <div class="container">
                <?php if (!empty($matkul)):
                	foreach ($matkul as $item): ?>
                <div class="box">
                    <a href="latsol.php?matkul=<?= $item[
                    	"id_matkul"
                    ] ?>"><?= $item["nama_matkul"] ?></a>
                </div>
                <?php endforeach;
                else:
                	 ?>
                <div class="empty">
                    <h4>Mata Kuliah Tidak Ditemukan</h4>
                </div>
                <?php
                endif; ?>
            </div>
        </div>
</body>