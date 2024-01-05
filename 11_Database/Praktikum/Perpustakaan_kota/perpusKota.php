<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Kota Madiun</title>
    <style>
        body {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin: auto;
        }

        table th {
            padding: 10px;

        }
    </style>
</head>

<body>
    <h1>Perpustakaan Kota Madiun</h1>

    <br><br>

    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];

        if ($pesan == "input") {
            echo "Data berhasil di input";
        } elseif ($pesan == "update") {
            echo "Data berhasil di update";
        } elseif ($pesan == "hapus") {
            echo "Data berhasil di hapus";
        }
    }
    ?>
    <br>
    <a href="input-perpusKota.php" class="tombol">+ Tambah data baru</a>

    <h3>Data Peminjam</h3>
    <table border="1" class="table">
        <tr>
            <th>Id Peminjaman</th>
            <th>Nama</th>
            <th>Judul Buku</th>
            <th>Tanggal Peminjaman</th>
        </tr>
        <?php
        include "../../Latihan/koneksi.php";

        $result = $conn->query("select * from perpuskota");

        while ($data = $result->fetch_assoc()) :
        ?>
            <tr>
                <td><?= $data['id_peminjaman']; ?></td>
                <td><?= $data['nama_peminjam']; ?></td>
                <td><?= $data['judul_buku']; ?></td>
                <td><?= $data['tanggal_peminjaman']; ?></td>
                <td>
                    <a href="edit.php?web=perpus&id_peminjaman=<?= $data['id_peminjaman'] ?>">Edit</a> |
                    <a href="../hapus.php?web=perpus&id_peminjaman=<?= $data['id_peminjaman'] ?>">Hapus</a>
                </td>
            </tr>
        <?php endwhile;
        $conn->close() ?>


    </table>
</body>

</html>