<?php
const DB_NAME = "edupti";
const DB_USERNAME = "root";
const DB_PASSWORD = "290601";
$conn = mysqli_connect("127.0.0.1", DB_USERNAME, DB_PASSWORD, DB_NAME);
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
session_start();
function cekSession()
{
	if (!isset($_SESSION["admin"])) {
		header("Location: /admin/login.php");
		exit();
	}
}

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}
function getCountQuery($query)
{
	global $conn;
	$res = mysqli_query($conn, $query);
	$data = mysqli_fetch_assoc($res);
	return $data["TOTAL"];
}
function loginAdmin($data)
{
	$nim = htmlspecialchars($data["nim"]);
	$password = htmlspecialchars($data["password"]);
	$check = query("SELECT nim, pass FROM administrator WHERE nim = '$nim'");
	// var_dump($check);
	// exit();
	if (!$check) {
		echo "
        <script>
            alert('Akun tidak ditemukan!');
            history.back();
        </script>
        ";
	} else {
		if (password_verify($password, $check[0]["pass"])) {
			$_SESSION["admin"] = $nim;
			echo "
            <script>
                window.location.reload();
            </script>
            ";
			exit();
		} else {
			echo "
            <script>
                alert('NIM atau Password salah!');
                history.back();
            </script>
            ";
		}
	}
}