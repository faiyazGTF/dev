<?php 
	include_once 'config/conn.php';
	include_once 'include/function.php';

	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
?>

<br/>
<br/>
<section class="microsite-area">
<!-- inner-micro-structure -->
	<div class="">
		<div class="row">
		
			<div class="col-md-12">
				
				<div class="microbox">
					<div class="head-box">
						<h6><i class="fa fa-building" aria-hidden="true"></i> All Careers</h6>
					</div>

					<div class="btn-save mb-5">
						<a class="btn save-btn" id="submit" href="add-career.php">Add Career</a>
					</div>

					<div class="inner-table">
						<hr>
						<table class="table tabletwo">
							<thead>
								<tr>
									<th>Job Title</th>
									<th>Job Type</th>
									<th>Job Location</th>
									<th>Required Exp.</th>
									<th>Status.</th>

									<th>Sequence.</th>

									<th class="space-create">Action</th>
								</tr>
							</thead>
							<tbody id="add_more_price_list">
								<?php 
										$checkalljobs = mysqli_query($conn, "SELECT * FROM `job_listing` ");

									if($checkalljobs->num_rows >0){
									
										while ($row=mysqli_fetch_assoc($checkalljobs)) {

										echo  '<tr><td>'.$row['title'].'</td>
										<td>'.getjobType($row['job_type']).'</td>
										<td>'.$row['locations'].'</td>
										<td>'.getjobExperienced($row['job_type']).'</td>
										<td><select class="form-control" style="width:100px;" onchange="updatesignlerecord(`job_listing`,`status`,`'.encryptor('encrypt', $row['id']).'`,this.value)">
											<option value="1" '.($row['status']==1 ?'selected' : '').'>Active</option>
											<option value="2" '.($row['status']==2 ?'selected' : '').'>Hide</option>

										</select></td>
										<td>
											<input type="number" value="'.$row['sequence'].'"  onchange="updatesignlerecord(`job_listing`,`sequence`,`'.encryptor('encrypt', $row['id']).'`,this.value)">
										</td>
										<td class="edit">
											<a href="edit-career.php?eid='.encryptor('encrypt', $row['id']).'"><i class="fa fa-pencil" aria-hidden="true" onclick="editProperty(8)"></i></a>
											<i class="fa fa-times" aria-hidden="true" onclick="deleteData(`job_listing`,`id`,`'.encryptor('encrypt',$row['id']).'`)"></i>
										</td></tr>';
										}
									}
								?>
								<tr>
									
								</tr>
							</tbody>
						</table>
					</div>
					
				</div>
			</div>

		</div>
	</div>
</section>

<?php 
	include_once 'layout/footer/footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script>
	CKEDITOR.replace("ckplot");
	// CKEDITOR.instances["ckplot"].setData("<h1> data to render</h1>");
</script>

