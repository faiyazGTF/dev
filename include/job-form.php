<div class="modal fade job_modal" id="apply_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
    
                    <form action="" id="jobenquiry" enctype="multipart/form-data" method="post">
                        <h3 class="form_head">Job Application</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" required="" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="E-Mail ID" name="email" required="" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control number-input" id="phone" name="phone"  placeholder="Enter 10 digit mobile no."  autocomplete="off">
                        </div>
                        
                        <div class="form-group">
                            <select class="form-control" id="experience" name="experience" required="" autocomplete="off">
                                <option value="" selected="" disabled="">Select Work Experience</option>
                                <?php  
									$getjobType=getjobExperienced();
	
	
								
											$keysarray=array_keys($getjobType);
											for ($i=0; $i < count($keysarray); $i++) { 
													echo  '<option value="'.$keysarray[$i].'" >'.$getjobType[$keysarray[$i]].'</option>';
											}
											
									?>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" placeholder="Message" required="" autocomplete="off" data-gramm="false" wt-ignore-input="true"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Upload Your CV</label>
                            <input type="file" placeholder="Upload CV" id="file" name="file" class="form-control" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"   autocomplete="off">
                            <div id="imagePreview"></div>
                        </div>
                        <div class="submit_row">
                            <button type="submit" class="btn an_icon_btn dark_btn submit_btn " id="jobdescriptionsave">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>