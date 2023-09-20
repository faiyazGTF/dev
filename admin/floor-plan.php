<?php 
	include_once 'config/conn.php';

	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
	include_once 'include/function.php';

		$update_id = '';
	if(isset($_GET['id'])){
		$update_id = $_GET['id'];
		$eid = encryptor('decrypt',$_GET['id']);
		include_once 'layout/side-nav/right-side-nav.php';
		
		$checksections = mysqli_query($conn, "SELECT * FROM `micro_sections` WHERE micro_id=".$eid." AND section_type=6");

		if($checksections->num_rows >0){
			$sectiondata=mysqli_fetch_assoc($checksections);
		}
	}
?>

<section class="microsite-area">
<div class="row">
	<div class="col-md-12">
	<div class="microbox">
        <div class="head-box">
          <h6><i class="fa fa-building" aria-hidden="true"></i> Section heading</h6>
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
						<input type="hidden" name="section_type" value="<?= encryptor('encrypt',6) ?>">

				
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


     <form action="" id="addfloorplands">
		<input type="hidden" value="<?= encryptor('encrypt',$eid) ?>" name="eid" id="eid">
	 <div class="microbox">
        <div class="head-box">
          <h6><i class="fa fa-building" aria-hidden="true"></i> Add Floor Plan</h6>
        </div>

        <div class="box">
            <div class="admin-text">
              <span>Image</span>
            </div>
            <div class="input-sec-multi">
            <input type="file" class="form-control-file form-control" id="floorImage" name="floorImage">

            </div>
        </div>

		<div class="box">
            <div class="admin-text">
              <span>Title</span>
            </div>
            <div class="input-sec-multi">
            <input type="text" class="form-control-file form-control" id="floorname" name="floorname">

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
							<th>Text</th>

							
							<th>Protected</th>
							<th>Images</th>
							
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$checkallimages = mysqli_query($conn, "SELECT * FROM `micro_site_floorplan` WHERE project_id=".$eid."");
						if($checkallimages->num_rows >0){
							$sno=1;
							while ($data = mysqli_fetch_assoc($checkallimages)) {
								echo  '<tr>
								<td>'.$sno.'</td>
								<td><span onclick="viewtext(`Title`,`'.$data['title'].'`)"><i class="fa fa-eye"></i></span></td>
								<td>
									<select onchange="updatesignlerecord(`micro_site_floorplan`,`protected`,`'.encryptor('encrypt', $data['id']).'`,this.value)">
										<option value="0" '.($data['protected']==0 ? "selected" : "").'>No</option>
										<option value="1" '.($data['protected']==1 ? "selected" : "").'>Yes</option>

									</select>
								</td>



								<td onclick="viewimage(`'.$data['image'].'`)"><img src="'.$data['image'].'" width="100"></td>
							<td><span><a href="javascript:void(0);" class="editothermicrosites" dataid="'.encryptor('encrypt',$data['id']).'"><i class="fa fa-pencil" aria-hidden="true"></i></a><a></a></span></td>
								<td><span class="deletefloorplands" dataid="'.encryptor('encrypt',$data['id']).'"><i class="fa fa-times" aria-hidden="true"></i></span></td>
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
                                <h5 class="modal-title" id="modal-heading-append">Title</h5>
                                <button type="button" class="fa fa-times" data-dismiss="modal" id="addProjectBtn-close" aria-label="Close"></button>
                        </div>
						<div class="modal-body">
							<form action="" id="updateothermicrodata">
                       		 <div class="form-group">
									<label for="">Images</label>
									<input type="file" name="floorimagesupdaste" id="floorimagesupdaste" class="form-control">
								</div>

								<div class="form-group">
          
														<label>Title</label>
													
													
														<input type="text" class="form-control-file form-control" id="floornameupdate" name="floorname">

													
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
<script src="vendor/micro_floors.js"></script>