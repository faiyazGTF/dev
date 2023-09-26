<?php 
      include_once 'admin/config/conn.php';


      if($_GET['action']=='contacform'){

            $error=0;
            $validator=array();
            if(empty($_POST['name'])){
                  $error=1;
                  $validator['error-name']="Name Fields is required";
            }
            if(empty($_POST['email'])){
                  $error=1;
                  $validator['error-email']="Email Fields is required";
            }
            if(empty($_POST['phone'])){
                  $error=1;
                  $validator['error-phone']="Phone Fields is required";
            }
            if(empty($_POST['message'])){
                  $error=1;
                  $validator['error-message']="Message Fields is required";
            }

            if($error==0){

            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = mysqli_real_escape_string($conn,$_POST['message']);

            $sql = "INSERT INTO contact_us(name,email,phone,message) VALUES('$name','$email','$phone','$message')";
            $result = mysqli_query($conn, $sql);

          
            if($result==1){
                  echo json_encode(['status'=>1,'message'=>"Form Submitted Sucessfully"]);
              }

            }else{
                  echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
            }


      }

/*******************micro_site**************************/

      if($_GET['action']=='micro_contacform'){

            $error=0;
            $validator=array();
            if(empty($_POST['micro_page_id'])){
                  $error=1;
                  $validator['error-micro_page_id']="Select Project";
            }
            if(empty($_POST['name'])){
                  $error=1;
                  $validator['error-name']="Name Fields is required";
            }
            if(empty($_POST['email'])){
                  $error=1;
                  $validator['error-email']="Email Fields is required";
            }
            if(empty($_POST['phone'])){
                  $error=1;
                  $validator['error-phone']="Phone Fields is required";
            }
            if(empty($_POST['message'])){
                  $error=1;
                  $validator['error-message']="Message Fields is required";
            }

            if($error==0){
            $project = $_POST['micro_page_id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = mysqli_real_escape_string($conn,$_POST['message']);

            $sql = "INSERT INTO micro_site_query(project, name,email,phone,message) VALUES('$project','$name','$email','$phone','$message')";
            $result = mysqli_query($conn, $sql);

          
            if($result==1){
                  echo json_encode(['status'=>1,'message'=>"Form Submitted Sucessfully"]);
              }

            }else{
                  echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
            }


      }


/********************Share CV / Job application*****************************/



if($_GET['action']=='add_sharecv_form'){

      $error=0;
      $validator=array();
      if(empty($_POST['name'])){
            $error=1;
            $validator['name']="name Fields is required";
      }
      if(empty($_POST['email'])){
            $error=1;
            $validator['email']="email Fields is required";
      }
      if(empty($_POST['mobile'])){
            $error=1;
            $validator['mobile']="mobile Fields is required";
      }
      if(empty($_POST['title'])){
            $error=1;
            $validator['title']="mobile Fields is required";
      }
      if(empty($_POST['experience'])){
            $error=1;
            $validator['experience']="experience Fields is required";
      }
      if(empty($_POST['message'])){
            $error=1;
            $validator['message']="description Fields is required";
      }
      if(empty($_FILES['resume']['name'])){
            $error=1;
            $validator['resume']="resume Fields is required";
      }

      if($error==0){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $title = $_POST['title'];
      $experience = $_POST['experience'];
      $message = mysqli_real_escape_string($conn,$_POST['message']);

        $image = $_FILES['resume']['name'];
        $image_tmp = $_FILES['resume']['tmp_name'];

        $rand = rand();
        $extension = pathinfo($image, PATHINFO_EXTENSION);
        $newName = $rand.'.'.$extension;

        $location = "admin/uploads/jobapplication/$newName";
        move_uploaded_file($image_tmp, $location);
        


      $sql = "INSERT INTO jobapplication(title,name,email,mobile,experience,description,resume) VALUES('$title','$name','$email','$mobile','$experience','$message','$newName')";
      $result = mysqli_query($conn, $sql);

    
      if($result==1){
            echo json_encode(['status'=>1,'message'=>"Form Submitted Sucessfully"]);
        }

      }else{
            echo json_encode(['status'=>3,'message'=>"Plese Fill Mandaoty Fields",'errors'=>$validator]);
      }


}






















?>