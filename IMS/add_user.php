<?php
    require_once 'access.php';
    session_start();
    include 'dbConf.php';

    if(isset($_POST['btnAdd'])){
        $fName = $_POST['fname'];
        $lName = $_POST['lname'];
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $repeatPassword = $_POST['rptpass'];
        $email = $_POST['email'];
        $usertype = $_POST['userType'];

        // checking if password match
        if ($password != $repeatPassword) {
            $_SESSION['error'] = "Password do not match";
            header('location: register.php');
            exit();
        }

        // check if username already exists
        $chkUser = "SELECT * FROM users WHERE username = '$username'";
        $chkUserResult = mysqli_query($con,$chkUser);
        if (mysqli_num_rows($chkUserResult) > 0) {
            $_SESSION['error'] = "username is already taken";
            header('location: register.php');
            exit();
        }

        // Check if email already exists
        $chkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
        $chkEmailResult = mysqli_query($con, $chkEmailQuery);
        if (mysqli_num_rows($chkEmailResult) > 0) {
            $_SESSION['error'] = "Email is already taken";
            header('location: register.php');
            exit();
        }
        else
        {
            $sql = "INSERT INTO `users` (`f_name`, `l_name`, `username`, `password`, `email`, `usertype`) VALUES ('$fName', '$lName', '$username', '$password', '$email', '$usertype')";
            $result= mysqli_query($con,$sql);

            if($result)
            {
                $_SESSION['status'] = "Account successfully created";
                header('location: login.php');
            }
            
            else
            {
                $_SESSION['error'] = "Failed to create an account";
                header('location: login.php');
                exit();
            }
        
        }

        

        
    }

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$user' and password = '$pass'";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        session_start();
        $row=mysqli_fetch_assoc($result);

        $_SESSION['user']=$row;

        if($row['usertype'] == 'admin')
        {
            header("Location: admin/index.php");
        }
        else{
            header("Location: user_index.php");
        }
    }

    else
    {
        $_SESSION['error'] = "User not found";
        header("Location: login.php");
        exit;
    }
}
    
?>
