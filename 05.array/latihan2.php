<?php
$mahasiswa = [
        ["Espresso", "2115354026", "Teknologi Informasi", "espresso@pnb.ac.id"],
        ["Americano", "2115354025", "Teknologi Informasi", "americano@pnb.ac.id"],
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $mhs): ?>
<ul>
    <li>Nama : <?= $mhs[0] ?></li>
    <li>NIM : <?= $mhs[1] ?></li>
    <li>Jurusan : <?= $mhs[2] ?></li>
    <li>Email :<?= $mhs[3] ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>
