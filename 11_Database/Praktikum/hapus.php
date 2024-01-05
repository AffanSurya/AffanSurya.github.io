<?php
include '../Latihan/koneksi.php';

if (isset($_GET['web'])) {

    if ($_GET['web'] == "perpus") {
        $id_peminjaman = $_GET['id_peminjaman'];
        $result = $conn->query("DELETE FROM perpuskota WHERE id_peminjaman='$id_peminjaman'") or die(mysqli_error($conn));
        header("location:Perpustakaan_kota/perpusKota.php?pesan=hapus");
    }
    if ($_GET['web'] == "klinik") {
        $id_pasien = $_GET['id_pasien'];
        $result = $conn->query("DELETE FROM klinik_kesehatan WHERE id_pasien='$id_pasien'") or die(mysqli_error($conn));
        header("location:Klinik_kesehatan/klinikKesehatan.php?pesan=hapus");
    }
    if ($_GET['web'] == "service") {
        $id_service = $_GET['id_service'];
        $result = $conn->query("DELETE FROM service_motor WHERE id_service='$id_service'") or die(mysqli_error($conn));
        header("location:Service_motor/servicesMotor.php?pesan=hapus");
    }
}
