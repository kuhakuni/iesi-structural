<?php
require "functions.php";
cekSession();
if (!isset($_GET["id"])) {
	echo "
    <script>
    window.history.back();
    </script>
    ";
	exit();
}
$is_update = $_POST["_method"] ?? "";
if ($is_update === "put") {
	$id = $_POST["id"];
	$judul = $_POST["judul"];
	$semester = $_POST["semester"];
	$link_file = $_POST["link_file"];
	$check = mysqli_query(
		$conn,
		"UPDATE sinau_bareng SET judul = '$judul', id_semester = '$semester', video_sinau_bareng = '$link_file' WHERE id_sinau_bareng = $id "
	);
	if ($check) {
		echo "
        <script>
        alert('Data sinau bareng berhasil diubah!');
        window.location.href= './listVideo.php';
        </script>
        ";
		exit();
	} else {
		echo "
        <script>
        alert('Data sinau bareng gagal diubah!');
        window.history.back();
        </script>
        ";
		exit();
	}
}
$id = $_GET["id"];
$data = query("SELECT * FROM sinau_bareng WHERE id_sinau_bareng = $id")[0];
if (is_null($data)) {
	header("Location: ./");
	exit();
}
$semester = query("SELECT * FROM semester");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Video Sinau Bareng</title>
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

            <div class="title">Edit Video Sinau Bareng</div>
            <div class="content">
                <form action="" method="POST">
                    <input type="hidden" name="_method" value="put" />
                    <input type="hidden" name="id" value="<?= $id ?>" />
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Nama Video</span>
                            <input type="text" name="judul" value="<?= $data[
                            	"judul"
                            ] ?>" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Link Google Drive</span>
                            <input type="text" name="link_file" value="<?= $data[
                            	"video_sinau_bareng"
                            ] ?>" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Semester</span>
                            <select name="semester" required>
                                <?php foreach ($semester as $item):
                                	if (
                                		$item["id_semester"] !==
                                		$data["id_semester"]
                                	): ?>
                                <option value="<?= $item[
                                	"id_semester"
                                ] ?>"><?= $item["semester"] ?></option>
                                <?php else: ?>
                                <option selected value="<?= $item[
                                	"id_semester"
                                ] ?>"><?= $item["semester"] ?></option>
                                <?php endif; ?>
                                <?php
                                endforeach; ?>
                            </select>

                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Simpan">
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