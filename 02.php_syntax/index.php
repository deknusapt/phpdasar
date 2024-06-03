<?php
/* Pertemuan 2 - Sintask PHP */

// standar output --> echo, print
//                    print_r, vardump (debugging)

echo "Kadek Nusa ";
// echo <number>; penulisan nomor tanpa tanda kutip
// echo true  --> out: 1
//      false --> out: null

/* memberikan informasi tambahan
   pada suatu hal yang dieksekusi */
//var_dump("Belajar PHP");

// variable dan tipe data
$nama = "Tutik";

// Operator --> +, -, *, /, %
$x = 10;
$y = 5;
echo $x - $y;

// Penggabung String (Concatenation)
$nama_depan = "Sri";
$nama_belakang = "Nadi";
echo $nama_depan. " " .$nama_belakang;

// Assignment --> =, +=, -=, *=, /=, %=, .=
$t = 1;
$t += 5; // --> penambahan
$t -= 5; // --> pegurangan

// Perbandingan --> <, >, <=, >=, == 

// Logika --> &&, ||, !


/* Penulisan sintaks PHP
   dapat dikombinasikan 
   dengan HTML */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Belajar PHP</title>
    </head>
    <body>
        <!-- PHP inside HTML -->
        <h1>Halo, Apa kabar <?php echo "kamu!";?></h1>
        <h1>Halo, Apa kabar <?php echo $nama;?></h1>


        <!-- HTML inside PHP -->
        <?php
            echo "<h1>Halooo juga</h1>";
        ?>
    </body>
</html>
