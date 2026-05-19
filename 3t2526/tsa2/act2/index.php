<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Summative 2 - Lab Activity Part 2</title>
</head>
<body>
    <?php 
        $s = 6;

        $l = 4;
        $w = 8;
        $h = 3;

        $r1 = 5;
        $h1 = 12;
        $r2 = 7;
        $h2 = 14;

        $r3 = 9;

        function volCube($s){
            return pow($s, 3);
        }

        function volRightRecPrism($l, $w, $h){
            return $l * $w * $h;
        }

        function volCylinder($r, $h){
            return pi() * pow($r, 2) * $h;
        }

        function volCone($r, $h){
            return (1/3) * pi() * pow($r, 2) * $h;
        }

        function volSphere($r){
            return (4/3) * pi() * pow($r, 3);
        }

    ?>
    
    <table>
        <tr>
            <td colspan="6" class="header">Volume of Shapes</td>
        </tr>
        <tr>
            <th>Values</th>
            <th>Formula</th>
            <th>Answer</th>
        </tr>
        <tr>
            <td>s = 5</td>
            <td>V = s³</td>
            <td><?php echo volCube($s) ?></td>
        </tr>
        <tr>
            <td>l = 4, w = 8, h = 3</td>
            <td>V = lwh</td>
            <td><?php echo volRightRecPrism($l, $w, $h) ?></td>
        </tr>
        <tr>
            <td>r = 5, h = 12</td>
            <td>V = πr²h</td>
            <td><?php echo volCylinder($r1, $h1) ?></td>
        </tr>
        <tr>
            <td>r = 7, h = 14</td>
            <td>V = πr²h/3</td>
            <td><?php echo volCone($r2, $h2) ?></td>
        </tr>
        <tr>
            <td>r = 9</td>
            <td>V = 4/3πr³</td>
            <td><?php echo volSphere($r3) ?></td>
        </tr>
    </table>
</body>
</html>