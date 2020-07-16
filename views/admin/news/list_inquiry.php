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
                                    <li class="breadcrumb-item active">List Inquiry</li>
                                </ol>
                            </div>
                            <h4 class="page-title">List Inquiry</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
							<?php if($this->session->userdata('MEMBER_MESSAGE')!='') { ?>
								 <div class="alert alert-success alert-dismissible calert">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<?php echo $this->session->userdata('MEMBER_MESSAGE')?>
									<?php echo $this->session->unset_userdata('MEMBER_MESSAGE'); ?>
								  </div>
							<?php } ?>
                            <h4 class="header-title">List Inquiry</h4>
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Inquiry No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
									<th>Birthdate</th>
                                    <th>Inquiry Date</th>
									<th>Status</th>
									<th>Followup</th>
									<th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php if(!empty($inquiry)){ foreach($inquiry as $idata) { ?>
                                <tr>
                                    <td><?php echo $idata->inquiry_no;?></td>
                                    <td><?php echo $idata->name;?></td>
                                    <td><?php echo $idata->email_id;?></td>
                                    <td><?php echo $idata->mobile_no;?></td>
                                    <td><?php echo $idata->address;?></td>
									<td>
									<?php
											$date=date_create($idata->birthdate);
											echo date_format($date,"d/m/Y");
													?></td>
                                    <td>
									<?php
											$date1=date_create($idata->date);
											echo date_format($date1,"d/m/Y");
													?></td>
									<td><?php  if($idata->status == '1'){ ?>
													<label class="label label-sucess">Active</label>
												<?php } ?>
												<?php  if($idata->status == '0'){ ?>
													<label class="label label-warning">Inactive</label>
												<?php } ?></td>
										<td>	<a href="<?php echo base_url(); ?>inquiry/add_followup/<?php echo $idata->id; ?>" class="btn btn-primary">Add Followup</a><br/>
													<a href="<?php echo base_url(); ?>inquiry/followuphistory/<?php echo $idata->id; ?>" class="btn btn-primary" style="margin-top:10px;">Followup History</a></td>
									<td>
										<a href="<?php echo base_url(); ?>inquiry/edit_inquiry/<?php echo $idata->id;?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
										<a href="<?php echo base_url(); ?>inquiry/delete_inquiry/<?php echo $idata->id;?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></a>
									</td>
                                </tr>
								<?php } } ?>
                                </tbody>
                            </table>
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