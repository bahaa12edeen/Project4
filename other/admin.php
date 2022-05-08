<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>
<body>
    <div class="main">
        <div>
            <h1>Welcome in Admin Page</h1>
        </div>
        <div class="image">
            <img src="image/admin.jpg" width="300px" alt="">
        </div>
        <div class="table">
            <table class="stri">
                <tr class="fr">
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>LAST DATE</th>
                <!-- <th></th> -->
                </tr>
                <tbody class="tbody">
                    <!-- <tr>
                        <td>1</td>
                        <td></?php echo $_SESSION['record']['first_name'].' '.$_SESSION['record']['middle_name'].' '.$_SESSION['record']['last_name'].' '.$_SESSION['record']['family_name']; ?></td>
                        <td></?php echo $_SESSION['record']['email']; ?></td>
                        <td></?php echo $_SESSION['record']['password']; ?></td>
                        <td></?php echo $_SESSION['now']; ?></td>
                    </tr> -->
                    <?php
                        for($i=0; $i < (count($_SESSION['record'])); $i++){
                            echo "
                                      <tr>
                                          <td>". ($i+1) ."</td>
                                          <td>". $_SESSION['record'][$i]['first_name'].' '.$_SESSION['record'][$i]['middle_name'].' '.$_SESSION['record'][$i]['last_name'].' '.$_SESSION['record'][$i]['family_name'] ."</td>
                                          <td>". $_SESSION['record'][$i]['email'] ."</td>
                                          <td>". $_SESSION['record'][$i]['password'] ."</td>
                                          <td>". $_SESSION['record'][$i]['now'] ."</td>
                                      </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div>
            <a class="out" href="../index.php">LogOut</a>
        </div>
    </div>
</body>
</html>