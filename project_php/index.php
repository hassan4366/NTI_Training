<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        .header {
            height: 600px;
            background: url('images/header.jpg') no-repeat center center;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>


<?php include 'navbar.php'; ?>

<div class="header d-flex align-items-center justify-content-center text-white">
    <h1>Welcome To Our Store</h1>
</div>

</body>
</html>