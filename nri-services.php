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
         <h4 class="head-sub-section-heading">NRI Services</h4>
         <ul class="breadcurmes">
         <li><a href="index.php">Home</a> / <a href="services.php">NRI Services</a></li>
         </ul>
      </div>
   </div>


<section class="nri-page all-heading">
  <div class="heading">
    <h6>NRI</h6>
    <h4>OUR NRI Services</h4>
  </div>

<div class="container">


<?php
$result = mysqli_query($conn, "SELECT * FROM nri_service ORDER BY id DESC");

      if(!$result){
        die('query failed '.mysqli_error($conn));
      }else{
             
	$iteration=1;
	while($row = mysqli_fetch_assoc($result)){
        $id = encryptor('encrypt', $row['id']);
        $timestamp = $row['blogDate'];
        $fullDate = strtotime($timestamp);
        $day = date('d', $fullDate);
        $month = date('F', $fullDate);
     
        $image = $row['large_image'];
	  if($iteration % 2==0){
		echo '<div class="row"><div class="col-sm-5">
		<img src="'.ADMIN_ASSETS.'nri_services/'.$image.'" width="100%">
		</div>
		<div class="col-sm-7">
		<h5 class="p-dark">'.$row['heading'].'</h5>
		<p>'.$row['description'].'</p>
		</div>
		</div>
		';
	  }else{
		echo '<div class="row"><div class="col-sm-7">
		<h5 class="p-dark">'.$row['heading'].'</h5>
		<p>'.$row['description'].'</p>
		</div><div class="col-sm-5">
		<img src="'.ADMIN_ASSETS.'nri_services/'.$image.'" width="100%">
		</div>
		</div>
		';
	  }
       $iteration++;
}
}
?>    
</div>
<hr>
</div>
</section>
<!-- revolution slider close -->

<?php include 'include/js-url.php'; ?>
<?php include 'include/modal.php'; ?>
<?php include 'include/footer.php'; ?>


</body>


</html>