<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <title>TechStop</title>
</head>
<body>
    <div class="title">
        <h1>Inventory <br> Manager</h1>
    </div>

    <div class="login-form">
        <div class="form-container">
            <?php
                if(isset($_SESSION['error']))
                {
                ?>
                    <div class="alert">
                        <b>Error:</b> <?php echo $_SESSION['error']; ?>
                    </div>

                <?php
                    unset($_SESSION['error']);
                }
            ?> 
            <form action="add_user.php" method="POST">
                <label for="login" class="login">
                    <p>USERNAME</p>
                    <input type="text" name="username">

                    <p>PASSWORD</p>
                    <input type="password" name="password">
                </label>
                
                <div class="bottom">
                    <input type="submit" name="login" value="Login" class="btn-submit">
                    <a href="register.php">Create account</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>