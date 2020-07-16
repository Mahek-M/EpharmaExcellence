
  <!-- Ads Popup -->
    <div id="adswithus" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="remark-frm">
                    <form method="post" action="<?php echo base_url(); ?>home/add_adswithus">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" name="name" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email* </label>
                            <input type="email" required name="email" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone No* </label>
                            <input type="text" required name="phone" placeholder="" class="form-control">
                        </div>
						 <div class="form-group">
                            <label>Company </label>
                            <input type="text" name="company" placeholder="" class="form-control">
                        </div>
						 <div class="form-group">
                            <label>Product</label>
                            <input type="text" name="product" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control"  name="address" rows="5" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label>Remark</label>
                            <textarea class="form-control"  name="remark" rows="5" placeholder=""></textarea>
                        </div>
                        <button class="btn-main">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Ads Popup -->
	
 <!-- Your Popup -->
    <div id="your_questions" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="remark-frm">
                    <form method="post" action="<?php echo base_url(); ?>home/add_your_questions">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" name="name" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email* </label>
                            <input type="email" required name="email" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone No </label>
                            <input type="text"  name="phone" placeholder="" class="form-control">
                        </div>
						 <div class="form-group">
                            <label>Your Question </label>
                            <input type="text" name="question" required placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Remark</label>
                            <textarea class="form-control"  name="remark" rows="5" placeholder=""></textarea>
                        </div>
                        <button class="btn-main">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Your Popup -->
 <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="foot-abt">
                        <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>

                        <div class="social-bx">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="foot-links">
                        <h4>Category</h4>

                        <ul>
                            <li><a href="#">Fashion (22)</a></li>
                            <li><a href="#">Technology (29)</a></li>
                            <li><a href="#">Street Style (15)</a></li>
                            <li><a href="#">Life Style (28)</a></li>
                            <li><a href="#">DIY & Crafts (16)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-sm-4">
                    <div class="populer-post">
                        <h4>Popular Posts</h4>

                        <ul>
                            <li><a href="#">
                                <div class="blg-img">
                                    <img src="<?php echo base_url(); ?>assets/images/img1.jpg" alt="">
                                </div>
                                <div class="pop-dt">
                                    <h6>Donec metus orci, malesuada et lectus vitae</h6>
                                    <p>Feb 17</p>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <div class="blg-img">
                                    <img src="<?php echo base_url(); ?>assets/images/img2.jpg" alt="">
                                </div>
                                <div class="pop-dt">
                                    <h6>Donec metus orci, malesuada et lectus vitae</h6>
                                    <p>Feb 17</p>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <div class="blg-img">
                                    <img src="<?php echo base_url(); ?>assets/images/img3.jpg" alt="">
                                </div>
                                <div class="pop-dt">
                                    <h6>Donec metus orci, malesuada et lectus vitae</h6>
                                    <p>Feb 17</p>
                                </div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class="copyright">
        <div class="container">
            <p>Copyright © 2020</p>
        </div>
    </section>
    <!-- End Footer -->

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/toastr.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/toastr.js"></script>
	
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	

	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable( {
				"order": [[ 2, "desc" ]],
				lengthMenu: [[5,10,50, -1], [5,10,50, 'All']]
			} );
			$('#example1').DataTable( {
				pageLength : 5,
				"order": [[ 2, "desc" ]],
				lengthMenu: [[10,50, -1], [10,50, 'All']]
			} );
			$('#example2').DataTable( {
				"order": [[ 2, "desc" ]],
				lengthMenu: [[10,50, -1], [5,10,50, 'All']]
			} );
			$('#narcsTable').DataTable( {
				pageLength : 5,
				"order": [[ 1, "desc" ]],
				lengthMenu: [[5,10,50, -1], [5,10,50, 'All']]
			} );
			$('#example3').DataTable( {
                pageLength : 5,
				"order": [[ 2, "desc" ]],
				lengthMenu: [[5,10,50, -1], [5,10,50, 'All']]
			} );
			
		} );
        /* **** Main Blogs Slider **** */
        $("#owl-blog-one").owlCarousel({
            autoplay:false,
            loop:false,
            autoplayTimeout:5000,
            smartSpeed: 1000,
            autoplayHoverPause:false,
            nav: true,
            navText:true,
            dots:true,
            items:1,
            margin:0
        });

        $("#owl-blog-two").owlCarousel({
            autoplay:false,
            loop:false,
            autoplayTimeout:5000,
            smartSpeed: 1000,
            autoplayHoverPause:false,
            nav: true,
            navText:true,
            dots:true,
            items:1,
            margin:0
        });

        $("#owl-blog-three").owlCarousel({
            autoplay:false,
            loop:false,
            autoplayTimeout:5000,
            smartSpeed: 1000,
            autoplayHoverPause:false,
            nav: true,
            navText:true,
            dots:true,
            items:1,
            margin:0
        });

        $("#owl-blog-four").owlCarousel({
            autoplay:false,
            loop:false,
            autoplayTimeout:5000,
            smartSpeed: 1000,
            autoplayHoverPause:false,
            nav: true,
            navText:true,
            dots:true,
            items:1,
            margin:0
        });
        /* **** End Main Blogs Slider **** */

        $("#owl-latest-blogs").owlCarousel({
            autoplay:false,
            loop:false,
            autoplayTimeout:5000,
            smartSpeed: 1000,
            autoplayHoverPause:false,
            nav: true,
            navText:true,
            dots:true,
            items:4,
            margin:15,
            responsiveClass:true,
            responsive:{
                1000:{
                        items:4
                },
                650:{
                        items:2
                },
                600:{
                        items:2
                },
                550:{
                        items:2
                },
                400:{
                        items:1
                },
                460:{
                        items:1
                },
                350:{
                        items:1
                },
                300:{
                        items:1
                }
            }                                                       
        }); 

        $("#owl-offers").owlCarousel({
            autoplay:true,
            loop:false,
            autoplayTimeout:5000,
            smartSpeed: 1000,
            autoplayHoverPause:false,
            nav: true,
            navText:true,
            dots:true,
            items: 3,
            margin:30,
            responsiveClass:true,
            responsive:{
                1000:{
                        items:3
                },
                650:{
                        items:2
                },
                600:{
                        items:2
                },
                550:{
                        items:2
                },
                400:{
                        items:1
                },
                460:{
                        items:1
                },
                350:{
                        items:1
                },
                300:{
                        items:1
                }
            }                                                       
        });         
		
    </script>
	<script type="text/javascript">
        /* ** Responsive Nav js ** */
        $('.navbar-toggle').on('click', function(){
          $('.responsive-bar').addClass('mobile-menu-open');
        });

        $('.close-btn').on('click', function(){
          $('.responsive-bar').removeClass('mobile-menu-open');
        });
        /* ** End Responsive Nav js ** */  
    </script>
	<script type="text/javascript">
    <?php if ($this->session->flashdata('success')): ?>

        toastr.success("<?= $this->session->flashdata('success'); ?>");

    <?php $this->session->unset_userdata('success');
    elseif ($this->session->flashdata('error')): ?>

        toastr.error("<?php echo $this->session->flashdata('error'); ?>");
    
    <?php $this->session->unset_userdata('error');

    elseif ($this->session->flashdata('warning')): ?>

        toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");

    <?php $this->session->unset_userdata('warning'); 
    elseif ($this->session->flashdata('info')): ?>

        toastr.info("<?php echo $this->session->flashdata('info'); ?>");

    <?php $this->session->unset_userdata('info'); 
    endif; ?>
</script>