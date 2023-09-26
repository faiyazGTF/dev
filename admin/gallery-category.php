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
                <form action="" id="getcategory_form" class="">
				
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control" name="catname" id="catname">

                    </div>
                    
                    <div class="form-group">
                        <label for="">image</label>
                        <input type="file" name="image" onchange="imageValidation(this)" class="form-control" id="image">
                    </div>

                    <button type="submit" class="btn btn-info addmetadetails" id="gallery_submit">Submit</button>

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
							
							<th>Sno</th>
							<th>Category</th>
							<th>Image</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                       
                        <?php 
                        $sql = "SELECT * FROM gallery_category";
                        $result = mysqli_query($conn, $sql);

                        if(!$result){
                            die('Query failed '.mysqli_error($conn));
                        }else{
                           
                        $num = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $catname = $row['catname'];
                            $image = $row['image'];
                            echo "<tr>";
                            echo "<td>$num</td>";
                            echo "<td>$catname</td>";
                            echo "<td><img  src='".$image."' width='100'></td>";
                            echo "<td><a href='' class='category_modal' value='$id&$catname&$image' data-toggle='modal' data-target='#udpatemetatagefielsds'>Edit</a></td>";
                            echo "<td><a href='javascript:void(0)' class='deletegallerycategory' dataid='".encryptor('encrypt',$row['id'])."' >Delete</a></td>";
                            echo "</tr>";
                            $num++;}
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
						<form action="" id="gallery_category_update_form" class="">
				
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" name="updategategory" class="form-control" id="update_catname">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="updateimage" onchange="imageValidation(this)" class="form-control" id="update_image">
                    </div>
                    <input type="hidden" id="hiddenId">
                    <input type="hidden" id="oldImage">
                    <button type="submit" class="btn btn-info" id="gallery_category_update">Update</button>

                </form>
                        </div>
                </div>
        </div>
</div>
<?php 
	include_once 'layout/footer/footer.php';
?>
<script>

$('.category_modal').on('click',function(){
 
    var data = $(this).attr('value')
    var dataArray = data.split('&')
    var id = dataArray[0]
    var catname = dataArray[1]
    var image = dataArray[2]
    $('#hiddenId').val(id)
    $('#update_catname').val(catname)
    $('#oldImage').val(image)

})

</script>