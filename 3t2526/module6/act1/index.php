<?php
    $server = "localhost";
    $user = "root";
    $pwd = "";
    $data = "db_doginfo";
    $message = "";
    $type = "";

    $link = mysqli_connect($server, $user, $pwd, $data);

    if (!$link){
        die("Error: " . mysqli_connect_error());
    }

    if(isset($_POST['save'])) {
        $name = $_POST['name'];
        $breed = $_POST['breed'];
        $age = $_POST['age'];
        $addy = $_POST['addy'];
        $color = $_POST['clr'];
        $height = $_POST['h'];
        $weight = $_POST['w'];

        if (!is_numeric($height) || !is_numeric($weight)) {
            $message = "Height and weight must be in numbers.";
            $type = "error";
        }
        elseif ($height < 0.5 || $height > 3){
            $message = "Invalid height, range is 0.5 to 3 feet";
            $type = "error";
        } elseif ($weight < 1 || $weight > 200) {
            $message = "Invalid weight, range is 1 to 200 lbs";
            $type = "error";
        } else {
            $height = $height . " ft";
            $weight = $weight . " lbs";

             $sql = "INSERT INTO dogs (name, breed, age, addy, color, height, weight) VALUES 
            ('$name', '$breed', '$age', '$addy', '$color', '$height', '$weight')";

            if(mysqli_query($link, $sql)) {
                $message = "Successfully stored.";
                $type = "success";
            } else {
                $message = "Error: " . mysqli_error($link);
                $type = "error";
            }
            
        }
    }
    mysqli_close($link);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Formative 5 - Part 1 - Dog Information Forms</title>
</head>
<body>
    <div class="container">
        <img src="https://static.vecteezy.com/system/resources/previews/037/133/092/non_2x/a-brown-poodle-dog-head-on-a-transparent-background-free-png.png" alt="Dog Face">
        <h4>Dog Information</h4>
        
        <?php if(!empty($message)) { ?>
            <p class="message <?php echo $type; ?>">
                <?php echo $message; ?>
            </p>
        <?php } ?>

        <form method="post">
            <label>Name</label>
            <input type="text" name="name" required>
            <label>Breed</label>
            <select name="breed" required>
                <option value="">Select Breed</option>
                <option>Labrador</option>
                <option>Shih Tzu</option>
                <option>Chihuahua</option>
                <option>Golden Retriever</option>
                <option>Chow Chow</option>
                <option>Lhasa Apso</option>
            </select>
            <label>Age</label>
            <input type="text" name="age" required>
            <label>Address</label>
            <input type="text" name="addy" required>
            <label>Color</label>
            <select name="clr" required>
                <option value="">Select Color</option>
                <option>Brown</option>
                <option>Black</option>
                <option>White</option>
                <option>Pale Brown</option>
                <option>Corduroy</option>
                <option>Golden Brown</option>
            </select>
            <label>Height (in ft)</label>
            <input type="text" name="h" required>
            <label>Weight (in lbs)</label>
            <input type="text" name="w" required>
            <button type="submit" name="save">Save</button>
        </form>
    </div>
</body>
</html>