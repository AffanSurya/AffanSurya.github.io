<!DOCTYPE html>
<html>

<head>
    <title>Update Data di Database dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="../../Latihan/style.css">
</head>

<body>
    <h1>Update Perpustakaan</h1>
    <br>
    <a href="perpusKota.php">Lihat Semua Data</a>
    <br>
    <h3>Edit data</h3>
    <?php
    include "../../Latihan/koneksi.php";
    $id_peminjaman = $_GET['id_peminjaman'];
    $result = $conn->query("select * from perpuskota WHERE id_peminjaman='$id_peminjaman'");

    while ($data = $result->fetch_assoc()) {
    ?>
        <form action="../update.php?web=perpus" method="post">
            <table>
                <tr>
                    <td>Nama Peminjam</td>
                    <td><input type="text" name="nama_peminjam" value="<?php echo $data['nama_peminjam'] ?>"></td>
                </tr>

                <tr>
                    <td>Judul Buku</td>
                    <td><input type="text" name="judul_buku" value="<?php echo $data['judul_buku'] ?>"></td>
                </tr>

                <tr>
                    <td>Tanggal Peminjaman</td>
                    <td><input type="date" name="tanggal_peminjaman" value="<?php echo $data['tanggal_peminjaman'] ?>"></td>
                </tr>

                <input type="hidden" name="id_peminjaman" value="<?= $data['id_peminjaman']; ?>">

                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>