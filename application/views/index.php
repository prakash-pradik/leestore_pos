<div id="page-content">
    <!-- eCommerce Dashboard Header -->
    <div class="content-header">
        <ul class="nav-horizontal text-center">
            <li>
                <a href="<?php echo base_url('dashboard'); ?>" class="bg-amethyst"><i class="fa fa-bar-chart"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?php echo base_url('products'); ?>" class="bg-success"><i class="gi gi-shopping_bag"></i> Products</a>
            </li>
            <li>
                <a href="<?php echo base_url('customers'); ?>" class="bg-warning"><i class="gi gi-user"></i> Customers</a>
            </li>
			<li>
                <a href="<?php echo base_url('payments'); ?>" class="bg-info" target="_blank"><i class="fa fa-inr"></i> Payments</a>
            </li>
        </ul>
    </div>
    <!-- END eCommerce Dashboard Header -->

    <!-- Quick Stats 
    <div class="row text-center">
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background">
                    <h4 class="widget-content-light"><strong>Pending</strong> Orders</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 animation-expandOpen">3</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Conversion</strong> Rate</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">4.7%</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Orders</strong> Today</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">120</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Earnings</strong> Today</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">$ 4.250</span></div>
            </a>
        </div>
    </div>
    END Quick Stats -->

    <!-- eShop Overview Block -->
    <div class="block full">
        <!-- eShop Overview Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <div class="btn-group btn-group-sm">
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default dropdown-toggle" data-toggle="dropdown">Last Year <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="active">
                            <a href="javascript:void(0)">Last Year</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Last Month</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">This Month</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Today</a>
                        </li>
                    </ul>
                </div>
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
            </div>
            <h2><strong>Shop</strong> Overview</h2>
        </div>
        <!-- END eShop Overview Title -->

        <!-- eShop Overview Content -->
        <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="row push">
                        <div class="col-xs-6">
                            <h3><strong class="animation-fadeInQuick">45.000</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Total Orders</a></small></h3>
                        </div>
                        <div class="col-xs-6">
                            <h3><strong class="animation-fadeInQuick">$ 1.200,00</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Cart Value</a></small></h3>
                        </div>
                        <div class="col-xs-6">
                            <h3><strong class="animation-fadeInQuick">1.520.000</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Visits</a></small></h3>
                        </div>
                        <div class="col-xs-6">
                            <h3><strong class="animation-fadeInQuick">28.000</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Customers</a></small></h3>
                        </div>
                        <div class="col-xs-6">
                            <h3><strong class="animation-fadeInQuick">3.5%</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Conv. Rate</a></small></h3>
                        </div>
                        <div class="col-xs-6">
                            <h3><strong class="animation-fadeInQuick">4.250</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Products</a></small></h3>
                        </div>
                        <div class="col-xs-6">
                            <h3><strong class="animation-fadeInQuick">$ 260.000,00</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Net Profit</a></small></h3>
                        </div>
                        <div class="col-xs-6">
                            <h3><strong class="animation-fadeInQuick">$ 16.850,00</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Payment Fees</a></small></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <!-- Flot Charts (initialized in js/pages/ecomDashboard.js), for more examples you can check out http://www.flotcharts.org/ -->
                    <div id="chart-overview" style="height: 350px;"></div>
                </div>
            </div>
        <!-- END eShop Overview Content -->
    </div>
    <!-- END eShop Overview Block -->
</div>
