<?php
    require_once 'access.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/register.css">
    <title>Register</title>
</head>
<body>
    <form action="add_admin.php" method="POST">
        <div class="form-container">
            <h1>Add an Admin</h1>
            
            <!--SUCCESS ALERT-->
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

                if(isset($_SESSION['status']))
                {
                ?>
                    <div class="success">
                        <b>Success:</b> <?php echo $_SESSION['status']; ?>
                    </div>

                <?php
                    unset($_SESSION['status']);
                }
            ?> 
        
            <div class="upper">
                <label for="name" class="name">
                    <h5>Full Name</h5>
                    <input type="text" name="fname" placeholder="First Name" required>
                    <input type="text" name="lname" placeholder="Last Name" required>
                </label>
                
                <label for="username">
                    <h5>Username</h5>
                    <input type="text" name="user" placeholder="enter your username" required>
                </label>

                <label for="password" class="password">
                    <h5>Password</h5>
                    <input type="password" name="pass" placeholder="password" required>
                    <input type="password" name="rptpass" placeholder="repeat password" required>
                </label>

                <label for="e-mail">
                    <h5>Email</h5>
                    <input type="email" name="email" placeholder="enter a valid e-mail" required>
                </label>

                <input type="hidden" name="userType" value="admin">
            </div>

            <div class="lower">
                <input name="btnAdd" type="submit" value="Add">
                <a href="index.php">Cancel</a>
            </div>
        </div>
    </form>
         

</body>
</html>