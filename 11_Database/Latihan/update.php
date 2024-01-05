<?php
include 'koneksi.php';
$npm = $_POST['npm'];
$nama = $_POST['nama'];

$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$result = $conn->query("UPDATE mahasiswa SET nama='$nama',
    alamat='$alamat', kelas='$kelas' WHERE npm='$npm'");
header("location:index.php?pesan=update");
