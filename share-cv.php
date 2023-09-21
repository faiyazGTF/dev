<?php include 'include/config.php'; ?>
<?php include 'include/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chaahat Homes | Blog</title>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Chaahat Homes | About Us"/>
	<meta name="twitter:title" content="Chaahat Homes | About Us" />
	<meta name="description" content="Chahat Homes is a premier real estate advisory company that provides residential and commercial property services to individuals and businesses. Our vision is to help people who are looking for property investment in Gurgaon, India." />
	<meta property="og:description" content="Chahat Homes is a premier real estate advisory company that provides residential and commercial property services to individuals and businesses. Our vision is to help people who are looking for property investment in Gurgaon, India."/>
	<meta name="twitter:description" content="Chahat Homes is a premier real estate advisory company that provides residential and commercial property services to individuals and businesses. Our vision is to help people who are looking for property investment in Gurgaon, India." />
	<meta name="keywords" content="Chahaat Homes, Real Estate Consultant,Property Advisor Gurgaon" />
	<meta name="ROBOTS" content="index, follow"/>
	<meta name="ROBOTS" content="ALL"/>
	<meta name="Slurp" content="index,follow,archive" />
	<meta name="robots" content="NOODP" />
	<meta name="geo.region" content="IN" />
	<meta name="allow-search" content="yes" />
	<meta name="revisit-after" content="daily" />
	<meta name="distribution" content="global" />
	<meta name="expires" content="never" />
	<meta name="author" content="Chahaat Homes">
	<meta property="og:site_name" content="Chaahat Homes">
	<meta property="og:url" content="https://chaahathomesinfratech.com/">

	<meta property="og:type" content="website">
	<meta property="og:image" content="https://chaahathomesinfratech.com/<?= BASE_URL ?>assets/images/logo.png">
	<meta name="twitter:card" content="summary_large_image" />


	<meta name="twitter:site" content="@HomesChaahat" />
	<meta name="twitter:image" content="https://chaahathomesinfratech.com/<?= BASE_URL ?>assets/images/logo.png" />
	<meta name="twitter:creator" content="@HomesChaahat" />
    <?php include 'include/css-url.php'; ?>
</head>

<body>

<div class="custom-navbar-and-slider-section">
      <?php include 'include/header.php'; ?>

      <div class="container-fluid head-sub-section" style="background-image: url(<?= BASE_URL ?>assets/images/service-bg.jpg);">
         <h4 class="head-sub-section-heading">Share CV</h4>
         <ul class="breadcurmes">
         <li><a href="index.php">Home</a> / <a href="services.php">Share CV</a></li>
         </ul>
      </div>
   </div>


<section class="cv-page all-heading">
  <div class="heading">
    <h6>Share CV</h6>
    <h4>Share Your CV</h4>
  </div>


  <div class="inner-box">
          <h2>Apply For Job</h2>
          <p>Ready for your next challenge? See which roles we’re hiring for right now.</p>
          <div class="form-sec">
          <h4>Name*</h4>
          <input class="form-control" type="text" name="" placeholder="Name" spellcheck="false" data-ms-editor="true">
          <h4>Email Id*</h4>
          <input class="form-control" type="email" name="" placeholder="Email">
          <h4>Phone No.*</h4>
          <input class="form-control" type="rel" name="" placeholder="Phone Number" spellcheck="false" data-ms-editor="true">
          <h4>Job Title*</h4>
          <input class="form-control" type="rel" name="" placeholder="Job Title" spellcheck="false" data-ms-editor="true">
          <h4>Experience*</h4>
          <input class="form-control" type="rel" name="" placeholder="Experience" spellcheck="false" data-ms-editor="true">
          <h4>Message*</h4>
          <textarea class="form-control form-control2" rows="1" placeholder="Message here.." spellcheck="false" data-ms-editor="true"></textarea>
          <h4>Your CV*</h4>
          <input type="file" class="form-control-file border">
          <button class="btn-all">Intrested</button>
        </div>
        </div>

</section>
<!-- revolution slider close -->



<?php include 'include/js-url.php'; ?>
<?php include 'include/modal.php'; ?>
<?php include 'include/footer.php'; ?>


</body>


</html>