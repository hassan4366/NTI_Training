<?php
session_start();

// للتجربة لو معندكش login سيستم شغال
if(!isset($_SESSION['user'])){
    $_SESSION['user'] = true;
}

$errors = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username  = trim($_POST['username']);
    $password  = trim($_POST['password']);
    $email     = trim($_POST['email']);
    $phone     = trim($_POST['phone']);
    $facebook  = trim($_POST['facebook']);
    $twitter   = trim($_POST['twitter']);
    $instagram = trim($_POST['instagram']);

    // Validation
    if(empty($username)){
        $errors[] = "Username is required";
    }

    if(strlen($password) < 6){
        $errors[] = "Password must be at least 6 characters";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Invalid email format";
    }

    if(!preg_match('/^[0-9]{10,15}$/', $phone)){
        $errors[] = "Phone must be 10-15 digits";
    }

    if(!filter_var($facebook, FILTER_VALIDATE_URL)){
        $errors[] = "Invalid Facebook URL";
    }

    if(!filter_var($twitter, FILTER_VALIDATE_URL)){
        $errors[] = "Invalid Twitter URL";
    }

    if(!filter_var($instagram, FILTER_VALIDATE_URL)){
        $errors[] = "Invalid Instagram URL";
    }

    // لو كله تمام
    if(empty($errors)){
        $_SESSION['profile'] = [
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'phone' => $phone,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'instagram' => $instagram
        ];

        // 🔥 التحويل لصفحة تانية
        header("Location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">

    <!-- عرض الأخطاء -->
    <?php foreach($errors as $error){ ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php } ?>

    <!-- الفورم -->
    <form method="POST">

        <input class="form-control mb-2" name="username" placeholder="Username">

        <input class="form-control mb-2" name="password" placeholder="Password">

        <input class="form-control mb-2" name="email" placeholder="Email">

        <input class="form-control mb-2" name="phone" placeholder="Phone Number">

        <input class="form-control mb-2" name="facebook" placeholder="Facebook URL">

        <input class="form-control mb-2" name="twitter" placeholder="Twitter URL">

        <input class="form-control mb-2" name="instagram" placeholder="Instagram URL">

        <button class="btn btn-success">Save</button>

    </form>

</div>

</body>
</html>