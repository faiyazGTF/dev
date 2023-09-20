<?php 
include_once 'config/conn.php';
	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
	
	include_once 'include/function.php';

		$update_id = '';
	if(isset($_GET['id'])){
		$update_id = $_GET['id'];
		$eid = encryptor('decrypt',$_GET['id']);
		$micropages = mysqli_query($conn,"SELECT id,amenities_banners FROM micro_site WHERE id = '$eid'");

		if($micropages->num_rows >0){
			$microdata=mysqli_fetch_assoc($micropages);
		}

		include_once 'layout/side-nav/right-side-nav.php';
		$checksections = mysqli_query($conn, "SELECT * FROM `micro_sections` WHERE micro_id=".$eid." AND section_type=4");

		if($checksections->num_rows >0){
			$sectiondata=mysqli_fetch_assoc($checksections);
		}
	
		
	}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">



<section class="microsite-area">
<div class="row">
    <div class="col-md-12">
	<div class="microbox">
				<div class="head-box">
					<h6><i class="fa fa-building" aria-hidden="true"></i> Banner</h6>
				</div>
				<form action="" id="addmmicrosections">
				
				
				<div class="form-group">
						<label for="">Small Heading</label>
					<input type="text" name="small_heading" id="small_heading" value="<?php if(!empty($sectiondata['small_heading'])){ echo $sectiondata['small_heading']; } ?>" class="form-control mb-3">
				
				</div>

					<div class="form-group">
						<label for="">Main Heading</label>
						<!-- for price  -->
						<input type="hidden" name="microid" value="<?= $update_id ?>">
						<input type="hidden" name="section_type" value="<?= encryptor('encrypt',4) ?>">

				
					<input type="text" name="mainheading" id="mainheading" class="form-control mb-3" value="<?php if(!empty($sectiondata['heading'])){ echo $sectiondata['heading']; } ?>">

				
				</div>
				<div class="form-group">
					<label for="">Image</label>
				<input type="file" name="file" id="file" class="form-control mb-3">

				<?php 
					if(!empty($sectiondata['image'])){
						echo  '<img src="'.$sectiondata['image'].'" alt="" width="100">';
					}
				?>

				</div>

				<div class="form-group">
						<label for="">Sub Heading</label>
					<input type="text" name="subheadin" id="subheadin" value="<?php if(!empty($sectiondata['sub_heading'])){ echo $sectiondata['sub_heading']; } ?>" class="form-control mb-3">
				
				</div>
				<div class="btn-save">
				<button class="save-btn" type="submit">Save</button>
			</div>
				</form>
			</div>

  

    </div>
	<div class="col-md-6">
		<form action="" id="addamenities">
			<input type="hidden" value="<?= encryptor('encrypt',$eid) ?>" name="eid" id="eid">
		 <div class="microbox">
			<div class="head-box">
			  <h6><i class="fa fa-building" aria-hidden="true"></i> Add AMENITIES List</h6>
			</div>
	
			<div class="box">
				<div class="admin-text">
				  <span>Title</span>
				</div>
				<div class="input-sec-multi">
				<select name="icons" id="icons" class="form-control border" data-show-content="true">
					<option value="">Select icon</option>
					<?php  
									$sql_state = mysqli_query($conn,"SELECT * FROM other_icons ORDER BY id ASC");
									if($sql_state->num_rows >0){
										while ($data =mysqli_fetch_assoc($sql_state)) {
											$img="<img src='".$data['icon']."'> ".$data['name'];
											echo  '<option value="'.$data['id'].'"  data-content="'.$img.'">'.$data['name'].'</option>';
										}
									}
	
								?>
				</select>
	
				</div>
			</div>
	
			
	
			<div class="box">
				<div class="admin-text">
				  <span>Title</span>
				</div>
				<div class="input-sec-multi">
				<input type="text" class="form-control-file form-control" id="title" name="title">
	
				</div>
			</div>
	
			<div class="box">
				<div class="admin-text">
				  <span>Sub Title</span>
				</div>
				<div class="input-sec-multi">
				<textarea class="form-control-file form-control" id="subtitle" name="subtitle"  ></textarea>
	
				</div>
			</div>
	
	  
	
			<div class="box">
				<div class="admin-text"></div>
				<div class="btn-save">
					<button class="save-btn" id="submit">Save</button>
				</div>
			</div><!-------------box-2-------->
	
		  </div>
		 </form>
	</div>
	<div class="col-md-6">
		<div class="list-area box-border w-100">
		<h6><i class="fa fa-building" aria-hidden="true"></i> All Images</h6>

		<div class="inner-table">
				<table class="table">
					<thead>
						<tr>
							<th>Sr. No.</th>
							<th>Title</th>
							<th>Icons</th>

							
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$checkallimages = mysqli_query($conn, "SELECT * FROM `micro_site_amenities` WHERE project_id=".$eid."");
						if($checkallimages->num_rows >0){
							$sno=1;
							while ($data = mysqli_fetch_assoc($checkallimages)) {
								echo  '<tr>
								<td>'.$sno.'</td>
								<td>'.$data['title'].'</td>
								<td>'.getOthertimeIcons($conn,$data['icons']).'</td>

							<td><span><a href="javascript:void(0);" class="editmicroaminities" dataid="'.encryptor('encrypt',$data['id']).'"><i class="fa fa-pencil" aria-hidden="true"></i></a><a></a></span></td>
								<td><span class="" onclick="deleteData(`micro_site_amenities`,`id`,`'.encryptor('encrypt',$data['id']).'`)" ><i class="fa fa-times" aria-hidden="true"></i></span></td>
							</tr>	';
							$sno++;
							}
						}

						?>
								
												
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
   


</section>
<div class="modal fade zoomIn" id="updaemicrobanners" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                        <div class="modal-header p-3 bg-soft-success">
                                <h5 class="modal-title" id="modal-heading-append">Edit Title</h5>
                                <button type="button" class="fa fa-times" data-dismiss="modal" id="addProjectBtn-close" aria-label="Close"></button>
                        </div>
						<div class="modal-body">
							<form action="" id="updateothermicrodataamenities">
                        		<div class="form-group">
									<label for="">Title</label>
									<input type="text" name="updatetitle" id="updatetitle" class="form-control">
								</div>

								<div class="form-group">
									<label for="">Icons</label>
									<select name="icons" id="updateicons" class="form-control">
										<option value="">Select Icons</option>

									<?php  
								$sql_state = mysqli_query($conn,"SELECT * FROM other_icons ORDER BY id ASC");
								if($sql_state->num_rows >0){
									while ($data =mysqli_fetch_assoc($sql_state)) {
										echo  '<option value="'.$data['id'].'">'.$data['name'].'</option>';
									}
								}

							?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Sub Title</label>
									<textarea name="subtitle" id="subtitleupdate" class="form-control"></textarea>
							</div>
								<button class="btn btn-sm btn-info">Submit</button>
							</form>
                        </div>
                </div>
        </div>
</div>


<?php 
	include_once 'layout/footer/footer.php';
	include_once 'include/modal.php';
?>
<script src="vendor/micro_amenities.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<script>
	$('#icons').selectpicker();
</script>