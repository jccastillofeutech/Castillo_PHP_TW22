<?php
    if(isset($_POST['post'])){
        setcookie("first", $_POST['first'], time()+10);
        setcookie("middle", $_POST['middle'], time()+20);
        setcookie("surn", $_POST['surn'], time()+30);
        setcookie("bday", $_POST['bday'], time()+30);
        setcookie("addy", $_POST['addy'], time()+30);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Technical 5 - Web Forms - Personal Info With Cookies</title>
</head>
<body>

<div class="container">
    <form method="post">
        <input name="first" placeholder="First Name"><br>
        <input name="middle" placeholder="Middle Name"><br>
        <input name="surn" placeholder="Last Name"><br>
        <input name="bday" placeholder="Date of Birth"><br>
        <input name="addy" placeholder="Address"><br>
        <button name="post">Submit</button>
    </form>

    <br>
    <h3>Personal Information</h3>

    <?php  
        if(isset($_POST['post']) && 
        (!isset($_COOKIE['first']) || 
            !isset($_COOKIE['middle']) || 
            !isset($_COOKIE['surn']) || 
            !isset($_COOKIE['bday']) || 
            !isset($_COOKIE['addy']))){
            echo "<p>Loading information...</p>";
        }


        if(isset($_COOKIE['first'])){
            echo "<p>First Name: ".$_COOKIE['first']."</p>";
        }

        if(isset($_COOKIE['middle'])){
            echo "<p>Middle Name: ".$_COOKIE['middle']."</p>";
        }

        if(isset($_COOKIE['surn'])){
            echo "<p>Last Name: ".$_COOKIE['surn']."</p>";
        }
        if(isset($_COOKIE['bday'])){
            echo "<p>Date of Birth: ".$_COOKIE['bday']."</p>";
        }
        if(isset($_COOKIE['addy'])){
            echo "<p>Address: ".$_COOKIE['addy']."</p>";
        }
    ?>
</div>
</body>
</html>