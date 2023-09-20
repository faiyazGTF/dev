<?php 
	include_once '../../config/conn.php';

	include_once '../../include/function.php';


	$validator=array();
	$error=0;
	if(empty($_POST['project_developer'])){
		$validator['project_developer']="This fields is required";
		$error=1;
	}



	if(empty($_POST['project_name'])){
		$validator['project_name']="This fields is required";
		$error=1;
	}


	if(empty($_POST['project_category'])){
		$validator['project_category']="This fields is required";
		$error=1;
	}


	if(empty($_POST['project_property_type'])){
		$validator['project_property_type']="This fields is required";
		$error=1;
	}

	

	if(empty($_POST['project_status'])){
		$validator['project_status']="This fields is required";
		$error=1;
	}


	
	if(empty($_POST['project_address'])){
		$validator['project_address']="This fields is required";
		$error=1;
	}
	if(empty($_POST['project_state'])){
		$validator['project_state']="This fields is required";
		$error=1;
	}
	if(empty($_POST['project_cityUpdate'])){
		$validator['project_cityUpdate']="This fields is required";
		$error=1;
	}
	if(empty($_POST['project_location'])){
		$validator['project_location']="This fields is required";
		$error=1;
	}
	// if(empty($_POST['project_price'])){
	// 	$validator['project_price']="This fields is required";
	// 	$error=1;
	// }



	
	if(empty($_POST['page_url'])){
		$validator['page_url']="This fields is required";
		$error=1;
	}
	

	if(empty($_POST['project_ivr_no'])){
		$validator['project_ivr_no']="This fields is required";
		$error=1;
	}

	if(empty($_POST['platter_page'])){
		$validator['platter_page']="This fields is required";
		$error=1;
	}

	// if(empty($_POST['project_whatapp_no'])){
	// 	$validator['project_whatapp_no']="This fields is required";
	// 	$error=1;
	// }
	if($error==0){




	$dev_id = $_POST['project_developer'];
	$name = $_POST['project_name'];
	

	$meta_title = mysqli_real_escape_string($conn, $_POST['project_meta']);
	$meta_keyword = mysqli_real_escape_string($conn, $_POST['project_keyword']);
	$meta_desc = mysqli_real_escape_string($conn, $_POST['project_description']);
	


	$address = mysqli_real_escape_string($conn, $_POST['project_address']);
	$cat_id = $_POST['project_category'];
	$type = $_POST['project_property_type'];
	$status = $_POST['project_status'];
	$state = $_POST['project_state'];
	$city = $_POST['project_cityUpdate'];
	$location = $_POST['project_location'];
	$price = $_POST['project_price'];
	// $area = $_POST['P_area'];
	$rera = $_POST['project_rera_no'];

	$agent_rera=$_POST['agent_rera'];
	$page_url = $_POST['page_url'];

	
	$ivr_call = $_POST['project_ivr_no'];
	$wp_no = $_POST['project_whatapp_no'];
	
	$starting_price = mysqli_real_escape_string($conn, $_POST['starting_price']);

	
	
		$project_image_brochure = '';
		if(!empty($_FILES['project_brochure']['name'])){
			$meta_logo = $_FILES['project_brochure'];
			$meta_logo_name = $_FILES['project_brochure']['name'];
			$meta_logo_tmp_name = $_FILES['project_brochure']['tmp_name'];
			$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
			$brochure_date = date('Y-m-d-h-i-s');
			$new_brochure = "microsite-projects-brochure-$brochure_date.$image_ext";
			$meta_path = "../../uploads/microsite/brochure/$new_brochure";
			if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
				$filename = $new_brochure;
			}
			$project_image_brochure.= ",project_brochure='$filename'";

		}


		if(!empty($_FILES['feature_image']['name'])){
			$meta_logo = $_FILES['feature_image'];
			$meta_logo_name = $_FILES['feature_image']['name'];
			$meta_logo_tmp_name = $_FILES['feature_image']['tmp_name'];
			$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
			$brochure_date = date('Y-m-d-h-i-s');
			$new_brochure = "microsite-projects-feature-image-$brochure_date.$image_ext";
			$meta_path = "../../uploads/microsite/feature-image/$new_brochure";
			if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
				$filename = $new_brochure;
			}
			$project_image_brochure.= ",feature_image='$filename'";

		}

		if(!empty($_FILES['discount']['name'])){
			$meta_logo = $_FILES['discount'];
			$meta_logo_name = $_FILES['discount']['name'];
			$meta_logo_tmp_name = $_FILES['discount']['tmp_name'];
			$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
			$brochure_date = date('Y-m-d-h-i-s');
			$new_brochure = "microsite-projects-discount-$brochure_date.$image_ext";
			$meta_path = "uploads/microsite/discount/$new_brochure";
			$movepath = "../../uploads/microsite/discount/$new_brochure";

			move_uploaded_file($meta_logo_tmp_name, $movepath);
			$project_image_brochure.= ",discount_image='$meta_path'";

		}




		$platter_page = $_POST['platter_page'];

		$eid=encryptor('decrypt',$_POST['eid']);
		$eid=encryptor('decrypt',$_POST['eid']);

	
		$query = mysqli_query($conn, "UPDATE  micro_site SET platter_id='$platter_page',agent_rera='$agent_rera',starting_price='$starting_price',page_url='$page_url',developer_id='$dev_id', cat_id='$cat_id', type_id='$type', status_id='$status', state_id='$state', city_id='$city', locality_id='$location', title='$meta_title', keyword='$meta_keyword', description='$meta_desc', name='$name', address='$address', payment_plan='$price', rera_no='$rera', project_ivr_no='$ivr_call', whatapp_no='$wp_no' $project_image_brochure WHERE id =".$eid." ");
																																																																																						

		if($query==1){
			echo json_encode(['status'=>1,'message'=>"Page Updated Successfully"]);
		}else{
			echo json_encode(['status'=>0,'message'=>"Something went wrong"]);
		}
	}else{
		echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);

	}
	
	

?>