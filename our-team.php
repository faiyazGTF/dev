<?php 
    include 'include/config.php'; 
    include_once 'include/functions.php';

   $page_url = '';
   if(isset($_GET['sid'])){
      $page_url = $_GET['sid'];
   }

   $services_details = get_services($page_url);
   $details_services = json_decode($services_details, true);
   if($details_services['status'] == 1){
      $data = $details_services['data'][0];   
   }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $data['meta_title']; ?></title>
    
    <meta name="description" content="<?= $data['meta_description']; ?>" />
    <meta name="keywords" content="<?= $data['meta_keywords']; ?>" />

<?php include 'include/css-url.php'; ?>
</head>
<body>

   <div class="custom-navbar-and-slider-section">
      <?php include 'include/header.php'; ?>

      <div class="container-fluid head-sub-section" style="background-image: url(<?= BASE_URL ?>assets/images/service-bg.jpg);">
         <h4 class="head-sub-section-heading">Our Team</h4>
         <ul class="breadcurmes">
         <li><a href="index.php">Home</a> / <a href="services.php">Services</a></li>
         </ul>
      </div>
   </div>

      <!-- content begin -->
      <div class="container-fluid section team_page">
         <div class="container">
            <!-- <h3 class="title"><?php echo $data['title']; ?></h3>
            <?php echo $data['description']; ?> -->

            <div class="row">
               <div class="col-md-3">
                  <div class="single_team">
                     <img src="<?= BASE_URL ?>assets/images/team/team1.jpg" alt="team image" class="img-fluid thumbnail" />
                     <h3 class="name">John Doe</h3>
                     <small class="desg">Broker</small>
                  </div>
               </div>

               <div class="col-md-3">
                  <div class="single_team">
                     <img src="<?= BASE_URL ?>assets/images/team/team1.jpg" alt="team image" class="img-fluid thumbnail" />
                     <h3 class="name">John Doe</h3>
                     <small class="desg">Broker</small>
                  </div>
               </div>

               <div class="col-md-3">
                  <div class="single_team">
                     <img src="<?= BASE_URL ?>assets/images/team/team1.jpg" alt="team image" class="img-fluid thumbnail" />
                     <h3 class="name">John Doe</h3>
                     <small class="desg">Broker</small>
                  </div>
               </div>

               <div class="col-md-3">
                  <div class="single_team">
                     <img src="<?= BASE_URL ?>assets/images/team/team1.jpg" alt="team image" class="img-fluid thumbnail" />
                     <h3 class="name">John Doe</h3>
                     <small class="desg">Broker</small>
                  </div>
               </div>

               <div class="col-md-3">
                  <div class="single_team">
                     <img src="<?= BASE_URL ?>assets/images/team/team1.jpg" alt="team image" class="img-fluid thumbnail" />
                     <h3 class="name">John Doe</h3>
                     <small class="desg">Broker</small>
                  </div>
               </div>

               <div class="col-md-3">
                  <div class="single_team">
                     <img src="<?= BASE_URL ?>assets/images/team/team1.jpg" alt="team image" class="img-fluid thumbnail" />
                     <h3 class="name">John Doe</h3>
                     <small class="desg">Broker</small>
                  </div>
               </div>
               
            </div>
         </div>
      </div>

    <?php include 'include/modal.php'; ?>
    <?php include 'include/js-url.php'; ?>
    <?php include 'include/footer.php'; ?>
</body>


</html>