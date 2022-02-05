<?php

include('conn.php');

if(isset($_POST['submit'])){
	
    $id = $_POST['id'];
    $name = $_POST['name'];
	$hospital = $_POST['hospital'];
	$area = $_POST['area'];
	$contact = $_POST['contact'];

	//image upload

	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	$insert_data = "INSERT INTO doctors (id,image,name,hospital,area,contact) VALUES ('$id','$image','$name','$hospital','$area','$contact')";
  	$run_data = mysqli_query($conn,$insert_data);

  	if($run_data){
  		header('location:adddoctors.php');
  	}else{
  		echo "Data not inserted";
  	}

}

?>