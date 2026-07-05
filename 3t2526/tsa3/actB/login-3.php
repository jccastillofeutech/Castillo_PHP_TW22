<?php 
    session_start();

    include "sqlconn.php";

    $error = "";


    if(isset($_POST['login'])) {
        $user = $_POST['user'];
        $npass = $_POST['pass'];

        $sql = "SELECT * FROM users WHERE username='$user' AND password='$npass'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $_SESSION['user'] = $user;

            header("Location: home-2.php");
            exit();
        }else{
            $error = "<p>Error: Invalid name or password</p>";
            $type = "error";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-2.css">
    <title>Log-in</title>
</head>
<body>
    <div class="container">
        <?php 
            if($error != ""){
                echo "<div class='$type'>$message</div>";
            }
        ?>
        <form method="post">
            <input type="text" name="user" placeholder="Username" value="<?php echo $_COOKIE['username'] ?? '' ?>">
            <input type="password" name="pass" placeholder="Password" value="<?php echo $_COOKIE['password'] ?? '' ?>"><br>
            <button name="login">Login</button>
        </form>
    </div>
</body>
</html>