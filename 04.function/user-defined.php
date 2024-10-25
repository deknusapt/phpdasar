<?php
function salam($nama)
{
    $jam = date('H:i:s');
    //    var_dump($jam);
    if ($jam >= "04:00:00" && $jam <= "10:00:00"){
        $waktu = "Pagi";
    } elseif ($jam >= "11:00:00" && $jam <= "13:00:00"){
        $waktu = "Siang";
    } elseif ($jam >= "14:00:00" && $jam <= "18:00:00"){
        $waktu = "Sore";
    } else {
        $waktu = "Malam";
    }
    return "Selamat $waktu, $nama!";
}

?>

<html>
<head>
    <title>User-Defined Function</title>
</head>
<body>
    <h1><?php echo salam("Admin"); ?></h1>
</body>
</html>
