<?php
require "functions.php";
cekSession();
if (!isset($_GET["type"]) || !isset($_GET["id"])) {
	header("Location: index.php");
	exit();
}
$type = $_GET["type"];
$id = $_GET["id"];
switch ($_GET["type"]) {
	case "matkul":
		$query = mysqli_query(
			$conn,
			"DELETE FROM mata_kuliah WHERE id_matkul = $id"
		);

		break;
	case "latsol":
		$query = mysqli_query(
			$conn,
			"DELETE FROM latihan_soal WHERE id_latsol = $id"
		);

		break;
	case "materi":
		$query = mysqli_query(
			$conn,
			"DELETE FROM materi WHERE id_materi = $id"
		);

		break;
	case "sinau_bareng":
		$query = mysqli_query(
			$conn,
			"DELETE FROM sinau_bareng WHERE id_sinau_bareng = $id"
		);
		break;
}
if (!$query) {
	echo "
    <script>
    alert('Data gagal dihapus!');
    // window.location.href= './';
    window.history.back();
    </script>
    ";
	exit();
}
echo "
    <script>
    alert('Data berhasil dihapus!');
    window.history.back();
    // window.location.href= './';

    </script>
";
exit();
?>