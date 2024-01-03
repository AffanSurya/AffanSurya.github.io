<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum String dan Tanggal</title>
</head>

<body>
    <?php
    $kalimat = "Universitas PGRI Madiun";

    printf("hasil Strlen : %s<br>\n", strlen($kalimat));
    printf("hasil Strtoupper : %s<br>\n", strtoupper($kalimat));
    printf("hasil Strtolower : %s<br>\n", strtolower($kalimat));
    printf("hasil Ucfirst : %s<br>\n", ucfirst($kalimat));
    printf("hasil Ucwords : %s<br>\n", ucwords($kalimat));
    printf("Aslinya : $kalimat<br>\n");

    printf("Tanggal Sekarang : %s", date("d F Y"));
    echo "<br>";
    ?>
</body>

</html>