<!doctype html>
<html lang="en">
    <?php $this->load->view('admin/layout/header'); ?>

    <body>

        <?php $this->load->view('admin/layout/menu'); ?>
        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Pharma</a></li>
                                    <li class="breadcrumb-item active">Add News</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add NEws</h4>
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
                            <h4 class="header-title mb-4">Add News</h4>
							<form action="<?php echo base_url(); ?>admin/insert_news" enctype="multipart/form-data" method="post">
								<div class="form-group">
                                    <label for="userName">Type<span class="text-danger">*</span></label>
									 <select class="form-control" name="type">
										<option value="">Select</option>
										<option value="news">News</option>
										<option value="blogs">Blogs</option>
										<option value="affairs">Current Affairs</option>
										<option value="casestudy">Case Study</option>
									 </select>
                                </div>
                                <div class="form-group">
                                    <label for="userName">Title<span class="text-danger">*</span></label>
                                    <input type="text" name="title" parsley-trigger="change" required
                                             class="form-control">
                                </div>
								<div class="form-group">
                                    <label for="userName">Date<span class="text-danger">*</span></label>
                                    <input type="date" name="date" parsley-trigger="change" required
                                             class="form-control" id="date">
                                </div>
								<div class="form-group">
                                    <label for="userName">Short Description</label>
                                    <textarea class="form-control" name="short_description"></textarea>
                                </div>
								<div class="form-group">
                                    <label for="userName">Description</label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
								<div class="form-group">
                                    <label for="userName">Image<span class="text-danger"></span></label>
                                    <input type="file" name="image" parsley-trigger="change"
                                             class="form-control" id="image">
                                </div>
								<div class="form-group">
                                    <label for="userName">Refrence Link<span class="text-danger"></span></label>
                                    <input type="text" name="refrence_link" parsley-trigger="change" required
                                             class="form-control" id="refrence_link">
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
        
 <?php $this->load->view('admin/layout/footer'); ?>
    </body>
</html>