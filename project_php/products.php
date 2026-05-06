<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <div class="row">

<?php
$products = [
    'Product 1' => ['price'=>620, 'img'=>'images/1.png', 'desc'=>'Nice product'],
    'Product 2' => ['price'=>6500, 'img'=>'images/2.png', 'desc'=>'Cool item'],
    'Product 3' => ['price'=>300, 'img'=>'images/3.png', 'desc'=>'Good'],
    'Product 4' => ['price'=>900, 'img'=>'images/4.png', 'desc'=>'Awesome'],
    'Product 5' => ['price'=>1200, 'img'=>'images/5.png', 'desc'=>'Best'],
    'Product 6' => ['price'=>750, 'img'=>'images/6.png', 'desc'=>'Perfect'],
];

foreach($products as $product => $values){
?>

<div class="col-md-4 mb-4">
    <div class="card">
        <img src="<?= $values['img'] ?>" class="card-img-top">
        <div class="card-body">
            <h5><?= $product ?></h5>
            <p><?= $values['desc'] ?></p>
            <p><strong><?= $values['price'] ?> EGP</strong></p>
        </div>
    </div>
</div>

<?php } ?>

    </div>
</div>

</body>
</html>