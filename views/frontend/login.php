<?php $this->load->view('frontend/layout/header'); ?>
<body>
    
    <!-- Header -->
    <?php $this->load->view('frontend/layout/nav'); ?>
    <!-- End Header -->

    <!-- Form 483 -->
    <section class="form-483-wrp">
        <div class="titlebar">
            <h2>Login</h2>
        </div>
        <div class="container">
            <div class="row">
				<div class="col-md-3"></div>
                <div class="col-md-6 col-sm-6 remark-frm">
						<form method="post" action="<?php echo base_url(); ?>home/loginuser">
                        <div class="form-group">
                            <label>Phone No* </label>
                            <input type="text" required name="phone" placeholder="" class="form-control">
                        </div>
						 <div class="form-group">
                            <label>Password </label>
                            <input type="password" required name="password" placeholder="" class="form-control">
                        </div>
                        <button type="submit" class="btn-main">Login</button>
                    </form>
					<h4 class="mtop"><a href="<?php echo base_url(); ?>signup">Do not have account? Please Register.</a></h4 >
                </div>
				<div class="col-md-3"></div>
            </div>
        </div>
    </section>
    <!-- End Form 483 -->

   <?php $this->load->view('frontend/layout/footer'); ?>
</body>
</html>