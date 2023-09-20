<?php 

	include_once 'config/conn.php';
	include_once 'include/function.php';
		if($_GET['action']=='addnewpage'){

			$validator=array();
			$error=0;
			if(empty($_POST['project_category'])){
				$validator['project_category']="This fields is required";
				$error=1;
			}

			if(empty($_POST['project_property_type'])){
				$validator['project_property_type']="This fields is required";
				$error=1;
			}
			if(empty($_POST['platter_name'])){
				$validator['platter_name']="This fields is required";
				$error=1;
			}
			if(empty($_POST['page_url'])){
				$validator['page_url']="This fields is required";
				$error=1;
			}
			if(empty($_POST['starting_price'])){
				$validator['starting_price']="This fields is required";
				$error=1;
			}
			
			if($error==0){
				$page_url=createUrlSlug($_POST['page_url']);
				$checkpageurl = mysqli_query($conn, "SELECT id FROM `platter_page` WHERE page_url='$page_url'");
			if($checkpageurl->num_rows >0){
				
				$page_url=$page_url.time();
			}
			$project_category=$_POST['project_category'];
			$project_property_type=$_POST['project_property_type'];
			$platter_name=$_POST['platter_name'];
			$page_urls=$page_url;
			$starting_price=$_POST['starting_price'];

			$meta_title=$_POST['project_meta'];
			$meta_keyword=$_POST['project_keyword'];
			$meta_description=$_POST['project_description'];
			$agent_rera=$_POST['agent_rera'];


			$discount="";
			if(!empty($_FILES['discount']['name'])){
				$meta_logo = $_FILES['discount'];
				$meta_logo_name = $_FILES['discount']['name'];
				$meta_logo_tmp_name = $_FILES['discount']['tmp_name'];
				$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
				
				$brochure_date = time();
				$new_brochure = "discount-$brochure_date.$image_ext";
				
				$discount = "uploads/platters/discount/$new_brochure";
				if(move_uploaded_file($meta_logo_tmp_name, $discount)){
				
				}
			}


			$insernewrecord = mysqli_query($conn, "INSERT INTO `platter_page`(`cat_id`, `type_id`, `page_url`, `meta_title`, `meta_keyword`, `meta_description`, `name`,`starting_price`,`discount_image`,`agent_rera`) VALUES ('$project_category','$project_property_type','$page_urls','$meta_title','$meta_keyword','$meta_description','$platter_name','$starting_price','$discount','$agent_rera')");
			if($insernewrecord==1){
				$last_id=mysqli_insert_id($conn);

				echo json_encode(['status'=>1,'message'=>"Page Added Successfully",'id'=>encryptor('encrypt', $last_id)]);

			}else{
				echo json_encode(['status'=>0,'message'=>"Someting went wrong"]);

			}

		}else{
			echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);

		}

		}elseif($_GET['action']=='updateplatterPage'){

			$validator=array();
			$error=0;
			if(empty($_POST['project_category'])){
				$validator['project_category']="This fields is required";
				$error=1;
			}

			if(empty($_POST['project_property_type'])){
				$validator['project_property_type']="This fields is required";
				$error=1;
			}
			if(empty($_POST['platter_name'])){
				$validator['platter_name']="This fields is required";
				$error=1;
			}
			if(empty($_POST['page_url'])){
				$validator['page_url']="This fields is required";
				$error=1;
			}
			if(empty($_POST['starting_price'])){
				$validator['starting_price']="This fields is required";
				$error=1;
			}

			
			if($error==0){
				$page_url=createUrlSlug($_POST['page_url']);
				$pageid=encryptor('decrypt', $_POST['pageid']);

				$checkpageurl = mysqli_query($conn, "SELECT id FROM `platter_page` WHERE page_url='$page_url' AND id !=".$pageid."");
			if($checkpageurl->num_rows >0){
				
				$page_url=$page_url.time();
			}
			$project_category=$_POST['project_category'];
			$project_property_type=$_POST['project_property_type'];
			$platter_name=$_POST['platter_name'];
			$page_urls=$page_url;
			$starting_price=$_POST['starting_price'];

			$meta_title=$_POST['project_meta'];
			$meta_keyword=$_POST['project_keyword'];
			$meta_description=$_POST['project_description'];
			$agent_rera=$_POST['agent_rera'];
			

			$sqlstr="";
			if(!empty($_FILES['discount']['name'])){
				$meta_logo = $_FILES['discount'];
				$meta_logo_name = $_FILES['discount']['name'];
				$meta_logo_tmp_name = $_FILES['discount']['tmp_name'];
				$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
				
				$brochure_date = time();
				$new_brochure = "discount-$brochure_date.$image_ext";
				
				$discount = "uploads/platters/discount/$new_brochure";
				if(move_uploaded_file($meta_logo_tmp_name, $discount)){
				
				}


				$sqlstr=",`discount_image`='$discount'";
			}


			$insernewrecord = mysqli_query($conn, "UPDATE `platter_page` SET `agent_rera`='$agent_rera',`cat_id`='$project_category',`type_id`='$project_property_type',`page_url`='$page_urls',`meta_title`='$meta_title',`meta_keyword`='$meta_keyword',`meta_description`='$meta_description',`name`='$platter_name',`starting_price`='$starting_price' $sqlstr WHERE id=".$pageid."");


			if($insernewrecord==1){
				$last_id=mysqli_insert_id($conn);

				echo json_encode(['status'=>1,'message'=>"Page Added Successfully",'id'=>encryptor('encrypt', $last_id)]);

			}else{
				echo json_encode(['status'=>0,'message'=>"Someting went wrong"]);

			}

		}else{
			echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);

		}

		}elseif($_GET['action']=='addbanners'){
			$validator=array();
			$error=0;
			if(empty($_FILES['image']['name'])){
				$validator['banner_video']="This fields is required";
				$error=1;
			}


			if(empty($_FILES['mobilebannes']['name'])){
				$validator['mobilebannes']="This fields is required";
				$error=1;
			}
			if($error==0){
				$pageid=encryptor('decrypt', $_POST['eid']);
				$desktopbanners="";
				$mobilebannes="";
				if(!empty(($_FILES['image']['name']))){
					$meta_logo = $_FILES['image'];
					$meta_logo_name = $_FILES['image']['name'];
					$meta_logo_tmp_name = $_FILES['image']['tmp_name'];
					$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
					$brochure_date = time();
					$new_brochure = "banners-desktop-$brochure_date.$image_ext";
					
					$desktopbanners = "uploads/platters/banners/$new_brochure";
					move_uploaded_file($meta_logo_tmp_name, $desktopbanners);
	
				}


				if(!empty(($_FILES['mobilebannes']['name']))){
					$meta_logo = $_FILES['mobilebannes'];
					$meta_logo_name = $_FILES['mobilebannes']['name'];
					$meta_logo_tmp_name = $_FILES['mobilebannes']['tmp_name'];
					$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
					$brochure_date = time();
					$new_brochure = "banners-mobile-$brochure_date.$image_ext";
					
					$mobilebannes = "uploads/platters/banners/$new_brochure";
					move_uploaded_file($meta_logo_tmp_name, $mobilebannes);
	
				}

				$insernewrecord = mysqli_query($conn, "INSERT INTO `platter_site_banner`(`project_id`, `desktop_image`, `mobile_banner`) VALUES ('$pageid','$desktopbanners','$mobilebannes')");
				if($insernewrecord==1){
			
	
					echo json_encode(['status'=>1,'message'=>"Banner Successfully"]);
	
				}else{
					echo json_encode(['status'=>0,'message'=>"Someting went wrong"]);
	
				}
	
				
		
		}else{
			echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);

		}
		
		}else if($_GET['action']=='editplatterbanenrs'){
			$eid=encryptor('decrypt',$_POST['dataid']);
				$isnerrecord = mysqli_query($conn, "SELECT desktop_image,mobile_banner FROM `platter_site_banner` WHERE id=".$eid."");
				if($isnerrecord->num_rows >0){
					$data=mysqli_fetch_assoc($isnerrecord);
					echo json_encode(['status'=>1,'message'=>"success",'data'=>$data]);
				}else{
					echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
	
	
	
	
				}
	
			}
			else if($_GET['action']=='editplatterstripe'){
				$eid=encryptor('decrypt',$_POST['dataid']);
			
					$isnerrecord = mysqli_query($conn, "SELECT desktop_image,mobile_banner FROM `platter_site_stripe` WHERE id=".$eid."");
					if($isnerrecord->num_rows >0){
						$data=mysqli_fetch_assoc($isnerrecord);
						echo json_encode(['status'=>1,'message'=>"success",'data'=>$data]);
					}else{
						echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
		
					}
		
				}

			elseif($_GET['action']=='updateplatterbanner'){	
	
				$eid=encryptor('decrypt',$_POST['eid']);
				$sqlstr="";
				if(!empty($_FILES['upddatefile']['name'])){
					$meta_logo = $_FILES['upddatefile'];
					$meta_logo_name = $_FILES['upddatefile']['name'];
					$meta_logo_tmp_name = $_FILES['upddatefile']['tmp_name'];
					$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
					
					$brochure_date = time();
					$new_brochure = "banners-desktop-$brochure_date.$image_ext";
					
					$meta_path = "uploads/platters/banners/$new_brochure";
					if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
						$bannerslist = $new_brochure;
						$sqlstr.=",desktop_image='$meta_path'";
					}
				}


				if(!empty($_FILES['upddatefilemobile']['name'])){
					$meta_logo = $_FILES['upddatefilemobile'];
					$meta_logo_name = $_FILES['upddatefilemobile']['name'];
					$meta_logo_tmp_name = $_FILES['upddatefilemobile']['tmp_name'];
					$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
					
					$brochure_date = time();
					$new_brochure = "banners-mobile-$brochure_date.$image_ext";
					
					$meta_path = "uploads/platters/banners/$new_brochure";
					if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
		
						$sqlstr.=",mobile_banner='$meta_path'";
					}
				}

		
			
				$isnerrecord = mysqli_query($conn, "UPDATE `platter_site_banner` SET `updated_at`='".date('Y-m-d H:i:A')."' $sqlstr WHERE id=".$eid."");
				if($isnerrecord==1){
					echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
				}else{
					echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
				}
	
	
			}elseif($_GET['action']=='deleteplatterbanner'){
		
				$dataid=encryptor('decrypt',$_POST['dataid']);
				$checkrecord = mysqli_query($conn, "SELECT * FROM `platter_site_banner` WHERE id=".$dataid."");
				if($checkrecord->num_rows>0){
					$data=mysqli_fetch_assoc($checkrecord);
		
					if (file_exists($data['desktop_image'])){
						unlink($data['desktop_image']);    
					}

					if (file_exists($data['mobile_banner'])){
						unlink($data['mobile_banner']);    
					}
	
				mysqli_query($conn, "DELETE FROM `platter_site_banner` WHERE id=".$dataid."");
				echo json_encode(['status'=>1,'message'=>"Deleted Successfully"]);
	
				}else{
					echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
				}
	
			}elseif($_GET['action']=='deleteplatterstripe'){
		
				$dataid=encryptor('decrypt',$_POST['dataid']);
				$checkrecord = mysqli_query($conn, "SELECT * FROM `platter_site_stripe` WHERE id=".$dataid."");
				if($checkrecord->num_rows>0){
					$data=mysqli_fetch_assoc($checkrecord);
		
					if (file_exists($data['desktop_image'])){
						unlink($data['desktop_image']);    
					}

				
	
				mysqli_query($conn, "DELETE FROM `platter_site_stripe` WHERE id=".$dataid."");
				echo json_encode(['status'=>1,'message'=>"Deleted Successfully"]);
	
				}else{
					echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
				}
	
			}elseif($_GET['action']=='addastripe'){
				$validator=array();
				$error=0;
				if(empty($_FILES['image']['name'])){
					$validator['banner_video']="This fields is required";
					$error=1;
				}
	
	
				if($error==0){
					$pageid=encryptor('decrypt', $_POST['eid']);
					$desktopbanners="";
					$mobilebannes="";
					if(!empty(($_FILES['image']['name']))){
						$meta_logo = $_FILES['image'];
						$meta_logo_name = $_FILES['image']['name'];
						$meta_logo_tmp_name = $_FILES['image']['tmp_name'];
						$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
						$brochure_date = time();
						$new_brochure = "stripe-desktop-$brochure_date.$image_ext";
						
						$desktopbanners = "uploads/platters/stripe/$new_brochure";
						move_uploaded_file($meta_logo_tmp_name, $desktopbanners);
		
					}

					if(!empty(($_FILES['mobilebanner']['name']))){
						$meta_logo = $_FILES['mobilebanner'];
						$meta_logo_name = $_FILES['mobilebanner']['name'];
						$meta_logo_tmp_name = $_FILES['mobilebanner']['tmp_name'];
						$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
						$brochure_date = time();
						$new_brochure = "stripe-mobile-$brochure_date.$image_ext";
						
						$mobilebannes = "uploads/platters/stripe/$new_brochure";
						move_uploaded_file($meta_logo_tmp_name, $desktopbanners);
		
					}
	
	
					$insernewrecord = mysqli_query($conn, "INSERT INTO `platter_site_stripe`(`project_id`, `desktop_image`,`mobile_banner`) VALUES ('$pageid','$desktopbanners','$mobilebannes')");
					if($insernewrecord==1){
				
		
						echo json_encode(['status'=>1,'message'=>"Banner Successfully"]);
		
					}else{
						echo json_encode(['status'=>0,'message'=>"Someting went wrong"]);
		
					}
		
					
			
			}else{
				echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
	
			}
			
			}elseif($_GET['action']=='updateplatterstripe'){	
	
				$eid=encryptor('decrypt',$_POST['eid']);
				$sqlstr="";
				if(!empty($_FILES['upddatefile']['name'])){
					$meta_logo = $_FILES['upddatefile'];
					$meta_logo_name = $_FILES['upddatefile']['name'];
					$meta_logo_tmp_name = $_FILES['upddatefile']['tmp_name'];
					$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
					
					$brochure_date = time();
					$new_brochure = "stripe-$brochure_date.$image_ext";
					
					$meta_path = "uploads/platters/stripe/$new_brochure";
					if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
						$bannerslist = $new_brochure;
						$sqlstr.=",desktop_image='$meta_path'";
					}
				}


				
		

				if(!empty($_FILES['upddatefilemobie']['name'])){
					$meta_logo = $_FILES['upddatefilemobie'];
					$meta_logo_name = $_FILES['upddatefilemobie']['name'];
					$meta_logo_tmp_name = $_FILES['upddatefilemobie']['tmp_name'];
					$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
					
					$brochure_date = time();
					$new_brochure = "stripe-mobile-$brochure_date.$image_ext";
					
					$meta_path = "uploads/platters/stripe/$new_brochure";
					if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
						$bannerslist = $new_brochure;
						$sqlstr.=",mobile_banner='$meta_path'";
					}
				}

			
				$isnerrecord = mysqli_query($conn, "UPDATE `platter_site_stripe` SET `updated_at`='".date('Y-m-d H:i:A')."' $sqlstr WHERE id=".$eid."");
				if($isnerrecord==1){
					echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
				}else{
					echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
				}
	
	
			}
	
	?>