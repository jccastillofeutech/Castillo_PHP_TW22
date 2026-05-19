<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Summative 2 - Lab Activity Part 1</title>
</head>
<body>
    <?php 
        $id = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $name = array(
            "Apple",
            "Banana",
            "Mango",
            "Orange",
            "Avocado",
            "Pomegranate",
            "Lemon",
            "Pineapple",
            "Strawberry",
            "Blueberry"
        );

        $images = array(
            "apple.png",
            "banana.png",
            "mango.png",
            "orange.png",
            "avocado.png",
            "pomegranate.png",
            "lemon.png",
            "pineapple.png",
            "strawberry.png",
            "blueberry.png"
        );
        
        $description = array(
            "Red Crisp",
            "Soft Yellow",
            "Juicy Tropical",
            "Bright Citrus",
            "Creamy Green",
            "Seeded Ruby",
            "Zesty Tang",
            "Spiky Juicy",
            "Sweet Red",
            "Small Blue"
        );

        $facts = array(
            "Some apples are covered in wax to increase its quality and texture",
            "Old era bananas used to have huge seeds inside of them",
            "It is very known as the 'king of fruits' in many countries like India",
            "Has a rich source of vitamin C and is the most common citrus fruit to have it",
            "Contains healthy fats that are beneificial to the heart and skin",
            "It contains hundreds of edible seeds called arils and its shell is mostly hard",
            "Very helpful in metallic kitchen tools where if mixed with baking soda, it removes rust efficiently",
            "It contains bromelain, which is an enzyme that break down protein",
            "Mostly has seeds on the outside, and some are sour in taste",
            "Gets its blue color from powerful antioxidants"
        );
    ?>

    <table>
        <tr>
            <td colspan="6" class="header">My Fruits</td>
        </tr>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>

        <?php for ($i = 0; $i < count($images); $i++) { ?>
            <tr>
                <td><img src="../images/<?php echo $images[$i]; ?>" alt="placeholder-image"></td>
                <td><?php echo $name[$i]; ?></td>
                <td><?php echo $description[$i]; ?></td>
                <td><?php echo $facts[$i]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>