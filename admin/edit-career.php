<?php 
	include_once 'config/conn.php';
	include_once 'include/function.php';

	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
	$eid=encryptor('decrypt', $_GET['eid']);
	$checkcareer = mysqli_query($conn, "SELECT * FROM `job_listing` WHERE id=".$eid." ");
	if($checkcareer->num_rows >0){
		$careerdata=mysqli_fetch_assoc($checkcareer);
	}else{
		echo  "<script>window.ocation.href='career.php'</script>";
	}

?>

<section class="microsite-area">
<!-- inner-micro-structure -->
	<div class="">
	<form action="" id="updatecareerdataform">
		<input type="hidden" name="eid" value="<?= encryptor('encrypt',$eid) ?>" id="">
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
							<input type="text" class="form-control" id="project_meta" name="project_meta" value="<?= $careerdata['meta_title'] ?>"
								placeholder="Title Here">
							<!--<i class="fa fa-times" aria-hidden="true"></i>-->
						</div>
					</div><!---------box---------->
					<div class="box">
						<div class="admin-text">
							<span>Meta Keyword:</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="text" class="form-control" id="project_keyword" name="project_keyword" value="<?= $careerdata['meta_keyword'] ?>"
								placeholder="Title Here">
							<!--<i class="fa fa-times" aria-hidden="true"></i>-->
						</div>
					</div><!---------box---------->
					<div class="box">
						<div class="admin-text">
							<span>Meta Description:</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="text" class="form-control" id="project_description" name="project_description" value="<?= $careerdata['meta_descriptions'] ?>"
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
									<input type="text" class="form-control" id="project_name" name="project_name"  value="<?= $careerdata['title'] ?>"
										placeholder="Enter Title">
								</div>
							</div><!---------box---------->
						</div>

						<div class="col-md-6">
							<div class="box">
								<div class="admin-text">
									<span>
										Url 
									</span>
								</div>
								<div class="input-sec custom_input_sec">
									<input type="text" class="form-control" id="page_url" name="page_url"  value="<?= $careerdata['page_url'] ?>"
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
												echo  '<option value="'.$keysarray[$i].'" '.($keysarray[$i]==$careerdata['job_type'] ? 'selected':'').' >'.$getjobType[$keysarray[$i]].'</option>';
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
									<input type="text" class="form-control" id="location" name="location"  value="<?= $careerdata['locations'] ?>"
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
												echo  '<option value="'.$keysarray[$i].'"  '.($keysarray[$i]==$careerdata['experience'] ? 'selected':'').'>'.$getjobType[$keysarray[$i]].'</option>';
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
								placeholder="Enter Short Description" rows="3"><?= $careerdata['short_descriptions'] ?></textarea>
						</div>
					</div><!---------box---------->
					<div class="btn-save">
						<button class="save-btn" type="submit" >Save</button>
					</div>

				</div>
			</div>


			

		</div>
	</form>
	</div>
</section>
<section class="microsite-area">
<!-- inner-micro-structure -->
	<div class="">
	<div class="row">
		<div class="col-md-12">
				
			<div class="microbox">
				<div class="head-box">
					<h6><i class="fa fa-building" aria-hidden="true"></i> Add Description List</h6>
				</div>

				<div class="btn-save mb-5">
					<a class="btn save-btn adddescritionfields"  href="javascript:void(0);">Add Description</a>
				</div>

				<div class="inner-table">
					<hr>
					<table class="table tabletwo">
						<thead>
							<tr>
								<th>Title</th>
								<th>Content</th>
								<th>Sequence</th>
								<th>Sattus</th>
								<th class="space-create">Actions</th>
							</tr>
						</thead>
						<tbody id="add_more_price_list">
							<?php 
								   $getrecords = mysqli_query($conn, "SELECT * FROM `job_descriptions` WHERE job_id=".$eid."");
									if($getrecords->num_rows >0){
										while ($recordata=mysqli_fetch_assoc($getrecords)) {
											echo  '<tr>
											<td>'.$recordata['title'].'</td>
											<td class="short_des">
											'.$recordata['descriptions'].'
											</td>
											<td>
											
											<input type="number" value="'.$recordata['seq'].'"  onchange="updatesignlerecord(`job_descriptions`,`seq`,`'.encryptor('encrypt', $recordata['id']).'`,this.value)">

											</td>
											<td><select onchange=updatesignlerecord(`job_descriptions`,`status`,`'.encryptor('encrypt', $recordata['id']).'`,this.value)>
												<option '.($recordata['status']==1 ? 'selected' :"" ).' value="1">Active</option>
												<option value="2" '.($recordata['status']==2 ? 'selected' :"" ).'>Hide</option>

											<select></td>


											<td class="edit">
												<i class="fa fa-pencil editdescriptions" dataid="'.encryptor('encrypt', $recordata['id']).'"  aria-hidden="true" ></i>
												<i class="fa fa-times" aria-hidden="true" onclick="deleteData(`job_descriptions`,`id`,`'.encryptor('encrypt',$recordata['id']).'`)" ></i>
											</td>
										</tr>';
										}
									}
							?>
							
						</tbody>
					</table>
				</div>
			
			</div>
		</div>
	</div>
</div>
</section>
<section class="microsite-area">
	<div class="row">
	<div class="">
		<div class="col-md-12">
				
			<form action="" id="adddescriptionsdata">
				<input type="hidden" name="jobid" id="jobid" value="<?= encryptor('encrypt', $eid) ?>">
			<div class="" id="descriptionfieldslist">
				<div class="lists">

				</div>
				<div class="btn-save saveBtn d-none">
					<button clsss="btn btn-danger">Save</button>
				</div>
			</div>

			
			</form>
			<form action="" id="updateredescripndata">
			<div class="" id="updatefieldsdatalist">
									
				
			</div>
			</form>

		</div>
	</div>
	</div>
</section>

<?php 
	include_once 'layout/footer/footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script src="vendor/addJoblisting.js"></script>
