<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "unipma";

$conn = new mysqli($host, $username, $pass, $db);

if ($conn->connect_error) {
    die("koneksi gagal: " . $conn->connect_error);
}
