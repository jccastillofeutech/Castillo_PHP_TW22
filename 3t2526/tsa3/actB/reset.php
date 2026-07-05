<?php 
    session_start();
    include "sqlconn.php";

    if(!isset($_SESSION['user'])){
        header("Location: login-3.php");
        exit();
    }

    $message = "";
    $type = "";

    if(isset($_POST['reset'])){

        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];
        $renew = $_POST['renew'];

        $user = $_SESSION['user'];

        $scan = mysqli_query($conn, "SELECT * from users WHERE username='$user' AND password='$oldpass'");

        if(mysqli_num_rows($scan) == 0){
            $message = "Error: Passwords do not match for the new password process";
            $type = "error";
        }elseif($newpass != $renew){
            $message = "Error: Passwords do not match for confirming new password";
            $type = "error";
        }else{
            mysqli_query($conn, "UPDATE users SET password='$newpass' WHERE username='$user'");
            $message = "Password changed successfully";
            $type = "success";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-2.css">
    <title>Reset Password</title>
</head>
<body>
    <div class="container">

        <h2>Reset Password</h2>

        <?php 
            if($message != ""){
                echo "<div class='$type'>$message</div>";
            }
        ?>
        <form method="post">
            <input type="password" name="oldpass" placeholder="Current Password"><br>
            <input type="password" name="newpass" placeholder="New Password"><br>
            <input type="password" name="renew" placeholder="Confirm Password"><br>
            <button name="reset">Reset Password</button>
        </form>
    </div>
</body>
</html>