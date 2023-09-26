
<<?php 
	include_once 'config/conn.php';
	include_once 'include/function.php';
	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
?>

</section><section class="microsite-area">
	<div class="inner-micro-structure">
		<div class="left-area">
			<form id="add_gallery_form" method="post">
			<div class="microbox">
				<div class="head-box">
					<h6><i class="fa fa-building" aria-hidden="true"></i> Gallery Image/Video</h6>
				</div>
				<div class="box-two">
					<div class="admin-text">
						<span>Select Date</span>
					</div>
					<div class="input-sec" style="display:block">
                             	<select class="form-control" id="date" name="date">
					<option value="">Select</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					</select>
					</div>
				</div><!-------------box-2-------->
                        <div class="box-two">
					<div class="admin-text">
						<span>Select Category</span>
					</div>
					<div class="input-sec" style="display:block">
                              <select class="form-control" id="catname" name="catname">
					<option value="">Select</option>
						<?php

						$galleryName = get_gallery_category_name();
					
						for ($i=0; $i <count($galleryName) ; $i++) { 
							echo '<option value="'.$galleryName[$i]['id'].'">'.$galleryName[$i]['catname'].'</option>';
						}
					
						 ?>
                                   
                                  
                              </select>
					</div>
				</div><!-------------box-2-------->

				<div class="box-two">
					<div class="admin-text">
						<span>Select Category</span>
					</div>
					<div class="input-sec" style="display:block">
                              <select class="form-control" id="filetype" name="filetype">
						<option value="1">Image</option>
						<option value="2">Video</option>
					</select>
					</div>
				</div>

				<div class="box-two">
					<div class="admin-text">
						<span>Images/Video</span>
						<small>Images Size 800*500 Only</small>
					</div>
					<div class="input-sec-multi">
						<input type="file" name="image" class="form-control-file form-control" onchange="imageValidationall(this)" id="image" >
						
						<!-- <div class="inner-box">
								<div class="img-box">
								<img src="images/img-admin.jpg">
								<span onclick=""><i class="fa fa-times" aria-hidden="true"></i></span>
								</div>
                                               
                                           </div> -->
					</div>
				</div><!-------------box-2-------->
				<!-------------box-2-------->
			</div>
			<div class="btn-save">
			 <button class="save-btn" id="galleryMain_submit">Save</button>  
			</div>
			</form>
		</div>
		<div class="right-area">
            <div class="microbox">
				<div class="head-box">
					<h6><i class="fa fa-building" aria-hidden="true"></i> Details Gallery Image/Video</h6>
				</div>
				<div class="inner-table">
					<table class="table">
					<thead>
						<tr>
							
							<th>Sno</th>
							<th>Gallery</th>
							<th>Image</th>
							<th>Type</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                       
                        <?php 
                        $sql = "SELECT * FROM gallery";
                        $result = mysqli_query($conn, $sql);

                        if(!$result){
                            die('Query failed '.mysqli_error($conn));
                        }else{
                           
                        $num = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
				    $date = $row['date'];
                            $catname = $row['catname'];
                            $image = $row['image'];
				    $file_type = $row['file_type'];
                            echo "<tr>";
                            echo "<td>$num</td>";
                            echo "<td>$catname</td>";
                            echo "<td><img src='".$image."' width='100'></td>";
				    if($row['file_type']==1){
					echo "<td>image</td>";
				    }else{
					echo "<td>Video</td>";
				    }
				    echo "";
                            echo "<td><a href='' class='category_modal' value='$id&$date&$catname&$image&$file_type' data-toggle='modal' data-target='#udpatemetatagefielsds'>Edit</a></td>";
                            echo "<td><a href='javascript:void(0)' class='deletegallery' dataid='".encryptor('encrypt',$row['id'])."' >Delete</a></td>";
                            echo "</tr>";
                            $num++;}
                               }
                        
                      
                        ?>
						
					</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</section>
<div class="modal fade zoomIn" id="udpatemetatagefielsds" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                        <div class="modal-header p-3 bg-soft-success">
                                <h5 class="modal-title" id="modal-heading-append">Edit Gallery Details</h5>
                                <button type="button" class="fa fa-times" data-dismiss="modal" id="addProjectBtn-close" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
						<form action="" id="update_gallery_form" class="">
			<div class="form-group">
			<select class="form-control" id="update_date" name="update_date">
					<option value="">Select</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					</select>
                    </div>
                    <div class="form-group">
                        <label for="">Category Name</label>
            

				<select class="form-control" id="update_catname" name="update_catname">
					<option value="" selected>Select</option>
						<?php

						
						$galleryName = get_gallery_category_name();
					
						for ($i=0; $i <count($galleryName) ; $i++) { 
							echo '<option value="'.$galleryName[$i]['id'].'">'.$galleryName[$i]['catname'].'</option>';
						}
					

						 ?>
                                   
                                  
                              </select>
                    </div>
			  <div class="form-group">
                        <label for="">Video</label>
				<select class="form-control" id="filetypeupdate" name="filetypeupdate">
					<option value="" selected>Select</option>
							<option value="1">Image</option>
						<option value="2">Video</option>

					</select>
                    </div>
			  
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="update_image" onchange="imageValidationall(this)" class="form-control" id="update_image">
                    </div>
			
                    <input type="hidden" id="hiddenId" name="hiddenId">
			  <button type="submit" class="btn btn-info">Update</button>

                </form>
                        </div>
                </div>
        </div>
</div>
<?php 
	include_once 'layout/footer/footer.php';
?>
<script>

$('.category_modal').on('click',function(){
 
    var data = $(this).attr('value')
    var dataArray = data.split('&')
    var id = dataArray[0]
    var date = dataArray[1]
    var catname = dataArray[2]
    var image = dataArray[3]
   var filetype = dataArray[4]

    $('#hiddenId').val(id)
    $('#update_date').val(date)
    $('#update_catname').val(catname)
    $('#oldImage').val(image)
    $('#filetypeupdate').val(filetype)

})

</script>