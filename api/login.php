<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($query);

if ($data) {
    echo json_encode([
        "status" => "success",
        "user" => $data
    ]);
} else {
    echo json_encode(["status" => "error"]);
}
?>
