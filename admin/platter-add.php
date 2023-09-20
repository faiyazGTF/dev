<?php 
	include_once 'config/conn.php';
	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
	
	

	
?>

<section class="microsite-area">
	<form action="" id="addplatterPage">
		<div class="">
			<div class="">
				<div class="microbox">
					<div class="head-box">
						<h6><i class="fa fa-building" aria-hidden="true"></i> Page Info</h6>
					</div>
					
					<div class="box">
						<div class="admin-text">
							<span>
							Project Category:
							</span>
						</div>
						<div class="input-sec custom_input_sec">
							<select class="form-control" onchange="project_property(this.value)" id="project_category" name="project_category" > 
								<option value="">---Select Category---</option>
								<?php 
									$sql_cat = "SELECT * FROM category ORDER BY name ASC";
									$query_cat = mysqli_query($conn, $sql_cat);
									if(mysqli_num_rows($query_cat) > 0){
										while($row_cat = mysqli_fetch_array($query_cat)){
								?>
											<option value="<?php echo $row_cat['id'] ?>"  ><?php echo $row_cat['name'] ?></option>
								<?php
										}
									}
								?>
							</select>
						
						</div>
					</div>
					<div class="box">
						<div class="admin-text">
							<span>
							Project Typology:
							</span>
						</div>
						<div class="input-sec custom_input_sec">
							
								<!--<input type="text" class="form-control mr-2" placeholder="ex. 1,1.5,2,2.5"/>-->
								<select class="form-control" id="project_property_type" name="project_property_type">
									<option value="">---Select Typology---</option>
								</select>
							
					
						</div>
					</div>
					<div class="box">
						<div class="admin-text">
							<span>
							Platter Name:
							</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="text" class="form-control" onkeypress="generateUrl(this,'page_url')" name="platter_name" id="platter_name" placeholder="Platter Name">
			
						
						</div>
					</div>
					<div class="box">
						<div class="admin-text">
							<span>
							Page url:
							</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="text" class="form-control" name="page_url" id="page_url" placeholder="Page Url">
			
						
						</div>
					</div>

					<div class="box">
						<div class="admin-text">
							<span>
							Starting Price
							</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="text	" class="form-control" name="starting_price" id="starting_price" >
			
						
						</div>
					</div>

					<div class="box">
						<div class="admin-text">
							<span>
							Agent Rera
							</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="text	" class="form-control" name="agent_rera" id="agent_rera" >
			
						
						</div>
					</div>



					<div class="box">
						<div class="admin-text">
							<span>
							Discount Image
							</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="file" class="form-control" name="discount" id="discount" >
			
						
						</div>
					</div>

				

				
				
	
					<div class="box">
						<div class="admin-text">
							<span>Meta Title:</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="text" class="form-control" name="project_meta" id="project_meta" placeholder="Title Here" >
							<!--<i class="fa fa-times" aria-hidden="true"></i>-->
						</div>
					</div><!---------box---------->
					<div class="box">
						<div class="admin-text">
							<span>Meta Keyword:</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="text" class="form-control" name="project_keyword" id="project_keyword" placeholder="Title Keywords">
							<!--<i class="fa fa-times" aria-hidden="true"></i>-->
						</div>
					</div><!---------box---------->
					<div class="box">
						<div class="admin-text">
							<span>Meta Description:</span>
						</div>
						<div class="input-sec custom_input_sec">
							<input type="text" class="form-control"  name="project_description" id="project_description" placeholder="Title Descriptions">
							<!--<i class="fa fa-times" aria-hidden="true"></i>-->
						</div>
					</div>
					
							<button class="save-btn" type="submit" id="submit">Submit</button>
				
					
				</div>
				
			</div>
			
		</div>
	</form>
</section>

<?php 
	include_once 'layout/footer/footer.php';
?>

<script src="vendor/addPlatter.js"></script>