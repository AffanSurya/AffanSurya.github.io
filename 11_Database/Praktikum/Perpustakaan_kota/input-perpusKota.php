<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Perputakaan Kota Madiun</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Input Data Perputakaan Kota Madiun</h1>

    <br><br>

    <h3>Input data baru</h3>
    <form action="input-aksi.php?web=perpus" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_peminjam"></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul_buku"></td>
            </tr>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td><input type="date" name="tanggal_peminjaman"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>