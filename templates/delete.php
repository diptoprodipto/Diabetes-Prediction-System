<?php

include 'conn.php';
$id = $_GET['id'];
$delete = "DELETE FROM doctors WHERE id = $id";
$run_data = mysqli_query($conn,$delete);

if($run_data){
	header('location:adddoctors.php');
}else{
	echo "Deletion failed!";
}
