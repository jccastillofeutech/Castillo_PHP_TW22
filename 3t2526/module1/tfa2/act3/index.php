<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formative 2 - Act 3 - Looping Statements</title>
</head>
<body>
    <div class="output">
        <?php
        for ($i = 0; $i <= 9; $i++) {
            for ($j = 0; $j <= 9; $j++) {
                echo $i . $j . ", ";
            }
        }
        ?>
    </div>
</body>
</html>