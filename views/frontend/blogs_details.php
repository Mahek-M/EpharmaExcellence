<?php $this->load->view('frontend/layout/header'); ?>
<body>
    
    <!-- Header -->
   <?php $this->load->view('frontend/layout/nav'); ?>
    <!-- End Header -->

    <!-- Blog Listing -->
    <section class="blog-lst">
        <div class="">
            <div class="titlebar">
                <h2>Blogs</h2>
            </div>
            <div class="container-fluid">
                <div class="col-md-8 col-sm-8">
					<div class="details-block">
						<div class="detail-img">
							<img src="<?php echo base_url(); ?>uploads/<?php echo $blogs->image;?>" class="imgdetails" alt="">
						</div>

						<div class="details-data">
							<h4><?php echo $blogs->title;?></h4>

							<h6><span></span></h6>
							<p><?php echo $blogs->description;?></p>
							<p><b>Read More:</b> <a href="<?php echo $blogs->refrence_link; ?>" target="_blank"><?php echo $blogs->refrence_link; ?></a></p>
						</div>
					</div>
					<h3 class="hclass"><b>Blogs List</b></h3>
					 <div class="news-listing-wrp">
						<?php if(!empty($blogs_list)) { foreach($blogs_list as $ndata){ ?>
                        <div class="news-sel-bx">
                            <a href="<?php echo base_url(); ?>blogs/<?php echo $ndata->id; ?>"><h4><?php echo $ndata->title; ?></h4></a>
							<h6><span  style="font-size:14px;"><?php $newDate = date("M d,Y", strtotime($ndata->createdate)); echo $newDate; ?></span></h6>
                            <p><?php echo $this->login_model->get_words($ndata->description); ?></p>
							<p><label>Refrence Link:</label> <a href="<?php echo $ndata->refrence_link; ?>" target="_blank"><?php echo $ndata->refrence_link; ?></a></p>
                        </div>
						<?php } } ?>
                    </div>
				</div>
				<div class="col-md-4 col-sm-4">
                    <div class="sidebar-relatd">
						<a href="<?php echo base_url(); ?>news/<?php echo $news->id; ?>">
                        <div class="latest-blog-bx">
                            <img src="<?php echo base_url(); ?>uploads/<?php echo $news->image; ?>" alt="" class="main-blimg">

                            <label class="lbl-tg"><i class="fa fa-square"></i> News</label>

                            <div class="blog-data-sheet">
                               <h4><?php echo $news->title; ?></h4>
                                <h6><?php $newDate1 = date("M d,Y", strtotime($news->date)); echo $newDate1; ?></h6>
                            </div>
                        </div>
						</a>
						<a href="<?php echo base_url(); ?>current_affairs/<?php echo  $current_affairs->id;?>">
                        <div class="latest-blog-bx">
                            <img src="<?php echo base_url(); ?>uploads/<?php echo $current_affairs->image; ?>" alt="" class="main-blimg">
                            
                            <label class="lbl-tg"><i class="fa fa-fire"></i> Current Affairs</label>

                            <div class="blog-data-sheet">
                                <h4><?php echo $current_affairs->title; ?></h4>
                            </div>
                        </div>
						</a>
						<a href="<?php echo base_url(); ?>case_study/<?php echo $case_studies->id; ?>">
                        <div class="latest-blog-bx">
                            <img src="<?php echo base_url(); ?>uploads/blog2.webp" alt="" class="main-blimg">
                            
                            <label class="lbl-tg"><i class="fa fa-graduation-cap"></i> Case Studies</label>

                            <div class="blog-data-sheet">
                                <h4><?php echo $case_studies->title; ?></h4>
                            </div>
                        </div>
						</a>
                    </div>
                </div>
			</div>
        </div>
    </section>
    <!-- End Blog Listing -->
<?php $this->load->view('frontend/layout/footer'); ?>
</body>
</html>