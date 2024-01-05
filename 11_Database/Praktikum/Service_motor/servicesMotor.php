<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Motor</title>
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
    <h1>Services Motor</h1>

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
    <a href="input-services.php" class="tombol">+ Tambah data baru</a>

    <h3>Data Services Motor</h3>
    <table border="1" class="table">
        <tr>
            <th>Id Service</th>
            <th>Jenis Services</th>
            <th>Deskripsi</th>
            <th>Biaya</th>
            <th>Waktu Pengerjaan</th>
        </tr>
        <?php
        include "../../Latihan/koneksi.php";

        $result = $conn->query("select * from service_motor");

        while ($data = $result->fetch_assoc()) :
        ?>
            <tr>
                <td><?= $data['id_service']; ?></td>
                <td><?= $data['jenis_service']; ?></td>
                <td><?= $data['deskripsi']; ?></td>
                <td><?= $data['biaya']; ?></td>
                <td><?= $data['waktu_pengerjaan']; ?></td>
            </tr>
        <?php endwhile;
        $conn->close() ?>


    </table>
</body>

</html>