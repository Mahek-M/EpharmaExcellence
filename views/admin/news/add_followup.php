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
                                    <li class="breadcrumb-item active">Add Followup</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Followup</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-8 offset-2">
					<?php if($this->session->userdata('ENQUIRY_MESSAGE')!='') { ?>
						 <div class="alert alert-success alert-dismissible calert">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<?php echo $this->session->userdata('ENQUIRY_MESSAGE')?>
							<?php echo $this->session->unset_userdata('ENQUIRY_MESSAGE'); ?>
						  </div>
					<?php } ?>
                        <div class="card-box">
                            <h4 class="header-title mb-4">Add Followup</h4>
							<form action="<?php echo base_url(); ?>inquiry/insertfollwup" enctype="multipart/form-data" method="post">
							<div class="form-group row">
                                        <label for="fname" class="col-xs-3 col-sm-3 control-label col-form-label">Date</label>
                                        <div class="col-xs-9 col-sm-9">
                                            <input type="date" class="form-control"  id="date" name="date"  required placeholder="Date">
											<input type="hidden" class="form-control"  id="inquiry_id" name="inquiry_id"  placeholder="" value="<?php echo $this->uri->segment(3); ?>">
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label for="fname" class="col-xs-3 col-sm-3 control-label col-form-label">Description</label>
                                        <div class="col-xs-9 col-sm-9">
                                            <textarea class="form-control" name="description" id="description" required placeholder="Description" style="height: 150px;"></textarea>
                                        </div>
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