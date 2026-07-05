<?php 
    session_start();
    include "sqlconn.php";
    if(!isset($_SESSION['user'])){
        header("Location: login-3.php");
        exit();
    }
    $message = "";
    $type = "";

    if(isset($_POST['submit'])){
        $npass = $_POST['pass'];
        $cpass = $_POST['conf'];
        
        $full = trim($_POST['first']) . " " . trim($_POST['middle']) . " " . trim($_POST['surn']);
        $full = preg_replace('/\s+/', ' ', trim($full));

        if($npass == $cpass){
            $user = $_POST['user'];
            $bday = $_POST['bday'];
            $email = $_POST['email'];
            $connum = $_POST['connum'];

            $sql = "INSERT INTO users(fullname, username, password, birthday, email, contactnum)
            VALUES ('$full', '$user', '$npass', '$bday', '$email', '$connum')";

            if(mysqli_query($conn, $sql)){
                $message = "Registration Successful";
                $type = "success";
            } else {
                $message = "Error: " . mysqli_error($conn);
                $type = "error";
            }

            
        } else {
            $message = "Error: Passwords do not match";
            $type = "error";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-2.css">
    <title>Register Information</title>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        
        <?php
            if($message != ""){
                echo "<div class='$type'>$message</div>";
            }
        ?>

        <form method="post">
            <input name="first" placeholder="First Name"><br>
            <input name="middle" placeholder="Middle Name"><br>
            <input name="surn" placeholder="Last Name"><br>
            <input name="user" placeholder="Username"><br>

            <input type="password" name="pass" placeholder="Password"><br>
            <input type="password" name="conf" placeholder="Confirm Password"><br>
            <input type = "date" name="bday" placeholder="Birthday"><br>

            <input name="email" placeholder="E-mail"><br>
            <input name="connum" placeholder="Contact Number"><br>
            <button name="submit">Submit</button>
        </form>
        <br>
        <?php
            if(isset($_POST['post'])){
                echo "<hr>";
                echo "<h3>Register Information</h3>";
                echo "<p>Full Name: $full</p>";
                echo "<p>Username: " .$_POST['user']."</p>";
                echo "<p>Password: ".$_POST['pass']."</p>";
                echo "<p>Date of Birth: ".$_POST['bday']."</p>";
                echo "<p>Email: ".$_POST['email']."</p>";
                echo "<p>Contact Number: ".$_POST['connum']."</p>";
            }
        ?>
    </div>
</body>
</html>