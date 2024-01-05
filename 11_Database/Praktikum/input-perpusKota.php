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
    <form action="input-aksi.php" method="post">
        <table>
            <tr>
                <td>NPM</td>
                <td><input type="text" name="npm"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>