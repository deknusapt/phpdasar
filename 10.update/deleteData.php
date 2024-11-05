<?php
require 'dbConnection.php';

// Mengambil data dari URL dengan GET()
$id = $_GET["id"];

// Perkondisian untuk pesan data berhasil ataupun gagal dihapus
if (deleteData($id) > 0)
{
    echo " 
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
} else {
    echo "
           <script>
                alert('Data gagal dihapus!');
           </script>     
        ";
}

?>