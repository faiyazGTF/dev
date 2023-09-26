<?php include 'include/config.php'; ?>
<?php include 'include/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php
    if(isset($_GET['id'])){
      $id = encryptor('decrypt', $_GET['id']);
    }
      $result = mysqli_query($conn, "SELECT * FROM blogs WHERE id='$id'");

      if(!$result){
        die('query failed '.mysqli_error($conn));
      }else{
              
      while($row = mysqli_fetch_assoc($result)){
        $id = encryptor('encrypt', $row['id']);
         $title = $row['meta_title'];
        $keyword = $row['meta_keywords'];
        $meta_description = $row['meta_description'];
         ?>

    <title>Chaahat Homes | <?= $title?></title>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="<?= $title?>"/>
	<meta name="twitter:title" content="<?= $title?>" />
	<meta name="description" content="<?= $meta_description?>" />
  <meta property="og:description" content="Chahat Homes is a premier real estate advisory company that provides residential and commercial property services to individuals and businesses. Our vision is to help people who are looking for property investment in Gurgaon, India."/>
	<meta name="twitter:description" content="Chahat Homes is a premier real estate advisory company that provides residential and commercial property services to individuals and businesses. Our vision is to help people who are looking for property investment in Gurgaon, India." />
	<meta name="keywords" content="<?= $keyword?>" />
  <?php
      }
    }
  ?>
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
         <h4 class="head-sub-section-heading">Our Blog Details</h4>
         <ul class="breadcurmes">
         <li><a href="index.php">Home</a> / <a href="services.php">Blog Details</a></li>
         </ul>
      </div>
   </div>


<section class="blogs-page all-heading">
  <div class="heading">
    <h6>BLOGS Details</h6>
    <h4>OUR LATEST BLOGS</h4>
  </div>
  <div class="inner-blogs">
    <div class="left-blog">

    <?php
    if(isset($_GET['id'])){
      $id = encryptor('decrypt', $_GET['id']);
    }
      $result = mysqli_query($conn, "SELECT * FROM blogs WHERE id='$id'");

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
        $description = $row['description'];
      ?>

      <div class="box">
        <!-- <div class="name-date">
          <ul>
          <li><i class="fa fa-comments-o"></i> Comments</li>
          <li><i class="fa fa-heart-o"></i> Like</li>
          </ul>
        </div> -->
        <div class="media">
          <div class="blog-date">
            <h4><?= $day ?></h4>
            <h6><?= $month ?></h6>
          </div>
        <div class="media-body">
        <h2><?= $heading ?></h2>
        <img src="admin/uploads/blogs/<?= $image ?>" width="100%">
        <!-- <h5 class="p-dark">Consulting Services are as designed to target your specific business needs and goals, including the following:</h5> -->
        <p><?= $description ?></p>

      </div>
    </div>
      </div><!----------box---------->
      <?php
          }
        }
      ?>    


    </div><!-------------------left-blog-------------->
    <div class="right-blog">
      <h4>Latest Blogs</h4>
      <?php
        if(isset($_GET['id'])){
          $id = encryptor('decrypt', $_GET['id']);
        }
      $result = mysqli_query($conn, "SELECT * FROM blogs");

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
    </div>
  </div>
</section>
<!-- revolution slider close -->



<?php include 'include/js-url.php'; ?>
<?php include 'include/modal.php'; ?>
<?php include 'include/footer.php'; ?>


</body>


</html>