<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical 5 - Web Forms - Favorite Color With Session Calls</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Pick your Favorite Colors</h2>

        <form action="ResultColors.php" method="post">
            <input name="color1" placeholder="Color 1"><br>
            <input name="color2" placeholder="Color 2"><br>
            <input name="color3" placeholder="Color 3"><br>
            <input name="color4" placeholder="Color 4"><br>
            <input name="color5" placeholder="Color 5"><br>

            <button>Send Colors</button>
        </form>
    </div>
</body>
</html>