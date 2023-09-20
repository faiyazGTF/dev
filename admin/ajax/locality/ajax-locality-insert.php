<?php 
	include_once '../../config/conn.php';
	date_default_timezone_set("Asia/Calcutta");	
		
		
	$address = mysqli_real_escape_string($conn,$_POST['name']);	
	$city_id = $_POST['city_id'];
	$date = date("Y-m-d h:i:s");

	$checkrecord =mysqli_query($conn,"SELECT * FROM locality WHERE address LIKE '".$address."' AND city_id='$city_id'");
	if($checkrecord->num_rows >0){
		echo json_encode(['status'=>0,'message'=>"City Already Exists"]);

	}else{

		$sql = "INSERT INTO locality (city_id, address, created_date) VALUES ('$city_id', '$address', '$date')";
		$query = mysqli_query($conn, $sql) or die('Error :'.mysqli_connect_error($conn));
		if($query==1){
			echo json_encode(['status'=>1,'message'=>"Locality Added Successfully"]);

		}else{
			echo json_encode(['status'=>0,'message'=>"Failed to add "]);
		}
	}



	
?>