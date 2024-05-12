<?php
    require_once 'access.php';
    require_once('dbConf.php');

    $sql = "SELECT * FROM `product` WHERE prdCategory = 'monitor'";
    $result = mysqli_query($con,$sql);

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
            
            <h1>MONITOR</h1>
            
            <a href="index.php"><button class="btnHome" ><i class="ri-arrow-go-back-line"></i></button></a>
                   
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
                        <td>
                            <a href="edit.php?GetID=<?php echo $id ?>"><button name='btnEdit'><i class='ri-edit-box-line'></i></button></a>
                            
                            <button name='btnDelete' onclick="confirmDelete(<?php echo $id?>, '<?php echo $category?>')"><i class='ri-delete-bin-line'></i></button>
                        </td>
                    </tr>
                    
            <?php

                    }
            ?>
            
        </table>

        <script>
            function confirmDelete(id, category) {
                if (confirm('Are you sure you want to delete this product?')) {
                    window.location.href = 'delete.php?Del=' + id + '&Category=' + category;
                }
            }
        </script>

        

    </div>

    <script> 
        function togglePopup() { 
            const overlay = document.getElementById('popupOverlay'); 
            overlay.classList.toggle('show'); 
        } 
    </script> 
</body>
</html>