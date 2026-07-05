<?php 
    session_start();
    include "sqlconn.php";
    if(!isset($_SESSION['user'])){
        header("Location: login-3.php");
        exit();
    }

    $user = $_SESSION['user'];
    $sql = "SELECT * FROM users where username='$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-2.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h2>Home Page</h2>
        <p>Welcome, <?php echo $row['fullname']; ?>!</p>
        <p>Birthday: <?php echo $row['birthday']; ?></p>
        <p>Contact Details</p><br>
        <p>Email: <?php echo $row['email']; ?></p>
        <p>Contact Number: <?php echo $row['contactnum']; ?></p>
        <a href="logout-2.php"><button>Log Out</button></a>
        <a href="reset.php"><button>Reset Password</button></a>
    </div>
</body>
</html>