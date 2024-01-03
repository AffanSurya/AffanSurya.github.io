<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas String dan Tanggal</title>
</head>

<body>
    <form>
        Masukkan Nama, email, password <br>
        default nama = belajar, email = test@gmail.com, password = madiun
        <br>
        isian data : <br>
        Nama : <input type="text" name="nama"><br>
        Email : <input type="email" name="email"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit" value="Cek" name="submit"><br>
    </form>

    <?php
    if (isset($_GET["submit"])) {
        $nama = $_GET["nama"];
        $email = $_GET["email"];
        $password = $_GET["password"];
        if (isset($email)) {

            if (empty($email)) {
                print("<br>harap mengisi email <br>");
            } else {
                // if (mb_ereg("^.+@.+\\..+$", $email)) {
                if (mb_ereg("test@gmail.com", $email)) {
                    print("<br>Alamat email $email valid<br>");
                } else {
                    print("<br>Alamat email $email tidak valid");
                }
            }
            if (isset($password)) {
                $nama = "belajar";
                $pass_valid = crypt("madiun", $nama);
                $enkripsi = crypt($password, $nama);

                if ($pass_valid == $enkripsi) {
                    print("<br>Password valid");
                } else {
                    print("<br>Passord salah");
                }
            }
        }
    }
    ?>
</body>

</html>