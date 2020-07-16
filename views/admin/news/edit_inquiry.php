<!doctype html>
<html lang="en">
    <?php $this->load->view('layout/header'); ?>

    <body>

        <?php $this->load->view('layout/menu'); ?>
        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Gym</a></li>
                                    <li class="breadcrumb-item active">Edit Inquiry</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Edit Inquiry</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-8 offset-2">
					<?php if($this->session->userdata('MEMBER_MESSAGE')!='') { ?>
						 <div class="alert alert-success alert-dismissible calert">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<?php echo $this->session->userdata('MEMBER_MESSAGE')?>
							<?php echo $this->session->unset_userdata('MEMBER_MESSAGE'); ?>
						  </div>
					<?php } ?>
                        <div class="card-box">
                            <h4 class="header-title mb-4">Edit Inquiry</h4>
							<form action="<?php echo base_url(); ?>inquiry/insert_inquiry" enctype="multipart/form-data" method="post">
							
                                <div class="form-group">
                                    <label for="userName">Inquiry No<span class="text-danger">*</span></label>
                                    <input type="text" name="inquiry_no" parsley-trigger="change" required
                                             class="form-control" value="<?php echo $inquiry->inquiry_no; ?>">
									<input type="hidden" name="id" parsley-trigger="change" required
                                             class="form-control" value="<?php echo $inquiry->id; ?>">
                                </div>
								<div class="form-group">
                                    <label for="userName">Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" parsley-trigger="change" required
                                             class="form-control" id="name" value="<?php echo $inquiry->name; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                    <input type="email" name="email_id" parsley-trigger="change" required
                                            class="form-control" id="emailAddress" value="<?php echo $inquiry->email_id; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="userName">Mobile No<span class="text-danger">*</span></label>
                                    <input type="text" name="mobile_no" parsley-trigger="change" required
                                             class="form-control" id="mobile_no" value="<?php echo $inquiry->mobile_no; ?>">
                                </div>
								<div class="form-group">
                                    <label for="userName">Address</label>
                                    <textarea class="form-control" name="address"><?php echo $inquiry->address; ?></textarea>
                                </div>
								<div class="form-group">
                                    <label for="userName">Birthdate<span class="text-danger">*</span></label>
                                    <input type="date" name="birthdate" parsley-trigger="change"
                                             class="form-control" id="birthdate" value="<?php echo $inquiry->birthdate; ?>">
                                </div>
								<div class="form-group">
                                    <label for="userName">Inquiry Date<span class="text-danger">*</span></label>
                                    <input type="date" name="date" parsley-trigger="change" required
                                             class="form-control" id="date" value="<?php echo $inquiry->date; ?>">
                                </div>
								<div class="form-group">
                                    <label for="userName">Status<span class="text-danger">*</span></label>
                                    <select class="form-control" name="status">
										<option value="1" <?php if($inquiry->status == 1){ echo 'selected';}?>>Active</option>
										<option value="0" <?php if($inquiry->status == 0){ echo 'selected';}?>>Inactive</option>
									</select>
                                </div>
                                <div class="form-group text-right mb-0">
                                    <button class="btn btn-custom waves-effect waves-light mr-1" type="submit">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-light waves-effect">
                                        Cancel
                                    </button>
                                </div>

                            </form>
                            
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
        
 <?php $this->load->view('layout/footer'); ?>
    </body>
</html>