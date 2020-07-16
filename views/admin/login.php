<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Pharma</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/dashboard/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url(); ?>assets/dashboard/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/dashboard/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/dashboard/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url(); ?>assets/dashboard/js/modernizr.min.js"></script>
		<style>
		@media only screen and (max-width: 768px) {
		.account-page-full{
			width:100% !important;
		}
		}
		</style>

    </head>

    <body>

        <!-- Begin page -->
        <div class="accountbg" style="background: url('<?php echo base_url(); ?>assets/images/gym-slider-01.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="<?php echo base_url(); ?>assets/images/logo.jpeg" alt="" height="100"></span>
                                </a>
                            </h2>

                            <form method="post" action="<?php echo base_url(); ?>admin/checklogin">

                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="text"  name="username" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                        <a href="page-recoverpw.html" class="text-muted float-right"><small>Forgot your password?</small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="password" required="" id="password" placeholder="Enter your password">
                                    </div>
                                </div>
                                <div class="form-group row text-center">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>/dashboard/js/jquery.app.js"></script>

    </body>
</html>