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
         <h4 class="head-sub-section-heading">News</h4>
         <ul class="breadcurmes">
         <li><a href="index.php">Home</a> / <a href="services.php">Our News</a></li>
         </ul>
      </div>
   </div>


<section class="news-page all-heading">
  <div class="heading">
    <h6>News</h6>
    <h4>OUR Latest News</h4>
  </div>

<div class="container">
<div class="row">

<?php
      $result = mysqli_query($conn, "SELECT * FROM news ORDER BY id DESC");

      if(!$result){
        die('query failed '.mysqli_error($conn));
      }else{
              
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $timestamp = $row['blogDate'];
        $fullDate = strtotime($timestamp);
        $day = date('d', $fullDate);
        $month = date('F', $fullDate);
        $heading = $row['heading'];
        $image = $row['large_image'];
        $shortDesc = $row['description'];
      ?>

<div class="col-sm-4">
<div class="box">
<img src="admin/uploads/news/<?= $image ?>" width="100%">
  <div class="inner-box">
    <h4><?= $heading ?></h4>
   <div class="description<?= $id?>" style="height:78px; overflow:hidden"><?= $shortDesc ?></div>
   <a href='javascript:void(0)' id="readmore<?= $id?>" onclick="readmore_btn(<?= $id?>)">Read More</a>
    <div class="bottom-blog">
      <span><i class="fa fa-calendar"></i><?= $month?> <?=$day?></span>

      
    </div>
  </div>
</div>
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
<script>

function readmore_btn(id){
$('#readmore'+id+'').toggle(function(){
  $('.description'+id+'').css({'overflow':'none', 'height':'auto'})
 
})
}

</script>

</html>