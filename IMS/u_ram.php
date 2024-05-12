<?php
    require_once 'access.php';
    require_once('dbConf.php');

    $sql = "SELECT * FROM `product` WHERE prdCategory = 'Ram'";
    $result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    <link rel="stylesheet" href="styles/categories.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor</title>
</head>
<body>
    <div class="main">
        <header>
            
            <h1>RAM</h1>
            
            <a href="user_index.php"><button class="btnHome" ><i class="ri-arrow-go-back-line"></i></button></a>
                   
        </header>

        <table>
            <tr>
                <th>Product</th>
                <th>Brand</th>
                <th>Quantity</th>                    
            </tr>
            
            <?php

                    while($row=mysqli_fetch_assoc($result))
                    {
                        $id = $row['id'];
                        $name = $row['prdName'];
                        $category = $row['prdCategory'];
                        $brand = $row['prdBrand'];
                        $qty = $row['prdQty'];
            ?>
                    <tr>
                        <td><?php echo $name ?></td>
                        <td><?php echo $brand ?></td>
                        <td><?php echo $qty ?></td>
                    </tr>
                    
            <?php

                    }
            ?>
            
        </table>
    </div>
</body>
</html>