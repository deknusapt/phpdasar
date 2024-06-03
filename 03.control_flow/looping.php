<?php
/*
	Looping statement in PHP
	there's for, while, and do.. while
*/


/*  
	for-loop
	> Execute the things while the condition is true.
*/
for ($i=0; $i<5; $i++) { 
  echo "this is a for-loop </br>";
}


echo "</br>";


/*
	while-loop
	> Check the condition first and if true, execute the things. 
		Also, do an increment to the counter value after that. 
*/
$a=0; // <-- counter variable
while ($a < 5) {
	echo "this is a while-loop </br>";
	$a++; // <-- this thing should be added to avoid forever loop!
}


echo "</br>";


/*
	do.. while
	> Do the things first, then check the condition. So that, while
		the condition is true, the things will be executed.
*/
$b=0;
do {
	echo "this is a do.. while </br>";
	$b++;
} while ($b < 5);

?>