<?php
    session_start();
    require_once('dbConf.php');

    if(isset($_POST['btnAdd'])){
        $name = $_POST['prdName'];
        $category = $_POST['prdCategory'];
        $brand = $_POST['prdBrand'];
        $qty = $_POST['prdQty'];

        $sql = "INSERT INTO `product`(`id`, `prdName`, `prdCategory`, `prdBrand`, `prdQty`) VALUES ('$id', '$name', '$category', '$brand', '$qty')";
        $result= mysqli_query($con,$sql);

        if($result){
            $_SESSION['success'] = "Product successfully added!";
            header('location:index.php');
            exit();
        }
        
        else{
            $_SESSION['error'] = "There's something wrong in adding the product";
            header('location:index.php');
            exit();
        }
    }
    else{
        header('location:index.php');
    }

    
?>
