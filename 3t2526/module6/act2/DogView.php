<?php 
    $server = "localhost";
    $user = "root";
    $pwd = "";
    $data = "db_doginfo";

     $link = mysqli_connect($server, $user, $pwd, $data);

     if(!$link){
        die("Error " . mysqli_connect_error());
     }

     $sql = "SELECT * FROM dogs";
     $result = mysqli_query($link, $sql)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Formative 5 - Part 2 - Dog Display</title>
</head>
<body>
    <div class="container">
        <h4>Dog Records</h4>
        <?php 
            $n = 1;
            while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="card">
            <p><strong>Dog <?php echo $n; ?></strong></p>
            <p>Name: <?php echo $row['name']; ?></p>
            <p>Breed: <?php echo $row['breed']; ?></p>
            <p>Age: <?php echo $row['age']; ?></p>
            <p>Address: <?php echo $row['addy']; ?></p>
            <p>Color: <?php echo $row['color']; ?></p>
            <p>Height (in ft): <?php echo $row['height']; ?></p>
            <p>Weight (in lbs): <?php echo $row['weight']; ?></p>
        </div>
        <?php 
            $n++;
            }
            mysqli_close($link);
        ?>
    </div>
</body>
</html>