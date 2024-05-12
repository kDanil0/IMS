<?php
    include 'dbConf.php';
    session_start();
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

        if(isset($_SESSION['success']))
        {
        ?>
            <div class="success">
                <b>Success:</b> <?php echo $_SESSION['success']; ?>
            </div>
        <?php
            unset($_SESSION['success']);
        }
    ?> 
    <div class="header">
        <div class="user-profile">
            <i class="ri-admin-fill"></i>
            <div class="username-text">
                <?php
                    if (isset($_SESSION['user'])) {
                        $user = $_SESSION['user'];
                        echo $user['f_name'] . ' ' . $user['l_name'];
                    } else {
                        header("Location: ../login.php");
                        exit; 
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="sidebar">
                <button class="btn-add-item" onclick="togglePopup()">
                    ADD ITEM
                </button>
                <a href="admins.php">
                    <button class="btn-add-item">
                        ADD ADMIN
                    </button>
                </a>
                <div id="popupOverlay" class="overlay-container"> 
                    <div class="popup-box"> 
                        <h2 style="color: green;">ADD ITEM</h2> 
                        <form action="add.php" method="POST" class="form-container"> 

                            <label class="form-label" for="productName"> Product Name: </label> 
                            <input class="form-input" type="text" id="productName" name="prdName"> 
  
                            <label class="form-label" for="Category">Category</label> 
                            <select name="prdCategory" id="brands">
                                <option value="Monitor">Monitor</option>
                                <option value="Mouse">Mouse</option>
                                <option value="GPU">GPU</option>
                                <option value="Ram">RAM</option>
                                <option value="Motherboard">Motherboard</option>
                            </select>
 

                            <label class="form-label" for="Brand">Brand</label>
                            <input class="form-input" type="text" id="Brand" name="prdBrand"> 

                            <label class="form-label" for="Quantity">Quantity</label> 
                            <input class="form-input" type="number" id="Quantity" name="prdQty"> 
  
                            <button class="btn-submit" name="btnAdd" type="submit"> ADD ITEM </button>                        

                        </form> 

                        <button class="btn-close-popup" onclick="togglePopup()"> Close </button>
                        
                    </div> 
                </div> 

                <a href="logout.php"><i class="ri-logout-box-line">Sign out</i></a>
        </div>
        
        
    <div class="main">
        <a href="c_monitor.php" class="categories">
            <div>
                <img src="assets/imgs/monitor.png" class="img">
                <div class="name-txt">MONITOR</div>
            </div>
        </a> 

        <a href="c_mouse.php" class="categories">
            <div>
                <img src="assets/imgs/mouse.png" class="img">
                <div class="name-txt">MOUSE</div>
            </div>
        </a> 

        <a href="c_gpu.php" class="categories">
            <div>
                <img src="assets/imgs/gpu.png" class="img">
                <div class="name-txt">GPU</div>
            </div>
        </a> 

        <a href="c_ram.php" class="categories">
            <div>
                <img src="assets/imgs/ram.png" class="img">
                <div class="name-txt">Memory</div>
            </div>
        </a> 

        <a href="c_mobo.php" class="categories">
            <div>
                <img src="assets/imgs/motherboard.png" class="img">
                <div class="name-txt">Motherboard</div>
            </div>
        </a> 

        
    </div>


        <script> 
            function togglePopup() { 
                const overlay = document.getElementById('popupOverlay'); 
                overlay.classList.toggle('show'); 
            } 
        </script> 
</body>
</html>