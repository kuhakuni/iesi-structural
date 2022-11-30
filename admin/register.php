<?php
require "functions.php";
if (!isset($_POST["nim"])) {
	header("Location: ./");
	exit();
}
global $conn;
$nim = htmlspecialchars($_POST["nim"]);
$password = htmlspecialchars($_POST["password"]);
$password = password_hash($password, PASSWORD_BCRYPT, ["cost" => 10]);
try {
	$check = mysqli_query(
		$conn,
		"INSERT INTO administrator (nim, pass)
			VALUES ('$nim','$password')"
	);
	if ($check) {
		echo json_encode([
			"success" => true,
			"statusCode" => 201,
			"message" => "Akun berhasil dibuat",
		]);
	} else {
		echo json_encode([
			"success" => false,
			"statusCode" => 419,
			"message" => "Akun gagal dibuat",
		]);
	}
} catch (Error $e) {
	echo json_encode([
		"success" => false,
		"statusCode" => 501,
		"message" => "Akun gagal dibuat",
	]);
}
?>