<?php
    $flagMessage = null;
    session_start();
    
    if(isset($_SESSION['username']) && isset($_SESSION['password'])
        && $_SESSION['username'] != "plop" && $_SESSION['password'] != "123") {
            header('location:forms.php');
    }

    if(isset($_POST['username']) && isset($_POST['password'])) {
        if($_POST['username'] == "plop" && $_POST['password'] == "123") {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header('location:forms.php');
        } else {
            $flagMessage = "Invalid credentials";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <H1>Login</H1>
    <?php
        if($flagMessage != null)
        {
            ?>
                <div style="color:red;">
                    <?php echo $flagMessage; ?>
                </div>
            <?php
        }
    ?>
    <form action="login.php" method="POST">
        Username: <input type="text" placeholder="Username" name="username">
        Password: <input type="password" placeholder="Password" name="password">
        <input type="checkbox" name="remeberMe"> Remember me
        <input type="submit" value="Send"> 
    </form>
</body>
</html>