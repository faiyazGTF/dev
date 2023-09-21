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
         <h4 class="head-sub-section-heading">Our Jobs</h4>
         <ul class="breadcurmes">
         <li><a href="index.php">Home</a> / <a href="services.php">Our Jobs</a></li>
         </ul>
      </div>
   </div>


<section class="Job-page-details all-heading">
  <div class="heading">
    <h6>JOBS</h6>
    <h4>OUR LATEST Jobs</h4>
  </div>

  <div class="job-sec-details">
      <div class="job-part-details">
        <div class="inn-job">
          <h4>Job Title Here</h4>
          <p>Experience: 4 Years</p>
          <hr>
          <h5>Skills:</h5>
          
          <ul>
            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
            <li>The printing and typesetting industry.</li>
            <li>Simply dummy text of the printing and typesetting industry.</li>
            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
          </ul>
          <hr>
          <h5>Job Description:</h5>
          <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </h6>
          <div class="btn-inn">
            <a  data-toggle="modal" data-target="#modal-form" href="job-description.html">Apply Now</a>
          </div>
        </div><!-----------inn-job--------->
        <h2 class="posted"><span><b>Posted On:</b> 22/12/2022</span></h2>
      </div><!-----------job-part--------->


</section>
<!-- revolution slider close -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          <div class="box-outer">

          <div class="form-box-t">
            <h2>Job Title</h2>
            <div class="form-sec">
              <br>
          <input class="form-control" type="text" name="" placeholder="Name" spellcheck="false" data-ms-editor="true">
          <input class="form-control" type="email" name="" placeholder="Email">
          <input class="form-control" type="rel" name="" placeholder="Phone Number" spellcheck="false" data-ms-editor="true">
          <input class="form-control" type="rel" name="" placeholder="Job Title" spellcheck="false" data-ms-editor="true">
          <input class="form-control" type="rel" name="" placeholder="Experience" spellcheck="false" data-ms-editor="true">
          <textarea class="form-control form-control2" rows="1" placeholder="Message here.." spellcheck="false" data-ms-editor="true"></textarea>
          <input type="file" class="form-control-file border">
          <br>
          <button class="btn-all">Intrested</button>
        </div>
        </div>
         </div>

        </div>
      </form>
    </div>
  </div>
</div>


<?php include 'include/js-url.php'; ?>
<?php include 'include/modal.php'; ?>
<?php include 'include/footer.php'; ?>


</body>


</html>