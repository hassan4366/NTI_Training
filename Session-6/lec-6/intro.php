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


// ================ switch ==================== //

$fruit = "banana";

switch ($fruit) {
    case "apple":
    case "orange":
        echo "this is fruit";
        break;

    case "carrot";
    case "tomato";

        echo "this is vegetables";
        break;

    default:
        echo " not found ";

}

// =================== For Loop =============//


for ($i=0; $i < 8; $i++) { 
	echo $i . "<br>";
}

echo "<br>";

for ($i= 1; $i <= 40; $i++){
	if ($i %5== 0) {
		echo "Boom" . "<br>" ; 
		continue;
	}
	echo $i ."<br>";
}






//=================== for each ===============//

echo "<br>";

$country = array("Egypt","exa","Ema","south","Nourth","KSA","Arabic");

foreach ( $country as  $city ) {
	echo $city ."<br>";
}

echo "<br>";

// ***************** asscitive array ********//

$country = array( 
	"Eg" => "Egypt",
	"Kd" =>  "UK",
	 "Emaraties" => "Ema",
	"Arab" => "south",
	"Arb" => "Nourth",
	"Ara" => "KSA",
	);
foreach ($country as $city => $country_name) {
	echo $city . "=>" . $country_name . "<br>";
}

echo "<br>";

//================= Function ============//


// function reusable and more dynamic and more effecient.

//EXample_one
function sayHello(){
	echo "Welcome PHP";
}

sayhello();

//Example_two

function loopName(){
	for( $i = 0; $i < 10 ; $i++){
		echo $i ."<br>";
	}
}
loopname(); // function Not casesensetive.

// funtion with argument //

function printName($firstname, $lastname) // argument
{
	echo  $firstname ." ". $lastname; // parameter
}
printname("hassan","hammam");

echo "<br>";


function getSalary( $name, $salary) {
	echo "Hello ". $name . " the salary is " . ($salary *210);
}
getsalary("Hassan","40");

echo "<br>";


function salary()
{
	static $salar = 1;
	$salar++;
	echo $salar . "<br>";
}

salary();
salary();
salary();
salary();
echo "<br>";


function sumarray($array)
{
	$sum = 0;
	for ($i = 0; $i < count($array); $i++) {
		$sum += $array[$i];
	}
	echo $sum;
}
echo sumarray([1,2,3,2,3,4]);
echo "<br>";
echo "<br>";
sumarray([4, 5, 8, 2, 5, 7]);
echo "<br>";
echo "<br>";



// =========== array =================//

$arr = array  ("one","two","three","four","five","six","seven") ;

print_r($arr); // output with deatils
echo"<br>";
var_dump($arr); // output with deatils and define the datatype
echo "<br>";
echo count($arr);  // define number of array
echo "<br>";


$student = [
	"hassan" => ['arabic'=> 80 , 'english'=> 80 , 'math'=> 100],
	"mohamed" => ['arabic'=> 77 , 'english'=> 87 , 'math'=> 89],
	"ahmed" => ['arabic'=> 80 , 'english'=> 87 , 'math'=> 92],
];
foreach($student as $name => $value) {
	$avarege = array_sum($value) / count($value);
	echo $name . ' average: ' . $avarege . '<br>';
}

echo '<br>';

// ================ get & post ============== //