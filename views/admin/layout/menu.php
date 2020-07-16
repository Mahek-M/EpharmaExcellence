<!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                            <img src="<?php echo base_url(); ?>assets/images/logo.jpeg" alt="" height="70" class="logo-small">
                            <img src="<?php echo base_url(); ?>assets/images/logo.jpeg" alt="" height="90" class="logo-large">
                        </a>
                    </div>
                    <!-- End Logo container-->
                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name">Admin <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>
                                    <!-- item-->
                                    <a href="<?php echo base_url();?>dashboard/logout" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="<?php echo base_url();?>dashboard"><i class="icon-speedometer"></i>Dashboard</a>
                            </li>
							<li class="has-submenu">
                                <a href="#"><i class="icon-layers"></i>New</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url();?>admin/add_new">Add New</a></li>
                                    <li><a href="<?php echo base_url();?>admin/newslist">News List</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="icon-layers"></i>Form 483</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url();?>home/add_form">Add Form483</a></li>
                                </ul>
                            </li>
							<li class="has-submenu">
                                <a href="#"><i class="icon-layers"></i>Inspector</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url();?>home/add_inspector">Add Insppector</a></li>
                                </ul>
                            </li>
							
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->