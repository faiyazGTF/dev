<?php  

function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}

function encryptor($action, $string) {


    $output = false;
    $encrypt_method = "AES-256-CBC";
    
    $secret_key = 'PerfectTutorHash';
    $secret_iv = 'faiz@12345678';

   
    $key = hash('sha256', $secret_key);
    
   
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    
    if( $action == 'encrypt' ) 
    {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' )
    {
    	
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0,      $iv);
      
    }

    return $output;
}



function deleteFileFromServer($tablename,$columnname,$compareid){
    global $conn;
    $compareid=encryptor('decrypt',$compareid);
    $allbanenrq = mysqli_query($conn, "SELECT $columnname FROM $tablename WHERE id=".$compareid."");
    echo  "<pre>";print_r($allbanenrq);
}

function getOthertimeName($conn,$id){

    $getrecords = mysqli_query($conn, "SELECT `name` FROM `other_icons` WHERE id=".$id."");

    if($getrecords->num_rows >0){
        $data=mysqli_fetch_assoc($getrecords);
        return $data['name'];
    }
}
function getOthertimeIcons($conn,$id){

    $getrecords = mysqli_query($conn, "SELECT `icon` FROM `other_icons` WHERE id=".$id."");

    if($getrecords->num_rows >0){
        $data=mysqli_fetch_assoc($getrecords);
        return $data['icon'];
    }
}
function getSizeType($type=""){
    $array=array(
        1=>'Sq.Ft.',
        2=>'Sq.yards.'
    );
    if(!empty($type)){
        return $array[$type];
    }else{
        return $array;
    }
}
function getPriceType($type=""){
    $array=array(
        1=>'Lacs* ',
        2=>'cr*'
    );
    if(!empty($type)){
        return $array[$type];
    }else{
        return $array;
    }
}
function getTypology($conn){
    $getrecords = mysqli_query($conn, "SELECT name,id FROM `property`");
    $data=[];
    if($getrecords->num_rows >0){
        while ($row=mysqli_fetch_assoc($getrecords)) {
            $data[]=$row;
        }
    }
    return $data;

}

function getTypologyName($conn,$id){
    $getrecords = mysqli_query($conn, "SELECT name FROM `property` WHERE id=".$id."");
    if($getrecords->num_rows>0){
        $row=mysqli_fetch_assoc($getrecords);
        return $row['name'];
    }

}


function getCatName($conn,$id){
    $getrecords = mysqli_query($conn, "SELECT name FROM `category` WHERE id=".$id."");
    if($getrecords->num_rows>0){
        $row=mysqli_fetch_assoc($getrecords);
        return $row['name'];
    }

}

function getjobType($type=""){
    $array=array(
        1=>'Full Time ',
        2=>'Part Time'
    );
    if(!empty($type)){
        return $array[$type];
    }else{
        return $array;
    }
}
function getjobExperienced($type=""){
    $array=array(
        1=>'Fresher',
        2=>'1+ year',
        3=>'2+ year',
        4=>'3+ year',
        5=>'4+ year',
        6=>'5+ year',
        7=>'6+ year',
        8=>'7+ year',
        9=>'8+ year',
        10=>'9+ year',
        11=>'10+ year',


    );
    if(!empty($type)){
        return $array[$type];
    }else{
        return $array;
    }
}
function createUrlSlug($urlString)
{
    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $urlString);
    return $slug;
}

function getmetapages($type=""){
    $array=array('index','about','service','contact','feature','residentials','commericial','awards','career','blogs','testionials');
    if(!empty($type)){
        return $array[$type];
    }else{
        return $array;
    }
}
function getMicrpagename($conn,$id){

    $getrecords = mysqli_query($conn, "SELECT `name`,page_url FROM `micro_site` WHERE id=".$id."");

    if($getrecords->num_rows >0){
        $data=mysqli_fetch_assoc($getrecords);
        return $data;
    }
}

?>