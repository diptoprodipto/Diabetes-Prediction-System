<?php
    session_start();
    include ("conn.php");
    $userprofile = $_SESSION['email'];
    
    if($userprofile==true && $userprofile!='admin@gmail.com')
    {
        
    }
    else
    {
        //session_unset();
        header("location: login.php");
    }

    $q = "SELECT * FROM users WHERE email='$userprofile'";
    $data = mysqli_query($conn,$q);
    $result = mysqli_fetch_assoc($data);
