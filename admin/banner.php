<?php 
include_once 'config/conn.php';
	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
	
	include_once 'include/function.php';
	$update_id = '';
	$win_images = '';
	$win_video = '';
	$win_video_url = '';
	
	$small_images = '';
	$small_video = '';
	$small_video_url = '';
	
	if(isset($_GET['id'])){
		$update_id = $_GET['id'];
		$eid = encryptor('decrypt',$_GET['id']);
		include_once 'layout/side-nav/right-side-nav.php';
	
}
?>
<section class="microsite-area">
	<div class="">
		<form action="" id="addbanner">
			<input type="hidden" name="eid" value="<?=  encryptor('encrypt',$eid) ?>" id="">
		<div class="">
			<div class="microbox">
				<div class="head-box">
					<h6><i class="fa fa-building" aria-hidden="true"></i> Project Main Slider Image/Video</h6>
				</div>
			
			
				<div class="box-two">
					<div class="admin-text">
						<span>Image </span>
						<!-- <small>Video Size Maximum 5mb Only</small> -->
					</div>
					<div class="input-sec-multi">
						<input type="file" class="form-control-file form-control" id="banner_video" name="image">
						
					</div>
				</div><!-------------box-2-------->
				<div class="box-two d-none">
					<div class="admin-text">
						<span> Video Url</span>
					</div>
					<div class="input-sec custom_input_sec">
						<input type="text" class="form-control" name="banner_video_url"placeholder="Some Url here" id="banner_video_url"  >
						<span><small class="text-danger" id="banner_video_url_err"></small></span>
						<!--<i class="fa fa-times" aria-hidden="true"></i>-->
					</div>
				</div><!-------------box-2-------->
			</div>
			<div class="btn-save">
			 <button class="save-btn" id="submit">Add banners</button>  
			</div>
			<br><br>
		</div>
		</form>
	
	</div>


	<div class="list-area box-border w-100">
			<h6><i class="fa fa-building" aria-hidden="true"></i> All Banners</h6>
			<div class="inner-table">
				<table class="table">
					<thead>
						<tr>
							<th>Sr. No.</th>
							<th>Banners</th>
							<!-- <th>Video Url</th> -->
							<th>Status</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
					<!-- <td><span onclick="viewtext(`Url`,`'.$data['win_video_url'].'`)"><i class="fa fa-eye"></i></span></td> -->
					<!-- <span onclick="viewimage(`uploads/microsite/banners/'.$data['win_images'].'`)"><i class="fa fa-eye"></i></span> -->
					<?php  
						$allbanenrq = mysqli_query($conn, "SELECT * FROM `micro_site_banner` WHERE project_id=".$eid."");
							if($allbanenrq->num_rows >0){
								$sno=1;
								while ($data=mysqli_fetch_assoc($allbanenrq)) {
										echo  '<tr>
										<td>'.$sno.'</td>
										
										<td>
											<img class="img_pointer" onclick="viewimage(`uploads/microsite/banners/'.$data['win_images'].'`)" src="uploads/microsite/banners/'.$data['win_images'].'" width="50px" />
										</td>
										
										<td><select class="form-control" style="width:100px;" onchange="updatesignlerecord(`micro_site_banner`,`status`,`'.encryptor('encrypt', $data['id']).'`,this.value)">
											<option value="1" '.($data['status']==1 ?'selected' : '').'>Active</option>
											<option value="2" '.($data['status']==2 ?'selected' : '').'>Hide</option>

										</select></td>
										<td><span><a href="javascript:void(0);" class="editmicrrobanenrs" dataid="'.encryptor('encrypt',$data['id']).'"><i class="fa fa-pencil" aria-hidden="true"></i></a><a></a></span></td>
										<td><span  class="deletebannersmicrosw" dataid="'.encryptor('encrypt',$data['id']).'"><i class="fa fa-times" aria-hidden="true"></i></span></td>
									</tr>';
									$sno++;
								}
							}


					
					?>
								
						
											</tbody>
				</table>
			</div>
		</div>

</section>

<?php 
	include_once 'layout/footer/footer.php';
	include_once 'include/modal.php';
?>


<div class="modal fade zoomIn" id="updaemicrobanners" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                        <div class="modal-header p-3 bg-soft-success">
                                <h5 class="modal-title" id="modal-heading-append">Edit Banner</h5>
                                <button type="button" class="fa fa-times" data-dismiss="modal" id="addProjectBtn-close" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
							<form action="" id="updatebanenrform">
								<div class="form-group">
									<label for="">Image</label>
									<input type="file" name="upddatefile" id="upddatefile" class="form-control">
								</div><div class="form-group">
									<label for="">Video Url</label>
									<input type="text" name="video_url_update" id="video_url_update" class="form-control">
								</div>
								<button class="btn btn-sm btn-info">Submit</button>
							</form>
                        </div>
                </div>
        </div>
</div>
<script src="vendor/banners.js"></script>

