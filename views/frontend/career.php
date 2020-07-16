<?php $this->load->view('frontend/layout/header'); ?>
<body>
<?php $this->load->view('frontend/layout/nav'); ?>
    <!-- Blog Listing -->
    <section class="blog-lst">
        <div class="container">
            <div class="titlebar">
                <h2>Career</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
							<a href="https://www.cipla.com/careers/life-cipla" target="_blank">
                            <div class="blog-block">
								<div class=" blockbox">
                                    <img src="<?php echo base_url(); ?>assets/images/cipla.png" alt="">
                                </div>
							</div>
							</a>
                        </div>
						<div class="col-md-4 col-sm-4">
							<a href="http://www.cafepharma.com/cafejobs" target="_blank">
                            <div class="blog-block">
								<div class="blockbox">
                                    <img src="<?php echo base_url(); ?>assets/images/cafepharma.png" alt="">
                                </div>
							</div>
							</a>
                        </div>
						<div class="col-md-4 col-sm-4">
							<a href="https://jobs.pharmatimes.com/browse-jobs/" target="_blank">
                            <div class="blog-block">
								<div class="blockbox">
                                    <img src="<?php echo base_url(); ?>assets/images/pharmatimes.png" alt="">
                                </div>
							</div>
							</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Listing -->
   <?php $this->load->view('frontend/layout/footer'); ?>
</body>
</html>