<?php
include "koneksi.php";

$user_id = $_POST['user_id'];
$tanggal = date("Y-m-d");
$jam     = date("H:i:s");

$query = mysqli_query($conn, "
UPDATE absensi SET jam_pulang='$jam' 
WHERE user_id='$user_id' AND tanggal='$tanggal'
");

echo json_encode(["status" => $query ? "success" : "error"]);
?>
