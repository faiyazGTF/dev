<?php include 'include/config.php';
include 'include/functions.php';
if(!empty($_GET['page_url'])){
   $checkrecords=  mysqli_query($conn, "SELECT * FROM `platter_page` WHERE page_url='".$_GET['page_url']."'");
   if($checkrecords->num_rows >0){
      $pagedata=mysqli_fetch_assoc($checkrecords);
      // echo  "<pre>";print_r($pagedata);die;
      
   }else{
      echo  "<script>window.location.href='index.php';</script>";

   }

}else{
   echo  "<script>window.location.href='index.php';</script>";
}


$micropages=  mysqli_query($conn, "SELECT * FROM `micro_site` WHERE platter_id=".$pagedata['id']."");

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title><?= $pagedata['meta_title']; ?></title>
 <meta name="keywords" content="<?= $pagedata['meta_keyword']; ?>">
 <meta name="description" content="<?= $pagedata['meta_description']; ?>">

 <?php include 'include/css-url.php'; ?>
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/platter-style.css">

</head>
<body>

  <!------------------ Slider Codes Start From Here  --------------------------->
  <div class="custom-navbar-and-slider-section">
    
   <?php include 'include/header.php'; ?>

     <div id="demo" class="carousel slide custom-slider" data-ride="carousel">
    
        <div class="carousel-inner">
         <?php  
               $bannerq=  mysqli_query($conn, "SELECT * FROM `platter_site_banner` WHERE project_id='".$pagedata['id']."'");
               if($bannerq->num_rows >0){
                  $sno=1;
                  while ($bannerdata=mysqli_fetch_assoc($bannerq)) {
                        echo  ' <div class="carousel-item '.($sno==1 ? 'active':"").'">
                        <img src="'.ADMIN_URL.$bannerdata['desktop_image'].'" alt="'.$pagedata['name'].' Banners" class="img-fluid d-none d-md-block">
                        <img src="'.ADMIN_URL.$bannerdata['mobile_banner'].'" alt="'.$pagedata['name'].' Banners" class="img-fluid d-block d-md-none">

                     </div>';
                     $sno++;
                  }
               }

         ?>
          

        </div>
      
        <div class="slider-content">
           <p class="top-sub-heading">Welcome</p>
           <h1 class="demo-heading"><?= $pagedata['name'] ?></h1>
           <p class="typology-heading-custom"><?= getTypologyName($conn,$pagedata['type_id']) ?></p>
           <h4 class="starting-price-heading">Price Start From : <span>₹ <?= $pagedata['starting_price'] ?></span></h4>
        </div>
        <?php 
         if(!empty($pagedata['discount_image'])){
            echo '<img src="'.ADMIN_URL.$pagedata['discount_image'].'" alt="" class="img-fluid gold-3-img">';
         }
        ?>
                   
     </div>

     <form class="mircosite-form">
         <h4 class="top-form-heading">Send us a message</h4>
         <div class="form-group">
                             <select name="micro_page_id"  class="custom-select error-micro_page_id" placeholder="Select Project" required="">
                             <option value="">Choose Project</option>
                              <?php 
                              $micropageslist=  mysqli_query($conn, "SELECT name,id FROM `micro_site` WHERE platter_id=".$pagedata['id']."");

                              if($micropageslist->num_rows >0){
                                 while ($micropageslistdata=mysqli_fetch_assoc($micropageslist)) {
                                    echo '<option value="'.$micropageslistdata['id'].'">'.$micropageslistdata['name'].'</option>';
                                 }
                              }
                              ?>
                          
                        
                               </select>
                           </div>
         <div class="form-group">
            <i class="fa fa-user"></i>
            <input type="text" class="form-control error-name" name="name" placeholder="Enter Name">
         </div>
         <div class="form-group">
            <i class="fa fa-envelope"></i>
            <input type="text" class="form-control error-email" name="email" placeholder="Enter Email ID">
         </div>
         <div class="form-group">
             <i class="fa fa-phone"></i>
            <input type="text" class="form-control number-only error-phone" name="phone" placeholder="Enter Phone Number">
         </div>
         <div class="form-group">
            <i class="fa fa-comments-o"></i>
            <input type="text" class="form-control error-message" name="message" placeholder="Enter Message">
         </div>
         <button type="button" class="btnb btn-custom" onclick="micro_formsubmit('.mircosite-form');">Submit Now</button>  
      </form>



  </div>
  <!------------------ Slider Codes End From Here  --------------------------->



  <?php  
               $bannerq=  mysqli_query($conn, "SELECT * FROM `platter_site_stripe` WHERE project_id='".$pagedata['id']."'");
               if($bannerq->num_rows >0){
                  $sno=1;
                  while ($bannerdata=mysqli_fetch_assoc($bannerq)) {
                        echo  ' 
                        <img src="'.ADMIN_URL.$bannerdata['desktop_image'].'" alt="'.$pagedata['name'].' Stripe" class="img-fluid strip-banner d-none d-md-block" data-toggle="modal" data-target="#myModalProject-4">
                        <img src="'.ADMIN_URL.$bannerdata['mobile_banner'].'" alt="'.$pagedata['name'].' Stripe" class="img-fluid strip-banner d-block d-md-none" data-toggle="modal" data-target="#myModalProject-4">
';
                     $sno++;
                  }
               }

         ?>

         




  <!---------------- Our Projects Section Codes Start From Here --------------->
  <div class="container-fluid our-projects-container">
      <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-12 text-center">
                <p class="sub-heading-top"><?= getCatName($conn,$pagedata['cat_id'])['name'] ?> PROJECTS</p>
                <h4 class="custom-heading-dark"> <?= $pagedata['name'] ?></h4>
            </div>
               <?php 
                  if($micropages->num_rows >0){
                     while ($microdata=mysqli_fetch_assoc($micropages)) {
                        echo ' <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="project-box">
                           <div class="project-cover">
                              <img src="'.ADMIN_ASSETS.'microsite/feature-image/'.$microdata['feature_image'].'" alt="" class="img-fluid project-box-img">
                              <div class="logo-div-box">
                                 <h4 class="project-logo">'.$microdata['name'].'</h4>
                              </div>
                           </div>
                           <p class="typology-heading">
                           '.getTypologyName($conn,$microdata['type_id']).'
                           </p>
                           <div class="project-box-content">
                              <p class="project-name">'.(!empty($microdata['starting_price']) ? $microdata['starting_price'] : "On Request").'</p>
                              <p class="project-location">'.$microdata['address'].'</p>
                              <button type="button" class="btn btn-custom-2 microidform" data-micro="'.$microdata['id'].'" >Interested </button>
                              <button type="button" class="btn btn-custom-2" style="margin-left:30px;"><a href="micro.php?page_url='.$microdata['page_url'].'">Check More</a> </button>     
                           </div>
                        </div>
                      </div>';
                     }
                  }
               ?>
             
                        
          </div>

           

      </div>
  </div>
  <!---------------- Our Projects Section Codes End From Here --------------->

<?php include 'include/footer.php'; ?>
<?php include 'include/modal.php'; ?>
<?php  include 'include/js-url.php'; ?>

<script>
   $('.microidform').click(function(){
      debugger;
      var microidform =$(this).attr('data-micro');
      $('#hiddenmicroid').remove();
      $("#enqodal").find('form').append('<input id="hiddenmicroid" class="error-micro_page_id" name="micro_page_id" type="hidden" value="'+microidform+'" />')
    $("#enqodal").modal('show');
})
</script>
</body>
</html>