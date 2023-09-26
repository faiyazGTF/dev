<?php 
	include_once '../../config/conn.php';

    
    $id = $_POST['hiddenId'];
    

    $date = $_POST['date'];
    $heading = $_POST['heading'];
    $shortDesc = mysqli_real_escape_string($conn, $_POST['shortDesc']);
    $description = $_POST['description'];
   
    $old_desktop_image = $_POST['old_desktop_image'];
    $old_mobile_image = $_POST['old_mobile_image'];


    $sqrstr="";
    if(!empty($_FILES['desktop_image']['name'])){
        $desktop_image = $_FILES['desktop_image']['name'];
        $desktop_image_tmp = $_FILES['desktop_image']['tmp_name'];
        $location = "../../uploads/news/$old_desktop_image";
        move_uploaded_file($desktop_image_tmp, $location);
        $sqrstr.=",large_image='$old_desktop_image'";
    }

    if(!empty($_FILES['mobile_image']['name'])){
        $mobile_image = $_FILES['mobile_image']['name'];
        $mobile_image_tmp = $_FILES['mobile_image']['tmp_name'];
        $location1 = "../../uploads/news/$old_mobile_image";
        move_uploaded_file($mobile_image_tmp, $location1);
        $sqrstr.=",mobile_image='$old_mobile_image'";
    }
    $metatitle = mysqli_real_escape_string($conn,$_POST['metatitle']);
    $metakey = mysqli_real_escape_string($conn,$_POST['metakey']);
    $metadesc = mysqli_real_escape_string($conn,$_POST['metadesc']);

    $sql = "UPDATE news SET meta_title='$metatitle',meta_keywords='$metakey',meta_description='$metadesc',heading='$heading', shortDesc='$shortDesc', description='$description', blogDate='$date' $sqrstr WHERE id='$id'";
    $result = mysqli_query($conn,$sql);
    
    if(!$result){
        die('Query failed '.mysqli_error($conn));
    }
    


?>
