<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
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
                <button type="submit" class="login">Login</button>
            </div>
        </form>
        <p class="footer">
            Don't have an account? <a href="signup.php"><b>Sign UP</b></a>
        </p>
    </div>
</body>
</html>