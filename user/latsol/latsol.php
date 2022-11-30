<?php
require "../functions.php";
cekSession();
$id_matkul = $_GET["matkul"] ?? "";
if (is_null($id_matkul)) {
	header("Location: ./semester.php");
	exit();
}
if (isset($_GET["q"])) {
	$search = $_GET["q"];
	$latihan_soal = query(
		"SELECT * FROM latihan_soal WHERE id_matkul = '$id_matkul' AND judul LIKE '%$search%'"
	);
} else {
	$latihan_soal = query(
		"SELECT * FROM latihan_soal WHERE id_matkul = '$id_matkul'"
	);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website EduPTI</title>
    <link rel="stylesheet" href="../materilatsol.css" />
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
    };
    </script>

    <section class="sec">
        <h2>Latihan Soal</h2>
        <div class="search">
            <form action="" class="searchbar">
                <input type="text" placeholder="Cari latihan soal" name="q" />
                <input type="hidden" name="semester" value="<?= $id_matkul ?>">
                <button type="submit">
                    <img src="../gambar/search.png" />
                </button>
            </form>
        </div>

        <div class="matkul">
            <div class="container">
                <?php if (!empty($latihan_soal)):
                	foreach ($latihan_soal as $item): ?>
                <div class="box">
                    <h3><?= $item["judul"] ?></h3>
                    <a target="_blank" rel="noopener noreferrer " href="<?= $item[
                    	"link_file"
                    ] ?>">Lihat</a>
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
    </section>
</body>

</html>