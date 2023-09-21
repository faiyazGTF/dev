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
                        <label for="">Category Name</label>
                        <textarea  name="catname" class="form-control " id="catname"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Header</label>
                        <textarea  name="catimage" class="form-control " id="catimage"></textarea>
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
						<tr></tr>
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
