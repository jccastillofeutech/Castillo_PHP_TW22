<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Technical 5 - Web Forms - Lab Activity 1 - GET</title>
</head>
<body>
    <div class="container">
        <form method="get">
            <input name="first" placeholder="First Name"><br>
            <input name="middle" placeholder="Middle Name"><br>
            <input name="surn" placeholder="Last Name"><br>
            <input name="bday" placeholder="Date of Birth"><br>
            <input name="addy" placeholder="Address"><br>
            <button name="get">Submit</button>
        </form>
        <br>
        <h3>Personal Information</h3>
        <?php
            if(isset($_GET['get'])){
                echo "<p>First Name: ".$_GET['first']."</p>";
                echo "<p>Middle Name: ".$_GET['middle']."</p>";
                echo "<p>Last Name: ".$_GET['surn']."</p>";
                echo "<p>Date of Birth: ".$_GET['bday']."</p>";
                echo "<p>Address: ".$_GET['addy']."</p>";
            }
        ?>
    </div>
</body>
</html>