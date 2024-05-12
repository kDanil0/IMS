<?php
    require_once 'access.php';
    require_once('dbConf.php');

    if(isset($_POST['btnUpdate']))
    {
        $id = $_GET['ID'];
        $name = $_POST['prodName'];
        $brand = $_POST['prodBrand'];
        $qty = $_POST['prodQty'];

        $sql = "UPDATE product SET prdName='".$name."', prdBrand='".$brand."', prdQty='".$qty."' WHERE id='".$id."'";
        $result = mysqli_query($con,$sql);

         if($result)
         {
            $categorysql = "SELECT prdCategory FROM product WHERE id='".$id."'";
            $categoryResult = mysqli_query($con,$categorysql);
            $row = mysqli_fetch_assoc($categoryResult);
            $category = $row['prdCategory'];

            header("Location: c_".strtolower($category). ".php");
            exit();
         }
         else
         {
            echo ' Error updating product ';
         }

    }
    else
    {
        header("Location:index.php");
    }
?>