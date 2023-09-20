<?php 
	include_once 'config/conn.php';
	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
?>


<section class="microsite-area">
<div class="row">
 <div class="col-md-12">
<form action="" id="uploadblodtsdata">
  

  <div class="microbox">
    <div class="head-box">
      <h6><i class="fa fa-building" aria-hidden="true"></i> Add Blogs</h6>
    </div>

    <div class="box-two">
        <div class="admin-text">
          <span>Meta Title</span>
        </div>
        <div class="input-sec-multi">
        <input type="text" class="form-control" placeholder="" name="metatitle" id="metatitle">
       
        </div>
    </div>

    <div class="box-two">
        <div class="admin-text">
          <span>Meta Keyword</span>
        </div>
        <div class="input-sec-multi">
        <input type="text" class="form-control" placeholder="" name="metakey" id="metakey">
       
        </div>
    </div>

    
    <div class="box-two">
        <div class="admin-text">
          <span>Meta Description</span>
        </div>
        <div class="input-sec-multi">
       <textarea name="metadesc"  cols="30" id="metadesc" rows="10" class="form-control"></textarea>
       
        </div>
    </div>



    <div class="box-two">
        <div class="admin-text">
          <span>Select Date</span>
        </div>
        <div class="input-sec" style="display:block">
          <input type="date" class="form-control" id="date">
          
        </div>
    </div><!-------------box-2-------->
    <div class="box-two">
        <div class="admin-text">
          <span>Banner</span>
        </div>
        <div class="input-sec-multi">
        <input type="file" class="form-control" placeholder="" id="large_image">
       
        </div>
    </div>
    <div class="box-two">
        <div class="admin-text">
          <span>Mobile Banner</span>
        </div>
        <div class="input-sec-multi">
        <input type="file" class="form-control" placeholder="" id="mobile_image">
       
        </div>
    </div>
    <div class="box-two">
        <div class="admin-text">
          <span>Heading</span>
        </div>
        <div class="input-sec-multi">
        <input type="text" class="form-control" placeholder="" id="blogHeading">
       
        </div>
    </div>

    <div class="box-two">
      <div class="admin-text">
        <span>Short Description</span>
      </div>
      <div class="input-sec-multi">
     <textarea  class="form-control" placeholder="" id="shortdescriptions"></textarea>
     
      </div>
  </div>
  
    <div class="box-two">
        <div class="admin-text">
          <span>Description</span>
        </div>
        <div class="input-sec-multi" style="display: flex; align-content: flex-end; flex-direction: column-reverse;">
        <textarea id="description"></textarea>
        
        </div>
    </div><!-------------box-2-------->

  </div>
  <input type="hidden" id="hiddenId">
  <input type="hidden" id="old_large_image">
  <input type="hidden" id="old_mobile_image">
  <div class="btn-save">
  <button class="save-btn" type="button" id="submit">Save</button>
  <button class="save-btn" type="button" id="update">Update</button>
</div>
<br><br>
</form>
    </div>
    <div class="col-md-12">
            <div class="microbox">
        <div class="head-box">
          <h6><i class="fa fa-building" aria-hidden="true"></i> Edit Blogs</h6>
        </div>

        <div class="inner-table">
     <table class="table">
            <thead>
              <tr>
                <th>Heading</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody id="blogDetails">
            
            </tbody>
          </table>
        </div>


      
    </div>
    <hr>
  </div>

</section>


<?php 
	include_once 'layout/footer/footer.php';
?>

<script>
  CKEDITOR.replace('description', {
    height: 300,
    // Configure your file manager integration. This example uses CKFinder 3 for PHP.
    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
  });
</script>


<script>


$('#update').hide()
blogDetails()
//editing mode //
function blogDetails(){
  $(".loader-icon-head").css('display', 'flex');
$.ajax({
  url:'ajax/blogs/ajax-blog-edit.php',
  type:'post',
  success:function(data){
    var jsonData = JSON.parse(data)
    $('#blogDetails').html(jsonData)
    $(".loader-icon-head").css('display', 'none');
  }
  })
}


function editBlog(id){
  $('#submit').hide()
  $('#update').show()
  $(".loader-icon-head").css('display', 'flex');
  $.ajax({
    url:'ajax/blogs/ajax-edit-show-blog.php',
    type:'post',
    data:{'id':id},
    success:function(data){
      var jsonData = JSON.parse(data)
      console.log(jsonData)
      $('#hiddenId').val(jsonData.id)
      // $('#oldImage').val(jsonData.image)
      $('#date').val(jsonData.blogDate)
      $('#old_large_image').val(jsonData.large_image)
      $('#old_mobile_image').val(jsonData.mobile_image)
      // $('#img_thumbnail').html('<img src="../admin/uploads/blogs/'+jsonData.image+'"><i class="fa fa-times" aria-hidden="true"></i>')
      // $('#img_thumbnail').html('<img src="../admin/uploads/blogs/'+jsonData.image+'">')
      $('#blogHeading').val(jsonData.heading)
      $('#shortdescriptions').val(jsonData.shortDesc)
      CKEDITOR.instances['description'].setData(jsonData.description);

      $('#metatitle').val(jsonData.meta_title);
      $('#metadesc').val(jsonData.meta_description);
      $('#metakey').val(jsonData.meta_keywords);

      $(".loader-icon-head").css('display', 'none');
    }
  })
}

function deleteBlog(id){
  $(".loader-icon-head").css('display', 'flex');
  $.ajax({
    url:'ajax/blogs/ajax-blog-delete.php',
    type:'post',
    data: {'id':id},
    success:function(data){
      console.log(data)
      $(".loader-icon-head").css('display', 'none');
      blogDetails()
     
    }
  })
}


// function validation(){
// var flag = true
//   $('#large_image').on('click',function(){

//     var image = $('#large_image')[0].files[0];
//     console.log(image)


//   })

// if(flag){
//   return true
// }else{
//   return false
// }
// }


$('#submit').on('click',function(){

  // 

  // if(!validation()){
  //   return false
  // }
  var desktop_image = $('#large_image')[0].files[0];
  var mobile_image = $('#mobile_image')[0].files[0];
 
  var ckdescription = CKEDITOR.instances["description"].getData()
 
  var formData = new FormData();
  formData.append('desktop_image', desktop_image);
  formData.append('mobile_image', mobile_image);
  formData.append('ckdescription', ckdescription);
  formData.append('date', $("#date").val());
  formData.append('shortDesc', $("#shortdescriptions").val());
  formData.append('blogHeading', $("#blogHeading").val());


  formData.append('metatitle', $("#metatitle").val());
  formData.append('metakey', $("#metakey").val());
  formData.append('metadesc', $("#metadesc").val());


$.ajax({
  url:'ajax/blogs/ajax-blog-insert.php',
  type: "POST",
  data: formData,
  dataType: 'json',
  contentType: false,
  cache: false,
  processData: false,
  enctype: 'multipart/form-data',
  success:function(response){
    var data=JSON.parse(JSON.stringify(response));  
    alert(data.message);
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
          
    }else if(data.status==1){
      location.reload();
    }
  }
});
})


$('#update').on('click',function(){
  debugger;
var id = $('#hiddenId').val()
var date = $('#date').val()

var blogHeading = $('#blogHeading').val()
var shortDesc = $('#shortdescriptions').val()
//if new image
var desktop_image = $('#large_image')[0].files[0];
var mobile_image = $('#mobile_image')[0].files[0];
//if old image
var old_desktop_image = $('#old_large_image').val();
var old_mobile_image = $('#old_mobile_image').val();

var ckdescription = CKEDITOR.instances["description"].getData()

var fd = new FormData()
fd.append('hiddenId', id)
fd.append('date', date)
fd.append('desktop_image', desktop_image);
fd.append('mobile_image', mobile_image);
fd.append('old_desktop_image', old_desktop_image);
fd.append('old_mobile_image', old_mobile_image);
fd.append('heading', blogHeading)
fd.append('shortDesc', shortDesc)
fd.append('description', ckdescription)
$(".loader-icon-head").css('display', 'flex');


fd.append('metatitle', $("#metatitle").val());
  fd.append('metakey', $("#metakey").val());
  fd.append('metadesc', $("#metadesc").val());



$.ajax({
  url:'ajax/blogs/ajax-blog-update.php',
  type:'post',
  data:fd,
  contentType:false,
  processData:false,
  success:function(data){
    alert("Blog Updated");
    window.location.reload();

  $('#hiddenId').val('')
  $('#date').val('');
  $('#large_image').val('');
  $('#mobile_image').val('');
  $('#old_desktop_image').val('');
  $('#old_mobile_image').val('');
  $('#blogHeading').val('');
  $('#shortdescriptions').val('');
  var ckdescription = CKEDITOR.instances["description"].setData('')
  $('#update').hide()
  $('#submit').show()
  $(".loader-icon-head").css('display', 'none');
    blogDetails()
   
  }
})
})

</script>