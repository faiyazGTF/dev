
<?php include 'include/config.php';?>
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
      <h4 class="head-sub-section-heading">Vision & Mission</h4>
      <ul class="breadcurmes">
        <li><a href="index.php">Home</a> / <a href="vision-mission.php">Vision & Mission</a></li>
      </ul>
    </div>
</div>
<!------------------ Slider Codes End From Here  --------------------------->

<section class="container-fluid section vision_section" id="vision-mission">
  <div class="container">
    <div class="row mx_-50 mx_-15">
      <div class="col-md-6 px_50 px_sm_15 left_col">
        <div class="content">
          <img src="<?= BASE_URL ?>assets/images/vision.jpg" alt="vision image" class="img-fluid vision-img d-none d-md-block">
          <img src="<?= BASE_URL ?>assets/images/vision-sm.jpg" alt="vision image" class="img-fluid vision-img d-block d-md-none">
        </div>
      </div>

      <div class="col-md-6 px_50 px_sm_15 right_col">
        <div class="sec_heading">
          <p class="sub_heading">Our Vision</p> 
          <h4 class="custom-heading-dark">Our Vision</h4>
        </div>
        <p>Polaris Realtors is a platform that helps property buyer’s right from discovering properties and hand-holding them through the entire transaction process, thereby ensuring that whole process becomes smooth and convenient. Rooted on the principles of Transparency, Integrity and Reliability, we offer our customers handpicked properties to choose from, ensuring finest combination of best property, safe investment and attractive returns. Our approach is to understand the real estate needs of our customers and recommend options in the simplest manner.</p>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid section vision_section mission_section" id="vision-mission">
  <div class="container">
    <div class="row mx_-50 mx_-15">

      <div class="col-md-6 px_50 px_sm_15 right_col order-md-2">
        <div class="content">
          <img src="<?= BASE_URL ?>assets/images/mission.jpg" alt="mission image" class="img-fluid mission-img d-none d-md-block">
          <img src="<?= BASE_URL ?>assets/images/mission-sm.jpg" alt="mission image" class="img-fluid mission-img d-block d-md-none">
        </div>
      </div>

      <div class="col-md-6 px_50 px_sm_15 left_col order-md-1">
        <div class="sec_heading">
          <p class="sub_heading">Our Mission</p>
          <h4 class="custom-heading-dark">Our Mission</h4>
        </div>
        <p>Polaris Realtors is a platform that helps property buyer’s right from discovering properties and hand-holding them through the entire transaction process, thereby ensuring that whole process becomes smooth and convenient. Rooted on the principles of Transparency, Integrity and Reliability, we offer our customers handpicked properties to choose from, ensuring finest combination of best property, safe investment and attractive returns. Our approach is to understand the real estate needs of our customers and recommend options in the simplest manner.</p>
      </div>

    </div>
  </div>
</section>

  <!---------------- Overview Section Codes End From Here --------------->


  <?php include 'include/footer.php'; ?>
  <?php  include 'include/js-url.php'; ?>
</body>
</html>