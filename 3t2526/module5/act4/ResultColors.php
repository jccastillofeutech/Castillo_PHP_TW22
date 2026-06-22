<?php
    session_start();
        $_SESSION['color1'] = $_POST['color1'];
        $_SESSION['color2'] = $_POST['color2'];
        $_SESSION['color3'] = $_POST['color3'];
        $_SESSION['color4'] = $_POST['color4'];
        $_SESSION['color5'] = $_POST['color5'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Color Result</title>
</head>
<body>
    <div class="container">
        <h2>Your Favorite Colors</h2>
        
 <div class="palette">
        <div class="color-box">
            <p>My Favorite Color 1</p>
            <div class="color" style="background: <?= $_SESSION['color1'] ?>"></div>
        </div>

        <div class="color-box">
            <p>My Favorite Color 2</p>
            <div class="color" style="background: <?= $_SESSION['color2'] ?>"></div>
        </div>

        <div class="color-box">
            <p>My Favorite Color 3</p>
            <div class="color" style="background: <?= $_SESSION['color3'] ?>"></div>
        </div>

        <div class="color-box">
            <p>My Favorite Color 4</p>
            <div class="color" style="background: <?= $_SESSION['color4'] ?>"></div>
        </div>

        <div class="color-box">
            <p>My Favorite Color 5</p>
            <div class="color" style="background: <?= $_SESSION['color5'] ?>"></div>
        </div>
    </div>

    </div>
</body>
</html>