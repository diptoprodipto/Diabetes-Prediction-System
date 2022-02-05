<?php 
 
 //database constants
 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PASS', '');
 define('DB_NAME', 'diabetes');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
 
 //Checking if any error occured while connecting
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 
 //creating a query
 $stmt = $conn->prepare("SELECT id, image, name, hospital, area, contact FROM doctors;");
 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
 $stmt->bind_result($id, $image, $name, $hospital, $area, $contact);
 
 $doctors = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 $temp['id'] = $id; 
 $temp['image'] = $image; 
 $temp['name'] = $name; 
 $temp['hospital'] = $hospital; 
 $temp['area'] = $area; 
 $temp['contact'] = $contact; 
 array_push($doctors, $temp);
 }
 
 //displaying the result in json format 
 echo json_encode($doctors);