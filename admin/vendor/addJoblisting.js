$(document).ready(function(){
	$(document).on('submit','#addcareerjobs', function(e){
		e.preventDefault(0);
		var formData = new FormData(this);
		
		$.ajax({
			url : '__ajax.php?action=addcareerjobs',
			type: "POST",
			data: formData,
			dataType: 'json',
			contentType: false,
			cache: false,
			processData: false,
			enctype: 'multipart/form-data',
			success : function(resp){
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
					window.location.href="career.php";

		
				}else{
						window.location.reload();
						alert(data.message);
				}

			}
		});
		
	});
});



	
	






	$(document).on('submit','#updatecareerdataform', function(e){
		e.preventDefault(0);
		
		var formData = new FormData(this);
	

		
		$.ajax({
			
			url : '__ajax.php?action=updatecareerdata',
			type: "POST",
			data: formData,
			dataType: 'json',
			contentType: false,
			cache: false,
			processData: false,
			enctype: 'multipart/form-data',
			success : function(resp){
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



	$(document).on('click', '.removeBtn', function(){

		$(this).closest('.des_col').remove();



		if($('#descriptionfieldslist .lists').find('.des_col').length < 1){
			$("#descriptionfieldslist .saveBtn").addClass('d-none');
			$("#descriptionfieldslist").removeClass('microbox');
		}
		
	})

	var totalclick=0;
	$(document).on('click','.adddescritionfields',function(){
		// 
		totalclick++;
		var uniqueid="myedtito"+totalclick;
		var html=`

		<div class="des_col mb-4">
			<div class="box">
				<div class="admin-text">
					<span>
					Heading
					</span>
				</div>
				<div class="input-sec custom_input_sec">
					<input type="text" class="form-control" id="heading" name="heading" placeholder="Enter Heading">
				</div>
			</div>

			<div class="box">
				<div class="admin-text">
					<span>
					Full Description:
					</span>
				</div>
				<div class="input-sec custom_input_sec">
					<textarea id="${uniqueid}" name="descriptionslist" id="descriptionslist" class="editor_fields"></textarea>
				</div>
			</div>

			<div class="btn-save">
				<button class="btn btn-danger removeBtn">Remove Description</button>
			</div>
		</div>

		`;
		

		// CKEDITOR.replace(uniqueid);
		$("#descriptionfieldslist").addClass('microbox');
		$("#descriptionfieldslist .saveBtn").removeClass('d-none');
		$("#descriptionfieldslist .lists").append(html);
		// $("#descriptionfieldslist").append(addBtn);
		new RichTextEditor("#"+uniqueid);
	});



	$(document).ready(function(){
		$(document).on('submit','#adddescriptionsdata', function(e){
			e.preventDefault(0);
			var formData = new FormData(this);
			
			$.ajax({
				url : '__ajax.php?action=adddescriptionsdata',
				type: "POST",
				data: formData,
				dataType: 'json',
				contentType: false,
				cache: false,
				processData: false,
				enctype: 'multipart/form-data',
				success : function(resp){
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
	
	
	

	$(document).on('click','.editdescriptions',function(){
		
	  
		  var dataid = $(this).attr('dataid'); 
		  $.ajax({
			url : '__ajax.php?action=editdescriptions',
			  type:'post',
			  data: {'id':dataid},
			  success:function(res){
				  var jsonData = JSON.parse(res);
				  if(jsonData.status==1){
					 var  row=jsonData['data'];
					  var uniqueid="updatefields";
					  var html=`

		<div class="des_col mb-4">
			<div class="box">
				<div class="admin-text">
					<span>
					Heading
					</span>
				</div>
				<div class="input-sec custom_input_sec">
					<input type="text" class="form-control" id="updateheading" name="heading" placeholder="Enter Heading" value="${row['title']}">
				</div>
			</div>

			<div class="box">
				<div class="admin-text">
					<span>
					Full Description:
					</span>
				</div>
				<div class="input-sec custom_input_sec">
					<textarea id="${uniqueid}" name="descriptionslist" id="updatedescriptionslist" class="editor_fields">${row['descriptions']}</textarea>
				</div>
			</div>

			<div class="btn-save">
				<button class="btn btn-danger " type="submit">Update </button>
			</div>
		</div>

		`;
		$("#updatefieldsdatalist").html(html);
		new RichTextEditor("#"+uniqueid);
	  
				  }else{ 
					  alert(data.message);
				  }
			  }
		  });

		  




	

	$(document).on('submit','#updateredescripndata', function(e){
		e.preventDefault(0);
		
		var formData = new FormData(this);
	
		formData.append('eid',dataid);
		
		$.ajax({
			
			url : '__ajax.php?action=updateredescripndata',
			type: "POST",
			data: formData,
			dataType: 'json',
			contentType: false,
			cache: false,
			processData: false,
			enctype: 'multipart/form-data',
			success : function(resp){
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