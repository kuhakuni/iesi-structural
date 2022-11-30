<?php
require "functions.php";
cekSession();
$semester = query("SELECT * FROM semester");
if (isset($_POST["tambah"])) {
	$id_semester = $_POST["semester"];
	$nama_video = $_POST["nama"];
	$video_sinau_bareng = $_POST["link"];
	$check = mysqli_query(
		$conn,
		"INSERT INTO sinau_bareng (id_semester, judul, video_sinau_bareng)
			VALUES ('$id_semester','$nama_video', '$video_sinau_bareng')"
	);
	if ($check) {
		echo "
        <script>
        alert('Video berhasil ditambahkan!');
        window.location.href= './';
        </script>
        ";
		exit();
	} else {
		echo "
        <script>
        alert('Video gagal ditambahkan!');
        window.history.back();
        </script>
        ";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Video Sinau Bareng</title>
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

            <div class="title">Tambah Video Sinau Bareng</div>
            <div class="content">
                <form action="" method="POST">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Nama Video</span>
                            <input type="text" name="nama" placeholder="Masukkan nama video" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Link Google Drive</span>
                            <input type="text" name="link" placeholder="Masukkan link Google Drive" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Semester</span>
                            <select name="semester">
                                <?php foreach ($semester as $item): ?>
                                <option value="<?= $item[
                                	"id_semester"
                                ] ?>"><?= $item["semester"] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" name="tambah" value="Submit">
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