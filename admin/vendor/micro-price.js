$(document).ready(function(){
	$(document).on('submit','#addpricelist', function(e){
		e.preventDefault(0);
		var formData = new FormData(this);
		
		$.ajax({
			url : '__ajax.php?action=addpricelist',
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



	
	



$(document).on('click','.editothermicrosites',function(){
	var dataid=$(this).attr('dataid');


	$.ajax({
		url : '__ajax.php?action=editmicroprice',
		type : 'POST',
		data : {'dataid' : dataid},
		success : function(resp){
			var result=JSON.parse(resp);
				if(result.status==1){
					var record=result.data;
					$('.removdeelemensts').remove();
					if(record['typology'] !=null && record['typology'] != ""){
						var	val=record['typology'];
						$("#typelologyipdate option[value="+val+"]").attr('selected','selected');
					}
					if(record['size_type'] !=null && record['size_type'] != ""){
						var	val=record['size_type'];
						$("#size_type_update option[value="+val+"]").attr('selected','selected');
					}
					if(record['price_type'] !=null && record['price_type'] != ""){
						var	val=record['price_type'];
						$("#pricettypeupdate option[value="+val+"]").attr('selected','selected');
					}
					
					if(record['l_size'] !=null){
						$("#size_lupdate").val(record['l_size']);
					}
					if(record['size_h'] !=null){
						$("#size_hupdate").val(record['size_h']);
					}

					if(record['l_size'] !=null){
						$("#price_lupdate").val(record['price_l']);
					}
					if(record['size_h'] !=null){
						$("#price_hupdate").val(record['price_h']);
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
			url : '__ajax.php?action=updatemicroprice',
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


