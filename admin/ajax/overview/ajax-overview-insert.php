<?php 
	include_once '../../config/conn.php';
	include_once '../../include/function.php';
	$update_Id = encryptor('decrypt',$_POST['eid']);
	$project_desc = mysqli_real_escape_string($conn, $_POST['project_desc']);
	$heading = mysqli_real_escape_string($conn, $_POST['heading']);
	$subheading = mysqli_real_escape_string($conn, $_POST['subheading']);
	$image_heading = mysqli_real_escape_string($conn, $_POST['imageheading']);

	$iconid1=$_POST['iconid1'];
	$iconid2=$_POST['iconid2'];
	$icon_heading1 = mysqli_real_escape_string($conn, $_POST['icon_heading1']);
	$icon_heading2 = mysqli_real_escape_string($conn, $_POST['icon_heading2']);
	$icon_subheading1 = mysqli_real_escape_string($conn, $_POST['icon_subheading1']);
	$icon_subheading2 = mysqli_real_escape_string($conn, $_POST['icon_subheading2']);







	$overviewimage="";
	$sqlstr="";
	if(!empty($_FILES['image']['name'])){
		$meta_logo = $_FILES['image'];
		$meta_logo_name = $_FILES['image']['name'];
		$meta_logo_tmp_name = $_FILES['image']['tmp_name'];
		$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
		
		$brochure_date = time();
		$new_brochure = "overview-$brochure_date.$image_ext";
		
		$overviewimage = "uploads/platters/$new_brochure";
		$overviewimagefile = "../../uploads/platters/$new_brochure";

			move_uploaded_file($meta_logo_tmp_name, $overviewimagefile);
			$sqlstr=",image='$overviewimage'";
		
	}




	

	$chck_sql = mysqli_query($conn,"SELECT id,image FROM micro_site_overview WHERE project_id = '$update_Id'");

	
	if(mysqli_num_rows($chck_sql) > 0){
		if(!empty($sqlstr)){
			$existsdata=mysqli_fetch_assoc($chck_sql);

			if (file_exists('../../'.$existsdata['image'])){
				unlink('../../'.$existsdata['image']);
					 
			} 

		
		}
		
		$update_sql = mysqli_query($conn,"UPDATE micro_site_overview SET  `iconid1`='$iconid1',`iconid2`='$iconid2',`icon_heading1`='$icon_heading1',`icon_heading2`='$icon_heading2',`icon_subheading1`='$icon_subheading1',`icon_subheading2`='$icon_subheading2',`image_heading`='$image_heading',heading='$heading',subheading='$subheading',description = '$project_desc' $sqlstr WHERE project_id = '$update_Id'");

		if($update_sql==1){
			echo json_encode(['status'=>1,'message'=>"Updated Successfully"]);
		}else{
			echo json_encode(['status'=>0,'message'=>"Something went wrong"]);

		}
	}else{

		$sql = mysqli_query($conn,"INSERT INTO micro_site_overview (project_id, description,heading,subheading,image_heading,image,iconid1,iconid2,icon_heading1,icon_heading2,icon_subheading1,icon_subheading2) VALUES ('$update_Id', '$project_desc','$heading','$subheading','$image_heading','$overviewimage','$iconid1','$iconid2','$icon_heading1','$icon_heading2','$icon_subheading1','$icon_subheading2')");
	
		if($sql==1){
			echo json_encode(['status'=>1,'message'=>"Updated Successfully"]);
		}else{
			echo json_encode(['status'=>0,'message'=>"Something went wrong"]);

		}
	}
?>