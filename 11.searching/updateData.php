<?php
// Menghubungkan file connections untuk menjalankan fungsi tambah()
require 'dbConnection.php';

// Mengambil data dari URL dengan GET()
$id = $_GET["id"];

// Kueri untuk mengambil data berdasarkan id-nya
$dataMhs = querry("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"]))
{
    if (updateData($_POST) > 0)
    {
        echo " 
            <script>
                alert('Data berhasil diperbaharui!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
           <script>
                alert('Data gagal diperbaharui!');
           </script>     
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
<h1>Ubah Data Mahasiswa</h1>

<form action="" method="post">
    <input type="hidden" name="id" value="<?= $dataMhs["id"] ?>">
    <table border="0">
        <tr>
            <td><label for="nama">Nama</label></td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" required value="<?= $dataMhs["nama"] ?>"></td>
        </tr>
        <tr>
            <td><label for="nim">NIM</label></td>
            <td>:</td>
            <td><input type="text" name="nim" id="nim" required value="<?= $dataMhs["nim"] ?>"></td>
        </tr>
        <tr>
            <td><label for="jurusan">Jurusan</label></td>
            <td>:</td>
            <td><input type="text" name="jurusan" id="jurusan" required value="<?= $dataMhs["jurusan"] ?>"></td>
        </tr>
        <tr>
            <td><label for="email">eMail</label></td>
            <td>:</td>
            <td><input type="email" name="email" id="email" required value="<?= $dataMhs["email"] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button type="submit" name="submit">Update</button>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
