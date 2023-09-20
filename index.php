<?php include 'include/config.php'; ?>
<?php include 'include/functions.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Polaris Realtors</title>
 <?php include 'include/css-url.php'; ?>

</head>
<body>


<!------------------ Slider Codes Start From Here  --------------------------->

<div class="custom-navbar-and-slider-section">
<?php include 'include/header.php'; ?>
   <div id="demo" class="carousel slide custom-slider" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
         <li data-target="#demo" data-slide-to="0" class="active"></li>
         <li data-target="#demo" data-slide-to="1"></li>
         <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <!-- The slideshow -->
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="<?= BASE_URL ?>assets/images/slider-banner/slider-banner-1.jpg" alt="Luxury Residential Apartments" class="img-fluid">
         </div>
         <div class="carousel-item">
            <img src="<?= BASE_URL ?>assets/images/slider-banner/slider-banner-2.jpg" alt="Luxury Residential Apartments" class="img-fluid">
         </div>
         <div class="carousel-item">
            <img src="<?= BASE_URL ?>assets/images/slider-banner/slider-banner-3.jpg" alt="Luxury Residential Apartments" class="img-fluid">
         </div>
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
         <h1 class="demo-heading">POLARIS REALTORS</h1>
         <p class="sub-heading">Luxury Residential Apartments, Retail Space, Office Space & Food Court</p>
         <h4 class="explore-heading"><a href="#about-us">EXPLORE </a></h4>
      </div>
      <p class="Residential-heading-top">Residential</p>
      <p class="Commercial-heading-top">Commercial</p>
   </div>
</div>



<div class="sidebar-contact">
   <div class="toggle"></div>
   <h2>Got questions?</h2>
   <p>Don't be afraid, we're happy to aid!</p>
   <div class="scroll">
      <div>
         <input type="text" name="" id="qSenderNameSidebar" placeholder="Name">
         <input type="email" name="" id="qEmailIDSidebar" placeholder="Email">
         <input type="rel" name="" id="qMobileNoSidebar" placeholder="Phone Number">
         <textarea id="qMessageSidebar" placeholder="Message here.."></textarea>
         <span id="SubmitQuerySidebar" class="form-btn">Intrested</span>
      </div>
   </div>
</div>
<!------------------ Slider Codes End From Here  --------------------------->
<!---------------- Overview Section Codes Start From Here --------------->
<div class="container-fluid overview-container" id="about-us">
      <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 left-col">
                <img src="<?= BASE_URL ?>assets/images/overview-img.jpg" alt="" class="img-fluid overview-img">
                <p>We create <br>comfort & <br>elegance</p>
            </div>
              <div class="col-sm-12 col-md-6 col-lg-6 right-col">
                  <p class="sub-heading-top">ABOUT US</p>
                  <h4 class="custom-heading-dark">Discover the area of luxury</h4>
                  <h4 class="overview-projectname">Polaris Realtors - <span>Sector 63, Noida,</span> </h4>
                  <p>Polaris Realtors is a platform that helps property buyer’s right from discovering properties and hand-holding them through the entire transaction process, thereby ensuring that whole process becomes smooth and convenient. Rooted on the principles of Transparency, Integrity and Reliability, we offer our customers handpicked properties to choose from, ensuring finest combination of best property, safe investment and attractive returns. Our approach is to understand the real estate needs of our customers and recommend options in the simplest manner.</p>
                  <ul class="overview-ul">
                    <li><img src="<?= BASE_URL ?>assets/images/icons/residential.png" alt="" class="img-fluid overview-img-icon"><span> <span class="count-custom">21</span> <br> Total Number <br>Of Projects</span></li>
                    <li><img src="<?= BASE_URL ?>assets/images/icons/expertise.png" alt="" class="img-fluid overview-img-icon expertise-icon"> <span><span class="count-custom">35</span> <br> Years Of <br> Experience</span></li>
                  </ul>
              </div>
          </div>
      </div>
</div>
<!---------------- Overview Section Codes End From Here --------------->
<div class="container-fluid featured-projects-container">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <p class="sub-heading-top">OUR FEATURED PROJECTS</p>
        <h4 class="custom-heading-dark">Explore Our Premier<br><span style="color:#d3815d">Residential</span> and <span style="color:#d3815d">Commercial</span> Projects.</h4>
      </div>
      <div class="col-sm-12">
        <div class="owl-carousel owl-theme">
          <?php 
          $checkrecords=  mysqli_query($conn, "SELECT * FROM `micro_site` WHERE status=1");
        if($checkrecords->num_rows >0){
          while ($datarow=mysqli_fetch_assoc($checkrecords)) {
            $deleveloperdata=mysqli_fetch_assoc(mysqli_query($conn,"SELECT logo,name FROM `developer` WHERE id=".$datarow['developer_id'].""));
     

            echo  ' <div class="item">
            <div class="project-box">
              <div class="project-cover">
              <img src="'.ADMIN_ASSETS.'microsite/feature-image/'.$datarow['feature_image'].'" alt="'.$datarow['name'].'" class="img-fluid project-box-img">
               <div class="logo-div-box">
              <img src="'.ADMIN_URL.$deleveloperdata['logo'].'" alt="'.$deleveloperdata['name'].'" class="img-fluid project-box-img-logo">
            </div>
            </div>
              <p class="typology-heading">'.$datarow['name'].'</p>
              <div class="project-box-content">
                <p class="project-name">'.(!empty($datarow['starting_price']) ? '₹'.$datarow['starting_price'] : "On Request").'</p>
                <p class="project-location">'.$datarow['address'].'</p>
                <button type="button" class="btn btn-custom-2 openmodal" data-micro="'.encryptor('encrypt',$datarow['id']).'" >Interested </button>
                <button type="button" class="btn btn-custom-2" style="margin-left:30px;"><a href="micro.php?page_url='.$datarow['page_url'].'">Check More</a> </button>                 
              </div>
            </div>              
          </div> ';
          }
        }

          ?>
           
                                            
        </div>
      </div>
    </div>
  </div>
</div>
<!--------------- Testimonials Section Codes Start From Here  ----------------->
<div class="container-fluid testimonials-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
            <p class="sub-heading-top">TESTIMONIALS</p>
            <h4 class="custom-heading">What clients say</h4>
        </div>
        <div class="col-sm-12">
          <div id="demo2" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo2" data-slide-to="0" class="active"></li>
                <li data-target="#demo2" data-slide-to="1"></li>
                <li data-target="#demo2" data-slide-to="2"></li>
                <li data-target="#demo2" data-slide-to="3"></li>
              </ul>
 
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="testimonials-content">
                    <img src="<?= BASE_URL ?>assets/images/avatar-img.png" alt="Retail Space, Office Space" class="img-fluid avatar-img">
                    <h4 class="clients-name-heading">Omaxe </h4>
                    <p>Polaris Realtors has been an absolute game-changer for me in the world of real estate investments. Their expertise and guidance have led me to incredibly lucrative opportunities that I wouldn't have discovered otherwise. From the very beginning, their commitment to transparent communication and prompt assistance has stood out, making me feel valued as a client.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimonials-content">
                    <img src="<?= BASE_URL ?>assets/images/avatar-img.png" alt="Retail Space, Office Space" class="img-fluid avatar-img">
                     <h4 class="clients-name-heading">Mentis</h4>
                     <p>I can confidently say that my success in real estate wouldn't have been possible without Polaris Realtors. Their unparalleled professionalism, combined with their genuine dedication to seeing their clients thrive, makes them the go-to partner for anyone looking to navigate the complex world of real estate investment. With Polaris Realtors by your side, you're not just buying property – you're investing in a brighter, more secure future.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimonials-content">
                    <img src="<?= BASE_URL ?>assets/images/avatar-img.png" alt="Retail Space, Office Space" class="img-fluid avatar-img">
                      <h4 class="clients-name-heading">L&T Realty</h4>
                     <p>Polaris Realtors has been an absolute game-changer for me in the world of real estate investments. Their expertise and guidance have led me to incredibly lucrative opportunities that I wouldn't have discovered otherwise. From the very beginning, their commitment to transparent communication and prompt assistance has stood out, making me feel valued as a client.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimonials-content">
                    <img src="<?= BASE_URL ?>assets/images/avatar-img.png" alt="Retail Space, Office Space" class="img-fluid avatar-img">
                      <h4 class="clients-name-heading">M3M India</h4>
                     <p>What I value immensely is their commitment to transparency. With Polaris Realtors, there are no hidden agendas or surprises. They lay out all the information you need, enabling you to make decisions with complete confidence. The peace of mind that comes from working with a team that values honesty and clear communication cannot be overstated.</p>
                  </div>
                </div>
                
              </div>
             

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo2" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

            </div>
        </div>
      </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>
<?php include 'include/modal.php'; ?>

<?php  include 'include/js-url.php'; ?>
</body>
</html>