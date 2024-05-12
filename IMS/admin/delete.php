<?php
    require_once 'access.php';
    require_once('dbConf.php');

    if(isset($_GET['Del']) && isset($_GET['Category']))
    {
        $id = $_GET['Del'];
        $category = $_GET['Category'];

        $sql = " DELETE from product WHERE id = '".$id."'";
        $result = mysqli_query($con,$sql);

        if($result)
        {
            header("Location: c_" . strtolower($category) . ".php");
            exit();
        }
        else
        {
            echo " Error in deleting the product ";
        }
    }
    else
    {
        header("Location:index.php");
    }
?>