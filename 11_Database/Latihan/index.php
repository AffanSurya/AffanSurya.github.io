<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Database dan Menampilkan data dari database dengan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="judul">
        <h1>Membuat Koneksi Dengan PHP dan MySQL</h1>
        <h2>Menampilkan data dari Database</h2>
        <h3>www.unipma.ac.id</h3>
    </div>
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
    <a href="input.php" class="tombol">+ Tambah data baru</a>

    <h3>Data Mahasiswa</h3>
    <table border="1" class="table">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Opsi</th>
        </tr>
        <?php
        include "koneksi.php";

        $result = $conn->query("select * from mahasiswa");

        while ($data = $result->fetch_assoc()) :
        ?>
            <tr>
                <td><?= $data['npm']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['alamat']; ?></td>
                <td><?= $data['kelas']; ?></td>
                <td>
                    <a href="edit.php?npm=<?= $data['npm'] ?>">Edit</a> |
                    <a href="hapus.php?npm=<?= $data['npm'] ?>">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>


    </table>
</body>

</html>