<?php

include "conn.php";

if(isset($_POST["email"]))
{
    $sql = "SELECT * FROM users WHERE email = '".$_POST["email"]."'";
    $result = mysqli_query($conn, $sql);
    echo mysqli_num_rows($result);
}
