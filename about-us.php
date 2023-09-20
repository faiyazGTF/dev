<?php include 'include/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Polaris Realtors | About Us</title>
  
 <?php include 'include/css-url.php'; ?>
</head>
<body>


<!------------------ Slider Codes Start From Here  --------------------------->

<div class="custom-navbar-and-slider-section">
   
  <?php include 'include/header.php'; ?>

    <div class="container-fluid head-sub-section">
      <h4 class="head-sub-section-heading">About Us</h4>
      <ul class="breadcurmes">
        <li><a href="index.html">Home</a> / <a href="about-us.html">About Us</a></li>
      </ul>
    </div>


</div>
<!------------------ Slider Codes End From Here  --------------------------->

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


  <?php include 'include/footer.php'; ?>
  <?php  include 'include/js-url.php'; ?>
</body>
</html>