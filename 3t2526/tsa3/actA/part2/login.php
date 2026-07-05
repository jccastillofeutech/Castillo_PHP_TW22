<?php 
    session_start();

    $error = "";
    $ruser = "user123";
    $rpass = "12345";

    if(isset($_POST['login'])) {
        $user = $_POST['user'];
        $npass = $_POST['pass'];

        if(isset($_POST['rememberCookie'])) {
            setcookie("username", $user, time()+4000);
            setcookie("password", $npass, time()+4000);
        }

        if($user == $ruser && $npass == $rpass) {
            $_SESSION['user'] = $user;

            header("Location: home.php");
            exit();
        }else{
            $error = "<p>Error: Invalid name or password</p>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Log-in</title>
</head>
<body>
    <div class="container">
        <?php 
            if($error != ""){
                echo "<div class='error'>$error</div>";
            }
        ?>
        <form method="post">
            <input type="text" name="user" placeholder="Username" value="<?php echo $_COOKIE['username'] ?? '' ?>">
            <input type="password" name="pass" placeholder="Password" value="<?php echo $_COOKIE['password'] ?? '' ?>"><br><br>
            <label class="remember">
                <input type="checkbox" name="rememberCookie">Remember Me
            </label><br>
            <button name="login">Login</button>
        </form>
    </div>
</body>
</html>