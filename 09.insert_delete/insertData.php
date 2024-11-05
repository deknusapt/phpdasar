<?php
// Menghubungkan file connections untuk menjalankan fungsi tambah()
require 'dbConnection.php';

if (isset($_POST["submit"]))
{
    if (insertData($_POST) > 0)
    {
        echo " 
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
           <script>
                alert('Data gagal ditambahkan!');
           </script>     
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
<h1>Tambah Data Mahasiswa</h1>

<form action="" method="post">
    <table border="0">
        <tr>
            <td><label for="nama">Nama</label></td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" required></td>
        </tr>
        <tr>
            <td><label for="nim">NIM</label></td>
            <td>:</td>
            <td><input type="text" name="nim" id="nim" required></td>
        </tr>
        <tr>
            <td><label for="jurusan">Jurusan</label></td>
            <td>:</td>
            <td><input type="text" name="jurusan" id="jurusan" required></td>
        </tr>
        <tr>
            <td><label for="email">eMail</label></td>
            <td>:</td>
            <td><input type="email" name="email" id="email" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button type="submit" name="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
