
$(document).on('submit',"#addplatterPage", function(e){
			
    e.preventDefault(0);
    var formData = new FormData(this);
    
    $.ajax({
        url : '__platter.php?action=addnewpage',
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
            window.location.href="platter-update.php?page="+data.id;
            alert(data.message);


        }else{
                window.location.reload();
                alert(data.message);
        }
       
        }
    })
});





$(document).on('submit',"#updateplatterPage", function(e){
			
    e.preventDefault(0);
    var formData = new FormData(this);
    
    $.ajax({
        url : '__platter.php?action=updateplatterPage',
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
            // window.location.href="platter.php";
            alert(data.message);
            window.location.reload();



        }else{
                window.location.reload();
                alert(data.message);
        }
       
        }
    })
});




function project_property(val){

	$.ajax({
		url : 'ajax/microsite/ajax-microsite-property-type.php',
		type : 'POST',
		data : {'cat_id' : val},
		success : function(resp){
			var data = JSON.parse(resp);
			$("#project_property_type").html(data.type);
		}
	})
}

$(document).on('click','.deleteplatterfile',function(){
    alert("ASdfas");
});