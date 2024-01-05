<!DOCTYPE html>
<html>

<head>
    <title>Update Data di Database dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="../../Latihan/style.css">
</head>

<body>
    <h1>Update Klinik Kesehatan</h1>
    <br>
    <a href="klinikKesehatan.php">Lihat Semua Data</a>
    <br>
    <h3>Edit data</h3>
    <?php
    include "../../Latihan/koneksi.php";
    $id_pasien = $_GET['id_pasien'];
    $result = $conn->query("select * from klinik_kesehatan WHERE id_pasien='$id_pasien'");

    while ($data = $result->fetch_assoc()) {
    ?>
        <form action="../update.php?web=klinik" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama_pasien" value="<?= $data['nama_pasien']; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-Laki">
                        <label for="laki-laki">Laki-Laki</label>

                        <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                        <label for="perempuan">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><input type="text" name="umur" value="<?= $data['umur']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?= $data['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>Keluhan</td>
                    <td>
                        <textarea name="keluhan" id="keluhan" cols="30" rows="10"><?= $data['keluhan']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Diagnosis</td>
                    <td>
                        <textarea name="diagnosis" id="diagnosis" cols="30" rows="10"><?= $data['diagnosis']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Kunjungan</td>
                    <td><input type="date" name="tanggal_kunjungan" value="<?= $data['tanggal_kunjungan']; ?>"></td>
                </tr>
                <input type="hidden" name="id_pasien" value="<?= $data['id_pasien']; ?>">
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>