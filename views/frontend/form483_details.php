<?php $this->load->view('frontend/layout/header'); ?> <body>
    
    <!-- Header -->
    <?php $this->load->view('frontend/layout/nav'); ?>
    <!-- End Header -->

    <!-- Form 483 -->
    <section class="form-483-wrp">
        <div class="titlebar">
            <h2>Form 483</h2>
        </div>
        <div class="container-fluid">
            <div class="">
                <div class="col-md-8 col-sm-8 pad0">
                    <div class="form-block">
                        <ul class="cat-box nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#frmtb1">Form 483</a></li>
                            <li><a data-toggle="tab" href="#frmtb2">Company</a></li>
                            <li><a data-toggle="tab" href="#frmtb3">Category-Subcategory</a></li>
                        </ul>

                        <div class="tab-content"> <div id="frmtb1"
class="tab-pane fade in active"> <div class="data-display-box"> <div
class="row"> <div class="col-md-6 col-sm-6"> <div class="left-tbcnt"> <ul>
<li> <p><strong>Company Name.</strong> <b><a href="<?php echo base_url();
?>company-details/<?php echo $form483->company_name; ?>" target="_blank"><?php
echo  $this->login_model->getcname($form483->company_name); ?></a></b></p>
</li> <li> <p><strong>Street Address.</strong> <b><?php echo
$form483->address; ?></b></p> </li> <li> <p><strong>City, State, Zip Code,
Country.</strong><b><?php echo $form483->location; ?></b></p> </li> <li>
<p><strong>Name & Title of Individual to Whom Report Issued.</strong> <b><?php
echo $form483->name_title; ?></b></p> </li> <li> <p><strong>Original
Form483</strong> <b><a href="<?php echo base_url(); ?>uploads/<?php echo
$form483->pdf_name; ?>" target="_blank">View Pdf</a></b></p> </li> </ul>
</div> </div> <div class="col-md-6 col-sm-6"> <div class="left-tbcnt"> <ul>
<li> <p><strong>Dates of Inspection.</strong> <b><?php echo
$form483->date_of_inspection; ?></b></p> </li> <li> <p><strong>FEI Number -
Firm Name.</strong> <b><a target="_blank" href="<?php echo
base_url();?>fei/<?php echo $form483->fei; ?>"><?php echo $form483->fei; ?> -
<?php echo $form483->firm_name; ?></a></b></p> </li> <li> <p><strong>Type
Establishment Inspected.</strong><b><?php echo $form483->type_of_es;
?></b></p> </li> <li> <p><strong>Category-Subcategory</strong><b><a
href="<?php echo base_url(); ?>cat-subcat/<?php echo $form483->category_sub;
?>" target="_blank"><?php echo
$this->login_model->getcat($form483->category_sub); ?></a></b></p> </li> <li>
<p><strong>Inspector Name.</strong> 
<a href="#"> <b><?php if
(strpos($form483->inspector, ',') !== false) {
	$aa = explode(",",$form483->inspector);
	if(count($aa) == 2){
				?>
				<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[0]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[0])); ?></a><br/>
				<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[1]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[1])); ?></a>
				<?php }
					else { ?>
				<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[0]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[0])); ?></a><br/>
				<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[1]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[1])); ?></a><br/>
				<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[2]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[2])); ?></a>
				<?php 	} ?>
	
	
	 <?php } else { ?> 
	 <a 	href="<?php echo base_url();?>inspector/<?php echo $form483->inspector; ?>"
		target="_blank"><?php echo $this->login_model->getinspector($form483->inspector); ?></a> <?php } ?></b>
		</a></p> 
</li> </ul> </div> </div> </div> </div>
 <div class="photo-block photo-bar"> 
 <a href="<?php echo base_url(); ?>uploads/<?php echo $form483->file_name; ?>" data-fancybox="gallery" data-caption=""> <img
src="<?php echo base_url(); ?>uploads/<?php echo $form483->file_name; ?>"
class="img-responsive"> </a> </div> <div class="suggetion-bx">
<h4>Solutions</h4>
    <p>-</p>

								</div>

								<div class="btn-group">
									<a href="#" class="btn-main">Admin's Remarks</a>
								</div>
								<div class="similer-bgs">
								<h3>All Observations in a same inspection</h3>

								<div class="row">
								<div class="table-responsive">
								 <table class="table">
                    <thead>
                        <tr>
                            <th style="white-space: nowrap;">Sr.No</th>
							<th style="white-space: nowrap;">Date</th>
                            <th style="white-space: nowrap;">Company Name - Location</th>
                            <th style="white-space: nowrap;">Category - Sub Category</th>
							<th style="white-space: nowrap;">Inspector</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $i=1; if(!empty($form483)){ 
					foreach($fromfei as $fdata) { ?>
                        <tr>
                            <td style="white-space: nowrap;"><?php echo $i; ?></td>
                            <td style="white-space: nowrap;"><?php $newDate = date("M d,Y", strtotime($fdata->date)); echo $newDate; ?></td>
                            <td style="white-space: nowrap;"><a href="<?php echo base_url(); ?>form483-details/<?php echo $fdata->id; ?>"><?php echo $this->login_model->getcname($fdata->company_name); ?></a></td>
                            <td style="white-space: nowrap;"><?php echo $this->login_model->getcat($fdata->category_sub); ?></td>
							<td style="white-space: nowrap;"><?php
								if (strpos($fdata->inspector, ',') !== false) {
										$aa = explode(",",$fdata->inspector);
										if(count($aa) == 2){
										?>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[0]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[0])); ?></a><br/>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[1]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[1])); ?></a>
										<?php }
											else { ?>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[0]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[0])); ?></a><br/>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[1]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[1])); ?></a><br/>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[2]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[2])); ?></a>
										<?php 	}
										?>
								 <?php } else { ?>
									<a href="<?php echo base_url();?>inspector/<?php echo $fdata->inspector; ?>"><?php echo $this->login_model->getinspector($fdata->inspector); ?></a>
								<?php } ?></td>
                        </tr>
					<?php $i++; } } ?>
                    </tbody>
                </table>
				</div>
								</div>

                        <a href="javascript:void(0);" data-toggle="modal" data-target="#remrk" class="remarkbtn">Remark</a>
                    </div>
                            </div>
                            <div id="frmtb2" class="tab-pane fade">
                                <div class="data-display-box">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
										<div class="">
											<h3>All Observations related to <?php echo $this->login_model->getcname($form483->company_name); ?></h3>
										</div>
                                            <div class="tabluer-blogs table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th style="white-space: nowrap;">Sr.No</th>
															<th style="white-space: nowrap;">Date</th>
															<th style="white-space: nowrap;">Company Name - Location</th>
															<th style="white-space: nowrap;">Category - Sub Category</th>
															<th style="white-space: nowrap;">Inspector</th>
														</tr>
													</thead>
													<tbody>
													<?php $i=1; if(!empty($company_form483)){ 
													foreach($company_form483 as $fdata) { ?>
														<tr>
															<td style="white-space: nowrap;"><?php echo $i; ?></td>
															<td style="white-space: nowrap;"><?php $newDate = date("M d,Y", strtotime($fdata->date)); echo $newDate; ?></td>
															<td style="white-space: nowrap;"><a href="<?php echo base_url(); ?>form483-details/<?php echo $fdata->id; ?>"><?php echo $this->login_model->getcname($fdata->company_name); ?></a></td>
															<td style="white-space: nowrap;"><?php echo $this->login_model->getcat($fdata->category_sub); ?></td>
															<td style="white-space: nowrap;"><?php
																if (strpos($fdata->inspector, ',') !== false) {
																		$aa = explode(",",$fdata->inspector);
																		if(count($aa) == 2){
																			?>
																			<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[0]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[0])); ?></a><br/>
																			<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[1]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[1])); ?></a>
																			<?php }
																				else { ?>
																			<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[0]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[0])); ?></a><br/>
																			<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[1]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[1])); ?></a><br/>
																			<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[2]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[2])); ?></a>
																			<?php 	}
																		?>
																		
																 <?php } else { ?>
																	<a href="<?php echo base_url();?>inspector/<?php echo $fdata->inspector; ?>" target="_blank"><?php echo $this->login_model->getinspector($fdata->inspector); ?></a>
																<?php } ?></td>
														</tr>
													<?php $i++; } } ?>
													</tbody>
												</table>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="frmtb3" class="tab-pane fade">
                                <div class="data-display-box">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="left-tbcnt">
                                                <div class="titlebar">
												<h3>Other Observation related to <?php echo $cname; ?></h3>
											</div>
											<h4 class="fbold">Defination of <?php echo $cname; ?>:</h4>
											<p class="fs16">In project management, quality control requires the project manager and/or the project team to inspect the accomplished work to ensure its alignment with the project scope.[15] In practice, projects typically have a dedicated quality control team which focuses on this area.</p>
												<div class="tabluer-blogs table-responsive">
													<table class="table">
														<thead>
															<tr>
																<th style="white-space: nowrap;">Sr.No</th>
																<th style="white-space: nowrap;">Date</th>
																<th style="white-space: nowrap;">Company Name - Location</th>
																<th style="white-space: nowrap;">Category - Sub Category</th>
																<th style="white-space: nowrap;">Inspector</th>
															</tr>
														</thead>
														<tbody>
														<?php $i=1; if(!empty($fromcat)){ 
														foreach($fromcat as $frdata) { ?>
															<tr>
																<td style="white-space: nowrap;"><?php echo $i; ?></td>
																<td style="white-space: nowrap;"><?php $newDate3 = date("M d,Y", strtotime($frdata->date)); echo $newDate3; ?></td>
																<td style="white-space: nowrap;"><a href="<?php echo base_url(); ?>form483-details/<?php echo $frdata->id; ?>"><?php echo $this->login_model->getcname($fdata->company_name); ?></a></td>
																<td style="white-space: nowrap;"><?php echo $this->login_model->getcat($frdata->category_sub); ?></td>
																<td style="white-space: nowrap;"><?php
																	if (strpos($frdata->inspector, ',') !== false) {
																			$aa1 = explode(",",$frdata->inspector);
																				if(count($aa1) == 2){
																				?>
																				<a href="<?php echo base_url();?>inspector/<?php echo trim($aa1[0]); ?>"> <?php echo $this->login_model->getinspector(trim($aa1[0])); ?></a><br/>
																				<a href="<?php echo base_url();?>inspector/<?php echo trim($aa1[1]); ?>"> <?php echo $this->login_model->getinspector(trim($aa1[1])); ?></a>
																				<?php }
																					else { ?>
																				<a href="<?php echo base_url();?>inspector/<?php echo trim($aa1[0]); ?>"> <?php echo $this->login_model->getinspector(trim($aa1[0])); ?></a><br/>
																				<a href="<?php echo base_url();?>inspector/<?php echo trim($aa1[1]); ?>"> <?php echo $this->login_model->getinspector(trim($aa1[1])); ?></a><br/>
																				<a href="<?php echo base_url();?>inspector/<?php echo trim($aa1[2]); ?>"> <?php echo $this->login_model->getinspector(trim($aa1[2])); ?></a>
																				<?php 	}
																			?>
																	 <?php } else { ?>
																		<a target="_blank" href="<?php echo base_url();?>inspector/<?php echo $frdata->inspector; ?>"><?php echo $this->login_model->getinspector($frdata->inspector); ?></a>
																	<?php } ?></td>
															</tr>
														<?php $i++; } } ?>
														</tbody>
													</table>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <!-- Comment -->
                    <div class="comments-box">
                        <ul>
							<?php if(!empty($remark)) { foreach($remark as $rdata) { ?>
                            <li>
                                <div class="main-cmt">
                                    <div class="cmt-img">
                                        <img src="<?php echo base_url(); ?>assets/images/user.jpg" alt="">
                                    </div>
                                    <div class="cmt-nm">
                                        <h5><?php echo $rdata->name; ?></h5>
                                        <h6><i class="fa fa-envelope"></i> <?php echo $rdata->email; ?> <span><i class="fa fa-phone"></i> <?php echo $rdata->phone; ?></span></h6>
                                    </div>
                                </div>
                                <div class="dis-dt">
                                    <p><?php echo $rdata->description; ?></p>
                                </div>
                                <div class="act-like">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
                                        <li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#remrk-edit">Reply</a></li>
                                    </ul>
                                </div>
                            </li>
							<li class="reply-admin">
                                <div class="main-cmt">
                                    <div class="cmt-img">
                                        <img src="images/user.jpg" alt="">
                                    </div>
                                    <div class="cmt-nm">
                                        <h5>John Smith</h5>
                                        <h6><i class="fa fa-envelope"></i> info@gmail.com <span><i class="fa fa-phone"></i> +91 88888 88888</span></h6>
                                    </div>
                                </div>
                                <div class="dis-dt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                </div>
                                <div class="act-like">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-thumbs-up"></i></a></li>
                                        <li><a href="#"><i class="fa fa-thumbs-down"></i></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#remrk-edit">Reply</a></li>
                                    </ul>
                                </div>
                            </li>
							<?php } } ?>
                        </ul>
                    </div>
                    <!-- End Comment -->
                </div>
                <div class="col-md-4 col-sm-4 pad0">
                    <div class="related-block">
                        <h3>Related Links</h3>
						<div class="tabluer-blogs table-responsive">
							<h4><b><?php echo $this->login_model->getcname($form483->company_name); ?></b></h4>
							<table class="table related">
								<thead>
									<tr>
										<th style="white-space: nowrap;">Date</th>
										<th style="white-space: nowrap;">Category - Sub Category</th>
									</tr>
								</thead>
								<tbody>
								<?php $i=1; if(!empty($fromfei)){ 
								foreach($fromfei as $rdata) { ?>
									<tr>
										<td style="white-space: nowrap;"><?php $newDate = date("M d,Y", strtotime($rdata->date)); echo $newDate; ?></td>
										<td style="white-space: nowrap;"><a href="<?php echo base_url(); ?>cat-subcat/<?php echo $rdata->category_sub; ?>"><?php echo $this->login_model->getcat($rdata->category_sub); ?></a></td>
									</tr>
								<?php $i++; } ?>
								</tbody>
							</table>
							<?php if(count($fromfei) > 4) { ?>
							<button class="btn btn-sm btn-primary show-all" style="float:right;margin:10px;">Show all</button>
								<?php } } ?>
						</div>
						<div class="tabluer-blogs table-responsive" style="margin-top:20px;">
							<h4><b><?php echo $this->login_model->getcat($form483->category_sub); ?></b></h4>
							<table class="table related1">
								<thead>
									<tr>
										<th style="white-space: nowrap;">Date</th>
										<th style="white-space: nowrap;">Company</th>
									</tr>
								</thead>
								<tbody>
								<?php $i=1; if(!empty($fromcat)){ 
								foreach($fromcat as $ndata) { ?>
									<tr>
										<td style="white-space: nowrap;"><?php $newDate1 = date("M d,Y", strtotime($ndata->date)); echo $newDate1; ?></td>
										<td style="white-space: nowrap;"><a href="<?php echo base_url();?>company-details/<?php echo $ndata->company_name; ?>"><?php echo $this->login_model->getcname($ndata->company_name); ?></td>
									</tr>
								<?php $i++; } ?>
								</tbody>
							</table>
							<?php if(count($fromcat) > 4) { ?>
							<button class="btn btn-sm btn-primary show-all1" style="float:right;margin:10px;">Show all</button>
								<?php } } ?>
						</div>
						<div class="tabluer-blogs table-responsive" style="margin-top:20px;">
							<h4><b><?php
								if (strpos($form483->inspector, ',') !== false) {
										$aa = explode(",",$form483->inspector);
										if(count($aa) == 2){
										?>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[0]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[0])); ?></a><br/>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[1]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[1])); ?></a>
										<?php }
											else { ?>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[0]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[0])); ?></a><br/>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[1]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[1])); ?></a><br/>
										<a href="<?php echo base_url();?>inspector/<?php echo trim($aa[2]); ?>"> <?php echo $this->login_model->getinspector(trim($aa[2])); ?></a>
										<?php 	}
										?>
								 <?php } else { ?>
									<?php echo $this->login_model->getinspector($form483->inspector); ?>
								<?php } ?></b></h4>
							<table class="table related2">
								<thead>
									<tr>
										<th style="white-space: nowrap;">Date</th>
										<th style="white-space: nowrap;">Company</th>
									</tr>
								</thead>
								<tbody>
								<?php $i=1; if(!empty($frominspector)){ 
								foreach($frominspector as $fidata) { ?>
									<tr>
										<td style="white-space: nowrap;"><?php $newDate2 = date("M d,Y", strtotime($fidata->date)); echo $newDate2; ?></td>
										<td style="white-space: nowrap;"><a href="<?php echo base_url();?>company-details/<?php echo $fidata->company_name; ?>"><?php echo $this->login_model->getcname($fidata->company_name); ?></td>
									</tr>
								<?php $i++; }  ?>
								</tbody>
							</table>
								<?php if(count($frominspector) > 4) { ?>
							<button class="btn btn-sm btn-primary show-all2" style="float:right;margin:10px;">Show all</button>
								<?php } } ?>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Form 483 -->

    <!-- Remark Popup -->
    <div id="remrk" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="remark-frm">
                    <form method="post" action="<?php echo base_url(); ?>home/add_remark">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" name="name" required placeholder="" class="form-control">
							<input type="hidden" name="id" value="<?php echo $this->uri->segment(2); ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" name="email" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone No </label>
                            <input type="text" name="phone" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" required name="description" rows="5" placeholder=""></textarea>
                        </div>
                        <button class="btn-main">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Remark Popup -->

    <!-- Remark Popup -->
    <div id="remrk-edit" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="remark-frm">
                    <form>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="5" placeholder=""></textarea>
                        </div>
                        <button class="btn-main">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Remark Popup -->

   <?php $this->load->view('frontend/layout/footer'); ?>
   <script>
		   $(".related > tbody > tr").hide().slice(0, 4).show();
		   $(".related1 > tbody > tr").hide().slice(0, 4).show();
		   $(".related2 > tbody > tr").hide().slice(0, 4).show();
		   $('.show-all').text('Show All');
		   
			$(".show-all").on("click", function() {
			  $("tbody > tr", $(this).prev()).show();
			  $('.show-all').text('See Less');
			  $('.show-all').addClass('see-less');
			  $('.see-less').removeClass('show-all');
			  $('.see-less').attr('onclick','readless()');
			});
			$(".show-all1").on("click", function() {
			  $("tbody > tr", $(this).prev()).show();
			  $('.show-all1').text('See Less');
			  $('.show-all1').addClass('see-less1');
			  $('.see-less1').removeClass('show-all1');
			  $('.see-less1').attr('onclick','readless1()');
			});
			$(".show-all2").on("click", function() {
			  $("tbody > tr", $(this).prev()).show();
			  $('.show-all2').text('See Less');
			  $('.show-all2').addClass('see-less2');
			  $('.see-less2').removeClass('show-all2');
			  $('.see-less2').attr('onclick','readless2()');
			});
			
			function readless(){
				$(".related > tbody > tr").hide().slice(0, 4).show();
				  $('.see-less').text('Show All');
				  $('.see-less').addClass('show-all');
				  $('.show-all').removeClass('see-less');
				  $('.show-all').removeAttr('onclick','readless()');
				  $('.show-all').text('Show All');
			}
			function readless1(){
				$(".related1 > tbody > tr").hide().slice(0, 4).show();
				  $('.see-less1').text('Show All');
				  $('.see-less1').addClass('show-all1');
				  $('.show-all1').removeClass('see-less1');
				  $('.show-all1').removeAttr('onclick','readless1()');
				  $('.show-all1').text('Show All');
			}
			function readless2(){
				$(".related2 > tbody > tr").hide().slice(0, 4).show();
				  $('.see-less2').text('Show All');
				  $('.see-less2').addClass('show-all2');
				  $('.show-all2').removeClass('see-less2');
				  $('.show-all2').removeAttr('onclick','readless2()');
				  $('.show-all2').text('Show All');
			}
   </script>
</body>
</html>