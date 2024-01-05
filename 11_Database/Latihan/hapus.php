<?php
include 'koneksi.php';
$npm = $_GET['npm'];

$result = $conn->query("DELETE FROM mahasiswa WHERE npm='$npm'") or die(mysqli_error($conn));
header("location:index.php?pesan=hapus");
