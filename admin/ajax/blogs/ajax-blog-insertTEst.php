<?php 
	include_once '../../config/conn.php';
   
	$validator = array();
	$error = 0;


if(empty($_POST['date'])){
	$validator['date']="this field is req";
	$error = 1;
}

if(empty($_POST['heading'])){
	$validator['blogHeading']='This blog heading require';
	$error = 1;
}

if(empty($_POST['shortDesc'])){
	$validator['shortDesc']='This blog heading require';
	$error = 1;
}

if(empty($_POST['ckdescription'])){
	$validator['description']='This blog heading require';
	$error = 1;
}

if($error==0){
    $date = $_POST['date'];
    $heading = $_POST['heading'];
    $shortDesc = $_POST['shortDesc'];
    $description = $_POST['ckdescription'];

$result = mysqli_query($conn,"INSERT INTO blogs(heading,shortDesc,description,blogDate) VALUES('$heading','$shortDesc','$description','$date')");

if($result==1){
	echo json_encode(['status'=>1,'message'=>"Blog Added Sucessfully"]);
}


}else{
	echo json_encode(['status'=>3, 'message'=>"please fill mandatory details", 'error'=>$validator]);
}


?>