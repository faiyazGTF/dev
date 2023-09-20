
	
		$("#submit").on('click', function(){
			$(".loader-icon-head").css('display', 'flex');
			var name = $("#developer_name").val();
			var logo = document.getElementById("developer_logo").files[0];
			var address = $("#developer_address").val();
			var about = $("#developer_about").val();
		

			var data = new FormData();
			data.append('d_name', name);
			data.append('d_logo', logo);
			data.append('d_address', address);
			data.append('d_about', about);
			
			
			$.ajax({
				url : '__ajax.php?action=adddeveloperdata',
				type : 'POST',
				data : data,
				contentType : false,
				processData : false,
				success : function(resp){
					var data=JSON.parse(resp);
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
			})
		});



$(document).on('click','.editdeveloperdata',function(){
	var dataid=$(this).attr('dataid');


	$.ajax({
		url : '__ajax.php?action=editdeveloperdata',
		type : 'POST',
		data : {'dataid' : dataid},
		success : function(resp){
			var result=JSON.parse(resp);
				if(result.status==1){
					var record=result.data;
					$('.removdeelemensts').remove();
						$("#deveraddress").val(record['address']);
						$("#aboutdeveloperupdate").val(record['about']);
						$("#updatename").val(record['name']);
				
					if(record['logo'] !=null){
						$("#developerlogo").after('<img width="100" src="'+record['logo']+'"/>');
					}
					
					if(record['heading'] !=null){
						$("#updateheading").val(record['heading']);
					}
			
					$("#updaemicrobanners").modal('show');
				}else{
						alert(result.message);
				}
		}
	});



	$(document).on('submit','#updateothermicrodata', function(e){
		e.preventDefault(0);
		var formData = new FormData(this);
		formData.append("eid", dataid);

		
		$.ajax({
			url : '__ajax.php?action=updatedeveloperdata',
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




$(document).on('click','.deletedevelopers',function(){
	var dataid=$(this).attr('dataid');
	$.ajax({
		url : '__ajax.php?action=deletedevelopers',
		type : 'POST',
		data : {'dataid' : dataid},
		success : function(resp){
				var data=JSON.parse(resp);
				alert(data.message);
				if(data.status==1){
					window.location.reload();

				}
				
		}
	});
})