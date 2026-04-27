<?php


// ============== issue-1 =========== //
$age = 20; 

if ($age >= 18) {
    echo "Login approved";
} else {
    echo "Login not allowed";
}



// ============== issue-2 ============ //

function calculate($num1, $num2) {
    
    $multiplication = $num1 * $num2;
    
    
    $difference = $num1 - $num2;
    
    if ($num2 != 0) {
        $division = $num1 / $num2;
    } else {
        $division = "Cannot divide by zero";
    }

    echo "Multiplication: " . $multiplication . "<br>";
    echo "Difference: " . $difference . "<br>";
    echo "Division: " . $division . "<br>";
}

calculate(10, 5);
CAlculate(12, 3);
CAlculate(3,0);

// ============== issue-3 ============== //

function sumArray($numbers) {
    $sum = 0;

    foreach ($numbers as $num) {
        $sum += $num;
    }

    return $sum;
}

$arr = [1, 2, 3, 4, 5];

echo "Sum = " . $result;


// ============= issue-4 ============ //


$films = array("Fast", "Predestination", "Persuit", "Prestige");
$keyword = "avatar";

$found = "no";

foreach ($films as $film) {
    if ($film == $keyword) {
        $found = "yes";
        break;
    }
}

echo $found;



// ================= issue-5  ============ //


function RouteBubble($arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

$numbers = [5, 2, 9, 1, 3];
$sorted = RouteBubble($numbers);

echo "<br>" . $sorted;

//print_r($sorted);


// ============= issue-6 ============ //


$tests = array(5, 4, 9, 3, 1, 7, 5, 8, 6);

$max = $tests[0];

foreach ($tests as $num) {
    if ($num > $max) {
        $max = $num;
    }
}

echo "Max number = " . $max;

// ============== issue-7 ========== //


$films = array("avatar", "Prestige", "avatar", "Prestige");
$keyword = "avatar";

$count = 0;

foreach ($films as $film) {
    if ($film == $keyword) {
        $count++;
    }
}

echo "The film is repeated " . $count . " times";

?>

?>