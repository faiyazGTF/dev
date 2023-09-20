<?php 
	include_once '../../config/conn.php';
    
    $validator=array();
	$error=0;

	if(empty($_POST['date'])){
		$validator['date']="This fields is required";
		$error=1;
	}

	if(empty($_POST['blogHeading'])){
		$validator['blogHeading']="This fields is required";
		$error=1;
	}
    if(empty($_POST['shortDesc'])){
		$validator['shortdescriptions']="This fields is required";
		$error=1;
	}
	if(empty($_POST['ckdescription'])){
		$validator['description']="This fields is required";
		$error=1;
	}

    if($error==0){
    $date = $_POST['date'];
    $heading = mysqli_real_escape_string($conn,$_POST['blogHeading']);
    $shortDesc = mysqli_real_escape_string($conn,$_POST['shortDesc']);
    $description = mysqli_real_escape_string($conn,$_POST['ckdescription']);

   


	//desktop image
	if($_FILES['desktop_image']['name']){
	$desktop_image = $_FILES['desktop_image']['name'];
	$desktop_image_tmp = $_FILES['desktop_image']['tmp_name'];

	$rand = rand();
	$extension = pathinfo($desktop_image, PATHINFO_EXTENSION);
	$desktop_newName = 'blog-l'.$rand.'.'.$extension;

	$location = "../../uploads/blogs/$desktop_newName";

	move_uploaded_file($desktop_image_tmp, $location);
	}

	//mobile image
	if($_FILES['mobile_image']['name']){
	$mobile_image = $_FILES['mobile_image']['name'];
	$mobile_image_tmp = $_FILES['mobile_image']['tmp_name'];

	$rand1 = rand();
	$extension1 = pathinfo($mobile_image, PATHINFO_EXTENSION);
	$mobile_newName = 'blog-m'.$rand1.'.'.$extension;

	$location1 = "../../uploads/blogs/$mobile_newName";

	move_uploaded_file($mobile_image_tmp, $location1);
	}
	$metatitle = mysqli_real_escape_string($conn,$_POST['metatitle']);
    $metakey = mysqli_real_escape_string($conn,$_POST['metakey']);
    $metadesc = mysqli_real_escape_string($conn,$_POST['metadesc']);

$result = mysqli_query($conn,"INSERT INTO blogs(meta_title,meta_keywords,meta_description,heading,large_image,mobile_image,shortDesc,description,blogDate) VALUES('$metatitle','$metakey','$metadesc','$heading','$desktop_newName','$mobile_newName','$shortDesc','$description','$date')");

if($result==1){
    echo json_encode(['status'=>1,'message'=>"Blog Added Sucessfully"]);
}
}else{
    echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
}


   


?>