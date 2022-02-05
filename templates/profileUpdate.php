<?php
include 'session.php';
include('conn.php');
$email = $_GET['email'];

if(isset($_POST['update']))
{
	$name = $_POST['name'];
	$password = $_POST['password'];
	
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "userimages/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

	$update = "UPDATE users SET image='$image', name='$name', password = '$password' WHERE email='$userprofile'";
	$run_update = mysqli_query($conn,$update);

	if($run_update){
		header('location:profile.php');
	}else{
		echo "Data didn't get updated";
	}
}
