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

<body id="homepage">

    <div id="wrapper">

    <?php include 'include/header.php'; ?>

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- revolution slider begin -->

            <section class="banner-sec">
                <div class="banner-img">
                    <div class="overlay"></div>
                    <img class="img-fluid" src="<?= BASE_URL ?>assets/images/slider/wide12.jpg">
                    <div class="banner-content inter-banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner-text inter-banner-text">

                                        <h2>Blog</h2>
                                        <span class="decor-equal"></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- revolution slider close -->



<div id="content" style="background-size: cover;">
            <div class="container" style="background-size: cover;">
                <div class="row" style="background-size: cover;">
                    <div class="col-md-8" style="background-size: cover;">
                        <ul class="blog-list">

                        <?php
                        $blogs = get_blogs();
                        $blogs = json_decode($blogs, true);
                        $html = '';
                        

                        foreach($blogs as $blog){

                            $fulldate = $blog['blogDate'];
                            $timestamp = strtotime($fulldate);
                            $day = date('d', $timestamp);
                            $monthyear = date('F', $timestamp);


                            $html .= '<li>
                                <div class="post-content" style="background-size: cover;">
                                    <div class="post-image" style="background-size: cover;">
                                        <img src="<?= BASE_URL ?>assets/images/pic-blog-2.jpg" alt="">
                                    </div>
                                    <div class="date-box" style="background-size: cover;">
                                        <div class="day" style="background-size: cover;">'.$day.'</div>
                                        <div class="month" style="background-size: cover; letter-spacing:0">'.$monthyear.'</div>
                                    </div>
                                    <div class="post-text" style="background-size: cover;">
                                    <h3><a href="#">'.$blog['heading'].'</a></h3>
                                    '.$blog['shortDesc'].'
                                    </div>
                                    <a href="blog-details.php?id='.$blog['id'].'" class="btn-more">Read More</a>
                                </div>
                            </li>';
                            }

                            echo $html;

                        ?>
                            
                       

                        </ul>

                       <!--  <div class="text-center" style="background-size: cover;">
                            <ul class="pagination">
                                <li><a href="#">Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div> -->
                    </div>

                    <div id="sidebar" class="col-md-4" style="background-size: cover;">
                        <div class="widget widget-post" style="background-size: cover;">
                            <h4>Recent Posts</h4>
                            <div class="small-border" style="background-size: cover;"></div>
                            <ul>
                            <?php
                        $blogAll = get_blogs();
                        $blogAll = json_decode($blogAll, true);
                        $html = '';
                        

                        foreach($blogAll as $blg){
                            $id = $blg['id'];
                            $title = $blg['heading'];
                           $html .= '<li><a href="blog-details.php?id='.$id.'">'.$title.'</a></li>';
                           
                            }
                            echo $html;
                        ?>
                          </ul>
                        </div>

                        <div class="widget widget-text" style="background-size: cover;">
                            <h4>About Us</h4>
                            <div class="small-border" style="background-size: cover;"></div>
                            Chaahat homes was Established in 2007, Chaahat Homes Infratech Pvt Ltd is the preffered real estate ipa (indian property associate ) of gurgaon for the commercial and residential spaces with the perfect investment oppurtunity and excellent service. We provide broad service to our customers and strive to maximize our customer return on investment. Our primary goal is to understand customer's requirements in depth and give total customers satisfaction who wants to invest and find their dream commercial and residential space in Gurgaon.
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


    
        <?php include 'include/testimonial.php'; ?>
        </div>
        <?php include 'include/partner.php'; ?>
 
        <!-- footer close -->
    </div>

    <?php include 'include/js-url.php'; ?>

<?php include 'include/modal.php'; ?>
<?php include 'include/footer.php'; ?>


</body>


</html>