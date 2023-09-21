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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>

<body>

<div class="custom-navbar-and-slider-section">
      <?php include 'include/header.php'; ?>

      <div class="container-fluid head-sub-section" style="background-image: url(<?= BASE_URL ?>assets/images/service-bg.jpg);">
         <h4 class="head-sub-section-heading">Employee of the Month</h4>
         <ul class="breadcurmes">
         <li><a href="index.php">Life at Dev</a> / <a href="services.php">Employee of the Month</a></li>
         </ul>
      </div>
   </div>


<section class="gall-activity all-heading">
  <div class="heading">
    <h6>Employee of the Month</h6>
    <h4>Employee of the Month</h4>
  </div>


  <div class="inner-box">
    <select class="form-control filter-year">
        <option>2021</option>
        <option>2022</option>
        <option>2022</option>
        <option>2024</option>
        <option>2025</option>
    </select>
    <br><br>
  <div class="left-act">
  <div class="popup-gallery">
    <div class="box-gall">
    <a href="assets/images/life-at-dev/gallery/a.jpg" class="image" title="This is a image">
        <img src="assets/images/life-at-dev/gallery/a.jpg" alt="Alt text">
    </a>
     <div class="h-gall-const"></div>
    </div>

    <div class="box-gall">
      <a href="assets/images/life-at-dev/gallery/b.jpg" class="image" title="This is a image">
        <img src="assets/images/life-at-dev/gallery/c.jpg" alt="Alt text">
    </a>
    <div class="h-gall-const"></div>
    </div>

    <div class="box-gall">
      <a href="assets/images/life-at-dev/gallery/tr.mp4" class="video" title="This is a video">
        <img src="assets/images/life-at-dev/gallery/b.jpg" alt="Alt text">
    </a>
    <div class="h-gall-const"></div>
    </div>

    <div class="box-gall">
      <a href="assets/images/life-at-dev/gallery/c.jpg" class="image" title="This is a image">
        <img src="assets/images/life-at-dev/gallery/c.jpg" alt="Alt text">
    </a>
    <div class="h-gall-const"></div>
    </div>

    <div class="box-gall">
      <a href="assets/images/life-at-dev/gallery/d.jpg" class="image" title="This is a image">
      <img src="assets/images/life-at-dev/gallery/d.jpg" alt="Alt text">
    </a>
    <div class="h-gall-const"></div>
    </div>


    <div class="box-gall">
      <a href="assets/images/life-at-dev/gallery/a.jpg" class="image" title="This is a image">
      <img src="assets/images/life-at-dev/gallery/a.jpg" alt="Alt text">
    </a>
    <div class="h-gall-const"></div>
    </div>


    <div class="box-gall">
      <a href="assets/images/life-at-dev/gallery/b.jpg" class="image" title="This is a image">
      <img src="assets/images/life-at-dev/gallery/b.jpg" alt="Alt text">
    </a>
    <div class="h-gall-const"></div>
    </div>

    <div class="box-gall">
      <a href="assets/images/life-at-dev/gallery/c.jpg" class="image" title="This is a image">
      <img src="assets/images/life-at-dev/gallery/c.jpg" alt="Alt text">
    </a>
    <div class="h-gall-const"></div>
    </div>

  </div>
  </div>
        </div>

</section>
<!-- revolution slider close -->



<?php include 'include/js-url.php'; ?>
<?php include 'include/modal.php'; ?>
<?php include 'include/footer.php'; ?>



</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script> 

<script type="text/javascript">
  $(".popup-gallery").magnificPopup({
  delegate: "a",
  type: "image",
  type: "video",
  gallery: {
    enabled: true,
    navigateByImgClick: true,
    preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
  },
  callbacks: {
    elementParse: function (item) {
      console.log(item.el[0].className);
      if (item.el[0].className == "video") {
        (item.type = "iframe"),
          (item.iframe = {
            patterns: {
              youtube: {
                index: "youtube.com/", // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

                id: "v=", // String that splits URL in a two parts, second part should be %id%
                // Or null - full URL will be returned
                // Or a function that should return %id%, for example:
                // id: function(url) { return 'parsed id'; }

                src: "//www.youtube.com/embed/%id%?autoplay=1" // URL that will be set as a source for iframe.
              },
              vimeo: {
                index: "vimeo.com/",
                id: "/",
                src: "//player.vimeo.com/video/%id%"
              },
              gmaps: {
                index: "//maps.google.",
                src: "%id%&output=embed"
              }
            }
          });
      } else {
        (item.type = "image"),
          (item.tLoading = "Loading image #%curr%..."),
          (item.mainClass = "mfp-img-mobile"),
          (item.image = {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
          });
      }
    }
  }
});

$(".video").magnificPopup({
  type: "iframe",
  disableOn: function () {
    // don't use a popup for mobile
    if ($(window).width() < 600) {
      return false;
    }
    return true;
  },

  iframe: {
    markup:
      '<div class="mfp-iframe-scaler">' +
      '<div class="mfp-close"></div>' +
      '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
      "</div>", 
    patterns: {
      youtube: {
        index: "youtube.com/",
        id: "v=", 
        src: "//www.youtube.com/embed/%id%" // URL that will be set as a source for iframe.
      },
      vimeo: {
        index: "vimeo.com/",
        id: "/",
        src: "//player.vimeo.com/video/%id%"
      },
      gmaps: {
        index: "//maps.google.",
        src: "%id%&output=embed"
      }

      // you may add here more sources
    },

    srcAction: "iframe_src" // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
  }
});

</script>
</html>