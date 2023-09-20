<?php 
    include 'include/config.php'; 
    include 'include/functions.php';


    $metadetails=mysqli_query($conn,"SELECT * FROM `meta_details` WHERE page_type='service'");
    if($metadetails->num_rows >0){
      $metadetailsdata=mysqli_fetch_assoc($metadetails);
      // echo  "<pre>";print_r($metadetailsdata);die;
      echo  '  <title>'.$metadetailsdata['meta_title'].'</title>
      <meta name="description" content="'.$metadetailsdata['meta_descriptions'].'" />
      <meta name="keywords" content="'.$metadetailsdata['meta_keyword'].'" />';
      echo  $metadetailsdata['header'];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Polaris Realtors | Services</title>
  
 <?php include 'include/css-url.php'; ?>
</head>
<body>


<!------------------ Slider Codes Start From Here  --------------------------->

<div class="custom-navbar-and-slider-section">
   
  <?php include 'include/header.php'; ?>

    <div class="container-fluid head-sub-section" style="background-image: url(<?= BASE_URL ?>assets/images/service-bg.jpg);">
      <h4 class="head-sub-section-heading">Our Services</h4>
      <ul class="breadcurmes">
        <li><a href="index.php">Home</a> / <a href="services.php">Services</a></li>
      </ul>
    </div>
</div>
<!------------------ Slider Codes End From Here  --------------------------->

<section class="container-fluid section service_section" id="vision-mission">
  <div class="container">

    <div class="sec_heading center">
      <p class="sub_heading">What We Do</p> 
      <h4 class="custom-heading-dark">Services you can actually trust</h4>
    </div>

    <div class="services_col">
      <div class="row justify-content-center">

        <?php 
          $data_services = get_services();
          $filter_data = json_decode($data_services, true); 
          if($filter_data['status'] == 1){
            foreach ($filter_data['data'] as $services) { 
        ?>

          <div class="col-md-3 singleCol">
            <div class="service_col">
              <img src="<?= ADMIN_URL ?><?php echo $services['feature']; ?>" alt="" class="img-fluid thumbnail" />
              <div class="content">
                <div class="data">
                  <h3 class="title"><?php echo $services['title']?></h3>
                  <?php echo mb_strimwidth($services['description'], 0, 250, '...') ?>
                  <a href="detail-services.php?sid=<?php echo $services['page_url'] ?>" class="btn dark_btn">Read More</a>
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
      
  </div>
</section>

  <!---------------- Overview Section Codes End From Here --------------->


  <?php include 'include/footer.php'; ?>
  <?php  include 'include/js-url.php'; ?>
</body>
</html>