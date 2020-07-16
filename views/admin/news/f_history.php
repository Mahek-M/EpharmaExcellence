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
                                    <li class="breadcrumb-item active">Followup History</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Followup History</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
							<?php if($this->session->userdata('ENQUIRY_MESSAGE')!='') { ?>
								 <div class="alert alert-success alert-dismissible calert">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<?php echo $this->session->userdata('ENQUIRY_MESSAGE')?>
									<?php echo $this->session->unset_userdata('ENQUIRY_MESSAGE'); ?>
								  </div>
							<?php } ?>
                            <h4 class="header-title">Followup History</h4>
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                                <th>Sr No</th>
                                                <th>Date</th>
												<th>Description</th>
                                            </tr>
                                </thead>
                                <tbody>
								<?php if($history) $i=1;{ foreach($history as $edata){ ?>
                                            <tr>
												<td><?php echo $i ?></td>
                                                <td><?php
														$date=date_create($edata->date);
														echo date_format($date,"d/m/Y");
													?></td>
												<td><?php echo $edata->description; ?></td>
                                            </tr>
											<?php $i++;} } ?>
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