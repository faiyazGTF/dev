<?php include 'include/config.php';
include 'include/functions.php';
if(!empty($_GET['page_url'])){
   
   $checkrecords=  mysqli_query($conn, "SELECT * FROM `micro_site` WHERE page_url='".$_GET['page_url']."'");
   if($checkrecords->num_rows >0){
      $pagedata=mysqli_fetch_assoc($checkrecords);
      $bannerq=  mysqli_query($conn, "SELECT * FROM `micro_site_banner` WHERE project_id='".$pagedata['id']."'");
      $keyheightlightsq=  mysqli_query($conn, "SELECT * FROM `micro_site_key_highlights` WHERE project_id='".$pagedata['id']."'");
      $overviewq=  mysqli_query($conn, "SELECT * FROM `micro_site_overview` WHERE project_id='".$pagedata['id']."'");
      $priceqsectiosn=  mysqli_query($conn, "SELECT * FROM `micro_sections` WHERE micro_id='".$pagedata['id']."' AND  section_type=2");
      $heightlightsq=  mysqli_query($conn, "SELECT * FROM `micro_sections` WHERE micro_id='".$pagedata['id']."' AND  section_type=3");
      $amennitiesqsectionsq=  mysqli_query($conn, "SELECT * FROM `micro_sections` WHERE micro_id='".$pagedata['id']."' AND  section_type=4");
      $locationssectionsq=  mysqli_query($conn, "SELECT * FROM `micro_sections` WHERE micro_id='".$pagedata['id']."' AND  section_type=5");
      $floorplanssectionsq=  mysqli_query($conn, "SELECT * FROM `micro_sections` WHERE micro_id='".$pagedata['id']."' AND  section_type=6");
      $gallerysectionsq=  mysqli_query($conn, "SELECT * FROM `micro_sections` WHERE micro_id='".$pagedata['id']."' AND  section_type=7");





      
   }else{
      echo  "<script>window.location.href='index.php';</script>";

   }

}else{
   echo  "<script>window.location.href='index.php';</script>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $pagedata['title']; ?></title>
 <meta name="keywords" content="<?= $pagedata['title']; ?>">
 <meta name="description" content="<?= $pagedata['description']; ?>">
  <?php include 'include/css-url-micro.php'; ?>


</head>
<body>

  <!------------------ Slider Codes Start From Here  --------------------------->
  <div class="custom-navbar-and-slider-section">
  <nav class="navbar navbar-expand-md" id="header_menu">
      <!-- Brand -->
      <a class="navbar-brand" href="index.php">
      <img src="<?= BASE_URL ?>assets/images/logo-white.png" alt="" class="img-fluid developer-logo-img">
      </a>
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <i class="fa fa-bars"></i>
      </button>
      <!-- Navbar links -->
      <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
         <ul class="navbar-nav">
            <li class="nav-item nav-item-2">
               <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item nav-item-2">
               <a class="nav-link" href="about-us.php">About US</a>
            </li>
            <li class="nav-item sub-menu sub-residential nav-item-2">
               <a class="nav-link" href="javascript:void(0);">Residential <img src="<?= BASE_URL ?>assets/images/icons/right-arrow.png" alt="Residential" class="img-fluid sub-nav-img"> </a>
            </li>
            <li class="nav-item sub-menu sub-commerical nav-item-2">
               <a class="nav-link" href="javascript:void(0);">Commercial <img src="<?= BASE_URL ?>assets/images/icons/right-arrow.png" alt="Commercial" class="img-fluid sub-nav-img"></a>
            </li>
            <li class="nav-item contact-li nav-item-2">
               <a class="nav-link" href="contact-us.php">Contact Us</a>
            </li>
            <li class="nav-item number-li nav-item-2">
               <a class="nav-link" href="tel:<?=$pagedata['project_ivr_no'] ?>"><?= $pagedata['project_ivr_no']; ?></a>
            </li>
         </ul>
      </div>
   </nav>

<ul class="sub-nav residential-sub-menu">
  <button class="btn btn-close"><i class="fa fa-close"></i></button>
   <div class="sub-nav-2">
      <h4 class="submenu-heading">Residential Projects</h4>
      <?php  
      				$checkresidentialspage = mysqli_query($conn, "SELECT * FROM `platter_page` WHERE cat_id=1");
                  if($checkresidentialspage->num_rows >0){
                     while ($platter=mysqli_fetch_assoc($checkresidentialspage)) {
                        echo  ' <li><a href="platter.php?page-url='.$platter['page_url'].'" class="nav-link">'.$platter['name'].'</a></li>';
                     }
                  }

      ?>
    

   </div>
</ul>
<ul class="sub-nav commerical-sub-menu">
   <button class="btn btn-close"><i class="fa fa-close"></i></button>
   <div class="sub-nav-2">
      <a href="commerical-properties/index.html" ><h4 class="submenu-heading">Commerical Projects</h4></a>
      <?php  
      				$commericalpagecheck = mysqli_query($conn, "SELECT * FROM `platter_page` WHERE cat_id=2");
                  if($commericalpagecheck->num_rows >0){
                     while ($platter=mysqli_fetch_assoc($commericalpagecheck)) {
                        echo  ' <li><a href="platter.php?page_url='.$platter['page_url'].'" class="nav-link">'.$platter['name'].'</a></li>';
                     }
                  }

      ?>
   </div>
</ul> 

     <div id="demo" class="carousel slide custom-slider" data-ride="carousel">
        <!-- Indicators -->
        <!-- <ul class="carousel-indicators">
           <li data-target="#demo" data-slide-to="0" class="active"></li>
           <li data-target="#demo" data-slide-to="1"></li>
           <li data-target="#demo" data-slide-to="2"></li>
        </ul> -->
        <!-- The slideshow -->
        <div class="carousel-inner">
          <?php  
          if($bannerq->num_rows >0){
             $sno=1;
             while ($bannerdata=mysqli_fetch_assoc($bannerq)) {
                   echo  ' <div class="carousel-item '.($sno==1 ? 'active':"").'">
                   <img src="'.ADMIN_ASSETS.'microsite/banners/'.$bannerdata['win_images'].'" alt="'.$pagedata['name'].' Banners" class="img-fluid d-none d-md-block">

                </div>';
                $sno++;
             }
          }

    ?>
     
          
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        </a>
        <div class="slider-content">
           <p class="top-sub-heading">Welcome</p>
           <h1 class="demo-heading"><?= $pagedata['name'] ?><span><?= $pagedata['address'] ?></span></h1>
           <p class="typology-heading-custom"><?= getTypologyName($conn,$pagedata['type_id']) ?></p>
           <?php 
            if($keyheightlightsq->num_rows >0){
              echo  ' <ul class="key-highlights">';
            
              while ($keyheightlightsdata=mysqli_fetch_assoc($keyheightlightsq)) {
                echo  '<li><img src="'.BASE_URL.'assets/micro/images/icons/star.png" alt="'.$keyheightlightsdata['descriptions'].'" class="img-fluid star-icon-img"> '.$keyheightlightsdata['descriptions'].' </li>';
              }
              
             echo '</ul>';
            }
           ?>
          
           <h4 class="starting-price-heading">Price Start From : <span> <?php if(!empty($pagedata['starting_price'])){ echo '₹ '.$pagedata['starting_price'];}else{ echo "On Request"; } ?></span></h4>
        </div>

        <?php if(!empty($pagedata['discount_image'])){
          echo  '<img src="'.ADMIN_URL.$pagedata['discount_image'].'" alt="" class="img-fluid gold-3-img">';
        }?>

     </div>

     <form class="mircosite-form">
         <h4 class="top-form-heading">Send us a message</h4>
         <div class="form-group">
            <i class="fa fa-user"></i>

            <input type="hidden" name="micro_page_id" value="<?= $pagedata['id'] ?>">
            <input type="text" class="form-control error-name" id="name" name="name" placeholder="Enter Name">
         </div>
         <div class="form-group">
            <i class="fa fa-envelope"></i>
            <input type="text" class="form-control error-email" id="email" name="email" placeholder="Enter Email ID">
         </div>
         <div class="form-group">
             <i class="fa fa-phone"></i>
            <input type="text" class="form-control number-only error-phone" name="phone" id="phone" placeholder="Enter Phone Number">
         </div>
         <div class="form-group">
            <i class="fa fa-comments-o"></i>
            <input type="text" class="form-control error-message" id="message" name="message" placeholder="Enter Message">
         </div>
         <button type="button" class="btnb btn-custom" onclick="micro_formsubmit('.mircosite-form');">Submit Now</button>  
      </form>



  </div>
 <?php 
  if($overviewq->num_rows >0){
    $overviewdata=mysqli_fetch_assoc($overviewq);
    
    echo ' <div class="container-fluid overview-container">
    <div class="container">
        <div class="row">

          <div class="col-sm-12 col-md-6 col-lg-6 left-col">
              <img src="'.ADMIN_URL.$overviewdata['image'].'" alt="" class="img-fluid overview-img">
              <p>'.$overviewdata['image_heading'].'</p>
          </div>
            <div class="col-sm-12 col-md-6 col-lg-6 right-col">
                <p class="sub-heading-top">ABOUT US</p>
                <h4 class="custom-heading-dark">'.$overviewdata['heading'].'</h4>
                <h4 class="overview-projectname">'.$overviewdata['subheading'].'</span></h4>
                '.$overviewdata['description'].'
                <ul class="overview-ul">';
                  if(!empty($overviewdata['iconid1']) ? :""){
                    echo  '<li><img src="'.ADMIN_URL.getoThersectionItems($conn,$overviewdata['iconid1'])['icon'].'" alt="'.$overviewdata['icon_subheading1'].'" class="img-fluid overview-img-icon"><span> <span class="count-custom">'.$overviewdata['icon_heading1'].'</span> <br> '.$overviewdata['icon_subheading1'].' </span></li>';
                  }
                  if(!empty($overviewdata['iconid2']) ? :""){
                    echo  '<li><img src="'.ADMIN_URL.getoThersectionItems($conn,$overviewdata['iconid2'])['icon'].'" alt="'.$overviewdata['icon_subheading2'].'" class="img-fluid overview-img-icon"><span> <span class="count-custom">'.$overviewdata['icon_heading2'].'</span> <br> '.$overviewdata['icon_subheading2'].' </span></li>';
                  }

                echo '</ul> 
            </div>
        </div>
    </div>
  </div>';
  }
  ?>
 
  <!---------------- Overview Section Codes End From Here --------------->
  <!---------------- Price List Section Codes Start From Here --------------->
  <?php 
    if($priceqsectiosn->num_rows >0){
      $priceqsectiosndata=mysqli_fetch_assoc($priceqsectiosn);
      echo  ' <div class="container-fluid pricelist-container" id="price-list">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-sm-12 text-center">
               <p class="sub-heading-top">'.$priceqsectiosndata['small_heading'].'</p>
               <h4 class="custom-heading">'.$priceqsectiosndata['heading'].'</h4>
               <p>'.$priceqsectiosndata['sub_heading'].'</p>
            </div>';
            $pricelistquery=mysqli_query($conn,"SELECT * FROM `micro_site_price_insight` WHERE project_id=".$pagedata['id']."");

        if($pricelistquery->num_rows >0){
          while ($pricedata=mysqli_fetch_assoc($pricelistquery)) {
            $sizehtml="";
            if($pricedata['l_size']){
              $sizehtml=$pricedata['l_size'];
              if($pricedata['size_h']){
                $sizehtml.='-'.$pricedata['size_h'];
              }
              $sizehtml.=' '.getSizeType($pricedata['size_type']);
            }else{
              $sizehtml="On Request";
            }
            $pricelistq="";
            if($pricedata['price_l']){
              $pricelistq=$pricedata['price_l'];
              if($pricedata['price_h']){
                $pricelistq.='-'.$pricedata['price_h'];
              }
              $pricelistq.=' '.getPriceType($pricedata['price_type']);
            }else{
              $pricelistq="On Request";
            }
            echo  ' <div class="col-sm-12 col-md-4 col-lg-5">
            <div class="pricelist-box-main">
               <div class="pricebox">
                  <div class="box-1">
                     <p class="typology"><span>Type</span>'.getTypologyName($conn,$pricedata['typology']).'</p>
                  </div>
                  <div class="box-2">
                     <p class="size-p"><span>Size</span>'.$sizehtml.'</p>
                  </div>
               </div>
               <p class="pricelist-1">Price Start At</p>
               <p class="pricelist pricelist-2">'.$pricelistq.' <span>Onwards</span></p>
            </div>
            <button type="button" class="btn btn-custom openmodal" data-micro="'.encryptor('encrypt',$pagedata['id']).'">INTERESTED</button>
         </div>';
          }
        }
          
        echo '</div>
      </div>
 </div>';
    }
    if($heightlightsq->num_rows >0){
      $heightlightsdata=mysqli_fetch_assoc($heightlightsq);
      echo  '  <div class="container-fluid highlights-container" id="highlights">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 right-col">
                  <p class="sub-heading-top">'.$heightlightsdata['small_heading'].'</p>
                  <h4 class="custom-heading-dark">'.$heightlightsdata['heading'].'</h4>
                  <p>'.$heightlightsdata['sub_heading'].'</p>
                  <ul class="highlights-ul">';
                  $pricelistquerydataq=mysqli_query($conn,"SELECT * FROM `micro_site_highlights` WHERE project_id=".$pagedata['id']."");
                  if($pricelistquerydataq->num_rows >0){
                    $sno=1;
                    while ($heightdataconn=mysqli_fetch_assoc($pricelistquerydataq)) {
                     echo  ' <li><span>'.$sno.'</span> '.$heightdataconn['destination'].'</li>';
                     $sno++;
                    }
                  }

                     
               echo '  </ul>
              </div>   
            '.(!empty($heightlightsdata['image']) ? '<div class="col-sm-12 col-md-6 col-lg-6 left-col">
            <img src="'.ADMIN_URL.$heightlightsdata['image'].'" alt="" class="img-fluid highlights-img">
        </div>' : '').'         
            
          </div>
      </div>
  </div>';
    }

    if($amennitiesqsectionsq->num_rows >0){
      $amenititesdatasection=mysqli_fetch_assoc($amennitiesqsectionsq);
      echo  '<div class="container-fluid amenities-container" id="amenities">
      <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 left-col">
                <p class="sub-heading-top">'.$amenititesdatasection['small_heading'].'</p>
                <h4 class="custom-heading">'.$amenititesdatasection['heading'].'</h4>
                <p>'.$amenititesdatasection['sub_heading'].'</p>
                <img src="'.ADMIN_URL.$amenititesdatasection['image'].'" alt="'.$amenititesdatasection['heading'].'" class="img-fluid left-amenities-img">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 right-col">
                <div class="amenities-container-box">';
                $amenititesdata=mysqli_query($conn,"SELECT * FROM `micro_site_amenities` WHERE project_id=".$pagedata['id']."");
                while ($heightdataconn=mysqli_fetch_assoc($amenititesdata)) {
                    echo '<div class="amenity-box">
                    <img src="'.ADMIN_URL.getoThersectionItems($conn,$heightdataconn['icons'])['icon'].'" alt="'.$heightdataconn['title'].'" class="img-fluid amenities-img">
                    <p>'.$heightdataconn['title'].'</p>
                    <p class="amenity-p-content">'.$heightdataconn['subtitle'].'</p>
                </div>';
                }
 
                    
               echo  '</div>
            </div>
            </div>
      </div>
  </div>';

    }
    if($locationssectionsq->num_rows >0){
      $locationssectiondata=mysqli_fetch_assoc($locationssectionsq);
      $locationmapdata=  mysqli_query($conn, "SELECT * FROM `micro_site_location` WHERE project_id='".$pagedata['id']."'");
      if($locationmapdata->num_rows >0){
        $locationmapresult=mysqli_fetch_assoc($locationmapdata);
      }
      $maphtml="";
      if(!empty($locationmapresult['iframe'])){
        $maphtml=$locationmapresult['iframe'];
      }elseif(!empty($locationmapresult['image'])){
        $maphtml='  <a href="'.ADMIN_ASSETS.'/microsite/'.$locationmapresult['image'].'" class="with-caption image-link" title="location map">
        <img src="'.ADMIN_ASSETS.'/microsite/'.$locationmapresult['image'].'" alt="" class="img-fluid locationb-img">
     </a>';
      }
      echo '
      <div class="container-fluid location-container" id="location">
           <div class="container">
               <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 left-col">
              '.$maphtml.'
            </div>
                             
                   <div class="col-sm-12 col-md-6 col-lg-6 right-col">
                       <p class="sub-heading-top">'.$locationssectiondata['small_heading'].'</p>
                       <h4 class="custom-heading-dark">'.$locationssectiondata['heading'].'</h4>
                       <p class="para-content">'.$locationssectiondata['sub_heading'].'</p>
                       <ul class="highlights-ul">';
                       $locationlist=  mysqli_query($conn, "SELECT * FROM `micro_site_location_list` WHERE project_id='".$pagedata['id']."'");
                       if($locationlist->num_rows >0){
                        $sno=1;
                          while ($locationlostdata=mysqli_fetch_assoc($locationlist)) {
                            echo  ' <li><span>'.$sno.'</span> '.$locationlostdata['destination'].'</li>';
                            $sno++;
                          }

                       }

                       echo  '</ul>
                   </div>            
               </div>
           </div>   
       </div> ';

    }
    if($floorplanssectionsq->num_rows >0){
      $floorplanssectionsdata=mysqli_fetch_assoc($floorplanssectionsq);
      echo  '<div class="container-fluid floorplan-container">
      <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 left-col">
                <p class="sub-heading-top">'.$floorplanssectionsdata['small_heading'].'</p>
                <h4 class="custom-heading">'.$floorplanssectionsdata['heading'].'</h4>
                <p>'.$floorplanssectionsdata['sub_heading'].'</p>
                <img src="'.ADMIN_URL.$amenititesdatasection['image'].'" alt="'.$floorplanssectionsdata['heading'].'" alt="'.$floorplanssectionsdata['heading'].'" class="img-fluid left-amenities-img">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 right-col">
                <div class="floorplan-container-box">';

                $floorplanlistq=  mysqli_query($conn, "SELECT * FROM `micro_site_floorplan` WHERE project_id='".$pagedata['id']."' ");
                if($floorplanlistq->num_rows >0){
                  while ($floorplanlistqdata=mysqli_fetch_assoc($floorplanlistq)) {
                    echo  '  <div class="floorplan-box">
                    <a href="'.ADMIN_URL.$floorplanlistqdata['image'].'" class="with-caption image-link" title="'.$floorplanlistqdata['title'].'">
                       <img src="'.ADMIN_URL.$floorplanlistqdata['image'].'" alt="'.$floorplanlistqdata['title'].'" class="img-fluid floorplan-img">
                    </a>
                    <h4 class="floorplan-heading">'.$floorplanlistqdata['title'].'</h4>
                   </div>';
                  }
                }


                  
                   
                    
               echo  '</div>
            </div>
            </div>
      </div>
  </div> ';

    }
    if($gallerysectionsq->num_rows >0){
      $gallerysectondata=mysqli_fetch_assoc($gallerysectionsq);
      echo  '
      <div class="container-fluid gallery-container" id="gallery">
         <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 left_col">
               <a href="'.ADMIN_URL.$gallerysectondata['image'].'" class="with-caption image-link" title="Image 1">
               <img src="'.ADMIN_URL.$gallerysectondata['image'].'" alt="" class="img-fluid gallery-img">
               </a>
               <div class="content-section-headings">
                  <p class="sub-heading-top">'.$gallerysectondata['small_heading'].'</p>
                  <h4 class="custom-heading">'.$gallerysectondata['heading'].'</h4>
                  <p>'.$gallerysectondata['sub_heading'].'</p>
               </div>
                
            </div>';
            $gallerylistq=  mysqli_query($conn, "SELECT * FROM `micro_site_gallery` WHERE project_id='".$pagedata['id']."' ");
            if($gallerylistq->num_rows >0){
              echo  '<div class="col-sm-12 col-md-6 col-lg-6">
              <div class="row">';
                    while ($gallerydata=mysqli_fetch_assoc($gallerylistq)) {
                        echo  '  <div class="col-sm-12 col-md-6 col-lg-6">
                        <a href="'.ADMIN_URL.$gallerydata['image'].'" class="with-caption image-link" title="Image 2">
                        <img src="'.ADMIN_URL.$gallerydata['image'].' " alt="" class="img-fluid gallery-img">
                        </a>
                        <p class="gallery-img-name">02</p>
                     </div>';
                    }
                 
              echo  '</div>
              </div>';
            }

            
            echo '
         </div>
      </div>';
    }
  ?>


  <!---------------- Gallery Section Codes End From Here --------------->
  <!---------------- Contact Section Codes Start From Here --------------->
 <div class="container-fluid contact-container" id="contact-us">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 left-col">
                <p class="sub-heading-top">CONTACT US</p>
                <h4 class="custom-heading">Have questions? <br>Get in touch!</h4>
                <p>Address- C - 214 Third Floor, C Block Sector 63, Noida</p>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 right-col">
                  <form class="contact-us-footer" id="micro_contact">
                  <input type="hidden" name="micro_page_id" value="<?= $pagedata['id'] ?>">
                        <div class="form-group">
                            <i class="fa fa-user" aria-hidden="true"></i>
                          <input type="text" class="form-control error-name" name="name" id="qSenderNamefooter" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-envelope"></i>
                          <input type="text" class="form-control error-email" name="email" id="qEmailIDfooter" placeholder="Enter Email ID">
                        </div>   
                        <div class="form-group">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                          <input type="text" class="form-control number-only error-phone" name="phone" id="qMobileNofooter" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-comments-o"></i>
                          <input type="text" class="form-control error-message" name="message" id="qMessagefooter" placeholder="Enter Message">
                        </div>       
                        <button type="button" class="btnb btn-custom" onclick="micro_formsubmit('.contact-us-footer');" id="SubmitQueryfooter">Submit Now</button>                                       
                  </form>
              </div>
          </div>
      </div>
  </div> 
  <!---------------- Contact Section Codes End From Here --------------->

<!------------------- Footer Container Section Codes Start From Here  --------------------->
<div class="container-fluid footer-container-section">
            
  <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-4 first_col">
                <h4>About Polaris Realtors</h4>
                <p>Newest milestone in commercial & retail spaces that matches and exceeds the norms of the best business addresses around the world. It comprises of carefully curated experiences for the ever evolving needs of modern day businesses.</p>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-2 second_col">
                <h4>Quick Links </h4>
                <ul>
                    <li><a href="../../index.html" target="_blank">Home</a></li>
                    <li><a href="../../about-us.html" target="_blank">About Us</a></li>
                    <li><a href="../../contact-us.html" target="_blank">Contact Us</a></li>  
                    <li><a href="../../privacy-policy.html" target="_blank">Privacy Policy</a></li> 
                    <li><a href="../../disclaimer.html" target="_blank">Disclaimer</a></li>  
                    <li><a href="../../termandcondition.html" target="_blank">Term &amp; Condition</a></li>   
                </ul>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 third_col">
                <h4>All Properties</h4>
                <ul>
                    <li class="sub-menu sub-residential"><a href="javascript:void(0);">Residential</a></li>
                    <li class="sub-menu sub-commerical"><a href="javascript:void(0);">Commercial</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 fourth_col">
                <h4>Rera Certificate</h4>
                <ul>
                    <li>Agent Rera No: <br>UPRERAAGT21762</li>
                 <div class="rera_certificate">
                            <a href="../../<?= BASE_URL ?>assets/micro/images/up-rera.pdf" target="_blank">
                                <img src="<?= BASE_URL ?>assets/micro/images/up-rera.jpg" alt="up rera" class="img-fluid">
                            </a>
                            <a href="../../<?= BASE_URL ?>assets/micro/images/delhi-rera.pdf" target="_blank">
                                <img src="<?= BASE_URL ?>assets/micro/images/delhi-rera.jpg" alt="delhi rera" class="img-fluid">
                            </a>
                        </div>
                </ul>
            </div>   
            <div class="col-sm-12 text text-center">
      
                    <p class="disclaimer-p"><strong>Disclaimer : </strong> The content provided on this website is for information purposes only and does not constitute an offer to avail any service. The prices mentioned are subject to change without prior notice, and the availability of properties mentioned is not guaranteed.<span id="dots">...</span><span id="more">The images displayed on the website are for representation purposes only and may not reflect the actual properties accurately. Please note that this is the official website of an authorized marketing partner. We may share data with Real Estate Regulatory Authority (RERA) registered brokers/companies for further processing as required. We may also send updates and information to the mobile number or email ID registered with us. All rights reserved. The content, design, and information on this website are protected by copyright and other intellectual property rights. Any unauthorized use or reproduction of the content may violate applicable laws. For accurate and up-to-date information regarding services, pricing, availability, and any other details, it is advisable to contact us directly through the provided contact information on this website. Thank you for visiting our website.
                    </span> <br>
                    <a onclick="myFunction()" id="myBtn" style="color:#d3a05d;">Read more</a></p>
                    <p> Digital Media Planned and Powered by <a href="http://www.gtftechnologies.com/" target="_blank" style="color:#fff;">GTF Technologies</a> </p>
            </div>         
        </div>
    </div>
</div>
<!------------------- Footer Container Section Codes End From Here  --------------------->


<!------------------------------ Mobile Tabse Codes Start From Here ------------------------------>
<div class="mobile-section-1"> 
  <div class="mobile-section-2"> 
    <div class="mobile-section"> 
    <a href="#" class="btn btn-success btn-block openmodal" data-micro="<?= encryptor('encrypt',$pagedata['id']) ?>" title="Enquire Now" >  Enquire Now</a> 
      <?php 
        if(!empty($pagedata['whatapp_no']))
        {
          echo '<a href="https://api.whatsapp.com/send?phone='.$pagedata['whatapp_no'].'  &amp;text=Hello, Looking for '.getTypologyName($conn,$pagedata['type_id']).' at '.getTypologyName($conn,$pagedata['address']).'" class="btn btn-success btn-block middle-button">Whats App</a> ';
        }
        if(!empty($pagedata['project_ivr_no']))
        {
          echo ' <a href="tel:'.$pagedata['project_ivr_no'].'" class="btn btn-success btn-block"> Tap To Call</a>  ';
        }
      ?>
      
     
    </div>
  </div>
</div>
<!------------------------------ Mobile Tabse Codes End From Here ------------------------------>




 <?php include 'include/js-url.php'; ?>
 <?php include 'include/modal.php'; ?>

</body>
</html>