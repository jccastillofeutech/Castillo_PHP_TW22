<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $firstname = "Jade Carlos";
        $lastname = "Castillo";
        $middleinit = "A.";
        $image = "Castillo.png";

        $result = 94;
        $rank = "";

        if ($result >= 93 && $result <= 100) $rank = "A";
        elseif ($result >= 90) $rank = "A-";
        elseif ($result >= 87) $rank = "B+";
        elseif ($result >= 83) $rank = "B";
        elseif ($result >= 80) $rank = "B-";
        elseif ($result >= 77) $rank = "C+";
        elseif ($result >= 73) $rank = "C";
        elseif ($result >= 70) $rank = "C-";
        elseif ($result >= 67) $rank = "D+";
        elseif ($result >= 63) $rank = "D";
        elseif ($result >= 60) $rank = "D-";
        else $rank = "F";
    ?>

    <div class="container">
        <img src="<?php echo $image; ?>" alt="Profile Image">
        <div class="info">
            <h3>Name: <?php echo "$firstname $middleinit $lastname"; ?></h3>
            <h3>Grade: <?php echo $result; ?></h3>
            <h3>Rank: <?php echo $rank; ?></h3>
        </div>
    </div>
</body>
</html>