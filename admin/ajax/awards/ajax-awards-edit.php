<?php 
	include_once '../../config/conn.php';

$id = $_POST['id'];
$sql = "SELECT * FROM awards WHERE id='$id'";
$result = mysqli_query($conn,$sql);

if(!$result){
    die('Query failed '.mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$heading = $row['cat_title'];
$subheading = $row['cat_subTitle'];
$images = $row['cat_img'];
$videos = $row['cat_vdo'];

 
$multipleImages = '';
if($images == ''){
    $multipleImages = '';
}else{
   
        $multipleImages .= '<div class="img-box">
        <img src="../admin/uploads/awards/'.$images.'">
         </div>';

}

$multipleVideos = '';
if($videos == ''){
    $multipleVideos = '';
}
else{

    $multipleVideos .= '<div class="img-box">
    <video src="../admin/uploads/awards/'.$videos.'" autoplay="" muted=""></video>
     </div>';

}

$html = ['id' => $id, 'heading' => $heading, 'subheading' => $subheading, 'images' => $multipleImages, 'videos' => $multipleVideos, 'oldImages' => $images, 'oldVideos' => $videos];

echo json_encode($html);

?>