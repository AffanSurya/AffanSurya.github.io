<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Service Motor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Input Data Service Motor</h1>

    <br><br>

    <h3>Input data baru</h3>
    <form action="../input-aksi.php?web=service" method="post">
        <table>
            <tr>
                <td>Jenis Service</td>
                <td><input type="text" name="jenis_service"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>Biaya</td>
                <td><input type="text" name="biaya"></td>
            </tr>
            <tr>
                <td>Waktu Pengerjaan</td>
                <td><input type="text" name="waktu_pengerjaan" placeholder="xx jam/menit/detik"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>