<?php
// PHP comes with dozens of built-in function that can be used

// date function
echo date('H:i:s');
echo "</br>";

echo date('l', time()+60*60*24);
echo "</br>";

// mktime(hour, minute, second, month, date, year)
echo date("l m Y", mktime(0,0,0,4,18,2003));
echo "</br>";

// strtotime
echo date("l", strtotime("18 apr 2003"));
echo "</br>";

// isset($variable_name)
$nusa = "name";
if (isset($nuse) == 1){
    echo "Variable sudah ada";
} else {
    echo "Variable belum ada";
}

?>