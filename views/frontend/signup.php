<?php $this->load->view('frontend/layout/header'); ?>
<body>
    
    <!-- Header -->
    <?php $this->load->view('frontend/layout/nav'); ?>
    <!-- End Header -->

    <!-- Form 483 -->
    <section class="form-483-wrp">
        <div class="titlebar">
            <h2>Signup</h2>
        </div>
        <div class="container">
            <div class="row">
				<div class="col-md-3"></div>
                <div class="col-md-6 col-sm-6 remark-frm">
						<form method="post" action="<?php echo base_url(); ?>home/register">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" required name="name" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone No* </label>
                            <input type="text" required name="phone" placeholder="" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Email </label>
                            <input type="email"  name="email" placeholder="" class="form-control">
                        </div>
						 <div class="form-group">
                            <label>Password </label>
                            <input type="password" required name="password" placeholder="" class="form-control">
                        </div>
                        <button type="submit" class="btn-main">Signup</button>
                    </form>
					<h4 class="mtop"><a href="<?php echo base_url(); ?>login">Already have account? Please Login.</a></h4 >
                </div>
				<div class="col-md-3"></div>
            </div>
        </div>
    </section>
    <!-- End Form 483 -->

   <?php $this->load->view('frontend/layout/footer'); ?>
</body>
</html>