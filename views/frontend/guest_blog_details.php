<?php $this->load->view('frontend/layout/header'); ?>
<body>
    
    <!-- Header -->
   <?php $this->load->view('frontend/layout/nav'); ?>
    <!-- End Header -->

    <!-- Blog Listing -->
    <section class="blog-lst">
        <div class="container">
            <div class="titlebar">
                <h2>Blog Details</h2>
            </div>
            
            <div class="details-block">
                <div class="detail-img">
					<?php if(!empty($blogs->image)) { ?>
                    <img src="<?php echo base_url(); ?>uploads/blog/<?php echo $blogs->image; ?>" alt="">
					<?php } else { ?>
					<img src="<?php echo base_url(); ?>assets/images/blog3.jpg" alt="">
					<?php } ?>
                </div>

                <div class="details-data">
                    <h4><?php echo $blogs->blog_title; ?></h4>

                    <h6><?php echo $blogs->name; ?> <span><?php $newDate = date("M d, Y", strtotime($blogs->phone)); echo $newDate; ?></span></span></h6>

                    <p> <?php echo $blogs->description;?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Listing -->
<?php $this->load->view('frontend/layout/footer'); ?>
</body>
</html>