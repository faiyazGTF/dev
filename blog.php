<?php include 'include/config.php'; ?>
<?php include 'include/functions.php'; ?>
<?php

// $result = mysqli_query($conn, "SELECT * FROM blogs");

// if(!$result){
//   die('query failed '.mysqli_error($conn));
// }else{
//   $row = mysqli_fetch_assoc($result);
// }


?>
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
         <h4 class="head-sub-section-heading">Our Blog</h4>
         <ul class="breadcurmes">
         <li><a href="index.php">Home</a> / <a href="services.php">Our Blogs</a></li>
         </ul>
      </div>
   </div>


<section class="blogs-page all-heading">
  <div class="heading">
    <h6>BLOGS</h6>
    <h4>OUR LATEST BLOGS</h4>
  </div>
  <div class="inner-blogs">
    <div class="left-blog">
      <?php
      $result = mysqli_query($conn, "SELECT * FROM blogs ORDER BY id DESC");

      if(!$result){
        die('query failed '.mysqli_error($conn));
      }else{
              
      while($row = mysqli_fetch_assoc($result)){
        $id = encryptor('encrypt', $row['id']);
        $timestamp = $row['blogDate'];
        $fullDate = strtotime($timestamp);
        $day = date('d', $fullDate);
        $month = date('F', $fullDate);
        $heading = $row['heading'];
        $image = $row['large_image'];
        $shortDesc = $row['shortDesc'];
      ?>
      <div class="box">
           <div class="media">
          <div class="blog-date">
            <h4><?= $day ?></h4>
            <h6><?= $month ?></h6>
          </div>
        <div class="media-body">
        <h2><?= $heading ?></h2>
        <img src="admin/uploads/blogs/<?= $image ?>" width="100%">
        <!-- <h5 class="p-dark">Consulting Services are as designed to target your specific business needs and goals, including the following:</h5> -->
        <p><?= $shortDesc ?></p>
        <br>
        <a href="<?= BASE_URL ?>blog-details.php?id='<?= $id ?>'">Read More</a>
      </div>
    </div>
      </div>
      <?php
          }
        }
      ?>    


    </div><!-------------------left-blog-------------->
    <div class="right-blog">
      <h4>Latest Blogs</h4>
      <?php
      $result = mysqli_query($conn, "SELECT * FROM blogs");

      if(!$result){
        die('query failed '.mysqli_error($conn));
      }else{
              
      while($row = mysqli_fetch_assoc($result)){
        $timestamp = $row['blogDate'];
        $fullDate = strtotime($timestamp);
        $day = date('d', $fullDate);
        $month = date('F', $fullDate);
        $heading = $row['heading'];
        $image = $row['image'];
        $shortDesc = $row['shortDesc'];
      ?>
      <div class="box">
        <h2><?= $heading ?></h2>
        <p><?= mb_strimwidth($row['description'], 0, 80) ?>
          <a href="<?= BASE_URL ?>blog-details.php?id='<?= $id ?>'">Read More</a></p>
          <ul>
            <li><i class="fa fa-comments-o"></i> <?= $day ?></li>
          </ul>
      </div>
    <?php
      }
    }
  
    ?>
    </div><!-------------------left-blog-------------->
  </div>
</section>
<!-- revolution slider close -->



<?php include 'include/js-url.php'; ?>
<?php include 'include/modal.php'; ?>
<?php include 'include/footer.php'; ?>


</body>


</html>