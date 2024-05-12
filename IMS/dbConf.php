<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'inventory';

    $con = mysqli_connect($server, $user, $pass, $db);

    if(!$con){
        die("Connection Error");
    }
    
?>