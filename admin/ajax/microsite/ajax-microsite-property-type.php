<?php 
	include_once '../../config/conn.php';
	
	$cat_id = $_POST['cat_id'];

	$type_id = '';
	if(isset($_POST['type_id'])){
		$type_id = $_POST['type_id'];
	}
	
	$sql = "SELECT * FROM property WHERE cat_id = '$cat_id'";
	$query = mysqli_query($conn, $sql) or die('Error :'.mysqli_connect_error($conn));
	
	$type = "<option value=''>---Select Typology---</option>";
	$page = "<option value=''>---Select page---</option>";

	if(mysqli_num_rows($query) > 0){
		while($row = mysqli_fetch_array($query)){
			$id = $row['id'];
			$name = $row['name'];
			$check_con = $type_id ==  $row['id'] ? 'selected="selected"' : ''; 
			$type .= "
				<option value=$id $check_con>$name</option>
			";
		}



		$allpages = mysqli_query($conn, "SELECT * FROM platter_page WHERE cat_id = '$cat_id'");
		if($allpages->num_rows >0){
			while ($pages=mysqli_fetch_assoc($allpages)) {
				$page .='<option value="'.$pages['id'].'">'.$pages['name'].'</option>';
			}
		}
		echo json_encode(['type'=>$type,'page'=>$page]);
	}else{
		echo json_encode($type);
	}
?>