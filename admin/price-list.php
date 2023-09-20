<?php 
	include_once 'config/conn.php';
	include_once 'include/function.php';
	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
	$update_id = $_GET['id'];
	$insight_update_Id = $_GET['id'];
	$eid = encryptor('decrypt',$_GET['id']);
	include_once 'layout/side-nav/right-side-nav.php';
	$checksections = mysqli_query($conn, "SELECT * FROM `micro_sections` WHERE micro_id=".$eid." AND section_type=2");

	if($checksections->num_rows >0){
		$sectiondata=mysqli_fetch_assoc($checksections);
	}
?>

<section class="microsite-area">
<!-- inner-micro-structure -->
	<div class="">
		<div class="row">
			<div class="col-md-12">
			<div class="microbox">
			<form action="" id="addmmicrosections">
				
				
				<div class="form-group">
						<label for="">Small Heading</label>
					<input type="text" name="small_heading" id="small_heading" value="<?php if(!empty($sectiondata['small_heading'])){ echo $sectiondata['small_heading']; } ?>" class="form-control mb-3">
				
				</div>

					<div class="form-group">
						<label for="">Main Heading</label>
						<!-- for price  -->
						<input type="hidden" name="microid" value="<?= $update_id ?>">
						<input type="hidden" name="section_type" value="<?= encryptor('encrypt',2) ?>">

				
					<input type="text" name="mainheading" id="mainheading" class="form-control mb-3" value="<?php if(!empty($sectiondata['heading'])){ echo $sectiondata['heading']; } ?>">
				
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
			<div class="col-md-12">
				<form action="" id="addpricelist">
					<input type="hidden" name="eid" id="eid" value="<?= $insight_update_Id; ?>">
				<div class="">
					
					<div class="microbox">
						<div class="head-box">
							<h6><i class="fa fa-building" aria-hidden="true"></i> Price Insight</h6>
						</div>
						<div class="box">
							<div class="admin-text">
								<span>Typology:</span>
							</div>
							<div class="input-sec">
								<select class="form-control form-controltwo" name="typelology" id="typelology">
									<?php  
										$getTypology=getTypology($conn);
										for ($i=0; $i < count($getTypology); $i++) { 
											echo  '<option value="'.$getTypology[$i]['id'].'" >'.$getTypology[$i]['name'].'</option>';
										}
									?>
									</select>
							</div>
						</div>
						<div class="box">
							<div class="admin-text">
							<span>
							Size:
							</span>
							</div>
							<div class="input-sec">
								<input type="text" class="form-control" value="" id="size_l" placeholder="Lowest" name="size_l">
								<input type="text" class="form-control form-controltwo" name="size_h" id="size_h" placeholder="Highest">
								
								<select class="form-control form-controltwo" id="size_type" name="size_type">
									<option value="">Select Size</option>
									<?php 
										$getSizeType=getSizeType();
										$keysarray=array_keys($getSizeType);
										for ($i=0; $i < count($keysarray); $i++) { 
												echo  '<option value="'.$keysarray[$i].'" >'.$getSizeType[$keysarray[$i]].'</option>';
										}
										
									?>
		
								</select>
					
							</div>
						</div><!---------box---------->

						<div class="box">
							<div class="admin-text">
								<span>Price:</span>
							</div>
							<div  class="input-sec">
								<input type="text" class="form-control" placeholder="Lowest" value="" name="price_l" id="price_l">
								<input type="text" class="form-control form-controltwo" name="price_h" placeholder="Highest" id="price_h">
								<select class="form-control form-controltwo" name="pricettype" id="pricettype">
									<option value="">Select price</option>
								<?php 
										$getSizeType=getPriceType();
										$keysarray=array_keys($getSizeType);
										for ($i=0; $i < count($keysarray); $i++) { 
												echo  '<option value="'.$keysarray[$i].'" >'.$getSizeType[$keysarray[$i]].'</option>';
										}
										
									?>
								</select>
								<!--<i class="fa fa-times" aria-hidden="true"></i>-->
							</div>
						</div><!---------box---------->
					</div>
					<div class="btn-save">
						<button class="save-btn" id="insight_submit">Save</button>
					</div>
				</div>
				</form>
			</div>

			<div class="col-md-12 mt-5">
				<div class="">
					<div class="microbox">
						<div class="head-box">
							<h6><i class="fa fa-building" aria-hidden="true"></i> Edit/Delete Price List</h6>
						</div>
						<div class="inner-table">
							<hr>
							<table class="table tabletwo">
								<thead>
									<tr>
										<th>Typology</th>
										<th>Size</th>
										<th>Price</th>
										<th class="space-create">Edit</th>
									</tr>
								</thead>
								<tbody id="add_more_price_list">
									<?php  
									$pricelistquery=mysqli_query($conn,"SELECT * FROM `micro_site_price_insight` WHERE project_id=".$eid."");
									if($pricelistquery->num_rows >0){
										while ($row=mysqli_fetch_assoc($pricelistquery)) {
												echo '<tr>
												<td>'.getTypologyName($conn,$row['typology']).'</td>
												<td>'.$row['l_size'].'
													'.(!empty($row['size_h']) ? '- '.$row['size_h'].getSizeType($row['size_type']) : " ").'
												</td>
												<td>'.$row['price_l'].'
													'.(!empty($row['price_h']) ? '- '.$row['price_h'].getPriceType($row['price_type']) : " ").'
												</td>
												<td class="edit">
													<i class="fa fa-pencil editothermicrosites" dataid="'.encryptor('encrypt',$row['id']).'" aria-hidden="true" ></i>
													<i class="fa fa-times" aria-hidden="true" onclick="deleteData(`micro_site_price_insight`,`id`,`'.encryptor('encrypt',$row['id']).'`)"></i>
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
								<label for=""></label>
										<select class="form-control form-controltwo" name="typelologyipdate" id="typelologyipdate">
										<?php  
											$getTypology=getTypology($conn);
											for ($i=0; $i < count($getTypology); $i++) { 
												echo  '<option value="'.$getTypology[$i]['id'].'" >'.$getTypology[$i]['name'].'</option>';
											}
										?>
										</select>
							</div>
							<div class="d-flex">
								<div class="form-group">
									<input type="text" class="form-control" value="" id="size_lupdate" placeholder="Lowest" name="size_lupdate">
								</div>
								<div class="form-group">
								<input type="text" class="form-control form-controltwo" name="size_hupdate" id="size_hupdate" placeholder="Highest">
							</div>
							<div class="form-group">
								<select class="form-control form-controltwo" id="size_type_update" name="size_type_update">
									<?php 
										$getSizeType=getSizeType();
										$keysarray=array_keys($getSizeType);
										for ($i=0; $i < count($keysarray); $i++) { 
												echo  '<option value="'.$keysarray[$i].'" >'.$getSizeType[$keysarray[$i]].'</option>';
										}
										
									?>
		
								</select>
							</div>
						</div>
						<div class="d-flex">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Lowest" value="" name="price_lupdate" id="price_lupdate">
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-controltwo" name="price_hupdate" placeholder="Highest" id="price_hupdate">
							</div>
							<div class="form-group">
								<select class="form-control form-controltwo" name="pricettypeupdate" id="pricettypeupdate">
								<?php 
										$getSizeType=getPriceType();
										$keysarray=array_keys($getSizeType);
										for ($i=0; $i < count($keysarray); $i++) { 
												echo  '<option value="'.$keysarray[$i].'" >'.$getSizeType[$keysarray[$i]].'</option>';
										}
										
									?>
								</select>

							</div>

							</div>

								<button class="btn btn-sm btn-info">Submit</button>
							</form>
                        </div>
                </div>
        </div>
</div>

<?php 
	include_once 'layout/footer/footer.php';
?>

<script src="vendor/micro-price.js"></script>