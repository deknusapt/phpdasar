<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Memanggil file penampung kredensial akses ke dalam database
require '../dbCredentials.php';
global $dbUsername, $dbPassword, $dbName;

// Variabel untuk kredensial database
$hostname = "localhost";
$username = $dbUsername;
$password = $dbPassword;
$dbname = $dbName;

// Koneksi ke database
$conn = mysqli_connect("$hostname","$username","$password","$dbname");
// Perkondisia memeriksa apakah koneksi ke database berhasil
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
?>
