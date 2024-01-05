<?php
include '../Latihan/koneksi.php';

if (isset($_GET['web'])) {

    if ($_GET['web'] == "perpus") {
        $nama_peminjam = $_POST['nama_peminjam'];
        $judul_buku = $_POST['judul_buku'];
        $tanggal_peminjaman = $_POST['tanggal_peminjaman'];

        $conn->query("insert into perpuskota (nama_peminjam, judul_buku, tanggal_peminjaman) values ('$nama_peminjam', '$judul_buku', '$tanggal_peminjaman')");

        header("location:Perpustakaan_kota/perpusKota.php?pesan=input");
    }

    if ($_GET['web'] == "klinik") {
        $nama_pasien = $_POST['nama_pasien'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $umur = $_POST['umur'];
        $alamat = $_POST['alamat'];
        $keluhan = $_POST['keluhan'];
        $diagnosis = $_POST['diagnosis'];
        $tanggal_kunjungan = $_POST['tanggal_kunjungan'];

        $conn->query("insert into klinik_kesehatan values ('', '$nama_pasien', '$jenis_kelamin', '$umur', '$alamat', '$keluhan', '$diagnosis', '$tanggal_kunjungan')");

        header("location:Klinik_kesehatan/klinikKesehatan.php?pesan=input");
    }

    if ($_GET['web'] == "service") {
        $jenis_service = $_POST['jenis_service'];
        $deskripsi = $_POST['deskripsi'];
        $biaya = $_POST['biaya'];
        $waktu_pengerjaan = $_POST['waktu_pengerjaan'];

        $conn->query("insert into service_motor values ('', '$jenis_service', '$deskripsi', '$biaya', '$waktu_pengerjaan')");

        header("location:Service_motor/servicesMotor.php?pesan=input");
    }
}
