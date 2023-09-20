<?php
	include_once '../../config/conn.php';
	date_default_timezone_set("Asia/Calcutta"); 
	
	$state_id = $_POST['state_id'];
	$name = $_POST['name'];
	$date = date("Y-m-d h:i:s");
	$checkrecord =mysqli_query($conn,"SELECT * FROM city WHERE city_name='".$name."'");
	if($checkrecord->num_rows >0){
		echo json_encode(['status'=>0,'message'=>"City Already Exists"]);

	}else{
		$sql = "INSERT INTO city (state_id, city_name, created_date) VALUES ('$state_id', '$name', '$date')";
	$query = mysqli_query($conn, $sql) or die ('Error :'.mysqli_connect_error($conn));
	if($query==1){
		echo json_encode(['status'=>1,'message'=>"City Added Successfully"]);


	}else{
		echo json_encode(['status'=>0,'message'=>"Failed to add "]);

	}
	}

	

	
?>