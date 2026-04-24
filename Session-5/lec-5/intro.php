<?php

echo"Welcome there";
echo "<br>";
echo "My name H3s6an";

echo "<br>";

//============== to get datatype ========== //

$x = 12;
echo gettype($x);
echo "<br>";
$y = 12.34;
echo gettype($y);
echo "<br>";

// ============== Casting================ //

$z= 11.64;
 $cast = (int) $z ;
 echo $cast;

 echo "<br>"; 

//  =============== if condition =============== //
$x = 150;
$y = 0;
if ($x > 178) {
	echo "Correct \n";
} elseif ($x == 14 || $y == 0) {
	echo "It is wonderful \n";
} else {
	echo "False \n";
}

echo "<br>";

$age = 28;

if ($age < 30) {
	echo "Exellent Health";
} elseif ($age >= 30) {
	echo "Good Health";
}else {
	echo "Done";
}

echo "<br>";

// =================== For Loop =============//

$n = 10;
for ($i=0; $i < $n ; $i+=2) { 
	echo $i . "<br>";
}