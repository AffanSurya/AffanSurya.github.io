<!DOCTYPE html>
<html>

<head>
    <title>Update Data di Database dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="../../Latihan/style.css">
</head>

<body>
    <h1>Update Service Motor</h1>
    <br>
    <a href="index.php">Lihat Semua Data</a>
    <br>
    <h3>Edit data</h3>
    <?php
    include "../../Latihan/koneksi.php";
    $id_service = $_GET['id_service'];
    $result = $conn->query("select * from service_motor WHERE id_service='$id_service'");

    while ($data = $result->fetch_assoc()) {
    ?>
        <form action="../update.php?web=service" method="post">
            <table>
                <tr>
                    <td>jenis_service</td>
                    <td><input type="text" name="jenis_service" value="<?php echo $data['jenis_service'] ?>"></td>
                </tr>

                <tr>
                    <td>deskripsi</td>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"><?php echo $data['deskripsi'] ?></textarea>
                </tr>

                <tr>
                    <td>biaya</td>
                    <td><input type="text" name="biaya" value="<?php echo $data['biaya'] ?>"></td>
                </tr>

                <tr>
                    <td>waktu_pengerjaan</td>
                    <td><input type="text" name="waktu_pengerjaan" value="<?php echo $data['waktu_pengerjaan'] ?>"></td>
                </tr>

                <input type="hidden" name="id_service" value="<?= $data['id_service']; ?>">
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>