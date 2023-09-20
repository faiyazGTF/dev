<?php 
	include_once '../../config/conn.php';
    $id = $_POST['id'];
    $heading = $_POST['heading'];
    $subheading = $_POST['subheading'];
    $oldImages = $_POST['oldImages'];
    $oldVideos = $_POST['oldVideos'];

    print_r($_POST);
 

    if(isset($_FILES['images'])){
    $images = count($_FILES['images']['name']);

    for($i = 0; $i < $images; $i++){
        $imagesAll = $_FILES['images']['name'][$i];
        $imagesAll_tmp = $_FILES['images']['tmp_name'][$i];

          
        $rand = rand();
        $extension = pathinfo($imagesAll, PATHINFO_EXTENSION);
        $newName = "awards-".$rand.'.'.$extension;
        
        $updateImage = '';

        if($oldImages != ''){

        $location = "../../uploads/awards/$oldImages";
    
        }else{
            $location = "../../uploads/awards/$newName";
        }


       if(move_uploaded_file($imagesAll_tmp, $location));
      }    
            if($oldImages != ''){
             $newUpdatedfinalImages = $oldImages;
            }
            else{
                $newUpdatedfinalImages = $newName;  
            }
            
    }else{
        $newUpdatedfinalImages = $oldImages;
    }

    if(isset($_FILES['videos'])){
      $videos = count($_FILES['videos']['name']);
    
      for($j = 0; $j < $videos; $j++){
        $videosAll = $_FILES['videos']['name'][$j];
        $videosAll_tmp = $_FILES['videos']['tmp_name'][$j];
    
        $rand1 = rand();
        $extension1 = pathinfo($videosAll, PATHINFO_EXTENSION);
        $newName = "awards-".$rand1.'.'.$extension1;
        
        $updatevideos = '';

        if($oldVideos != ''){

            $location1 = "../../uploads/awards/$oldVideos";
        
            }else{
                $location1 = "../../uploads/awards/$newName";
            }
    
              
    if(move_uploaded_file($videosAll_tmp, $location1));
    }
        if($oldVideos != ''){
            $newUpdatedfinalVideos = $oldVideos;
        }
        else{
            $newUpdatedfinalVideos = $newName;  
        }
      
    }else{
        $newUpdatedfinalVideos = $oldVideos;
    }

  
    $sql = "UPDATE awards SET cat_title='$heading', cat_subTitle='$subheading', cat_img='$newUpdatedfinalImages', cat_vdo='$newUpdatedfinalVideos' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    print_r($result);
    
    if(!$result){
        die('Query failed '.mysqli_error($conn));
    }

?>