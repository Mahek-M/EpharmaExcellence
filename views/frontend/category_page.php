<?php $this->load->view('frontend/layout/header'); ?>
<body>
    
    <!-- Header -->
    <?php $this->load->view('frontend/layout/nav'); ?>
    <!-- End Header -->
    <!-- Blog Listing -->
    <section class="blog-lst">
		<div class="container-fluid">
		<div class="titlebar">
            <h2><?php echo $cname; ?> - <?php echo $this->login_model->getinspector($this->uri->segment(3)); ?></h2>
        </div>
		<h4 class="fbold">Defination of <?php echo $cname; ?>:</h4>
		<p class="fs16">In project management, quality control requires the project manager and/or the project team to inspect the accomplished work to ensure its alignment with the project scope.[15] In practice, projects typically have a dedicated quality control team which focuses on this area.</p>
            <div class="tabluer-blogs table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
							<th>Date</th>
                            <th>Company Name - Location</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php $i=1; if(!empty($form483)){ 
					foreach($form483 as $fdata) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php $newDate = date("M d,Y", strtotime($fdata->date)); echo $newDate; ?></td>
                            <td><a href="<?php echo base_url(); ?>form483-details/<?php echo $fdata->id; ?>"><?php echo $this->login_model->getcname($fdata->company_name); ?></a></td>
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