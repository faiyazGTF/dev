<?php 
	include_once 'config/conn.php';
	include_once 'include/function.php';
	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
?>
<section class="state-back other-body-width">
	<div class="list-sec-other-b">
		<div class="list-area-other-l">
			<div class="box-border">
				<div class="head-list-area-other-l">
					<h6><i class="fa fa-building" aria-hidden="true"></i> Developers Name</h6>
					<div class="input-group mb-4">
						<input type="text" class="form-control" placeholder="Search Developers" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
						</div>
					</div>
				</div>
				<div class="inner-table">
					<table class="table">
						<thead>
							<tr>
								<th>Developers Name</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody id="developer_listing">
							<?php 
								$sql = "SELECT * FROM developer ORDER BY id DESC";
								$query = mysqli_query($conn, $sql);
								if(mysqli_num_rows($query) > 0){
									while ($row = mysqli_fetch_array($query)){
							?>
										<tr>
											<td><?php echo $row['name']; ?></td>
											<td><span id="edit_chck" class="editdeveloperdata" dataid="<?= encryptor('encrypt',$row['id']) ?>"><i class="fa fa-pencil" aria-hidden="true"></i></span></td>
											<td><span class="deletedevelopers" dataid="<?= encryptor('encrypt',$row['id']) ?>"><i class="fa fa-times" aria-hidden="true"></i></span></td>
										</tr>
							<?php
									}
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="btn-save">
			  <!--<button class="save-btn">Save</button>-->
			</div>
		</div>
		<div class="edit-list-area list-area-other-r">
			<div class="box-border">
				<h6><i class="fa fa-building" aria-hidden="true"></i> Add Developers Logo/Name</h6>

				<div class="box">
					<div class="admin-text">
						<span>Developer Name:</span>
					</div>
					<div class="input-sec custom_input_sec">
						<input type="hidden" id="hide_id"/>
						<input class="form-control" id="developer_name" placeholder="New Developer Name"/>
						<span><small class="text-danger" id="developer_name_err"></small></span>
					</div>
				</div>

				<div class="box">
					<div class="admin-text">
						<span id="dev_img_head">Select Logo: </span>
					</div>
					<div class="input-sec custom_input_sec">
						<input type="file" id="developer_logo" class="form-control-file form-control">
						<input type="hidden" id="old_developer_logo" />
						<span><small class="text-danger" id="developer_logo_err"></small></span>
					</div>
				</div>

				<div class="box">
					<div class="admin-text">
						<span>Address</span>
					</div>
					<div class="input-sec custom_input_sec">
						<input type="textarea" class="form-control" id="developer_address" placeholder="Developer Address"/>
						<span><small class="text-danger" id="developer_address_err"></small></span>
					</div>
				</div>

				<div class="box">
					<div class="admin-text">
						<span>About Us</span>
					</div>
					<div class="input-sec custom_input_sec">
						<textarea type="textarea" class="form-control" rows="10" id="developer_about" placeholder="..."></textarea>
						<span><small class="text-danger" id="developer_about_err"></small></span>
					</div>
				</div>
			</div>
			<div class="btn-save">
			  <button class="save-btn" id="submit">Save</button>

			</div>
		</div>
	</div><!------------list-sec---------->
</section>
<div class="modal fade zoomIn" id="updaemicrobanners" tabindex="-1" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content border-0">
					<div class="modal-header p-3 bg-soft-success">
							<h5 class="modal-title" id="modal-heading-append">Edit Developer Name</h5>
							<button type="button" class="fa fa-times" data-dismiss="modal" id="addProjectBtn-close" aria-label="Close"></button>
					</div>

					<div class="modal-body">
						<form action="" id="updateothermicrodata">
							<div class="form-group">
								<label for="">Developer Name</label>
								<input type="text" name="updatename" id="updatename" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Developer Logo</label>
								<input type="file" name="developerlogo" id="developerlogo" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Addresss</label>
								<input type="text" name="deveraddress" id="deveraddress" class="form-control">
							</div>

							<div class="form-group">
								<label for="">About Developer</label>
								<textarea name="aboutdeveloperupdate" class="form-control" id="aboutdeveloperupdate" cols="30" rows="10"></textarea>
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
<script>
	function get_fileExt(filename)
	{
		var parts = filename.split('.');
		return parts[parts.length - 1];
	}

	function isImage(filename)
	{
		var ext = get_fileExt(filename);
		switch (ext.toLowerCase()) {
			case 'jpg':
			case 'png':
			case 'jpeg':
			// etc
		return true;
		}
		return false; 
	}
</script>

<script>
	function validation(){
		var flag = true;
		var name = $("#developer_name").val();
		var logo = document.getElementById("developer_logo");
		
		
		if(name == ''){
			$("#developer_name_err").html("This filed is required");
			flag = false;
		}else{
			$("#developer_name_err").html("");
		}
		
		if(logo.files.length == 0){
			$("#developer_logo_err").html("This field is required");
			flag = false;
		}else if(logo.files.length != 0){
			if(!isImage(logo.files[0].name)){
				$("#developer_logo_err").html("Valid file extension allow jpg, png and jpeg etc.");
				flag = false;
			}else{
				$("#developer_logo_err").html("");
			}
		}else{
			$("#developer_logo_err").html("");
		}		
		
		

		$("#developer_name").on('keyup', function(){
			if(this.value == ''){
				$("#developer_name_err").html("This filed is required");
			}else{
				$("#developer_name_err").html("");
			}
		});
		
		
		$("#developer_logo").on('change', function(){
			if(this.files.length == 0){
				$("#developer_logo_err").html("This field is required");
			}else if(this.files.length != 0){
				if(!isImage(this.files[0].name)){
					$("#developer_logo_err").html("Valid file extension allow jpg, png and jpeg etc.");
				}else{
					$("#developer_logo_err").html("");
				}
			}else{
				$("#developer_logo_err").html("");
			}
		});
		
		
		
		if(flag){
			return true;
		}else{
			return false;
		}
	}
	
	function decodeHtml(str)
	{
		var map =
		{
			'&amp;': '&',
			'&lt;': '<',
			'&gt;': '>',
			'&quot;': '"',
			'&#039;': "'"
		};
		return str.replace(/&amp;|&lt;|&gt;|&quot;|&#039;/g, function(m) {return map[m];});
	}
	
	


	function dlt_developer(id, logo){
		$(".loader-icon").css('display', 'block');
		$.ajax({
			url : 'ajax/developer/ajax-developer-dlt.php',
			type : 'POST',
			data : {'dlt_id' : id, 'logo_name' : logo},
			success : function(resp){
				if(resp == 'success'){
					$(".loader-icon").css('display', 'none');					
					window.location.reload();
				}
			}
		})
	}
</script>	
	


<script src="vendor/developerdata.js"></script>