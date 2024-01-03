<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Tanggal</title>
</head>

<body>
    <?php
    $namaHari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum`at", "Sabtu");
    $namaBulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    echo $namaHari[date("w")] . ",    " . date("j") . "     " . $namaBulan[date("n")] . "   " . date("Y");
    echo "<br><br>";

    echo date("Y/m/d") . "<br>";
    echo date("l, d-m-Y") . "<br>";
    echo date("d F Y") . "<br><br>";

    echo date("h:i:s") . "<br>";
    echo date("l, d-m-Y h:i:s") . "<br>";
    ?>
</body>

</html>