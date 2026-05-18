<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formative 4 - Lab Activity Part 1</title>
</head>
<body>
    <div class="header">
        <h1>My Friends' Autobiography</h1>
    </div>
    <table>
        <tr>
            <td><?php require('friend1.php')?></td>
            <td><?php include('friend2.php')?></td>
            <td><?php require('friend3.php')?></td>
            <td><?php include('friend4.php')?></td>
            <td><?php require('friend5.php')?></td>
        </tr>
    </table>
</body>
</html>