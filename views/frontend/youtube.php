<?php $this->load->view('frontend/layout/header'); ?>
<body>
<?php $this->load->view('frontend/layout/nav'); ?>
    <!-- Blog Listing -->
    <section class="blog-lst">
        <div class="container">
            <div class="titlebar">
                <h2>Videos</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
							<iframe class="youtubestyle" src="https://www.youtube.com/embed/pX4xPVd69J8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
						<div class="col-md-6 col-sm-6">
							<iframe class="youtubestyle" src="https://www.youtube.com/embed/wNiOZ-0PnVI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-6 col-sm-6">
							<iframe class="youtubestyle" src="https://www.youtube.com/embed/9NBvqwB8n08" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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