<?php 
	include_once 'config/conn.php';
	include_once 'include/function.php';
	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
	
	$update_id = '';
	
	$recent_sold = '';
	$overview = '';
	$total_units = '';
	$avaliable_units = '';
	$sold_units = '';
	$heading='';
	$subheading='';
	$imageheading="";
	$image="";

	$iconid1="";
	$iconid2="";
	$icon_heading1="";
	$icon_heading2="";
	$icon_subheading1="";
	$icon_subheading2="";




	
	if(isset($_GET['id'])){
		$update_id = $_GET['id'];
		$eid = encryptor('decrypt',$_GET['id']);
		include_once 'layout/side-nav/right-side-nav.php';
		$fet_sql = "SELECT * FROM micro_site_overview WHERE project_id = '$eid'";
		$fet_query = mysqli_query($conn, $fet_sql);
		if(mysqli_num_rows($fet_query) > 0){
			$fet_row = mysqli_fetch_assoc($fet_query);
			
			
			$overview = $fet_row['description'];
			$heading = $fet_row['heading'];
			$subheading = $fet_row['subheading'];
			$imageheading=$fet_row['image_heading'];
			$image=$fet_row['image'];


			$iconid1=$fet_row['iconid1'];
			$iconid2=$fet_row['iconid2'];
			$icon_heading1=$fet_row['icon_heading1'];
			$icon_heading2=$fet_row['icon_heading2'];
			$icon_subheading1=$fet_row['icon_subheading1'];
			$icon_subheading2=$fet_row['icon_subheading2'];




			
		}
	}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<section class="microsite-area">
	<div class="">
		<form action="" id="updatemicrooveroverview">
			<input type="hidden" name="eid" value="<?= encryptor('encrypt',$eid) ?>" id="">
			<div class="">
				<div class="microbox">
					<div class="head-box">
						<h6><i class="fa fa-building" aria-hidden="true"></i> Overview</h6>
					</div>


					
					<div class="box">
						<div class="admin-text">
							<span>Image</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="file" name="image" id="image" class="form-control">
							<?php if(!empty($image)){
								echo  '<img src="'.$image.'" width="100" />';
							} ?>
						</div>
					</div>

					<div class="box">
						<div class="admin-text">
							<span>Image Heading</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="text" name="imageheading" value="<?= $imageheading ?>" id="imageheading" class="form-control">
						</div>
						</div>

					<div class="box">
						<div class="admin-text">
							<span>Main Heading</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="text" name="heading" value="<?= $heading ?>" id="heading" class="form-control">
						</div>
						</div>

						<div class="box">
						<div class="admin-text">
							<span>Sub Heading:</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="text" name="subheading" id="subheading"   value="<?= $subheading ?>"  class="form-control">
						</div>
						</div>
					<div class="box">
						<div class="admin-text">
							<span>Project Overiew:</span>
						</div>
						<div class="input-sec custom_input_sec">
							<textarea class="form-control myeditor" name="project_desc"  id="project_desc" placeholder="Project Description" rows="5"><?php echo $overview ?></textarea>
							<!--<i class="fa fa-times" aria-hidden="true"></i>-->
							
						</div>
					</div><!---------box---------->
	
					
	
				</div>
				
					<div class="row">
						<div class="col-md-6">
							<div class="microbox">
								<div class="form-group">
									<label for="">Icons</label>
									<select name="iconid1" id="iconid1" class="form-control border" data-show-content="true">
									<option value="">Select icon</option>
									<?php  
													$sql_state = mysqli_query($conn,"SELECT * FROM other_icons ORDER BY id ASC");
													if($sql_state->num_rows >0){
														while ($data =mysqli_fetch_assoc($sql_state)) {
															$img="<img src='".$data['icon']."'> ".$data['name'];
															echo  '<option value="'.$data['id'].'"  '.($iconid1==$data['id'] ? 'selected' :" ").' data-content="'.$img.'">'.$data['name'].'</option>';
														}
													}
					
												?>
								</select>
								</div>
								<div class="form-group">
									<label for="">Heading</label>
									<input type="text" name="icon_heading1" id="icon_heading1" value="<?= $icon_heading1 ?>" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Destination</label>
									<textarea name="icon_subheading1" id="icon_subheading1" class="form-control"><?= $icon_subheading1 ?></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="microbox">
								<div class="form-group">
									<label for="">Icons</label>
									<select name="iconid2" id="iconid2" class="form-control border" data-show-content="true">
									<option value="">Select icon</option>
									<?php  
													$sql_state = mysqli_query($conn,"SELECT * FROM other_icons ORDER BY id ASC");
													if($sql_state->num_rows >0){
														while ($data =mysqli_fetch_assoc($sql_state)) {
															$img="<img src='".$data['icon']."'> ".$data['name'];
															echo  '<option value="'.$data['id'].'" '.($iconid2==$data['id'] ? 'selected' :" ").'  data-content="'.$img.'">'.$data['name'].'</option>';
														}
													}
					
												?>
								</select>
								</div>
								<div class="form-group">
									<label for="">Heading</label>
									<input type="text" name="icon_heading2" id="icon_heading2" value="<?= $icon_heading2 ?>" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Destination</label>
									<textarea name="icon_subheading2" id="icon_subheading2" class="form-control"><?= $icon_subheading2 ?></textarea>
								</div>
							</div>
						</div>
					</div>
				<div class="btn-save">
					<button class="save-btn" id="submit">Save</button>
				</div>
			</div>
			
		</form>
	</div>
</section>

<?php 
	include_once 'layout/footer/footer.php';
?>

<script src="vendor/overview.js"></script>


<script src="vendor/micro_amenities.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<script>
	$('#icons').selectpicker();
</script>