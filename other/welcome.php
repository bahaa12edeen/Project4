<?php
    session_start();
    // print_r($_SESSION);
    $i = $_GET['i'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcom.css">
    <title>Welcome</title>
</head>
<body>
    <div class="main">
        <div>
            <h1 class="head">Welcome in your page</h1>
        </div>
        <div>
            <p><?php echo $_SESSION['record'][$i]['first_name']." ".$_SESSION['record'][$i]['middle_name']." ".$_SESSION['record'][$i]['last_name']." ".$_SESSION['record'][$i]['family_name']; ?></p>
            <p><?php echo $_SESSION['record'][$i]['mobile']; ?></p>
            <p><?php echo $_SESSION['record'][$i]['email']; ?></p>
        </div>
        <div class="image">
            <img src="image/abc2.png" width="300px" alt="">
        </div>
        <div>
            <h1 class="foot">SUCCESS</h1>
            <!-- <p class="footer">
            Are you Admin? <a href="admin.php"><b>admin page</b></a>
        </p> -->
        </div>
        <div>
            <a class="out" href="../index.php">LogOut</a>
        </div>
    </div>
</body>
</html>