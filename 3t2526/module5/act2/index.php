<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Technical 5 - Web Forms - Lab Activity 1 - POST</title>
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
            if(isset($_POST['post'])){
                echo "<p>First Name: ".$_POST['first']."</p>";
                echo "<p>Middle Name: ".$_POST['middle']."</p>";
                echo "<p>Last Name: ".$_POST['surn']."</p>";
                echo "<p>Date of Birth: ".$_POST['bday']."</p>";
                echo "<p>Address: ".$_POST['addy']."</p>";
            }
        ?>
    </div>
</body>
</html>