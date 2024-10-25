<?php
// Associative array is an array that refers to user defined key

$mahasiswa = [
    [
        "name" => "Espresso",
        "nim" => "2115354025",
        "jurusan" => "Teknologi Informasi",
        "email" => "espresso@pnb.ac.id"
    ],
    [
        "name" => "Americano",
        "jurusan" => "Teknologi Informasi", // Element changed here
        "nim" => "2115354026",
        "email" => "americano@pnb.ac.id"
    ],
];

// String key as index for calling the element
//echo $mahasiswa["name"];
?>

<!doctype html>
<html lang="en">
<head>
    <title>DAFTAR MAHASISWA</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $mhs):?>
<ul>
    <li>Nama : <?= $mhs["name"]; ?></li>
    <li>NIM : <?= $mhs["nim"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    <li>Email : <?= $mhs["email"]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>

