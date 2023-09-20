<?php
    include_once '../admin/config/conn.php';
    // include_once '../../include/functions.php';
    if($_GET['action'] == 'addcontactuser'){
        $validator=array();
        $error=0;
        if(empty($_POST['query_name'])){
            $validator['query_name']="This fields is required";
            $error=1;
        }

        if(empty($_POST['query_email'])){
            $validator['query_email']="This fields is required";
            $error=1;
        }


        if(empty($_POST['query_phone'])){
            $validator['query_phone']="This fields is required";
            $error=1;
        }


        if(empty($_POST['query_msg'])){
            $validator['query_msg']="This fields is required";
            $error=1;
        }

        if($error == 1){
            
            echo json_encode(['status'=>3,'message'=>"Please Fill Mandatory Fields",'errors'=>$validator]);

        }else if($error == 0){
            $sql = "INSERT INTO contact_us (name, email, phone, message) VALUES ('".$_POST['query_name']."', '".$_POST['query_email']."', '".$_POST['query_phone']."', '".$_POST['query_msg']."')";
            $query = mysqli_query ($conn, $sql) or die('Error '.mysqli_connect_error($conn));
            if($query){
                echo json_encode(['status'=>1, 'message'=>"Your data has been submited successfully!"]);
            }

        }
    }else if($_GET['action'] == 'addmicrocontactform'){

        $validator=array();
        $error=0;
        if(empty($_POST['query_name'])){
            $validator['query_name']="This fields is required";
            $error=1;
        }

        if(empty($_POST['query_email'])){
            $validator['query_email']="This fields is required";
            $error=1;
        }


        if(empty($_POST['query_phone'])){
            $validator['query_phone']="This fields is required";
            $error=1;
        }


        if(empty($_POST['query_msg'])){
            $validator['query_msg']="This fields is required";
            $error=1;
        }

        if($error == 1){
            
            echo json_encode(['status'=>3,'message'=>"Please Fill Mandatory Fields",'errors'=>$validator]);

        }else if($error == 0){
            $sql = "INSERT INTO `property_query`(`developer_id`, `page_url`, `name`, `email`, `description`, `property_name`, `property_address`, `property_type_modal`) VALUES ('".$_POST['query_developer_id']."', '".$_POST['query_page_url']."', '".$_POST['query_name']."', '".$_POST['query_email']."', '".$_POST['query_msg']."', '".$_POST['query_project_name']."', '".$_POST['query_address']."', '".$_POST['query_property_type']."')";
            $query = mysqli_query ($conn, $sql) or die('Error '.mysqli_connect_error($conn));
            if($query){
                echo json_encode(['status'=>1, 'message'=>"Your data has been submited successfully!"]);
            }

        }
    }elseif($_GET['action'] == 'addtouchwithusform'){
        $validator=array();
        $error=0;
        if(empty($_POST['getname'])){
            $validator['getname']="This fields is required";
            $error=1;
        }

        if(empty($_POST['getemail'])){
            $validator['getemail']="This fields is required";
            $error=1;
        }


        if(empty($_POST['getphone'])){
            $validator['getphone']="This fields is required";
            $error=1;
        }


        if(empty($_POST['getcomment'])){
            $validator['getcomment']="This fields is required";
            $error=1;
        }

        if($error == 1){
            
            echo json_encode(['status'=>3,'message'=>"Please Fill Mandatory Fields",'errors'=>$validator]);

        }else if($error == 0){
            $sql = "INSERT INTO `property_query`(`developer_id`, `page_url`, `name`, `email`, `description`, `property_name`, `property_address`, `property_type_modal`) VALUES ('".$_POST['getdeveloperid']."', '".$_POST['getpageurl']."', '".$_POST['getname']."', '".$_POST['getemail']."', '".$_POST['getcomment']."', '".$_POST['getprojectname']."', '".$_POST['getaddress']."', '".$_POST['gettypeid']."')";
            $query = mysqli_query ($conn, $sql) or die('Error '.mysqli_connect_error($conn));
            if($query){
                echo json_encode(['status'=>1, 'message'=>"Your data has been submited successfully!"]);
            }

        }
    }else if($_GET['action'] == 'editmodaldata'){
 
        $result = mysqli_query($conn,"SELECT * FROM micro_site WHERE id='".$_POST['id']."'");
        // $property_type = getTypologyName($conn, $_POST['id']);

        if($result->num_rows > 0){
            $data = mysqli_fetch_assoc($result);
            echo json_encode([
                'status'=>1,
                // 'property_type'=>$property_type,
                'data'=>$data
            ]);
        }else{
            echo json_encode([
                'status'=>1,
                'message'=>'data not found'
            ]);
        }
    }elseif($_GET['action'] == 'addmodaldatamicrosite'){

        $validator=array();
        $error=0;
        if(empty($_POST['modalinsname'])){
            $validator['modalinsname']="This fields is required";
            $error=1;
        }

        if(empty($_POST['modalinsemail'])){
            $validator['modalinsemail']="This fields is required";
            $error=1;
        }


        if(empty($_POST['modalinsphone'])){
            $validator['modalinsphone']="This fields is required";
            $error=1;
        }


        if(empty($_POST['modalinscomment'])){
            $validator['modalinscomment']="This fields is required";
            $error=1;
        }


        if($error == 1){
            echo json_encode(['status'=>3,'message'=>"Please Fill Mandatory Fields",'errors'=>$validator]);
        }else{
            
        $query = mysqli_query ($conn, "INSERT INTO `property_query`(`developer_id`, `page_url`, `name`, `email`, `description`, `property_name`, `property_address`, `property_type_modal`) VALUES ('".$_POST['developerId']."', '".$_POST['modalpageurl']."', '".$_POST['modalinsname']."', '".$_POST['modalinsemail']."', '".$_POST['modalinscomment']."', '".$_POST['projectname']."', '".$_POST['modalpropertyaddress']."', '".$_POST['modalpropertytype']."')");
            if($query==1){
                if($_POST['etype'] != 'undefined'){
                    echo json_encode(['status'=>1, 'message'=>"Your data has been submited successfully!", 'type'=> $_POST['etype']]);
                }else{
                    echo json_encode(['status'=>1, 'message'=>"Your data has been submited successfully!", 'type'=> 0]);
                }
            }
        }
    }
?>