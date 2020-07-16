<!-- Header -->
    <section class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="logo-box">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="topbar-links">
                        <ul>
                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#adswithus">Ads with Us</a></li>
                            <li><a href="<?php echo base_url(); ?>guest-blog">Guest Blog</a></li>
                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#your_questions">Your Questions</a></li>
                            <li><a href="<?php echo base_url(); ?>career">Career</a></li>
                            <li><a href="#">Pharma Guideline</a></li>
							 <li><a href="#">Pharma Institutes</a></li>
							<?php if(!empty($service_data['id'])){ ?>
							<li><a href="<?php echo base_url(); ?>logout">Logout</a></li>
							<?php } else { ?>
							<li><a href="<?php echo base_url(); ?>signup">Login / Signup</a></li>
							<?php } ?>
                            <li><a href="<?php echo base_url(); ?>youtube"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="LOGO"></a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="menu">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
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