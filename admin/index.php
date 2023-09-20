<?php 
	include_once 'config/conn.php';
	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';

?>
<section class="body-detail">
  <div class="inner-sec">
  <div class="left-area">
    <div class="inner-left">
      <div class="top-box">
        <div class="box">
          <h6><i class="fa fa-home" aria-hidden="true"></i> Total Project</h6>
          <div class="media">
            <?php 
                $microreoed = mysqli_query($conn, "SELECT * FROM `micro_site`");
                if($microreoed->num_rows >0){
                  echo  ' <span class="no-project">'.$microreoed->num_rows.'</span>';
                }
            ?>

          <div class="media-body">
            <h4>No. of Project</h4>
            <ul>
            <li><a href="Project-list.php"> View Details</a></li>
            <li><a href="micro-site.php"><span><img src="images/icon/add-button.png"></span>Add More Project</a></li>
          </ul>
          </div>
        </div>
          
        </div>

        <div class="box d-none">
          <div class="box-review">
            <h6><i class="fa fa-address-card" aria-hidden="true"></i> Latest Review</h6>
            <div class="review">
              <div class="l-review">
                <span>S</span>
              </div>
              <div class="r-review">
                <h4>Sanjay Kapoor</h4>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting...<a href="#">Read More</a></p>

                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>24 Jun</li>
                </ul>
              </div>
            </div>
        

            <div class="review">
              <div class="l-review">
                <span>R</span>
              </div>
              <div class="r-review">
                <h4>Renu Singh</h4>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting...<a href="#">Read More</a></p>

                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>24 Jun</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
      </div><!--------top-box---------->
    </div>

    <div class="bottom-box">
      <div class="inner-bottom-box">
        <h6><i class="fa fa-envelope-open" aria-hidden="true"></i> Other Section</h6>

        <div class="inner-other">
        <div class="box">
            <div class="media">
              <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            
            <div class="media-body">
              <h5>Platter Pages</h5>
              <a href="platter.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>

          <div class="box">
            <div class="media">
              <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            
            <div class="media-body">
              <h5>State name</h5>
              <a href="state.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>

          <div class="box">
            <div class="media">
            <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            <div class="media-body">
              <h5>City name</h5>
              <a href="city.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>

          <div class="box">
            <div class="media">
            <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            <div class="media-body">
              <h5>Location</h5>
              <a href="location.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>

         
          <div class="box">
            <div class="media">
            <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            <div class="media-body">
              <h5>Project Name</h5>
              <a href="developer-logo.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>

          <div class="box">
            <div class="media">
            <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            <div class="media-body">
              <h5>Property Type</h5>
              <a href="property-type.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>

         

          <div class="box">
            <div class="media">
            <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            <div class="media-body">
              <h5>Amenities Logo</h5>
              <a href="amenities_logo.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>

        </div><!--------inner-other---------->

      </div>
	  
	  <div class="inner-bottom-box">
        <h6><i class="fa fa-envelope-open" aria-hidden="true"></i> Other Section</h6>

        <div class="inner-other">
          <div class="box">
            <div class="media">
              <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            
            <div class="media-body">
              <h5>Blogs</h5>
              <a href="blogs.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>

          <div class="box">
            <div class="media">
            <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            <div class="media-body">
              <h5>Awards</h5>
              <a href="awards.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>

          <div class="box">
            <div class="media">
            <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            <div class="media-body">
              <h5>Employee Testimonials</h5>
              <a href="employee-testimonials.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>

          <!-- <div class="box">
            <div class="media">
            <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            <div class="media-body">
              <h5>Work Culture</h5>
              <a href="work-culture.php"><span>View Detail</span></a>
            </div>
          </div>
          </div> -->
 
          <div class="box">
            <div class="media">
              <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            
            <div class="media-body">
              <h5>Job Application</h5>
              <a href="job-application.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>
 
        </div><!--------inner-other---------->
<div class="inner-other">
          

          <div class="box">
            <div class="media">
            <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            <div class="media-body">
              <h5>Work With US</h5>
              <a href="work-with-us.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>
 
          <div class="box">
            <div class="media">
            <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            <div class="media-body">
              <h5>Contact Us</h5>
              <a href="contact-us.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>

          <div class="box">
            <div class="media">
            <span class="inner-sec"><img class="mr-3 box-icon" src="images/icon/cityscape.png" alt="Generic placeholder image"></span>
            <div class="media-body">
              <h5>Meta Details</h5>
              <a href="meta-details.php"><span>View Detail</span></a>
            </div>
          </div>
          </div>
 
 
        </div><!--------inner-other---------->
      </div>
    </div>

        
  </div><!----------left-area--------->

  <div class="right-area fasfasdf">
    <div class="inner-left">
      <div class="box">
         <h6><i class="fa fa-envelope-open" aria-hidden="true"></i> Latest Query</h6> 
         <div class="inner-table">
           <table class="table">
            <thead>
              <tr>
                <th>Builder Name</th>
                <th>New Query</th>
                <th>View</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql6 = "SELECT developer_id, COUNT(*) FROM property_query GROUP BY developer_id";
              $result = mysqli_query($conn,$sql6);
              $count = mysqli_num_rows($result);
               $buildQuery = '';
              for($i = 0; $i < $count ; $i++){
              $row = mysqli_fetch_assoc($result);
              $dev_id = $row['developer_id'];
              $sql7 = "SELECT name FROM developer WHERE id='$dev_id'";
              $result1 = mysqli_query($conn,$sql7);
              $row1 = mysqli_fetch_assoc($result1);
              $dev_name = $row1['name'];
               $buildQuery .= '<tr>
               <td>'.$dev_name.'</td>
               <td>'.$row['COUNT(*)'].'</td>
               <td><a href="builder-query.php?id='.$row['developer_id'].'"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
               </tr>';
              }
               echo $buildQuery;
            ?>
            </tbody>
          </table>
         </div>
      </div>
    </div><!----------right-area--------->

  </div>
</div>
</section>
<?php 
	include_once 'layout/footer/footer.php';
?>


<script>
	function select_hot_projects(val){
		 
		var hot_project_val = '';
		var slct_itmem = [];
		if($('input[name="hot_projects'+val+'"]').is(':checked')){
			  hot_project_val = 1;
			 
		}else{
			hot_project_val = 0;
		}
		var hot_project_id = val;
 
		$.ajax({
			url : 'ajax/filter/ajax-filter-add.php',
			type : 'POST',
			data : {'hot_projects_id' : hot_project_id, 'updated_val' : hot_project_val},
			success : function(resp){
				if(resp == 'success'){
					window.location.reload();
				}
			}
		})
		
	
		
	}



	function add_calculator_projects(id){
		var emi_cal_val = '';
		var slct_itmem = [];
		if($('input[name="add_cal'+id+'"]').is(':checked')){
			  emi_cal_val = 1;
			 
		}else{
			emi_cal_val = 0;
		}
		var emi_cal_update_id = id;
 
		$.ajax({
			url : 'ajax/filter/ajax-filter-add_emi_cal.php',
			type : 'POST',
			data : {'emi_cal_update_id' : emi_cal_update_id, 'emi_cal_status' : emi_cal_val},
			success : function(resp){
				if(resp == 'success'){
					window.location.reload();
				}
			}
		})
	}
</script>