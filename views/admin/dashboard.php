<!doctype html>
<html lang="en">
    <?php $this->load->view('admin/layout/header'); ?>

    <body>

        <?php $this->load->view('admin/layout/menu'); ?>
        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Overview</h4>

                            <div class="row">
                                <div class="col-md-6  col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#0acf97" value="0" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <h4 class="text-muted mb-0 mt-2">Total Member</h4>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6  col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#f9bc0b" value="0" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <h4 class="text-muted mb-0 mt-2">Total Inquiry</h4>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6  col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#f1556c" value="" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <h4 class="text-muted mb-0 mt-2">Total Income</h4>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6  col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#2d7bf4" value="0" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <h4 class="text-muted mb-0 mt-2">Total Expense</h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.slimscroll.js"></script>        
        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>dashboard/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="<?php echo base_url(); ?>assets/dashboard/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/js/jquery.app.js"></script>

    </body>
</html>