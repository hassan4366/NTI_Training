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

// ================= issue-9 =============//

echo "The film is repeated " . $count . " times";



$tests = array(1,"tariq",1.5,true,7,'s',false);

for($i = 0; $i < count($tests); $i++){
    if(is_bool($tests[$i])){
        echo $tests[$i] ? "Yes" : "No";
    } else {
        echo $tests[$i];
    }
    echo "<br>";
}



// ================ issue-10 ===================//


$tests = array(6,4,9,3,12,8,7);

sort($tests);

foreach($tests as $num){
    echo $num . " ";
}




// ============== issue-12 (E-commerce..problem) ============= //


$error = "";
$result = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    if(!is_numeric($price) || !is_numeric($quantity)){
        $error = "You must enter numbers";
    }
    elseif($price < 0 || $quantity < 0){
        $error = "Negative numbers  not allowed";
    }
    else{
        $total = $price * $quantity;

        if($total < 1000){
            $discount = 0.10;
        } else {
            $discount = 0.15;
        }

        $discountValue = $total * $discount;
        $finalPrice = $total - $discountValue;

        $result = "Total before discount: $total <br>";
        $result .= "Discount value: $discountValue <br>";
        $result .= "Total after discount: $finalPrice";
    }
}
?>

// =========== HTML Form ============= //

<form method="POST">
    <input type="number" name="price" placeholder="Product Price" min="0"><br><br>
    <input type="number" name="quantity" placeholder="Quantity" min="0"><br><br>
    <button type="submit">Calculate</button>
</form>

<div style="color:red;">
    <?php echo $error; ?>
</div>

<div style="color:green;">
    <?php echo $result; ?>
</div>





// ============= End-task ==============//

