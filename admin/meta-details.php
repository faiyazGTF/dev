<?php 
	include_once 'config/conn.php';
	include_once 'include/function.php';
	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
?>
<section class="state-back other-body-width">
	<div class="">
		<div class="row">
            <div class="col-md-6">
			<div class="box-border w-100">

				<div class="head-list-area-other-l">
					<h6><i class="fa fa-building" aria-hidden="true"></i> Add  Page</h6>
					
				</div>
                <form action="" id="addingmetatagform" class="">
				<div class="form-group">
                        <label for="">Select Page</label>
                        <select name="page_type" class="form-control" id="page_type">
						<option value="">Select Page</option>
							<?php 
								$getmetapages=getmetapages();
							
							
								$checkrecord = mysqli_query($conn, "SELECT * FROM `meta_details`");
							
								if($checkrecord->num_rows >0){
									$pageype=[];
									while ($data=mysqli_fetch_assoc($checkrecord)) {

										$pageype[]=$data['page_type'];
									}
								}
								
					
								for ($i=0; $i <count($getmetapages); $i++) { 
									if (!in_array($getmetapages[$i], $pageype)) {
										echo  '	<option value="'.$getmetapages[$i].'">'.$getmetapages[$i].' </option>';
									}else{
										echo  '	<option value="'.$getmetapages[$i].'" disabled>'.$getmetapages[$i].' </option>';

									}
								}
					
								

							?>
					
					


						</select>
                    </div>
                    <div class="form-group">
                        <label for="">Meta Title</label>
                        <input type="text" name="metatitle" class="form-control " id="metatitle">
                    </div>
                    <div class="form-group">
                        <label for="">Meta Keyword</label>
                        <input type="text" name="metaKeyword" class="form-control " id="metaKeyword">
                    </div>
                    <div class="form-group">
                        <label for="">Meta Descriptions</label>
                        <textarea  name="metadescriptions" class="form-control " id="metadescriptions"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Header</label>
                        <textarea  name="headerfields" class="form-control " id="headerfields"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="">Footer</label>
                        <textarea  name="footerfields" class="form-control " id="footerfields"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info addmetadetails" >Submit</button>

                </form>
			</div>
            </div>
			<div class="col-md-6">
				<div class="list-area box-border w-100">
				<h6><i class="fa fa-building" aria-hidden="true"></i> All Items</h6>
				<div class="inner-table">
					<table class="table">
					<thead>
						<tr>
							
							<th>Page</th>
							<th>Meta Title</th>
							<th>Meta keyword</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							$checkrecord = mysqli_query($conn, "SELECT * FROM `meta_details`");
						if($checkrecord->num_rows >0){
							while ($record=mysqli_fetch_assoc($checkrecord)) {
									echo  '<tr>
									<td>'.$record['page_type'].'</td>
									<td>'.$record['meta_title'].'</td>
									<td>'.$record['meta_keyword'].'</td>
								
									
									<td>	<a href="javascript:void(0);" class="editmeadetails" dataid="'.encryptor('encrypt', $record['id']).'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<span class="" onclick="deleteData(`meta_details`,`id`,`'.encryptor('encrypt', $record['id']).'`)"><i class="fa fa-times" aria-hidden="true"></i></span></td>

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
	
	</div><!------------list-sec---------->
</section>
<div class="modal fade zoomIn" id="udpatemetatagefielsds" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                        <div class="modal-header p-3 bg-soft-success">
                                <h5 class="modal-title" id="modal-heading-append">Edit Specifications</h5>
                                <button type="button" class="fa fa-times" data-dismiss="modal" id="addProjectBtn-close" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
						<form action="" id="addingmetatagformupdate" class="">
				
                    <div class="form-group">
                        <label for="">Meta Title</label>
                        <input type="text" name="metatitle" class="form-control " id="metatitledate">
                    </div>
                    <div class="form-group">
                        <label for="">Meta Keyword</label>
                        <input type="text" name="metaKeyword" class="form-control " id="metaKeyworddate">
                    </div>
                    <div class="form-group">
                        <label for="">Meta Descriptions</label>
                        <textarea  name="metadescriptions" class="form-control " id="metadescriptionsdate"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Header</label>
                        <textarea  name="headerfields" class="form-control " id="headerfieldsdate"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="">Footer</label>
                        <textarea  name="footerfields" class="form-control " id="footerfieldsdate"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info " >Submit</button>

                </form>
                        </div>
                </div>
        </div>
</div>
<?php 
	include_once 'layout/footer/footer.php';
?>

    <script>
        

       
	$(document).on('submit','#addingmetatagform', function(e){
		e.preventDefault(0);
		var formData = new FormData(this);
	

		debugger;
		$('.loader-icon-head').show();
		$.ajax({
			url : '__ajax.php?action=addmetatags',
			type: "POST",
			data: formData,
			dataType: 'json',
			contentType: false,
			cache: false,
			processData: false,
			enctype: 'multipart/form-data',
			success : function(resp){
				
$('.loader-icon-head').hide();
				var data=JSON.parse(JSON.stringify(resp));
				if(data.status==3){
					$('.errors').remove();
					var keys = Object.keys(data.errors);
					for (let index = 0; index < keys.length; index++) {
					   var keynam=keys[index];
						$('#'+keynam).after('<p class="errors">'+data.errors[keynam]+'<p>');
							if(index==0){
								$('#'+keynam).focus();
							}
					}
					alert(data.message);
		
				}else if(data.status==1){
				
					alert(data.message);
					window.location.reload();
			
		
				}else{
						window.location.reload();
						alert(data.message);
				}

			}
		});
	
	});



	$(document).on('click','.editmeadetails',function(){
	var dataid=$(this).attr('dataid');
debugger;
$('.loader-icon-head').show();
	$.ajax({
		url : '__ajax.php?action=editmeadetails',
		type : 'POST',
		data : {'dataid' : dataid},
		success : function(resp){
			$('.loader-icon-head').hide();
			var result=JSON.parse(resp);
				if(result.status==1){
					var record=result.data;
					$("#metatitledate").val(record['meta_title']);
					$("#metaKeyworddate").val(record['meta_keyword']);
					$("#metadescriptionsdate").val(record['meta_descriptions']);
					$("#headerfieldsdate").val(record['header']);
					$("#footerfieldsdate").val(record['footer']);
					$("#udpatemetatagefielsds").modal('show');

				}else{
						alert(result.message);
				}
		}
	});



	$(document).on('submit','#addingmetatagformupdate', function(e){
		e.preventDefault(0);
		var formData = new FormData(this);
		formData.append("eid", dataid);
		$('.loader-icon-head').show();

		
		$.ajax({
			url : '__ajax.php?action=addingmetatagformupdate',
			type: "POST",
			data: formData,
			dataType: 'json',
			contentType: false,
			cache: false,
			processData: false,
			enctype: 'multipart/form-data',
			success : function(resp){
				$('.loader-icon-head').hide();
				var data=JSON.parse(JSON.stringify(resp));
				if(data.status==3){
					$('.errors').remove();
					var keys = Object.keys(data.errors);
					for (let index = 0; index < keys.length; index++) {
					   var keynam=keys[index];
						$('#'+keynam).after('<p class="errors">'+data.errors[keynam]+'<p>');
							if(index==0){
								$('#'+keynam).focus();
							}
					}
					alert(data.message);
		
				}else if(data.status==1){
				
					alert(data.message);
					window.location.reload();

		
				}else{
						window.location.reload();
						alert(data.message);
				}

			}
		});
	
	});

});



    </script>