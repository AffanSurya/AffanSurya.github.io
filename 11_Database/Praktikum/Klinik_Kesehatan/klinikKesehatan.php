<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Kesehatan</title>
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
    <h1>Klinik Kesehatan</h1>

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
    <a href="input-klinikKesehatan.php" class="tombol">+ Tambah data baru</a>

    <h3>Data Klinik Kesehatan</h3>
    <table border="1" class="table">
        <tr>
            <th>Id Pasien</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Keluhan</th>
            <th>Diagnosis</th>
            <th>Tanggal Kunjungan</th>
        </tr>
        <?php
        include "../../Latihan/koneksi.php";

        $result = $conn->query("select * from klinik_kesehatan");

        while ($data = $result->fetch_assoc()) :
        ?>
            <tr>
                <td><?= $data['id_pasien']; ?></td>
                <td><?= $data['nama_pasien']; ?></td>
                <td><?= $data['jenis_kelamin']; ?></td>
                <td><?= $data['umur']; ?></td>
                <td><?= $data['alamat']; ?></td>
                <td><?= $data['keluhan']; ?></td>
                <td><?= $data['diagnosis']; ?></td>
                <td><?= $data['tanggal_kunjungan']; ?></td>
                <td>
                    <a href="edit.php?id_pasien=<?= $data['id_pasien'] ?>">Edit</a> |
                    <a href="../hapus.php?web=klinik&id_pasien=<?= $data['id_pasien'] ?>">Hapus</a>
                </td>
            </tr>
        <?php endwhile;
        $conn->close() ?>


    </table>
</body>

</html>