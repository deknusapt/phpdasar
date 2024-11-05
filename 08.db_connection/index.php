<?php
require 'dbConnection.php';

// Variable $data menampung hasil kueri dari fungsi querry yang memiliki argumen sintask SQL
$data = querry("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>eMail</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($data as $row): ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $row["nama"]?></td>
        <td><?= $row["nim"]?></td>
        <td><?= $row["jurusan"]?></td>
        <td><?= $row["email"]?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Aksi</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>

</body>
</html>
