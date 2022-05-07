<?php
session_start();

if(!(isset($_GET["submit"]))){
    $mesg = '';
}

if(isset($_POST["submit"])){
    $email1  = $_POST["email"];
    $email2 =  $_SESSION['record']['email'];

    $password1  = $_POST["password"];
    $password2 =  $_SESSION['record']['password'];

    if($email1 == $email2 & $password1 == $password2){
        header('location: welcome.php');
        $mesg = '';
    }else{
        $mesg = '<div id="ferr"><div class="error"> <i class="fa-solid fa-circle-exclamation"></i> &nbsp; email or password not correct </div></div>';
    }
}

// echo $_SESSION['record']['email'] . " // " . $_SESSION['record']['password'];
$_SESSION['now'] = date("Y/m/d");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/aca8d5a1fa.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <div class="main">
        <h1 class="head">
            Login
        </h1>
        <p>
            Welcome Back! Login With Your Credentials
        </p>
        <form action="" method="post">
            <div>
                <div class="label">
                    <label for="email">email</label>
                </div>
                <div class="input">
                    <input type="email" name="email" id="email" placeholder="Enter Your Email">
                </div>
            </div>
            <div>
                <div class="label">
                    <label for="password">password</label>
                </div>
                <div class="input">
                    <input type="password" name="password" id="password" placeholder="Enter Your Password">
                </div>
            </div>
            <div>
                <?php echo $mesg; ?>
            </div>
            <div>
                <button type="submit" name="submit" class="login">Login</button>
            </div>
        </form>
        <p class="footer">
            Don't have an account? <a href="signup.php"><b>Sign UP</b></a>
        </p>
        <p>
            <hr>
            <?php 
                echo $_SESSION['record']['email'] . " // " . $_SESSION['record']['password'];
             ?>
        </p>
    </div>
</body>
</html>