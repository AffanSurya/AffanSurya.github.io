<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Klinik Kesehatan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Input Data Klinik Kesehatan</h1>

    <br><br>

    <h3>Input data baru</h3>
    <form action="../input-aksi.php?web=klinik" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_pasien"></td>
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
                <td><input type="text" name="umur"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Keluhan</td>
                <td>
                    <textarea name="keluhan" id="keluhan" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>Diagnosis</td>
                <td>
                    <textarea name="diagnosis" id="diagnosis" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>Tanggal Kunjungan</td>
                <td><input type="date" name="tanggal_kunjungan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>