<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h2>Home Page</h2>
        <p>Welcome, <?php echo $_SESSION['user']; ?>!</p>

        <a href="logout.php"><button>Log Out</button></a>
    </div>
</body>
</html>