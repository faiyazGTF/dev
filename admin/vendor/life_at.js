$('#submit').on('click',function(e){
e.preventDefault()

// var category_values = $('#getcategory_form').serialize();

var catname = $('#catname').val();
var image = $('#image')[0].files[0];

var fd = new FormData()
fd.append('catname', catname)
fd.append('image', image)

$.ajax({
      url:'__ajax.php?action=get_category_form',
      type:'POST',
      data: fd,
      cache: false,
      contentType: false,
      processData: false,
      success:function(res){
           var data = JSON.parse(res)
           if(data.status==3){
            $('.errors').remove()
            var keys = Object.keys(data.errors)
            for (index = 0; index < keys.length; index++){
                  var keyname = keys[index]
                  console.log(keyname)
                  $('#'+keyname).after('<p class="errors">'+data.errors[keyname]+'<p>');
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


$('#gallery_category_update').on('click',function(e){
      e.preventDefault()
      
      // var category_values = $('#getcategory_form').serialize();
      var id = $('#hiddenId').val();
      var oldImage = $('#oldImage').val();
      var catname = $('#update_catname').val();
      var image = $('#update_image')[0].files[0];
      
      console.log(id,oldImage,catname,image)
      
      var fd = new FormData()
      fd.append('id', id)
      fd.append('oldImage', oldImage)
      fd.append('catname', catname)
      fd.append('updateimage', image)
      
      $.ajax({
            url:'__ajax.php?action=update_category_form',
            type:'POST',
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            success:function(res){
                 var data = JSON.parse(res)
                 if(data.status==3){
                  $('.errors').remove()
                  var keys = Object.keys(data.errors)
                  for (index = 0; index < keys.length; index++){
                        var keyname = keys[index]
                        console.log(keyname)
                        $('#'+keyname).after('<p class="errors">'+data.errors[keyname]+'<p>');
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

      $('.deletegallerycategory').click(function(){

            var dataid=$(this).attr('dataid').trim();


        $.ajax({
            url:'__ajax.php?action=delete_category_form',
            type:'POST',
            data: {'id':dataid},
            success:function(res){
                  var data=JSON.parse(res);
                  if(data.status==1){
                        alert(data.message);
                        window.location.reload();
                  }else{
                        alert(data.message);
                  }
            }
      });

})


