<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../dbCredentials.php';
global $dbUsername, $dbPassword, $dbName;

// Variabel untuk kredensial database
$hostname = "localhost";
$username = $dbUsername;
$password = $dbPassword;
$dbname = $dbName;

// Koneksi ke database
$conn = mysqli_connect("$hostname","$username","$password","$dbname");
// Perkondisian memeriksa apakah koneksi ke database berhasil
if (!$conn){
    die("Connection failed! " . mysqli_connect_error());
}

// Fungsi kueri data dari DB ke dalam array
function querry($querry_syntax)
{
    global $conn; // Inisiasi tipe variable untuk mengambil nilai dari luar fungsi
    $result = mysqli_query($conn, $querry_syntax); // Hasil sintaks kueri dari $conn, disimpan ke variable $result
    $rows = []; // Array untuk menampung elemen data hasil kueri

    // Ketika data di fetch, ditampung ke variable $row satu per-satu
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row; // Kemudian per-elemen data, disatukan menjadi array associatif
    }
return $rows;
}

function insertData($newData)
{
    global $conn;

    // Mengambil data pada setiap elemen form
    $nama = htmlspecialchars($newData['nama']);
    $nim = htmlspecialchars($newData['nim']);
    $jurusan = htmlspecialchars($newData['jurusan']);
    $email = htmlspecialchars($newData['email']);

    $querryNewData = "INSERT INTO mahasiswa(nama, nim, jurusan, email)
                        VALUES ('$nama','$nim','$jurusan','$email')";

    try {
        mysqli_query($conn, $querryNewData);
        return mysqli_affected_rows($conn);
    } catch (Exception $e){
        return -1;
    }
}

function deleteData($id)
{
    global $conn;

    // Kueri untuk menghapus data berdasarkan id dari data tersebut
    mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>
