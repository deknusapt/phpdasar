<?php

/*
 * Kondisi untuk mengecek, apakah $_GET menampung sebuah data
 * jika kosong salah satu parameternya, maka akan di redirect
 */

if (!isset($_GET["name"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]))
{
    header("Location: latihan_get1.php");
    exit();
}

// GET request is a method to send data via url
// and $_GET is used to catch the data.
?>
<!doctype html>
<html lang="en">
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
<ul>
    <li><?= $_GET["name"]; ?></li>
    <li><?= $_GET["nim"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
</ul>

<button onclick="document.location='latihan_get1.php'">Kembali</button>
</body>
</html>