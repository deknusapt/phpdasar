<?php
require 'dbConnection.php';

// Variable $data menampung hasil kueri dari fungsi querry yang memiliki argumen sintask SQL
$allData = querry("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<button onclick="window.location.href='insertData.php'" style="margin-bottom: 20px">Tambah Data</button>

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
    <?php foreach ($allData as $row): ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $row["nama"]?></td>
        <td><?= $row["nim"]?></td>
        <td><?= $row["jurusan"]?></td>
        <td><?= $row["email"]?></td>
        <td>
            <a href="updateData.php?id=<?= $row["id"] ?>">Ubah</a> |
            <a href="deleteData.php?id=<?= $row["id"] ?>" onclick="return confirm('Apakah yakin menghapus data?');">Hapus</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>

</body>
</html>
