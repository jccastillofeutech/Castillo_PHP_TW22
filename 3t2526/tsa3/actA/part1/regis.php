<?php 
    session_start();
    if(isset($_SESSION['user'])){
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Register Information</title>
</head>
<body>
    <div class="container">
        <form method="post">
            <input name="first" placeholder="First Name"><br>
            <input name="middle" placeholder="Middle Name"><br>
            <input name="surn" placeholder="Last Name"><br>
            <input name="user" placeholder="Username"><br>

            <input type="password" name="pass" placeholder="Password"><br>
            <input type="password" name="conf" placeholder="Confirm Password"><br>

            <input name="bday" placeholder="Birthday"><br>
            <input name="email" placeholder="E-mail"><br>
            <input name="connum" placeholder="Contact Number"><br>
            <button name="post">Submit</button>
        </form>
        <br>
        <h3>Register Information</h3>
        <?php
            if(isset($_POST['post'])){

                $npass = $_POST['pass'];
                $cpass = $_POST['conf'];
                
                $full = trim($_POST['first']) . " " . trim($_POST['middle']) . " " . trim($_POST['surn']);
                $full = preg_replace('/\s+/', ' ', trim($full));

                if($npass == $cpass){
                    echo "<p>Full Name: " . $full . "</p>";
                    echo "<p>Username: " .$_POST['user']."</p>";
                    echo "<p>Password: ".$_POST['pass']."</p>";
                    echo "<p>Date of Birth: ".$_POST['bday']."</p>";
                    echo "<p>Email: ".$_POST['email']."</p>";
                    echo "<p>Contact Number: ".$_POST['connum']."</p>";
                } else {
                    echo "Error: Password entries do not match";
                }
            }
        ?>
    </div>
</body>
</html>