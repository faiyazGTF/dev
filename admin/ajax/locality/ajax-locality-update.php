<?php 
	include_once '../../config/conn.php';
	date_default_timezone_set("Asia/calcutta");

	$id = $_POST['id'];
	$city_id = $_POST['city_id'];
	$name = $_POST['name'];
	$update_date = date('Y-m-d h:i:s');
	
	$checkrecord =mysqli_query($conn,"SELECT * FROM locality WHERE address LIKE '".$name."' AND city_id='$city_id' AND id !='$id'");
	if($checkrecord->num_rows >0){
		echo json_encode(['status'=>0,'message'=>"Location  Already Exists"]);

	}else{
		$sql = "UPDATE locality SET city_id = '$city_id', address = '$name', created_date = '$update_date' WHERE id = '$id'";
		$query = mysqli_query($conn, $sql) or die ('Error :'.mysqli_connect_error($conn));
		if($query==1){
			echo json_encode(['status'=>1,'message'=>"Locality Updated Successfully"]);

		}else{
			echo json_encode(['status'=>0,'message'=>"Failed to add "]);
		}
	}


	
?>