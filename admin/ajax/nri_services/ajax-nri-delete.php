<?php 
	include_once '../../config/conn.php';

    $id = $_POST['id'];
    $sqlselect = "SELECT * FROM nri_service WHERE id='$id'";
    $result1 = mysqli_query($conn,$sqlselect);

    $row1 = mysqli_fetch_assoc($result1);
    $large_image = $row1['large_image'];
    $mobile_image = $row1['mobile_image'];

    unlink('../../uploads/nri_services/'.$large_image);
    unlink('../../uploads/nri_services/'.$mobile_image);

    $sql = "DELETE FROM nri_service WHERE id='$id'";
    $result = mysqli_query($conn,$sql);

    if(!$result){
        die('Query failed '.mysqli_error($conn));
    }

    




?>