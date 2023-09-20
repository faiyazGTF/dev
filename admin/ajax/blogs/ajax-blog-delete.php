<?php 
	include_once '../../config/conn.php';

    $id = $_POST['id'];
    $sqlselect = "SELECT * FROM blogs WHERE id='$id'";
    $result1 = mysqli_query($conn,$sqlselect);

    $row1 = mysqli_fetch_assoc($result1);
    $large_image = $row1['large_image'];
    $mobile_image = $row1['mobile_image'];

    unlink('../../uploads/blogs/'.$large_image);
    unlink('../../uploads/blogs/'.$mobile_image);

    $sql = "DELETE FROM blogs WHERE id='$id'";
    $result = mysqli_query($conn,$sql);

    if(!$result){
        die('Query failed '.mysqli_error($conn));
    }

    




?>