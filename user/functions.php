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
	if (!isset($_SESSION["user"])) {
		header("Location: login.php");
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
function createAkun($data)
{
	global $conn;
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$password = htmlspecialchars($data["password"]);
	$email = htmlspecialchars(strtolower($data["email"]));
	$password = password_hash($password, PASSWORD_BCRYPT, ["cost" => 10]);
	try {
		$check = mysqli_query(
			$conn,
			"INSERT INTO mahasiswa (nim, nama, password, email)
    		VALUES ('$nim','$nama','$password','$email')"
		);
		if ($check) {
			$_SESSION["user"] = true;
			echo "
            <script>
                window.location.reload();
            </script>
            ";
			exit();
		} else {
			echo "
            <script>
                alert('Email atau NIM telah terdaftar!');
                history.back();
            </script>
            ";
		}
	} catch (Error $e) {
		echo "
        <script>
            alert('Akun gagal dibuat!');
            history.back();
        </script>
        ";
	}
}
function loginAkun($data)
{
	$nim = htmlspecialchars($data["nim"]);
	$password = htmlspecialchars($data["password"]);
	$check = query("SELECT nim, password FROM mahasiswa WHERE nim = '$nim'")[0];
	if (!$check) {
		echo "
        <script>
            alert('Akun tidak ditemukan!');
            history.back();
        </script>
        ";
	} else {
		if (password_verify($password, $check["password"])) {
			$_SESSION["user"] = true;
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