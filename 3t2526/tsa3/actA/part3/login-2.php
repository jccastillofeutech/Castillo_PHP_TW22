<?php 
    session_start();

    $ruser = "admin";
    $rpass = "12345";

    if(isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if(isset($_POST['rememberCookie'])) {
            setcookie("username", $user, time()+4000);
            setcookie("password", $pass, time()+4000);
        }

        if($user == $ruser && $pass == $rpass) {
            $_SESSION['username'] = $user;

            header("Location: home.php");
            exit();
        }else{
            echo "Error: Invalid name or password";
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
        <form method="post">
            <input type="text" name="user" placeholder="Username" value="<?php echo $_COOKIE['user'] ?? '' ?>">
            <input type="password" name="pass" placeholder="Password" value="<?php echo $_COOKIE['pass'] ?? '' ?>"><br><br>
            <label class="remember">
                <input type="checkbox" name="rememberCookie">Remember Me
            </label><br>
            <button name="login">Login</button>
        </form>
    </div>
</body>
</html>