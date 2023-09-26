<?php 
    include 'include/config.php'; 
    include 'include/functions.php';


    


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Polaris Realtors | Life At Dev</title>

    <?php include 'include/css-url.php'; ?>

    <link
      rel="stylesheet"
      href="<?= BASE_URL ?>assets/plugins/grid-gallery/css/demo.css"
    />
    <link
      rel="stylesheet"
      href="<?= BASE_URL ?>assets/plugins/grid-gallery/css/component.css"
    />
    <script src="<?= BASE_URL ?>assets/plugins/grid-gallery/js/modernizr.custom.js"></script>
  </head>
  <body>
    <!------------------ Slider Codes Start From Here  --------------------------->

    <div class="custom-navbar-and-slider-section">
      <?php include 'include/header.php'; ?>

      <div
        class="container-fluid head-sub-section"
        style="
          background-image: url(<?= BASE_URL ?>assets/images/service-bg.jpg);
        "
      >
        <h4 class="head-sub-section-heading">Life At Dev</h4>
        <ul class="breadcurmes">
          <li>
            <a href="index.php">Home</a> /
            <a href="life-at-dev.php">Life At Dev</a>
          </li>
        </ul>
      </div>
    </div>
    <!------------------ Slider Codes End From Here  --------------------------->

    <section
      class="container-fluid section life_at_dev_section"
      id="vision-mission"
    >
      <div class="container">
        <div class="sec_heading center">
          <p class="sub_heading">Life At Dev</p>
          <h4 class="custom-heading-dark">Where Work Feels Like Home</h4>
        </div>

        <div class="life_at_dev_col">
   
          <section id="grid-gallery" class="grid-gallery">
            <div class="grid-wrap">
              <ul class="grid">
                <!-- <li class="grid-sizer"></li> -->
                <!-- for Masonry column width -->
                
          <?php
              $sql = "SELECT * FROM gallery_category";
              $result = mysqli_query($conn, $sql);

              if(!$result){
                die('Query failed '.mysqli_error($conn));
              }else{

                while($row = mysqli_fetch_assoc($result)){           
 
                
            echo '<li>
            <a href="dev-gallery.php?id='.$row['id'].'" class="link">
              <div class="redirect_icon">
                <img src="'.BASE_URL.'assets/images/icons/redirect.png" alt="redirect-icon" class="img-fluid" />
              </div>
              <div class="single_life_at_dev">
                <img   src="'.ADMIN_URL.$row['image'].'"  class="img-fluid thumbnail"  />
                <div class="content">
                  <h4 class="title">'.$row['catname'].'</h4>
                </div>
              </div>
            </a>
          </li>';
            }

            }
            ?>
   
                
              </ul>
            </div>
          </section>

            <!-- <?php 
              $data_services = get_services();
              $filter_data = json_decode($data_services, true); 
              if($filter_data['status'] == 1){
                foreach ($filter_data['data'] as $services) { 
            ?>

            <div class="row justify-content-center">
              <div class="col-md-3 singleCol">
                <div class="service_col">
                  <img
                    src="<?= ADMIN_URL ?><?php echo $services['feature']; ?>"
                    alt="dev-gallery.php"
                    class="img-fluid thumbnail"
                  />
                  <div class="content">
                    <div class="data">
                      <h3 class="title"><?php echo $services['title']?></h3>
                      <?php echo mb_strimwidth($services['description'], 0, 250, '...') ?>
                      <a
                        href="detail-services.php?sid=<?php echo $services['page_url'] ?>"
                        class="btn dark_btn"
                        >Read More</a
                      >
                    </div>
                  </div>
                </div>
              </div>

            <?php
            }
          }
        ?> -->
          </div>
        </div>
      </div>
    </section>

    <!---------------- Overview Section Codes End From Here --------------->

    <?php  include 'include/js-url.php'; ?>
    <?php include 'include/footer.php'; ?>

    <script src="<?= BASE_URL ?>assets/plugins/grid-gallery/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= BASE_URL ?>assets/plugins/grid-gallery/js/masonry.pkgd.min.js"></script>
    <script src="<?= BASE_URL ?>assets/plugins/grid-gallery/js/classie.js"></script>
    <script src="<?= BASE_URL ?>assets/plugins/grid-gallery/js/cbpGridGallery.js"></script>

    <script>
      new CBPGridGallery(document.getElementById("grid-gallery"));
    </script>
  </body>
</html>
