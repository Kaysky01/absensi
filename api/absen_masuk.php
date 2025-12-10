<?php
include "koneksi.php";

$user_id = $_POST['user_id'];
$tanggal = date("Y-m-d");
$jam     = date("H:i:s");

$cek = mysqli_query($conn, "SELECT * FROM absensi WHERE user_id='$user_id' AND tanggal='$tanggal'");
if (mysqli_num_rows($cek) > 0) {
    echo json_encode(["status" => "sudah_absen"]);
    exit();
}

$query = mysqli_query($conn, "INSERT INTO absensi (user_id, tanggal, jam_masuk, status) 
VALUES ('$user_id', '$tanggal', '$jam', 'Hadir')");

echo json_encode(["status" => $query ? "success" : "error"]);
?>
