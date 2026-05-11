<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Multiplication Table</title>
</head>
<body>
    <h3>MULTIPLICATION TABLE</h3>
    <table>
        <?php 
            for ($i = 0; $i <= 10; $i++) {
                echo "<tr>";

                for($j = 0; $j <= 10; $j++) {
                    $multitable = $i * $j;

                    if(($i + $j) % 2 == 0){
                        $color = "lime";
                    } else {
                        $color = "gold";
                    }
                    echo "<td class = '$color'>$multitable</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>