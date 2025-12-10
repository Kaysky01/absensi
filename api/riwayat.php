<?php
include "koneksi.php";

$user_id = $_GET['user_id'];

$query = mysqli_query($conn, "SELECT * FROM absensi WHERE user_id='$user_id' ORDER BY tanggal DESC");

$data = [];
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

echo json_encode($data);
?>
