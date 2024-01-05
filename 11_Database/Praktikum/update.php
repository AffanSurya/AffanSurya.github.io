<?php
include '../Latihan/koneksi.php';

if (isset($_GET['web'])) {

    if ($_GET['web'] == "perpus") {
        $id_peminjaman = $_POST['id_peminjaman'];
        $nama_peminjam = $_POST['nama_peminjam'];
        $judul_buku = $_POST['judul_buku'];
        $tanggal_peminjaman = $_POST['tanggal_peminjaman'];

        $result = $conn->query("UPDATE perpuskota SET nama_peminjam='$nama_peminjam',
    judul_buku='$judul_buku', tanggal_peminjaman='$tanggal_peminjaman' WHERE id_peminjaman='$id_peminjaman'");

        header("location:Perpustakaan_kota/perpusKota.php?pesan=update");
    }

    if ($_GET['web'] == "klinik") {
        $id_pasien = $_POST['id_pasien'];
        $nama_pasien = $_POST['nama_pasien'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $umur = $_POST['umur'];
        $alamat = $_POST['alamat'];
        $keluhan = $_POST['keluhan'];
        $diagnosis = $_POST['diagnosis'];
        $tanggal_kunjungan = $_POST['tanggal_kunjungan'];

        $result = $conn->query("UPDATE klinik_kesehatan SET nama_pasien='$nama_pasien',
        jenis_kelamin='$jenis_kelamin', umur='$umur', alamat='$alamat', keluhan='$keluhan', diagnosis='$diagnosis', tanggal_kunjungan='$tanggal_kunjungan' WHERE id_pasien='$id_pasien'") or die(mysqli_error($conn));

        header("location:Klinik_kesehatan/klinikKesehatan.php?pesan=update");
    }

    if ($_GET['web'] == "service") {
        $id_service = $_GET['id_service'];
        $jenis_service = $_POST['jenis_service'];
        $deskripsi = $_POST['deskripsi'];
        $biaya = $_POST['biaya'];
        $waktu_pengerjaan = $_POST['waktu_pengerjaan'];

        $result = $conn->query("UPDATE service_motor SET jenis_service='$jenis_service',
    deskripsi='$deskripsi', biaya='$biaya', waktu_pengerjaan='$waktu_pengerjaan' WHERE id_service='$id_service'");

        header("location:Service_motor/servicesMotor.php?pesan=update");
    }
}
