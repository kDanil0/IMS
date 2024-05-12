<?php
    session_start();
    include('dbConf.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Inventory Management System for PC Parts</title>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link href="styles/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
        <link href="https://fonts.googleapis.com" rel="preconnect"/>
    </head>

<body class="body">
    <div class="header">
        <div class="user-profile">
            <i class="ri-account-circle-fill"></i>
            <div class="username-text">
                <?php
                    if (isset($_SESSION['user'])) {
                        $user = $_SESSION['user'];
                        echo $user['f_name'] . ' ' . $user['l_name'];
                    } else {
                        header("Location: login.php");
                        exit; 
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="sidebar">

                <a href="logout.php"><i class="ri-logout-box-line">Sign out</i></a>
        </div>
        

        
    <div class="main">
        <a href="u_monitor.php" class="categories">
            <div>
                <img src="assets/imgs/monitor.png" class="img">
                <div class="name-txt">MONITOR</div>
            </div>
        </a> 

        <a href="u_mouse.php" class="categories">
            <div>
                <img src="assets/imgs/mouse.png" class="img">
                <div class="name-txt">MOUSE</div>
            </div>
        </a> 

        <a href="u_gpu.php" class="categories">
            <div>
                <img src="assets/imgs/gpu.png" class="img">
                <div class="name-txt">GPU</div>
            </div>
        </a> 

        <a href="u_ram.php" class="categories">
            <div>
                <img src="assets/imgs/ram.png" class="img">
                <div class="name-txt">Memory</div>
            </div>
        </a> 

        <a href="u_mobo.php" class="categories">
            <div>
                <img src="assets/imgs/motherboard.png" class="img">
                <div class="name-txt">Motherboard</div>
            </div>
        </a> 

        
    </div>
</body>
</html>