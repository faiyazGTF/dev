<?php 
	include_once 'config/conn.php';
	include_once 'include/function.php';

	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
?>

<section class="microsite-area">
	<div class="inner-micro-structure">
		<form action="" id="addcareerjobs">
			<div class="row">
				<div class="col-md-12">
					<div class="microbox">
						<div class="head-box">
							<h6><i class="fa fa-building" aria-hidden="true"></i>Add job </h6>
						</div>
						<div class="box">
							<div class="admin-text">
								<span>Meta Title:</span>
							</div>
							<div class="input-sec custom_input_sec">
								<input type="text" class="form-control" id="project_meta" name="project_meta"
									placeholder="Title Here">
								<!--<i class="fa fa-times" aria-hidden="true"></i>-->
							</div>
						</div><!---------box---------->
						<div class="box">
							<div class="admin-text">
								<span>Meta Keyword:</span>
							</div>
							<div class="input-sec custom_input_sec">
								<input type="text" class="form-control" id="project_keyword" name="project_keyword"
									placeholder="Title Here">
								<!--<i class="fa fa-times" aria-hidden="true"></i>-->
							</div>
						</div><!---------box---------->
						<div class="box">
							<div class="admin-text">
								<span>Meta Description:</span>
							</div>
							<div class="input-sec custom_input_sec">
								<input type="text" class="form-control" id="project_description" name="project_description"
									placeholder="Title Here">
								<!--<i class="fa fa-times" aria-hidden="true"></i>-->
							</div>
						</div><!---------box---------->
					</div>
					<!---<div class="btn-save">
						<button class="save-btn">Save</button>
					</div>
					<br><br>--->
				</div>
	
				<div class="col-md-12">
	
					<div class="microbox">
						<div class="head-box">
							<h6><i class="fa fa-building" aria-hidden="true"></i> Other Details</h6>
						</div>
	
	
	
	
						<div class="row">
							<div class="col-md-6">
								<div class="box">
									<div class="admin-text">
										<span>
											Job Title:
										</span>
									</div>
									<div class="input-sec custom_input_sec">
										<input type="text" class="form-control" id="project_name" name="project_name"
											placeholder="Enter Title">
									</div>
								</div><!---------box---------->
							</div>
	
							<div class="col-md-6">
								<div class="box">
									<div class="admin-text">
										<span>
											Job Type:
										</span>
									</div>
									<div class="input-sec custom_input_sec">
										<select class="form-control" id="job_type" name="job_type">
											<option value="">---Select Job Type---</option>
											<?php  
									$getjobType=getjobType();
	
	
								
											$keysarray=array_keys($getjobType);
											for ($i=0; $i < count($keysarray); $i++) { 
													echo  '<option value="'.$keysarray[$i].'" >'.$getjobType[$keysarray[$i]].'</option>';
											}
											
									?>
										</select>
									</div>
								</div><!---------box---------->
							</div>
						</div>
	
						<div class="row">
							<div class="col-md-6">
								<div class="box">
									<div class="admin-text">
										<span>
											Job Location:
										</span>
									</div>
									<div class="input-sec custom_input_sec">
										<input type="text" class="form-control" id="location" name="location"
											placeholder="Enter Job Location">
									</div>
								</div><!---------box---------->
							</div>
	
							<div class="col-md-6">
								<div class="box">
									<div class="admin-text">
										<span>
											Exp. Required:
										</span>
									</div>
									<div class="input-sec custom_input_sec">
										<select class="form-control" id="expeirced" name="expeirced">
											<option value="">---Select Experience---</option>
											<?php  
									$getjobType=getjobExperienced();
	
	
								
											$keysarray=array_keys($getjobType);
											for ($i=0; $i < count($keysarray); $i++) { 
													echo  '<option value="'.$keysarray[$i].'" >'.$getjobType[$keysarray[$i]].'</option>';
											}
											
									?>
										</select>
									</div>
								</div><!---------box---------->
							</div>
						</div>
	
						<div class="box">
							<div class="admin-text">
								<span>Short Description:</span>
							</div>
							<div class="input-sec custom_input_sec">
								<textarea type="text" class="form-control" id="shordescriptions" name="shordescriptions"
									placeholder="Enter Short Description" rows="3"></textarea>
							</div>
						</div><!---------box---------->
						<div class="btn-save">
							<button class="save-btn" id="submit">Save</button>
						</div>
	
					</div>
				</div>
	
			</div>
		</form>
	</div>
</section>

<?php 
	include_once 'layout/footer/footer.php';
?>

<script src="vendor/addJoblisting.js"></script>