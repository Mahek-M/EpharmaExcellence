<?php $this->load->view('frontend/layout/header'); ?>
<body>
    
    <!-- Header -->
    <?php $this->load->view('frontend/layout/nav'); ?>
    <!-- End Header -->
    <!-- Blog Listing -->
    <section class="blog-lst">
		<div class="container-fluid">
		<div class="titlebar">
            <h2>Other observation related to <?php echo $cname; ?></h2>
        </div>
            <div class="tabluer-blogs table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
							<th>Date</th>
                            <th>Company Name - Location</th>
                            <th>Category - Sub Category</th>
							<th>Inspector</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $i=1; if(!empty($form483)){ 
					foreach($form483 as $fdata) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php $newDate = date("M d,Y", strtotime($fdata->date)); echo $newDate; ?></td>
                            <td><a href="<?php echo base_url(); ?>form483-details/<?php echo $fdata->id; ?>"><?php echo $this->login_model->getcname($fdata->company_name); ?></a></td>
                            <td><?php echo $this->login_model->getcat($fdata->category_sub); ?></td>
							<td><?php
								if (strpos($fdata->inspector, ',') !== false) {
										$aa = explode(",",$fdata->inspector);
										?>
										<a href="<?php echo base_url();?>inspector/<?php echo $aa[0]; ?>"> <?php echo $this->login_model->getinspector($aa[0]); ?></a><br/>
										<a href="<?php echo base_url();?>inspector/<?php echo $aa[1]; ?>"> <?php echo $this->login_model->getinspector($aa[1]); ?></a>
								 <?php } else { ?>
									<a href="<?php echo base_url();?>inspector/<?php echo $fdata->inspector; ?>"><?php echo $this->login_model->getinspector($fdata->inspector); ?></a>
								<?php } ?></td>
                        </tr>
					<?php $i++; } } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End Blog Listing -->
<?php $this->load->view('frontend/layout/footer'); ?>
</body>
</html>