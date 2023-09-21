<?php 

	include_once 'config/conn.php';
	include_once 'include/function.php';
		if($_GET['action']=='editmicrrobanenrs'){
		$eid=encryptor('decrypt',$_POST['dataid']);
			$isnerrecord = mysqli_query($conn, "SELECT win_images,win_video_url FROM `micro_site_banner` WHERE id=".$eid."");
			if($isnerrecord->num_rows >0){
				$data=mysqli_fetch_assoc($isnerrecord);
				echo json_encode(['status'=>1,'message'=>"success",'data'=>$data]);
			}else{
				echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);




			}

		}elseif($_GET['action']=='updatemicromannersrecord'){	
	
			$eid=encryptor('decrypt',$_POST['eid']);
			$sqlstr="";
			if(!empty($_FILES['upddatefile']['name'])){
				$meta_logo = $_FILES['upddatefile'];
				$meta_logo_name = $_FILES['upddatefile']['name'];
				$meta_logo_tmp_name = $_FILES['upddatefile']['tmp_name'];
				$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
				
				$brochure_date = time();
				$new_brochure = "banners-$brochure_date.$image_ext";
				
				$meta_path = "uploads/microsite/banners/$new_brochure";
				if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
					$bannerslist = $new_brochure;
					$sqlstr=",win_images='$bannerslist'";
				}
			}
			$video_url_update=$_POST['video_url_update'];

		
			$isnerrecord = mysqli_query($conn, "UPDATE `micro_site_banner` SET `win_video_url`='$video_url_update' $sqlstr WHERE id=".$eid."");
			if($isnerrecord==1){
				echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
			}else{
				echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
			}


		}elseif($_GET['action']=='deletebannersmicrosw'){
		
			$dataid=encryptor('decrypt',$_POST['dataid']);
			$checkrecord = mysqli_query($conn, "SELECT * FROM `micro_site_banner` WHERE id=".$dataid."");
			if($checkrecord->num_rows>0){
				$data=mysqli_fetch_assoc($checkrecord);
				$meta_path = "uploads/microsite/banners/".$data['win_images'];
				if (file_exists($meta_path)){
					if (unlink($meta_path)) {   
						
					}    
				}

			mysqli_query($conn, "DELETE FROM `micro_site_banner` WHERE id=".$dataid."");
			echo json_encode(['status'=>1,'message'=>"Deleted Successfully"]);

			}else{
				echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
			}

		}

		elseif($_GET['action']=='addothermicrosites'){
			$validator=array();
			$error=0;
			if(empty($_POST['othertype'])){
				$validator['othertype']="This fields is required";
				$error=1;
			}

			if(empty($_POST['heading'])){
				$validator['heading']="This fields is required";
				$error=1;
			}

			if($error==0){
			$eid=encryptor('decrypt',$_POST['eid']);

			$checkrecord = mysqli_query($conn, "INSERT INTO `other_type_section_item`(`project_id`, `other_type_section_type`, `heading`) VALUES ('$eid',".$_POST['othertype'].",'".$_POST['heading']."')");
				if($checkrecord==1){
					echo json_encode(['status'=>1,'message'=>"Added Successfully"]);
				}else{
					echo json_encode(['status'=>0,'message'=>"SOmething went wrong"]);

				}
		

		}else{
			echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
		}	
	}elseif($_GET['action']=='editothermicrosites'){
		$eid=encryptor('decrypt',$_POST['dataid']);
			$isnerrecord = mysqli_query($conn, "SELECT other_type_section_type,heading FROM `other_type_section_item` WHERE id=".$eid."");
			if($isnerrecord->num_rows >0){
				$data=mysqli_fetch_assoc($isnerrecord);
				echo json_encode(['status'=>1,'message'=>"success",'data'=>$data]);
			}else{
				echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);




			}

		}elseif($_GET['action']=='editmicroprice'){
			$eid=encryptor('decrypt',$_POST['dataid']);
				$isnerrecord = mysqli_query($conn, "SELECT * FROM `micro_site_price_insight` WHERE id=".$eid."");
				if($isnerrecord->num_rows >0){
					$data=mysqli_fetch_assoc($isnerrecord);
					echo json_encode(['status'=>1,'message'=>"success",'data'=>$data]);
				}else{
					echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
	
	
	
	
				}
	
			}elseif($_GET['action']=='editspecifiactions'){
			$eid=encryptor('decrypt',$_POST['dataid']);
				$isnerrecord = mysqli_query($conn, "SELECT heading,descriptions FROM `micro_specifications` WHERE id=".$eid."");
				if($isnerrecord->num_rows >0){
					$data=mysqli_fetch_assoc($isnerrecord);
					echo json_encode(['status'=>1,'message'=>"success",'data'=>$data]);
				}else{
					echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
	
	
	
	
				}
	
			}elseif($_GET['action']=='editfloorplanimages'){
				$eid=encryptor('decrypt',$_POST['dataid']);
					$isnerrecord = mysqli_query($conn, "SELECT image,title FROM `micro_site_floorplan` WHERE id=".$eid."");
					if($isnerrecord->num_rows >0){
						$data=mysqli_fetch_assoc($isnerrecord);
						echo json_encode(['status'=>1,'message'=>"success",'data'=>$data]);
					}else{
						echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
		
		
		
		
					}
		
				}elseif($_GET['action']=='editgalleryplanimages'){
					$eid=encryptor('decrypt',$_POST['dataid']);
						$isnerrecord = mysqli_query($conn, "SELECT image,imagealt FROM `micro_site_gallery` WHERE id=".$eid."");
						if($isnerrecord->num_rows >0){
							$data=mysqli_fetch_assoc($isnerrecord);
							echo json_encode(['status'=>1,'message'=>"success",'data'=>$data]);
						}else{
							echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
			
			
			
			
						}
			
					}elseif($_GET['action']=='editmicroaminities'){
						$eid=encryptor('decrypt',$_POST['dataid']);
							$isnerrecord = mysqli_query($conn, "SELECT title,icons,subtitle FROM `micro_site_amenities` WHERE id=".$eid."");
							if($isnerrecord->num_rows >0){
								$data=mysqli_fetch_assoc($isnerrecord);
								echo json_encode(['status'=>1,'message'=>"success",'data'=>$data]);
							}else{
								echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
				
				
				
				
							}
				
						}elseif($_GET['action']=='updateothermicrodata'){

			$eid=encryptor('decrypt',$_POST['eid']);
			$validator=array();
			$error=0;
			if(empty($_POST['othertypeupdate'])){
				$validator['othertypeupdate']="This fields is required";
				$error=1;
			}

			if(empty($_POST['updateheading'])){
				$validator['updateheading']="This fields is required";
				$error=1;
			}


			if($error==0){
				$isnerrecord = mysqli_query($conn, "UPDATE `other_type_section_item` SET `other_type_section_type`=".$_POST['othertypeupdate']." ,`heading`='".$_POST['updateheading']."' WHERE id=".$eid."");
			if($isnerrecord==1){
				echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
			}else{
				echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
			}

			}else{
				echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
			}
			

		}elseif($_GET['action']=='specificationsadd'){
			$validator=array();
			$error=0;
			if(empty($_POST['heading'])){
				$validator['heading']="This fields is required";
				$error=1;
			}

			if(empty($_POST['descriptions'])){
				$validator['descriptions']="This fields is required";
				$error=1;
			}

			if($error==0){
			
			$eid=encryptor('decrypt',$_POST['eid']);
			$heading=mysqli_real_escape_string($conn, $_POST['heading']);
			$descriptions=mysqli_real_escape_string($conn, $_POST['descriptions']);



			$checkrecord = mysqli_query($conn, "INSERT INTO `micro_specifications`(`project_id`, `heading`, `descriptions`) VALUES ('$eid','$heading','$descriptions')");
				if($checkrecord==1){
					echo json_encode(['status'=>1,'message'=>"Added Successfully"]);
				}else{
					echo json_encode(['status'=>0,'message'=>"SOmething went wrong"]);

				}
		

		}else{
			echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
		}	
	}elseif($_GET['action']=='updatespecifications'){

		$eid=encryptor('decrypt',$_POST['eid']);

		$validator=array();
		$error=0;
		if(empty($_POST['updateheading'])){
			$validator['updateheading']="This fields is required";
			$error=1;
		}

		if(empty($_POST['updatedescriptions'])){
			$validator['updatedescriptions']="This fields is required";
			$error=1;
		}


		if($error==0){
			$heading=mysqli_real_escape_string($conn, $_POST['updateheading']);
			$descriptions=mysqli_real_escape_string($conn, $_POST['updatedescriptions']);
			$isnerrecord = mysqli_query($conn, "UPDATE `micro_specifications` SET `heading`='$heading' ,`descriptions`='$descriptions' WHERE id=".$eid."");
		if($isnerrecord==1){
			echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
		}else{
			echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
		}

		}else{
			echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
		}
		

	}elseif($_GET['action']=='addfloorplands'){


		$validator=array();
			$error=0;
			if(empty($_FILES['floorImage']['name'])){
				$validator['floorImage']="This fields is required";
				$error=1;
			}

	
			if($error==0){

		
			$floorname=mysqli_real_escape_string($conn,$_POST['floorname']);
		$eid=encryptor('decrypt',$_POST['eid']);
				$meta_path="";
	
		if(!empty($_FILES['floorImage']['name'])){
			$meta_logo = $_FILES['floorImage'];
			$meta_logo_name = $_FILES['floorImage']['name'];
			$meta_logo_tmp_name = $_FILES['floorImage']['tmp_name'];
			$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
			
			$brochure_date = time();
			$new_brochure = "floors-$brochure_date.$image_ext";
			
			$meta_path = "uploads/microsite/floors/$new_brochure";
			if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
			
			}
		}


	
		$isnerrecord = mysqli_query($conn, "INSERT INTO `micro_site_floorplan`(`project_id`, `image`,`title`) VALUES ('$eid','$meta_path','$floorname')");
		if($isnerrecord==1){
			echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
		}else{
			echo json_encode(['status'=>0,'message'=>"Somthing went wrong"]);
		}

	}else{
		echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);

	}
	}
	elseif($_GET['action']=='updaremicrofloorplans'){


		$eid=encryptor('decrypt',$_POST['eid']);
		$floorname=mysqli_real_escape_string($conn,$_POST['floorname']);
		$sqlstrimage="";
		if(!empty($_FILES['floorimagesupdaste']['name'])){
			$meta_logo = $_FILES['floorimagesupdaste'];
			$meta_logo_name = $_FILES['floorimagesupdaste']['name'];
			$meta_logo_tmp_name = $_FILES['floorimagesupdaste']['tmp_name'];
			$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
			
			$brochure_date = time();
			$new_brochure = "floors-$brochure_date.$image_ext";
			
			$meta_path = "uploads/microsite/floors/$new_brochure";
			if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
			
			}
			
			$sqlstrimage=",`image`='$meta_path'";

		}
			$isnerrecord = mysqli_query($conn, "UPDATE `micro_site_floorplan` SET `title`='$floorname' $sqlstrimage WHERE id=".$eid."");
			if($isnerrecord==1){
				echo json_encode(['status'=>1,'message'=>"Update Successfully"]);

			}else{
				echo json_encode(['status'=>0,'message'=>"Somthing went wrong"]);
			}



	



		}elseif($_GET['action']=='deletefloorplands'){
		
			$dataid=encryptor('decrypt',$_POST['dataid']);
			
			$checkrecord = mysqli_query($conn, "SELECT * FROM `micro_site_floorplan` WHERE id=".$dataid."");
			if($checkrecord->num_rows>0){
				$data=mysqli_fetch_assoc($checkrecord);
				$meta_path = $data['image'];
				if (file_exists($meta_path)){
					if (unlink($meta_path)) {   
						
					}    
				}

			mysqli_query($conn, "DELETE FROM `micro_site_floorplan` WHERE id=".$dataid."");
			echo json_encode(['status'=>1,'message'=>"Deleted Successfully"]);

			}else{
				echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
			}

		}elseif($_GET['action']=='addmicrogallery'){


			$validator=array();
				$error=0;
				if(empty($_FILES['floorImage']['name'])){
					$validator['floorImage']="This fields is required";
					$error=1;
				}
	
		
				if($error==0){
					$eid=encryptor('decrypt',$_POST['eid']);
					$checkrecords = mysqli_query($conn, "SELECT id FROM micro_site_gallery WHERE project_id=".$eid."");
					if($checkrecords->num_rows ==4){
						echo json_encode(['status'=>0,'message'=>"You Can Upload Only Four Gallery"]);
					}else{

			
			
			
		
					$meta_path="";
		
			if(!empty($_FILES['floorImage']['name'])){
				$meta_logo = $_FILES['floorImage'];
				$meta_logo_name = $_FILES['floorImage']['name'];
				$meta_logo_tmp_name = $_FILES['floorImage']['tmp_name'];
				$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
				
				$brochure_date = time();
				$new_brochure = "gallery-$brochure_date.$image_ext";
				
				$meta_path = "uploads/microsite/gallery/$new_brochure";
				if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
				
				}
			}
			$imagealt=mysqli_real_escape_string($conn,$_POST['imagealt']);
			$imgtitle="";
	
			

			$isnerrecord = mysqli_query($conn, "INSERT INTO `micro_site_gallery`(`project_id`, `image`,`imagealt`,`imgtitle`) VALUES ('$eid','$meta_path','$imagealt','$imgtitle')");
			if($isnerrecord==1){
				echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
			}else{
				echo json_encode(['status'=>0,'message'=>"Somthing went wrong"]);
			}
		}
	
		}else{
			echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
	
		}
		}elseif($_GET['action']=='updaremicrogallery'){


			$eid=encryptor('decrypt',$_POST['eid']);
	
				$sqlstr="";
			if(!empty($_FILES['floorimagesupdaste']['name'])){
				$meta_logo = $_FILES['floorimagesupdaste'];
				$meta_logo_name = $_FILES['floorimagesupdaste']['name'];
				$meta_logo_tmp_name = $_FILES['floorimagesupdaste']['tmp_name'];
				$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
				
				$brochure_date = time();
				$new_brochure = "floors-$brochure_date.$image_ext";
				
				$meta_path = "uploads/microsite/floors/$new_brochure";
				move_uploaded_file($meta_logo_tmp_name, $meta_path);
				$sqlstr=" ,`image`='$meta_path'";
			
	
			}
			
			$imagealt=mysqli_real_escape_string($conn,$_POST['imagealt']);
			$imgtitle="";

			$isnerrecord = mysqli_query($conn, "UPDATE `micro_site_gallery` SET `imagealt`='$imagealt',`imgtitle`='$imgtitle' $sqlstr WHERE id=".$eid."");
			if($isnerrecord==1){
				echo json_encode(['status'=>1,'message'=>"Update Successfully"]);

			}else{
				echo json_encode(['status'=>0,'message'=>"Somthing went wrong"]);
			}
				
			
	
	
			}elseif($_GET['action']=='deletemicrogallery'){
		
				$dataid=encryptor('decrypt',$_POST['dataid']);
				
				$checkrecord = mysqli_query($conn, "SELECT * FROM `micro_site_gallery` WHERE id=".$dataid."");
				if($checkrecord->num_rows>0){
					$data=mysqli_fetch_assoc($checkrecord);
					$meta_path = $data['image'];
					if (file_exists($meta_path)){
						if (unlink($meta_path)) {   
							
						}    
					}
	
				mysqli_query($conn, "DELETE FROM `micro_site_gallery` WHERE id=".$dataid."");
				echo json_encode(['status'=>1,'message'=>"Deleted Successfully"]);
	
				}else{
					echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
				}
	
			}elseif($_GET['action']=='addpricelist'){
				$validator=array();
				$error=0;
				if(empty($_POST['typelology'])){
					$validator['typelology']="This fields is required";
					$error=1;
				}
	
	
	
				if($error==0){
				
				$eid=encryptor('decrypt',$_POST['eid']);
					$typelology=$_POST['typelology'];
					$size_l=$_POST['size_l'];
					$size_h=$_POST['size_h'];
					$size_type=$_POST['size_type'];
					$price_l=$_POST['price_l'];
					$price_h=$_POST['price_h'];
					$pricettype=$_POST['pricettype'];
	
				$checkrecord = mysqli_query($conn, "INSERT INTO `micro_site_price_insight`(`project_id`, `typology`, `l_size`, `size_type`, `size_h`, `price_l`, `price_h`, `price_type`) VALUES ('$eid','$typelology','$size_l','$size_type','$size_h','$price_l','$price_h','$pricettype')");
					if($checkrecord==1){
						echo json_encode(['status'=>1,'message'=>"Added Successfully"]);
					}else{
						echo json_encode(['status'=>0,'message'=>"SOmething went wrong"]);
	
					}
			
	
			}else{
				echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
			}	
		}elseif($_GET['action']=='updatemicroprice'){

			$eid=encryptor('decrypt',$_POST['eid']);
	
			$validator=array();
			$error=0;
			$validator=array();
				$error=0;
				if(empty($_POST['typelologyipdate'])){
					$validator['typelologyipdate']="This fields is required";
					$error=1;
				}
	
			
				if(empty($_POST['price_lupdate'])){
					$validator['price_lupdate']="This fields is required";
					$error=1;
				}
				
	
	
	
			if($error==0){
				$typelologyipdate=$_POST['typelologyipdate'];
				$size_lupdate=$_POST['size_lupdate'];
				$size_hupdate=$_POST['size_hupdate'];
				$size_type_update=$_POST['size_type_update'];
				$price_lupdate=$_POST['price_lupdate'];
				$price_hupdate=$_POST['price_hupdate'];
				$pricettypeupdate=$_POST['pricettypeupdate'];
				$eid=encryptor('decrypt', $_POST['eid']);

				$isnerrecord = mysqli_query($conn, "UPDATE `micro_site_price_insight` SET price_type='$pricettypeupdate',price_h='$price_hupdate',price_l='$price_lupdate',size_type='$size_type_update',size_h='$size_hupdate',`typology`='$typelologyipdate' ,`l_size`='$size_lupdate' WHERE id=".$eid."");
			if($isnerrecord==1){
				echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
			}else{
				echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
			}
	
			}else{
				echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
			}
			
	
		}elseif($_GET['action']=='updtatehightlighbannes'){
		
			$validator=array();
			$error=0;
			if(empty($_FILES['file']['name'])){
				$validator['file']="This fields is required";
				$error=1;
			}

			if($error==0){
				$projectid=encryptor('decrypt', $_POST['projectid']);
	
				$meta_path='';
					if(!empty($_FILES['file']['name'])){
						$meta_logo = $_FILES['file'];
						$meta_logo_name = $_FILES['file']['name'];
						$meta_logo_tmp_name = $_FILES['file']['tmp_name'];
						$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
						$brochure_date = time();
						$new_brochure = "highlights-$brochure_date.$image_ext";
						$meta_path = "uploads/microsite/highlights/$new_brochure";
						if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
						}
					}
					$isnerrecord = mysqli_query($conn, "UPDATE `micro_site` SET highlights='$meta_path' WHERE id=".$projectid."");


				if($isnerrecord==1){
					echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
				}else{
					echo json_encode(['status'=>0,'message'=>"Something went wrong"]);
				}
			}elseif($error==1){
				echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);

			}else{
				echo json_encode(['status'=>0,'message'=>"Something went wrong"]);

			}
		
			

		}
		elseif($_GET['action']=='updateamendtiesbanners'){
		
			$validator=array();
			$error=0;
			if(empty($_FILES['file']['name'])){
				$validator['file']="This fields is required";
				$error=1;
			}

			if($error==0){
				$projectid=encryptor('decrypt', $_POST['projectid']);
	
				$meta_path='';
					if(!empty($_FILES['file']['name'])){
						$meta_logo = $_FILES['file'];
						$meta_logo_name = $_FILES['file']['name'];
						$meta_logo_tmp_name = $_FILES['file']['tmp_name'];
						$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
						$brochure_date = time();
						$new_brochure = "amenities_banners-$brochure_date.$image_ext";
						$meta_path = "uploads/microsite/amenities_banners/$new_brochure";
						if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
						}
					}
					$isnerrecord = mysqli_query($conn, "UPDATE `micro_site` SET amenities_banners='$meta_path' WHERE id=".$projectid."");


				if($isnerrecord==1){
					echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
				}else{
					echo json_encode(['status'=>0,'message'=>"Something went wrong"]);
				}
			}elseif($error==1){
				echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);

			}else{
				echo json_encode(['status'=>0,'message'=>"Something went wrong"]);

			}
		
			

		}elseif($_GET['action']=='addamenities'){


			$validator=array();
				$error=0;
				if(empty($_POST['title'])){
					$validator['title']="This fields is required";
					$error=1;
				}
				if(empty($_POST['icons'])){
					$validator['icons']="This fields is required";
					$error=1;
				}

				
	
		
				if($error==0){

			$eid=encryptor('decrypt',$_POST['eid']);
			$title=	mysqli_real_escape_string($conn,$_POST['title']);
			$subtitle=	mysqli_real_escape_string($conn,$_POST['subtitle']);

			$icons=	$_POST['icons'];
		

			$isnerrecord = mysqli_query($conn, "INSERT INTO `micro_site_amenities`(`project_id`, `title`,`icons`,`subtitle`) VALUES ('$eid','$title','$icons','$subtitle')");
			if($isnerrecord==1){
				echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
			}else{
				echo json_encode(['status'=>0,'message'=>"Somthing went wrong"]);
			}
	
		}else{
			echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
	
		}
		}elseif($_GET['action']=='updateothermicrodataamenities'){
			$eid=encryptor('decrypt',$_POST['eid']);
			$validator=array();
				$error=0;
				if(empty($_POST['updatetitle'])){
					$validator['updatetitle']="This fields is required";
					$error=1;
				}
				if(empty($_POST['icons'])){
					$validator['icons']="This fields is required";
					$error=1;
				}
				$icons=	$_POST['icons'];

				if($error==0){
					$eid=encryptor('decrypt',$_POST['eid']);
					$updatetitle=mysqli_real_escape_string($conn, $_POST['updatetitle']);
					$subtitle=	mysqli_real_escape_string($conn,$_POST['subtitle']);
					$isnerrecord = mysqli_query($conn, "UPDATE `micro_site_amenities` SET `subtitle`='$subtitle',title='$updatetitle',icons='$icons' WHERE id=".$eid."");


					if($isnerrecord==1){
						echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
					}else{
						echo json_encode(['status'=>0,'message'=>"Something went wrong"]);
					}
	
			}else{
				echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
			}
		}elseif($_GET['action']=='editdeveloperdata'){
			$eid=encryptor('decrypt',$_POST['dataid']);
				$isnerrecord = mysqli_query($conn, "SELECT * FROM `developer` WHERE id=".$eid."");
				if($isnerrecord->num_rows >0){
					$data=mysqli_fetch_assoc($isnerrecord);
					echo json_encode(['status'=>1,'message'=>"success",'data'=>$data]);
				}else{
					echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
	
	
	
	
				}
	
			}elseif($_GET['action']=='adddeveloperdata'){
				$validator=array();
				$error=0;
				if(empty($_POST['d_name'])){
					$validator['developer_name']="This fields is required";
					$error=1;
				}
				if(empty($_POST['d_about'])){
					$validator['developer_about']="This fields is required";
					$error=1;
				}
				if(empty($_FILES['d_logo']['name'])){
					$validator['developer_logo']="This fields is required";
					$error=1;
				}

				if(empty($_POST['d_address'])){
					$validator['developer_address']="This fields is required";
					$error=1;
				}
				if($error==0){

			

				$name = $_POST['d_name'];
				$address = mysqli_real_escape_string($conn, $_POST['d_address']);
				$about = $_POST['d_about'];
				$char_about = htmlspecialchars($about, ENT_QUOTES);
				$logo = $_FILES['d_logo'];
				$logo_name = $_FILES['d_logo']['name'];
				$logo_tmp_name = $_FILES['d_logo']['tmp_name'];
				$logo_ext = pathinfo($logo_name, PATHINFO_EXTENSION);
				
				$name_date = date('Y-m-d-h-i-s');
				$new_name = "developer-logo-$name_date.$logo_ext";
				
			
				$path = "uploads/developer/".$new_name;


				$db_logo_name = '';
				if(move_uploaded_file($logo_tmp_name, $path)){
					$db_logo_name = $new_name;
					$query = mysqli_query($conn,"INSERT INTO developer (name, logo, address, about) VALUES ('$name', '$path', '$address', '$char_about')");
					if($query){
						echo json_encode(['status'=>1,'message'=>"Develoepr Added Successfully"]);
					}else{
						echo json_encode(['status'=>0,'message'=>"Somthing went wrong"]);
					}
				}
			}else{
				echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);

			}
				
			}elseif($_GET['action']=='updatedeveloperdata'){

				$eid=encryptor('decrypt',$_POST['eid']);
				
				$error=0;
				$validator=array();
				if(empty($_POST['updatename'])){
					$validator['updatename']="This fields is required";
					$error=1;
				}
				if(empty($_POST['deveraddress'])){
					$validator['deveraddress']="This fields is required";
					$error=1;
				}
				

				if(empty($_POST['aboutdeveloperupdate'])){
					$validator['aboutdeveloperupdate']="This fields is required";
					$error=1;
				}
		
		
				if($error==0){
					$checkrecord = mysqli_query($conn, "SELECT * FROM developer WHERE id=".$eid."");
					if($checkrecord->num_rows >0){

						$rcordata=mysqli_fetch_assoc($checkrecord);

					$name=mysqli_real_escape_string($conn, $_POST['updatename']);
					$address=mysqli_real_escape_string($conn, $_POST['deveraddress']);
					$aboutdeveloperupdate=mysqli_real_escape_string($conn, $_POST['aboutdeveloperupdate']);

					$sqlstr="";
					if(!empty($_FILES['developerlogo']['name'])){

						if (file_exists($rcordata['logo'])){
							unlink($rcordata['logo']); 
						} 



						$meta_logo = $_FILES['developerlogo'];
						$meta_logo_name = $_FILES['developerlogo']['name'];
						$meta_logo_tmp_name = $_FILES['developerlogo']['tmp_name'];
						$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
						
						$brochure_date = time();
						$new_brochure = "developer-logo-$brochure_date.$image_ext";
						
						$meta_path = "uploads/developer/$new_brochure";
									
						
						if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
							$sqlstr=",logo='$meta_path'";
						}
					}



					$isnerrecord = mysqli_query($conn, "UPDATE `developer` SET `about`='$aboutdeveloperupdate',`name`='$name' ,`address`='$address' $sqlstr WHERE id=".$eid."");
				if($isnerrecord==1){
					echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
				}else{
					echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
				}
			}else{
				echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);

			}
				}else{
					echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
				}
				
		
			}elseif($_GET['action']=='deletedevelopers'){
		
		
				$dataid=encryptor('decrypt',$_POST['dataid']);
				$checkrecord = mysqli_query($conn, "SELECT * FROM `developer` WHERE id=".$dataid."");
				if($checkrecord->num_rows>0){
					$data=mysqli_fetch_assoc($checkrecord);
					$meta_path = $data['logo'];
					if (file_exists($meta_path)){
						if (unlink($meta_path)) {   
							
						}    
					}
	
				mysqli_query($conn, "DELETE FROM `developer` WHERE id=".$dataid."");
				echo json_encode(['status'=>1,'message'=>"Deleted Successfully"]);
	
				}else{
					echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
				}
	
			}elseif($_GET['action']=='updatecolumn'){
					$tablename=$_POST['tablename'];
					$column=$_POST['column'];
					$keyid=encryptor('decrypt', $_POST['keyid']);
					$value=$_POST['value'];
				
					$checkrecord = mysqli_query($conn, "UPDATE  $tablename SET $column='$value'  WHERE id=".$keyid."");
			


			}elseif($_GET['action'] == 'addservices'){

				$validator = array();
				$error = 0;
 
				if(empty($_FILES['thumbnail']['name'])){
					$validator['thumbnail'] = 'This field is required!';
					$error = 1;
				}

				if(empty($_FILES['feature']['name'])){
					$validator['feature'] = 'This field is required!';
					$error = 1;
				}

				if(empty($_POST['heading'])){
					$validator['heading']="This fields is required";
					$error=1;
				}

				if(empty($_POST['ckservices'])){
					$validator['ckservices']="This fields is required";
					$error=1;
				}

				if($error == 0 ){
					$meta_thumbnail="";
					if(!empty($_FILES['thumbnail']['name'])){
						$meta_logo = $_FILES['thumbnail'];
						$meta_logo_name = $_FILES['thumbnail']['name'];
						$meta_logo_tmp_name = $_FILES['thumbnail']['tmp_name'];
						$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
						
						$brochure_date = time();
						$new_brochure = "service-thumbnail-$brochure_date.$image_ext";
						
						$meta_thumbnail = "uploads/services/$new_brochure";
						if(move_uploaded_file($meta_logo_tmp_name, $meta_thumbnail)){
						
						}
					}

					$meta_feature = "";
					if(!empty($_FILES['feature']['name'])){
						$meta_logo = $_FILES['feature'];
						$meta_logo_name = $_FILES['feature']['name'];
						$meta_logo_tmp_name = $_FILES['feature']['tmp_name'];
						$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
						
						$brochure_date = time();
						$new_brochure = "service-feature-$brochure_date.$image_ext";
						
						$meta_feature = "uploads/services/$new_brochure";
						if(move_uploaded_file($meta_logo_tmp_name, $meta_feature)){
						
						}
					}
					
					
					$query = mysqli_query($conn, "INSERT INTO `services`(`page_url`, `meta_title`, `meta_keywords`, `meta_description`, `feature`, `feature_alt_tag`, `thumbnails`, `thumbnail_alt_tag`, `title`, `description`) VALUES ('".$_POST['pageurl']."','".$_POST['ServiceMetaTilte']."','".$_POST['ServiceMetaKeyword']."','".$_POST['ServiceMetadescription']."','$meta_feature','".$_POST['featureAlt']."','$meta_thumbnail','".$_POST['thumbnailAlt']."','".$_POST['heading']."','".$_POST['ckservices']."')");
					if($query == 1){
						echo json_encode(['status'=>1, 'message'=>"Your data has been submited successfully!"]);
					}else{
						echo json_encode(['status'=>0, 'message' => "Something went wrong"]);
					}
				}else {
					
					echo json_encode(['status'=>3, 'message'=> "Please Fill Mandatory Fields", 'errors' => $validator]);
					
				}


			}elseif($_GET['action'] == 'updateservices'){
				
				$eid =  encryptor('decrypt',$_POST['updateserviceId']);				
				$validator = array();
				$error = 0;

				if(empty($_POST['heading'])){
					$validator['heading']="This fields is required";
					$error=1;
				}

				if(empty($_POST['ckservices'])){
					$validator['ckservices']="This fields is required";
					$error=1;
				}

				if($error == 0){
					

					$meta_thumbnail = '';
					if(!empty($_FILES['thumbnail']['name'])){
						$meta_logo = $_FILES['thumbnail'];
						$meta_logo_name = $_FILES['thumbnail']['name'];
						$meta_logo_tmp_name = $_FILES['thumbnail']['tmp_name'];
						$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
						
						$brochure_date = time();
						$new_brochure = "service-thumbnail-$brochure_date.$image_ext";
						
						$meta_thumbnail = "uploads/services/$new_brochure";
						if(move_uploaded_file($meta_logo_tmp_name, $meta_thumbnail)){
						
						}
					}else{
						$meta_thumbnail = $_POST['old_thumbnail'];
					}

					$meta_feature = '';
					if(!empty($_FILES['feature']['name'])){
						$meta_logo = $_FILES['feature'];
						$meta_logo_name = $_FILES['feature']['name'];
						$meta_logo_tmp_name = $_FILES['feature']['tmp_name'];
						$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
						
						$brochure_date = time();
						$new_brochure = "service-feature-$brochure_date.$image_ext";
						
						$meta_feature = "uploads/services/$new_brochure";
						if(move_uploaded_file($meta_logo_tmp_name, $meta_feature)){
						
						}
					}else{
						$meta_feature = $_POST['old_feature'];	
					}

					$meta_title = mysqli_real_escape_string($conn, $_POST['ServiceMetaTilte']);
					$keywords = mysqli_real_escape_string($conn, $_POST['ServiceMetaKeyword']);
					$meta_desc = mysqli_real_escape_string($conn,$_POST['ServiceMetadescription'] );
					$thumbAlt = mysqli_real_escape_string($conn, $_POST['thumbnailAlt']);
					$featureAlt = mysqli_real_escape_string($conn, $_POST['featureAlt']);
					
					
					$sql = "UPDATE `services` SET `page_url`= '".$_POST['pageurl']."', `meta_title` = '$meta_title', `meta_keywords` = '$keywords', `meta_description` = '$meta_desc', `feature` = '$meta_feature', `feature_alt_tag`= '$featureAlt', `thumbnails` = '$meta_thumbnail', `thumbnail_alt_tag` = '$thumbAlt', `title`= '".$_POST['heading']."', `description`= '".$_POST['ckservices']."' WHERE id = $eid";
					$query = mysqli_query($conn, $sql);
					if($query == 1){
						echo json_encode(['status'=>1, 'message'=>"Your data has been updated successfully!"]);
					}else{
						echo json_encode(['status'=>0, 'message'=>"Something went wrong"]);
					}

				}else{
					echo json_encode(['status'=>3, 'message'=> "Please Fill Mandatory Fields", 'errors'=> $validator]);
				}
			}elseif($_GET['action'] == 'deleteservices'){

				$dataid = encryptor('decrypt',$_POST['dataid']);

				$checkrecord = mysqli_query($conn, "SELECT * FROM `services` WHERE id=".$dataid."");
				if(mysqli_num_rows($checkrecord) > 0){
					$data = mysqli_fetch_assoc($checkrecord);
					$meta_feature = $data['feature'];
					if (file_exists($meta_feature)){
						if (unlink($meta_feature)){
							
						}
					}

					$meta_thumbnail = $data['thumbnails'];
					if (file_exists($meta_thumbnail)){
						if (unlink($meta_thumbnail)){
							
						}
					}
		
					$query = mysqli_query($conn, "DELETE FROM `services` WHERE id=".$dataid."");

					if($query == 1){
						echo json_encode(['status'=>1,'message'=>"Deleted Successfully"]);
					}else{
						echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
					}
		
				}else{
					echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
				}
			}elseif($_GET['action']=='addcareerjobs'){
				$validator=array();
				$error=0;
				if(empty($_POST['project_name'])){
					$validator['project_name']="This fields is required";
					$error=1;
				}
				if(empty($_POST['location'])){
					$validator['location']="This fields is required";
					$error=1;
				}
				if(empty($_POST['job_type'])){
					$validator['job_type']="This fields is required";
					$error=1;
				}	
	
				if(empty($_POST['expeirced'])){
					$validator['expeirced']="This fields is required";
					$error=1;
				}
				if(empty($_POST['shordescriptions'])){
					$validator['shordescriptions']="This fields is required";
					$error=1;
				}
				if($error==0){
				$project_name=mysqli_real_escape_string($conn, $_POST['project_name']);
				$job_type=$_POST['job_type'];
				$location=$_POST['location'];
				$expeirced=$_POST['expeirced'];
				$shordescriptions=mysqli_real_escape_string($conn, $_POST['shordescriptions']);
				$project_meta=mysqli_real_escape_string($conn, $_POST['project_meta']);
				$project_keyword=mysqli_real_escape_string($conn, $_POST['project_keyword']);
				$project_description =mysqli_real_escape_string($conn, $_POST['project_description']);
				$page_url=createUrlSlug($_POST['project_name']).time();
				$checkrecord = mysqli_query($conn, "INSERT INTO `job_listing`(`experience`,`title`, `page_url`, `meta_title`, `meta_keyword`, `meta_descriptions`, `job_type`, `locations`, `short_descriptions`,`created_at`) VALUES ('$expeirced','$project_name','$page_url','$project_meta','$project_keyword','$project_description','$job_type','$location','$shordescriptions','".date('Y-m-d H:i:a',time())."')");
				if($checkrecord==1){
					echo json_encode(['status'=>1,'message'=>"Added Successfully"]);
				}else{
					echo json_encode(['status'=>0,'message'=>"SOmething went wrong"]);

				}
			
	
			}else{
				echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
			}	
		}elseif($_GET['action']=='updatecareerdata'){

			$validator=array();
			$error=0;
			if(empty($_POST['project_name'])){
				$validator['project_name']="This fields is required";
				$error=1;
			}
			if(empty($_POST['location'])){
				$validator['location']="This fields is required";
				$error=1;
			}
			if(empty($_POST['job_type'])){
				$validator['job_type']="This fields is required";
				$error=1;
			}	

			if(empty($_POST['expeirced'])){
				$validator['expeirced']="This fields is required";
				$error=1;
			}
			if(empty($_POST['shordescriptions'])){
				$validator['shordescriptions']="This fields is required";
				$error=1;
			}
			if($error==0){
			$project_name=mysqli_real_escape_string($conn, $_POST['project_name']);
			$job_type=$_POST['job_type'];
			$eid=encryptor('decrypt', $_POST['eid']);
			$location=$_POST['location'];
			$expeirced=$_POST['expeirced'];
			$shordescriptions=mysqli_real_escape_string($conn, $_POST['shordescriptions']);
			$project_meta=mysqli_real_escape_string($conn, $_POST['project_meta']);
			$project_keyword=mysqli_real_escape_string($conn, $_POST['project_keyword']);
			$project_description =mysqli_real_escape_string($conn, $_POST['project_description']);
			$page_url=createUrlSlug($_POST['page_url']);

			$checkrecord = mysqli_query($conn, "UPDATE `job_listing` SET `experience`='$expeirced',`title`='$project_name', `page_url`='$page_url', `meta_title`='$project_meta', `meta_keyword`='$project_keyword', `meta_descriptions`='$project_description', `job_type`='$job_type', `locations`='$location', `short_descriptions`='$shordescriptions' WHERE id=".$eid."");
			if($checkrecord==1){
				echo json_encode(['status'=>1,'message'=>"Added Successfully"]);
			}else{
				echo json_encode(['status'=>0,'message'=>"SOmething went wrong"]);
			}
		}else{
			echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
		}	
	}elseif($_GET['action']=='adddescriptionsdata'){
		$validator=array();
		$error=0;
	
		if(empty($_POST['heading'])){
			$validator['heading']="This fields is required";
			$error=1;
		}
		if(empty($_POST['descriptionslist'])){
			$validator['descriptionslist']="This fields is required";
			$error=1;
		}
		
		if($error==0){
			$jobid=encryptor('decrypt', $_POST['jobid']);
		$heading=mysqli_real_escape_string($conn, $_POST['heading']);
		$descriptionslist=mysqli_real_escape_string($conn, $_POST['descriptionslist']);
		$checkrecord = mysqli_query($conn, "INSERT INTO `job_descriptions`(`job_id`, `title`, `descriptions`) VALUES ('$jobid','$heading','$descriptionslist')");
		if($checkrecord==1){
			echo json_encode(['status'=>1,'message'=>"Added Successfully"]);
		}else{
			echo json_encode(['status'=>0,'message'=>"SOmething went wrong"]);

		}
	

	}else{
		echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
	}	
}elseif($_GET['action']=='editdescriptions'){
	$eid=encryptor('decrypt',$_POST['id']);
	
		$isnerrecord = mysqli_query($conn, "SELECT * FROM `job_descriptions` WHERE id=".$eid."");
		if($isnerrecord->num_rows >0){
			$data=mysqli_fetch_assoc($isnerrecord);
			echo json_encode(['status'=>1,'message'=>"success",'data'=>$data]);
		}else{
			echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);

		}

	}elseif($_GET['action']=='updateredescripndata'){

	
		$validator=array();
		$error=0;
		if(empty($_POST['heading'])){
			$validator['updateheading']="This fields is required";
			$error=1;
		}
		if(empty($_POST['descriptionslist'])){
			$validator['updatedescriptionslist']="This fields is required";
			$error=1;
		}
		
		if($error==0){
		$heading=mysqli_real_escape_string($conn, $_POST['heading']);
		$eid=encryptor('decrypt', $_POST['eid']);
		$descriptionslist=mysqli_real_escape_string($conn, $_POST['descriptionslist']);
		$checkrecord = mysqli_query($conn, "UPDATE `job_descriptions` SET `title`='$heading',`descriptions`='$descriptionslist' WHERE id=".$eid."");
		if($checkrecord==1){
			echo json_encode(['status'=>1,'message'=>"Update  Successfully"]);
		}else{
			echo json_encode(['status'=>0,'message'=>"SOmething went wrong"]);
		}
	}else{
		echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
	}	
}
elseif($_GET['action']=='addkeyhightlights'){
	$validator=array();
	$error=0;
	if(empty($_POST['keyheightlights'])){
		$validator['keyheightlights']="This fields is required";
		$error=1;
	}



	if($error==0){
	
	$eid=encryptor('decrypt',$_POST['eid']);
	$keyheightlights=mysqli_real_escape_string($conn, $_POST['keyheightlights']);




	$checkrecord = mysqli_query($conn, "INSERT INTO `micro_site_key_highlights`(`project_id`, `descriptions`) VALUES ('$eid','$keyheightlights')");
		if($checkrecord==1){
			echo json_encode(['status'=>1,'message'=>"Added Successfully"]);
		}else{
			echo json_encode(['status'=>0,'message'=>"SOmething went wrong"]);

		}


}else{
	echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
}	
}elseif($_GET['action']=='updatekeyhightlights'){

	$eid=encryptor('decrypt',$_POST['eid']);

	$validator=array();
	$error=0;
	
	if(empty($_POST['updatedescriptions'])){
		$validator['updatedescriptions']="This fields is required";
		$error=1;
	}


	if($error==0){
		
		$descriptions=mysqli_real_escape_string($conn, $_POST['updatedescriptions']);
		$isnerrecord = mysqli_query($conn, "UPDATE `micro_site_key_highlights` SET `descriptions`='$descriptions' WHERE id=".$eid."");
	if($isnerrecord==1){
		echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
	}else{
		echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
	}

	}else{
		echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
	}
	

}elseif($_GET['action']=='editkeyheightlihgts'){
	$eid=encryptor('decrypt',$_POST['dataid']);
		$isnerrecord = mysqli_query($conn, "SELECT descriptions FROM `micro_site_key_highlights` WHERE id=".$eid."");
		if($isnerrecord->num_rows >0){
			$data=mysqli_fetch_assoc($isnerrecord);
			echo json_encode(['status'=>1,'message'=>"success",'data'=>$data]);
		}else{
			echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);




		}

	}
	elseif($_GET['action']=='addmetatags'){
		$validator=array();
		$error=0;
		
		if(empty($_POST['page_type'])){
			$validator['page_type']="This fields is required";
			$error=1;
		}
		if($error==1){
			echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);

		}else{
			$page_type=$_POST['page_type'];
			$metatitle=$_POST['metatitle'];
			$metaKeyword=$_POST['metaKeyword'];
			$metadescriptions=$_POST['metadescriptions'];
			$metatitle=$_POST['metatitle'];
			$headerfields=$_POST['headerfields'];
			$footerfields=$_POST['footerfields'];


			$checkrecord = mysqli_query($conn, "SELECT * FROM `meta_details` WHERE page_type='$page_type'");

			if($checkrecord->num_rows >0){

			

			}else{
				$checkrecord = mysqli_query($conn, "INSERT INTO `meta_details`(`page_type`, `meta_title`, `meta_keyword`, `meta_descriptions`, `header`, `footer`)
				 VALUES ('$page_type','$metatitle','$metaKeyword','$metadescriptions','$headerfields','$footerfields')");
				 if($checkrecord==1){
					echo json_encode(['status'=>1,'message'=>"Meta Details Added Successfully"]);

				 }else{
					echo json_encode(['status'=>0,'message'=>"Something went wrong"]);

				 }

			}

		}
	
	

	}elseif($_GET['action']=='editmeadetails'){
		$eid=encryptor('decrypt',$_POST['dataid']);
			$isnerrecord = mysqli_query($conn, "SELECT * FROM `meta_details` WHERE id=".$eid."");
			if($isnerrecord->num_rows >0){
				$data=mysqli_fetch_assoc($isnerrecord);
				echo json_encode(['status'=>1,'message'=>"success",'data'=>$data]);
			}else{
				echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);




			}

		}


		elseif($_GET['action']=='addingmetatagformupdate'){

			$eid=encryptor('decrypt',$_POST['eid']);
			
	

				$metatitle=mysqli_real_escape_string($conn, $_POST['metatitle']);
				$metaKeyword=mysqli_real_escape_string($conn, $_POST['metaKeyword']);
				$metadescriptions=mysqli_real_escape_string($conn, $_POST['metadescriptions']);
				$headerfields=mysqli_real_escape_string($conn, $_POST['headerfields']);
				$footerfields=mysqli_real_escape_string($conn, $_POST['footerfields']);



				$isnerrecord = mysqli_query($conn, "UPDATE `meta_details` SET meta_descriptions='$metadescriptions',header='$headerfields',footer='$footerfields',`meta_title`='$metatitle' ,`meta_keyword`='$metaKeyword' WHERE id=".$eid."");
			if($isnerrecord==1){
				echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
			}else{
				echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);
			}
	
		}elseif($_GET['action']=='addmicrosections'){
			$validator=array();
			$error=0;
			
			if(empty($_POST['mainheading'])){
				$validator['mainheading']="This fields is required";
				$error=1;
			}
			if(empty($_POST['microid'])){
				$validator['microid']="This fields is required";
				$error=1;
			}
			if(empty($_POST['section_type'])){
				$validator['section_type']="This fields is required";
				$error=1;
			}
			if($error==1){
				echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
	
			}else{

				$sqlstr="";
				$filename="";
				if(!empty($_FILES['file']['name'])){
					$meta_logo = $_FILES['file'];
					$meta_logo_name = $_FILES['file']['name'];
					$meta_logo_tmp_name = $_FILES['file']['tmp_name'];
					$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
					
					$brochure_date = time();
					$new_brochure = "sections-$brochure_date.$image_ext";
					
					$filename = "uploads/microsite/sections/$new_brochure";
					move_uploaded_file($meta_logo_tmp_name, $filename);
					$sqlstr=",image='$filename'";
				}
				$descriptions="";
				if(!empty($_POST['secdescriptions'])){
					$descriptions=mysqli_real_escape_string($conn,$_POST['secdescriptions']);
				}



				$microid=encryptor('decrypt', $_POST['microid']);
				$section_type=encryptor('decrypt', $_POST['section_type']);
				$mainheading=mysqli_real_escape_string($conn, $_POST['mainheading']);
				$subheadin=mysqli_real_escape_string($conn, $_POST['subheadin']);
				$small_heading=mysqli_real_escape_string($conn, $_POST['small_heading']);

				$checkexists = mysqli_query($conn, "SELECT * FROM `micro_sections` WHERE micro_id=".$microid." AND section_type=".$section_type."");
				if($checkexists->num_rows >0){
					$existsimage=mysqli_fetch_assoc($checkexists);
					if(!empty($sqlstr)){
					if (file_exists($existsimage['image'])){
						if (unlink($existsimage['image'])) {   
							
						}    
					}
				}

					$isnerrecord = mysqli_query($conn, "UPDATE `micro_sections` SET descriptions='$descriptions',heading='$mainheading',sub_heading='$subheadin',small_heading='$small_heading
					' $sqlstr WHERE micro_id=".$microid." AND section_type=".$section_type."");

				}else{
					$isnerrecord = mysqli_query($conn, "INSERT INTO `micro_sections`(`micro_id`, `section_type`, `heading`, `sub_heading`,`small_heading`,`image`,`descriptions`) VALUES ('$microid','$section_type','$mainheading','$subheadin','$small_heading','$filename','$descriptions')");

				}
				if($isnerrecord==1){
					echo json_encode(['status'=>1,'message'=>"Update Successfully"]);
				}else{
					echo json_encode(['status'=>0,'message'=>"Somthin went wrong"]);

				}



			}

			
		}




		if($_GET['action']=='get_category_form'){
			
			$error=0;
			$validator=array();
			if(empty($_POST['catname'])){
				$error=1;
				$validator['catname']="Name Fields is required";
			}
			if(empty($_FILES['image'])){
				$error=1;
				$validator['image']="Image Fields is required";
			}
			
			
			if($error==0){
	
			$name = $_POST['catname'];
			$image = $_FILES['image']['name'];
			$image_tmp = $_FILES['image']['tmp_name'];

			$rand = rand();
			$extension = pathinfo($image, PATHINFO_EXTENSION);
			$newName = $rand.'.'.$extension;

			$location = "uploads/gallery_category/$newName";
			move_uploaded_file($image_tmp, $location);
			

			$sql = "INSERT INTO gallery_category(catname,image) VALUES('$name','$location')";
			$result = mysqli_query($conn, $sql);
	
		    
			if($result==1){
				echo json_encode(['status'=>1,'message'=>"Form Submitted Sucessfully"]);
			  }
	
			}else{
				echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
			}
	
	
		}


	/**********update gallery category ******************/
	if($_GET['action']=='update_category_form'){
			
		$error=0;
		$validator=array();
		if(empty($_POST['catname'])){
			$error=1;
			$validator['catname']="Name Fields is required";
		}
		

		if($error==0){
		$id = $_POST['id'];
		$name = $_POST['catname'];
		$checkrecord = mysqli_query($conn, "SELECT * FROM `gallery_category` WHERE id=".$id."");
		if($checkrecord->num_rows >0){
		$recordata=mysqli_fetch_assoc($checkrecord);
		$sqlstr="";
		
		if(!empty($_FILES['updateimage']['name'])){

			if (file_exists($recordata['image'])){
				unlink($recordata['image']);  
			}

			$meta_logo = $_FILES['updateimage'];
			$meta_logo_name = $_FILES['updateimage']['name'];
			$meta_logo_tmp_name = $_FILES['updateimage']['tmp_name'];
			$image_ext = pathinfo($meta_logo_name, PATHINFO_EXTENSION);
			
			$brochure_date = time();
			$new_brochure = "gallery-cat-$brochure_date.$image_ext";
			
			$meta_path = "uploads/gallery_category/$new_brochure";
			
		

			if(move_uploaded_file($meta_logo_tmp_name, $meta_path)){
				$bannerslist = $new_brochure;
				$sqlstr=",image='$meta_path'";


			}
		}

		$result = mysqli_query($conn, "UPDATE gallery_category SET catname='$name' $sqlstr WHERE id='$id'");
		if($result==1){
			echo json_encode(['status'=>1,'message'=>"Details Updated Sucessfully"]);
		}
		else{
			echo json_encode(['status'=>0,'message'=>"failed to update"]);

		}

		}else{
			echo json_encode(['status'=>0,'message'=>"Record Not Found"]);

		}
	}else{
		echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
	}
}
	
/*****************Delete Gallery Category***********************/

if($_GET['action']=='delete_category_form'){
	$id = encryptor('decrypt',$_POST['id']);
	
	$result = mysqli_query($conn, "SELECT * FROM gallery_category WHERE id='$id'");
	if($result->num_rows >0){
	
		$row = mysqli_fetch_assoc($result);
		if(file_exists($row['image'])){
			unlink($row['image']);  
		}
		$deleteQuery = mysqli_query($conn,"DELETE FROM gallery_category WHERE id='$id'");
		if($deleteQuery==1){
			echo json_encode(['status'=>1,'message'=>"Data Deleted Sucessfully"]);

		}else{
		echo json_encode(['status'=>0,'message'=>"Failed to delete"]);

		}
		
	}else{
		echo json_encode(['status'=>0,'message'=>"Something went wrong"]);
	}
}

?>