<?php
    session_start();

    if(!(isset($_GET["submit"]))){
        $mesg1 = '';
        $mesg2 = '';
        $mesg3 = '';
        $mesg4 = '';
        $mesg5 = '';
        $mesg6 = '';
        $mesg7 = '';
        $mesg8 = '';
        $mesg9 = '';

    }

   
    if(isset($_POST["submit"])){

        $_SESSION['fname']  = $_POST["fname"];
        $_SESSION['mname']  = $_POST["mname"];
        $_SESSION['lname']  = $_POST["lname"];
        $_SESSION['yname']  = $_POST["yname"];
        $_SESSION['email']  = $_POST["email"];
        $_SESSION['password']  = $_POST["password"];
        $_SESSION['cpassword']  = $_POST["cpassword"];
        $_SESSION['mobile']  = $_POST["mobile"];
        $_SESSION['date']  = $_POST["date"];

        $fname =  $_SESSION['fname'];
        $mname =  $_SESSION['mname'];
        $lname =  $_SESSION['lname'];
        $yname =  $_SESSION['yname'];
        $email =  $_SESSION['email'];
        $password =  $_SESSION['password'];
        $cpassword =  $_SESSION['cpassword'];
        $mobile =  $_SESSION['mobile'];
        $date =  $_SESSION['date'];


        $reg1 = "/^[A-Za-z]+$/";//name
        $reg2 = "/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";//email re
        $reg3 = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]){8,100}/";//password
        $reg4 = "/^[\d]{14,100}+$/";//mobile re




        if(preg_match_all($reg1, $fname)){
            $mesg1 = '';
        }else{
            $mesg1 = '<div id="ferr"><div class="error"> <i class="fa-solid fa-circle-exclamation"></i> &nbsp; Please enter your name </div></div>';
        }

        if(preg_match_all($reg1, $mname)){
            $mesg2 = '';
        }else{
            $mesg2 = '<div id="ferr"><div class="error"> <i class="fa-solid fa-circle-exclamation"></i> &nbsp; Please enter your name </div></div>';
        }
        
        if(preg_match_all($reg1, $lname)){
            $mesg3 = '';
        }else{
            $mesg3 = '<div id="ferr"><div class="error"> <i class="fa-solid fa-circle-exclamation"></i> &nbsp; Please enter your name </div></div>';
        }

        if(preg_match_all($reg1, $yname)){
            $mesg4 = '';
        }else{
            $mesg4 = '<div id="ferr"><div class="error"> <i class="fa-solid fa-circle-exclamation"></i> &nbsp; Please enter your name </div></div>';
        }

        if(preg_match_all($reg2, $email)){
            $mesg5 = '';
        }else{
            $mesg5 = '<div id="ferr"><div class="error"> <i class="fa-solid fa-circle-exclamation"></i> &nbsp; Please enter your email </div></div>';
        }

        if(preg_match_all($reg3, $password)){
            $mesg6 = '';
        }else{
            $mesg6 = '<div id="ferr"><div class="error"> <i class="fa-solid fa-circle-exclamation"></i> &nbsp; Please enter your password </div></div>';
        }

        if($password == $cpassword){
            $mesg7 = '';
        }else{
            $mesg7 = '<div id="ferr"><div class="error"> <i class="fa-solid fa-circle-exclamation"></i> &nbsp; Please confirm your password </div></div>';
        }

        if(preg_match_all($reg4, $mobile)){
            $mesg8 = '';
        }else{
            $mesg8 = '<div id="ferr"><div class="error"> <i class="fa-solid fa-circle-exclamation"></i> &nbsp; Please enter your mobile </div></div>';
        }

        if(!($date == '')){
            $mesg9 = '';
        }else{
            $mesg9 = '<div id="ferr"><div class="error"> <i class="fa-solid fa-circle-exclamation"></i> &nbsp; Please enter your birth date </div></div>';
        }

        if($mesg1 == '' & $mesg2 == '' & $mesg3 == '' & $mesg4 == '' & $mesg5 == '' & $mesg6 == '' & $mesg7 == '' & $mesg8 == '' & $mesg9 == ''){
            $_SESSION['record']=array(
                'first_name'=> $fname,
                'middle_name'=> $mname,
                'last_name'=>$lname,
                'family_name'=> $yname,
                'email'=> $email,
                'password'=> $password,
                'password_confirm'=> $cpassword,
                'mobile'=> $mobile,
                'date'=>$date
            );
    
            header('location: login.php');
        }

        /***********************************************************/

        $bdate = new DateTime($date);
        $now   = new DateTime('today');
      
        $year = $bdate -> diff($now) -> y;
       
        // echo "your age is: " . $year;

        /***********************************************************/




        // $x=$_SESSION["x"];
        // if($_SESSION["x"]){
        //     $jo = "DONE!";
        //     $_SESSION["x"]=0;
        // }else{
        //     $jo = "abc test!";
        //     $_SESSION["x"]=1;
        // }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/aca8d5a1fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signup.css">
    <title>Sign UP</title>
</head>
<body>
<div class="main">
        <h1 class="head">
            Sign Up
        </h1>
        <p class="txt">
            Create an account, it's free
        </p>
        <form action="" method="post">
        <div>
            <div class="father"><!-- first name, middle name, last name, family name -->
                <div style="margin-right: 20px;">
                    <div class="label">
                        <label for="fname">first name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="fname" id="fname" placeholder="Enter Your First Name"><!-- required-->
                        <?php echo $mesg1 ?>
                    </div>
                </div>
                <div>
                    <div class="label">
                        <label for="mname">middle name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="mname" id="mname" placeholder="Enter Your Middle Name">
                        <?php echo $mesg2 ?>
                    </div>
                </div>
            </div>
            <div class="father">
                <div style="margin-right: 20px;">
                    <div class="label">
                        <label for="lname">last name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="lname" id="lname" placeholder="Enter Your Last Name">
                        <?php echo $mesg3 ?>
                    </div>
                </div>                <div>
                    <div class="label">
                        <label for="yname">family name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="yname" id="yname" placeholder="Enter Your Family Name">
                        <?php echo $mesg4 ?>
                    </div>
                </div>
            </div>
        </div>
            <div>
                <div class="label">
                    <label for="email">email</label>
                </div>
                <div class="input">
                    <input type="email" name="email" id="email" placeholder="Enter Your Email">
                    <?php echo $mesg5 ?>
                </div>
            </div>
            <div>
                <div class="label">
                    <label for="password">password</label>
                </div>
                <div class="input">
                    <input type="password" name="password" id="password" placeholder="Enter Your Password">
                    <?php echo $mesg6 ?>
                </div>
            </div>
            <div>
                <div class="label">
                    <label for="cpassword">confirm password</label>
                </div>
                <div class="input">
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Your Password">
                    <?php echo $mesg7 ?>
                </div>
            </div>
            <div>
                <div class="label">
                    <label for="mobile">mobile</label>
                </div>
                <div class="input">
                    <input type="tel" name="mobile" id="mobile" placeholder="Enter Your Mobile">
                    <?php echo $mesg8 ?>
                </div>
            </div>
            <div>
                <div class="label">
                    <label for="date">birth date</label>
                </div>
                <div class="input">
                    <input type="date" name="date" id="date" placeholder="Enter Your Birth Date">
                    <?php echo $mesg9 ?>
                </div>
            </div>
            <div>
                <button type="submit" name="submit" class="login">Sign UP</button>
            </div>
        </form>
        <p class="footer">
            Already have an account? <a href="login.php"><b>Login</b></a>
        </p>
    </div>
</body>
</html>