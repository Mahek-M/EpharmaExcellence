<?php $this->load->view('frontend/layout/header'); ?>
<body>
<?php $this->load->view('frontend/layout/nav'); ?>
    <!-- Blog Listing -->
    <section class="blog-lst">
        <div class="container">
            <div class="titlebar">
                <h2>Guest Blog</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
					<div class="row">
						<?php if(!empty($service_data['id'])){ ?>
						<div class="col-md-12 col-sm-12">
							<a href="javascript:void(0);" data-toggle="modal" data-target="#addblog" class="add_blog fright mb10">Add Blog</a>
						</div>
						<?php } else { ?>
							<h3 style="text-align:center;margin:20px;border: 1px solid #013b72;padding: 15px;">If You want to Add New blog Please <a href="<?php echo base_url(); ?>login">Login</a>.</h3>
						<?php } ?>
					</div>
                    <div class="row">
						<?php if(!empty($blogs)) { foreach($blogs as $bdata) { ?>
                        <div class="col-md-4 col-sm-4">
							<a href="<?php echo base_url();?>guest-blog-details">
                            <div class="blog-block">
                                <div class="blog-imgs">
									<?php if(!empty($bdata->image)) { ?>
										<img src="<?php echo base_url(); ?>uploads/blog/<?php echo $bdata->image; ?>" alt="">
									<?php } else { ?>
										<img src="<?php echo base_url(); ?>assets/images/blog3.jpg" alt="">
									<?php } ?>
                                </div>
                                <div class="blog-data">
                                    <h4><?php echo $bdata->blog_title;?></h4>

                                    <h5><?php echo $bdata->name; ?><span><?php $newDate = date("M d, Y", strtotime($bdata->phone)); echo $newDate; ?></span></h5>

                                    <p><?php echo $bdata->description;?></p>

                                    <a href="<?php echo base_url(); ?>guest-blog-details/<?php echo $bdata->id; ?>" class="btn-main">Read More</a>
                                </div>
                            </div>
							</a>
                        </div>
						<?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Listing -->
	<!-- Ads Popup -->
    <div id="addblog" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="remark-frm">
                    <form method="post" action="<?php echo base_url(); ?>home/add_blog" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" required name="name" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email* </label>
                            <input type="email" required name="email" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Date </label>
                            <input type="date" name="phone" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Website </label>
                            <input type="text" name="website" placeholder="" class="form-control">
                        </div>
						 <div class="form-group">
                            <label>Blog Title </label>
                            <input type="text" required name="blog_title" placeholder="" class="form-control">
                        </div>
						 <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"  required name="description" rows="5" placeholder=""></textarea>
                        </div>
                        <button class="btn-main">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Ads Popup -->
   <?php $this->load->view('frontend/layout/footer'); ?>
</body>
</html>