<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/toastr.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/my.css" />
    <title>Pharma Excellence</title>
</head>
<body>
    
    <!-- Header -->
    <section class="topbar home-topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="topbar-links">
                        <ul>
                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#adswithus">Ads with Us</a></li>
                            <li><a href="<?php echo base_url(); ?>guest-blog">Guest Blog</a></li>
                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#your_questions">Your Questions</a></li>
                            <li><a href="<?php echo base_url(); ?>career">Career</a></li>
                            <li><a href="#">Pharma Guideline</a></li>
							<li><a href="#">Pharma Institutes</a></li>
                            <li><a href="#">Subscription</a></li>
                            <li><a href="#">Offers</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="topbar-links righttop">
                        <ul>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                                <ul class="dropdown-menu">
                                    <div class="form-group">
                                        <input type="text" name="" placeholder="Search" class="form-control">
                                        <button class="btn-send"><i class="fa fa-search"></i></button>
                                    </div>
                                </ul>
                            </li>
							<?php if(!empty($service_data['id'])){ ?>
							<li><a href="<?php echo base_url(); ?>logout">Logout</a></li>
							<?php } else { ?>
							<li><a href="<?php echo base_url(); ?>signup">Login / Signup</a></li>
							<?php } ?>
                            <li><a href="<?php echo base_url(); ?>youtube" class="redic"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-default home-menus">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="LOGO"></a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="menu">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Expertise</a></li>    
                    <li><a href="#">Tech. Solution</a></li>
                    <li><a href="#">Pharma Directory</a></li>
                    <li><a href="<?php echo base_url(); ?>form483">Form 483</a></li>
                    <li><a href="#">Interpersonal Skill</a></li>
                    <li><a href="#">Energy Effciency</a></li>
                   
                </ul> 
            </div>
        </div>
    </nav>
    <!-- End Header -->
	<!-- Responsive Menu -->
    <div class="responsive-bar">
        <a href="javascript:void(0);" class="close-btn">&times;</a>

        <div class="search-res">
            <input type="text" name="" placeholder="Search here..." class="form-control">
            <button><i class="fa fa-search"></i></button>
        </div>

        <div class="menus-lst">
            <ul>
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Expertise</a></li>
                <li><a href="#">Tech. Solution</a></li>
                <li><a href="#">Pharma Directory</a></li>
                <li><a href="<?php echo base_url(); ?>form483">Form 483</a></li>
                <li><a href="#">Interpersonal Skill</a></li>
                <li><a href="#">Energy Effciency</a></li>
                <li><a href="#">Pharma Institute</a></li>
                <li><a href="#" class="spreters"></a></li>
                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#adswithus">Ads with Us</a></li>
                <li><a href="<?php echo base_url(); ?>guest-blog">Guest Blog</a></li>
                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#your_questions">Your Questions</a></li>
                <li><a href="<?php echo base_url(); ?>career">Career</a></li>
                <li><a href="#">Pharma Guideline</a></li>
                <li><a href="#">Subscription</a></li>
                <li><a href="#">Offers</a></li>
            </ul>
        </div>

        <div class="enter-repo">
            <a href="<?php echo base_url(); ?>youtube"><i class="fa fa-youtube-play"></i></a>
			<?php if(!empty($service_data['id'])){ ?>
			<a href="<?php echo base_url(); ?>logout"><i class="fa fa-sign-in"></i></a>
			<?php } else { ?>
			<a href="<?php echo base_url(); ?>signup"><i class="fa fa-user-plus"></i></a>
			<?php } ?>
        </div>
    </div>
    <!-- End Responsive Menu -->
    <!-- Latest Blogs -->
    <section class="latest-blogs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div id="owl-blog-one" class="owl-carousel">
						<?php if(!empty($news)){ foreach($news as $ndata) { ?>
						<a href="<?php echo base_url(); ?>news-list">
                        <div class="item">
                            <div class="latest-blog-bx">
                                <label class="lbl-tg"><i class="fa fa-newspaper-o"></i> News</label>
                                <img src="<?php echo base_url(); ?>uploads/<?php echo $ndata->image; ?>" alt="" class="main-blimg">
                                <div class="blog-data-sheet">
                                    <h4><?php echo $ndata->title; ?></h4>
                                    <h6><?php $newDate = date("M d,Y", strtotime($ndata->date)); echo $newDate; ?></h6>
                                </div>
                            </div>
                        </div>
						</a>
						<?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div id="owl-blog-two" class="owl-carousel">
					<?php if(!empty($blogs)){ foreach($blogs as $bdata) { ?>
					<a href="<?php echo base_url(); ?>blogs-list">
                        <div class="item">
                            <div class="latest-blog-bx">
                                <img src="<?php echo base_url(); ?>uploads/<?php echo $bdata->image; ?>" alt="" class="main-blimg">

                                <label class="lbl-tg"><i class="fa fa-square"></i> Blogs</label>

                                <div class="blog-data-sheet">
                                    <h4><?php echo $bdata->title; ?></h4>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
					</a>
					<?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div id="owl-blog-three" class="owl-carousel">
                        <?php if(!empty($current_affairs1)){ foreach($current_affairs1 as $cdata) { ?>
						<a href="<?php echo base_url(); ?>current-affairs">
                        <div class="item">
                            <div class="latest-blog-bx">
                                <label class="lbl-tg"><i class="fa fa-newspaper-o"></i> Current Affairs</label>
                                <img src="<?php echo base_url(); ?>uploads/<?php echo $cdata->image; ?>" alt="" class="main-blimg">
                                <div class="blog-data-sheet">
                                    <h4><?php echo $cdata->title; ?></h4>
                                    <h6><?php $newDate = date("M d,Y", strtotime($cdata->date)); echo $newDate; ?></h6>
                                </div>
                            </div>
                        </div>
						</a>
						<?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div id="owl-blog-four" class="owl-carousel">
                         <?php if(!empty($case_studies)){ foreach($case_studies as $cadata) { ?>
						 <a href="<?php echo base_url(); ?>case-studies">
                        <div class="item">
                            <div class="latest-blog-bx">
                                <label class="lbl-tg"><i class="fa fa-newspaper-o"></i> Case Studies</label>
                                <img src="<?php echo base_url(); ?>uploads/blog2.webp" alt="" class="main-blimg">
                                <div class="blog-data-sheet">
                                    <h4><?php echo $cadata->title; ?></h4>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
						</a>
						<?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest Blogs -->

    <!-- We Offer -->
    <section class="we-offer-wrp">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="we-offer-box">
                        <img src="<?php echo base_url(); ?>assets/images/offer-img.png" alt="">

                        <div class="offer-info">
                            <h4>Trending Offers</h4>
                            <p>Nulla excepteur deserunt id reprehenderit amet ullamco ullamco </p>

                            <ul>
                                <li>Concert</li>
                                <li>FEB 13</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="offers-lst">
                        <h2>Our Offers</h2>

                        <div id="owl-offers" class="owl-carousel">
                            <div class="item">
                                <div class="offer-box">
                                    <div class="offers-img">
                                        <img src="<?php echo base_url(); ?>assets/images/offers-imgs.png" alt="">
                                    </div>
                                    <div class="offers-nms">
                                        <h4>Blog title</h4>

                                        <ul>
                                            <li>Concert</li>
                                            <li>FEB 13</li>
                                        </ul>

                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="offer-box">
                                    <div class="offers-img">
                                        <img src="<?php echo base_url(); ?>assets/images/offers-imgs.png" alt="">
                                    </div>
                                    <div class="offers-nms">
                                        <h4>Blog title</h4>

                                        <ul>
                                            <li>Concert</li>
                                            <li>FEB 13</li>
                                        </ul>

                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="offer-box">
                                    <div class="offers-img">
                                        <img src="<?php echo base_url(); ?>assets/images/offers-imgs.png" alt="">
                                    </div>
                                    <div class="offers-nms">
                                        <h4>Blog title</h4>

                                        <ul>
                                            <li>Concert</li>
                                            <li>FEB 13</li>
                                        </ul>

                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="offer-box">
                                    <div class="offers-img">
                                        <img src="<?php echo base_url(); ?>assets/images/offers-imgs.png" alt="">
                                    </div>
                                    <div class="offers-nms">
                                        <h4>Blog title</h4>

                                        <ul>
                                            <li>Concert</li>
                                            <li>FEB 13</li>
                                        </ul>

                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="offer-box">
                                    <div class="offers-img">
                                        <img src="<?php echo base_url(); ?>assets/images/offers-imgs.png" alt="">
                                    </div>
                                    <div class="offers-nms">
                                        <h4>Blog title</h4>

                                        <ul>
                                            <li>Concert</li>
                                            <li>FEB 13</li>
                                        </ul>

                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End We Offer -->
<?php $this->load->view('frontend/layout/footer'); ?>
    
</body>
</html>