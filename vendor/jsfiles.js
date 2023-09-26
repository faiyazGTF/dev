/************share cv*********************/
$(document).on('submit', '#sharecv', function(e){

      e.preventDefault();
      var formData = new FormData(this);

$.ajax({
      url:'__ajax.php?action=add_sharecv_form',
      type:'POST',
      data: formData,
      // dataType: 'json',
      enctype: 'multipart/form-data',
      cache: false,
      contentType: false,
      processData: false,
      success:function(res){
            console.log(res)
            var data=JSON.parse(res);
            // var data = res;
           if(data.status==3){
            $('.errors').remove()
            var keys = Object.keys(data.errors)
            for (index = 0; index < keys.length; index++){
                  var keyname = keys[index]
                  console.log(keyname)
                  $('#'+keyname).after('<div class="errors text-danger">'+data.errors[keyname]+'<div>');
                  if(index==0){
                      $('#'+keyname).focus();
                  }
            }

           }    else if(data.status==1){
      
            alert(data.message);
            // window.location.href="thanks.php";
            window.location.reload();
      
          }else{
            alert(data.message);
              window.location.reload();
              
          }

      }
})
})