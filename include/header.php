  <nav class="navbar navbar-expand-md" id="header_menu">
      <!-- Brand -->
      <a class="navbar-brand" href="index.php">
      <img src="<?= BASE_URL ?>assets/images/logo-white.png" alt="" class="img-fluid developer-logo-img">
      </a>
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <i class="fa fa-bars"></i>
      </button>
      <!-- Navbar links -->
      <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
         <ul class="navbar-nav">
            <li class="nav-item nav-item-2">
               <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item sub-menu sub-about nav-item-2">
               <a class="nav-link" href="javascript:void(0);">About Us <img src="<?= BASE_URL ?>assets/images/icons/right-arrow.png" alt="about us" class="img-fluid sub-nav-img"></a>
            </li>
            <li class="nav-item sub-menu sub-residential nav-item-2">
               <a class="nav-link" href="javascript:void(0);">Residential <img src="<?= BASE_URL ?>assets/images/icons/right-arrow.png" alt="Residential" class="img-fluid sub-nav-img"> </a>
            </li>
            <li class="nav-item sub-menu sub-commerical nav-item-2">
               <a class="nav-link" href="javascript:void(0);">Commercial <img src="<?= BASE_URL ?>assets/images/icons/right-arrow.png" alt="Commercial" class="img-fluid sub-nav-img"></a>
            </li>
            <li class="nav-item contact-li nav-item-2">
               <a class="nav-link" href="contact-us.php">Contact Us</a>
            </li>
            <li class="nav-item number-li nav-item-2">
               <a class="nav-link" href="tel:8920100047">+91-8920-10-0047</a>
            </li>
         </ul>
      </div>
   </nav>

<ul class="sub-nav about-sub-menu">
   <button class="btn btn-close"><i class="fa fa-close"></i></button>
   <div class="sub-nav-2">
      <h4 class="submenu-heading">About Us</h4>
      <li><a href="about-us.php" class="nav-link">Who We Are</a></li>
      <li><a href="vision-mission.php" class="nav-link">Vision & Mission</a></li>
      <li><a href="our-team.php" class="nav-link">Our Team</a></li>
   </div>
</ul>

<ul class="sub-nav residential-sub-menu">
  <button class="btn btn-close"><i class="fa fa-close"></i></button>
   <div class="sub-nav-2">
      <h4 class="submenu-heading">Residential Projects</h4>
      <?php  
      				$checkresidentialspage = mysqli_query($conn, "SELECT * FROM `platter_page` WHERE cat_id=1");
                  if($checkresidentialspage->num_rows >0){
                     while ($platter=mysqli_fetch_assoc($checkresidentialspage)) {
                        echo  ' <li><a href="platter.php?page-url='.$platter['page_url'].'" class="nav-link">'.$platter['name'].'</a></li>';
                     }
                  }

      ?>
    

   </div>
</ul>
<ul class="sub-nav commerical-sub-menu">
   <button class="btn btn-close"><i class="fa fa-close"></i></button>
   <div class="sub-nav-2">
      <a href="commerical-properties/index.html" ><h4 class="submenu-heading">Commerical Projects</h4></a>
      <?php  
      				$commericalpagecheck = mysqli_query($conn, "SELECT * FROM `platter_page` WHERE cat_id=2");
                  if($commericalpagecheck->num_rows >0){
                     while ($platter=mysqli_fetch_assoc($commericalpagecheck)) {
                        echo  ' <li><a href="platter.php?page_url='.$platter['page_url'].'" class="nav-link">'.$platter['name'].'</a></li>';
                     }
                  }

      ?>
   </div>
</ul>

<div class="mobile-section-1"> 
  <div class="mobile-section-2"> 
    <div class="mobile-section"> 
      <a href="#" class="btn btn-success btn-block" title="Enquire Now" data-toggle="modal" data-target="#myModal-Top">  Enquire Now</a> 
      <!-- <a href="https://api.whatsapp.com/send?phone=+91-XXXXXX &amp;text=Hello, Looking for project name &amp; location name. Get in touch with me my name is" class="btn btn-success btn-block middle-button">Whats App</a>  -->
      <a href="tel:+91-8920-10-0047" class="btn btn-success btn-block"> Tap To Call</a> 
    </div>
  </div>
</div>