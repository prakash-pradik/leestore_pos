        <!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Lee</strong> Store</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->
            
            <!-- Page Container -->
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="<?php echo base_url('admin'); ?>" class="sidebar-brand" style="display:flex; justify-content:center;">
                                <img src="<?php echo base_url(IMG); ?>/logo.png" style="padding: 3px 0px;"><!-- <span class="sidebar-nav-mini-hide"><strong>Lee</strong> Store</span> -->
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url(IMG); ?>/placeholders/avatars/avatar2.jpg" alt="avatar">
                                    </a>
                                </div>
                                <div class="sidebar-user-name"> <?php if(!empty($session_user) && $session_user['admin_type'] === 'super_admin') echo 'Admin'; else echo 'Seller'; ?></div>
                                <div class="sidebar-user-links">
                                    <?php if(!empty($session_user) && $session_user['admin_type'] === 'super_admin') { ?>
                                        <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                                    <?php } ?>
                                    <a href="<?php echo base_url('logout') ?>" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                </div>
                            </div>
                            <!-- END User Info -->                            
                            
                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="<?php echo base_url('dashboard'); ?>" class="<?php if($this->uri->segment(1) == 'dashboard') echo 'active'; ?>"><i class="gi gi-home sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('daily_sales'); ?>" class="<?php if($this->uri->segment(1) == 'daily_sales') echo 'active'; ?>"><i class="hi hi-calendar sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"> Daily Sales</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('full_report/month'); ?>" class="<?php if($this->uri->segment(1) == 'full_report') echo 'active'; ?>"><i class="gi gi-table sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"> Full Report</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('buy_sell'); ?>" class="<?php if($this->uri->segment(1) == 'buy_sell') echo 'active'; ?>"><i class="hi hi-shopping-cart sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"> Buy/Sell Mobiles</span></a>
                                </li>

                                <?php if(!empty($session_user) && $session_user['admin_type'] === 'super_admin') { ?>
								
								<li>
                                    <a href="<?php echo base_url('employee_advance'); ?>" class="<?php if($this->uri->segment(1) == 'employee_advance') echo 'active'; ?>"><i class="hi hi-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"> Employee Advance</span></a>
                                </li>
								
								<li>
                                    <a href="<?php echo base_url('incomes'); ?>" class="<?php if($this->uri->segment(1) == 'incomes') echo 'active'; ?>"><i class="hi hi-arrow-down sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"> Incomes</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('outcomes'); ?>" class="<?php if($this->uri->segment(1) == 'outcomes') echo 'active'; ?>"><i class="hi hi-arrow-up sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide"> Outcomes</span></a>
                                </li>
                                
                                <?php } ?>
                            </ul>
                            <!-- END Sidebar Navigation -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->
                        </ul>
                        <!-- END Left Header Navigation -->
                        
                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <li>
                                <h3 class="text-bold" style="margin-right:30px;">
                                    <span id="time_txt"></span>
                                </h3>
                            </li>
                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url(IMG); ?>/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <?php if(!empty($session_user) && $session_user['admin_type'] === 'super_admin') { ?>
                                    <li class="dropdown-header text-center">Account</li>
                                    
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                        <a href="#modal-user-settings" data-toggle="modal">
                                            <i class="fa fa-cog fa-fw pull-right"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <?php } ?>
                                    <li>
                                        <a href="<?php echo base_url('logout') ?>"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                    </li>                                    
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->