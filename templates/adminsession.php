<?php

session_start();
include("conn.php");

$adminemail = $_SESSION['email'];
$adminpass = $_SESSION['password'];

if ($adminemail == 'admin@gmail.com' && $adminpass == 'admin1234') {
} else {
    session_unset();
    header("location: login.php");
}
