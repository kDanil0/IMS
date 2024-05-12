<?php
    require_once 'access.php';    
    require_once('dbConf.php');
    
    $id = $_GET['GetID'];
    $sql = " select * from product where id='".$id."'";
    $result = mysqli_query($con,$sql);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $name = $row['prdName'];
        $category = $row['prdCategory'];
        $brand = $row['prdBrand'];
        $qty = $row['prdQty'];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/edit.css" rel="stylesheet" type="text/css"/>
    <title>Edit</title>
</head>
<body>
    <div class="container">
        <h1>EDIT PRODUCT</h1>
        <form action="update.php?ID=<?php echo $id ?>" method="POST" class="form-container">
            <input type="text" name="prodName" placeholder="Product Name" required value="<?php echo $name ?>">
            <input type="text" name="prodBrand" placeholder="Product Brand" required value="<?php echo $brand ?>">
            <input type="number" name="prodQty" placeholder="Quantity" required value="<?php echo $qty ?>">
            <button name="btnUpdate">Update</button>
        </form>
    </div>
</body>
</html>