<?php

    include 'conn.php';

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        
        $s = "select * from users where email = '$email'";
        $result = mysqli_query($conn,$s);
        $num = mysqli_num_rows($result);
        
        if($num == 1)
        {
            echo "<script>alert('This email belongs to a registered user.')</script>";
            ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/diabetes/templates/register.php">
            <?php
        }
        else
        {
            if($name!="" && $email!="" && $password!="" && $cpassword!="" && $password==$cpassword)
            {
                $sql = "INSERT INTO users ( name, email, password) VALUES('$name','$email','$password');"; 

                $data = mysqli_query($conn, $sql);
            
                if($data)
                {
                    header("location: profile.php");
                }

                else
                {
                    echo "<script>alert('Registration failed. Try again!')</script>";
                    ?>
                        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/diabetes/templates/register.php">
                    <?php
                }
            }

            else if($password!=$cpassword)
            {
                header ("location: register.php");
                
            }           
            
        }    
  
    }
    
?>