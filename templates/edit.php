<?php
include('conn.php');
$id = $_GET['id'];

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$hospital = $_POST['hospital'];
	$area = $_POST['area'];
	$contact = $_POST['contact'];
	
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

	$update = "UPDATE doctors SET name='$name', hospital = '$hospital', area = '$area', contact = '$contact', image = '$image' WHERE id=$id ";
	$run_update = mysqli_query($conn,$update);

	if($run_update){
		header('location:adddoctors.php');
	}else{
		echo "Data didn't get updated";
	}
}
