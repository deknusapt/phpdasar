<?php
$mahasiswa = [
    [
        "name" => "Espresso",
        "nim" => "2115354025",
        "jurusan" => "Teknologi Informasi",
        "email" => "espresso@pnb.ac.id"
    ],
    [
        "name" => "Americano",
        "jurusan" => "Teknologi Informasi",
        "nim" => "2115354026",
        "email" => "americano@pnb.ac.id"
    ],
];

/* Data pada array asosiatif ini akan diambil dengan metode GET
 * memanfaatkan variabel superglobals $_GET untuk mengambil data
 * melalui alamat url.
 */
?>

<!doctype html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa:</h1>
<?php foreach ($mahasiswa as $mhs):?>
<li>
    <a href="latihan_get2.php?name=<?= $mhs["name"]; ?>&jurusan=<?= $mhs["jurusan"] ?>&nim=<?= $mhs["nim"] ?>&email=<?= $mhs["email"] ?>">
        <?= $mhs["name"]; ?>
    </a>
</li>
<?php endforeach; ?>
</body>
</html>
