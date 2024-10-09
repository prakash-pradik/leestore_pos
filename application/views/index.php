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
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default dropdown-toggle" data-toggle="dropdown">This Month <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="javascript:void(0)">Today</a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0)">This Week</a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0)">Last Week</a>
                        </li>
                        <li class="active">
                            <a href="javascript:void(0)">This Month</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Last Month</a>
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
    <div class="row">
        <div class="col-lg-6">
            <!-- Latest Orders Block -->
            <div class="block">
                <!-- Latest Orders Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="page_ecom_orders.php" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                    </div>
                    <h2><strong>Top</strong> Customers</h2>
                </div>
                <!-- END Latest Orders Title -->

                <!-- Latest Orders Content -->
                <table class="table table-borderless table-striped table-vcenter table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th style="width:150px;">Name</th>
                            <th class="hidden-xs">Phone Number</th>
                            <th class="hidden-xs text-center">Sale Count</th>
                            <th class="text-right">Sale Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php //var_dump($customers); 
                            if(isset($customers)){
                                foreach($customers as $cus){
                        ?>
                        <tr>
                            <td class="text-center" ><a href="<?php echo base_url('customer/'.$cus['id']); ?>" class="text-info"><small><?php echo 'CUS.'.$cus['id']; ?></small></a></td>
                            <td class=""><a href="javascript:void(0)" class="text-info"><?php echo $cus['name']; ?></a></td>
                            <td class="hidden-xs"><?php echo '+91-'.$cus['phone_number']; ?></td>
                            <td class="hidden-xs text-center"><?php echo $cus['order_count']; ?></td>
                            <td class="text-right"><strong>₹<?php echo number_format($cus['order_total'],2); ?></strong></td>
                        </tr>
                        <?php } } ?>
                    </tbody>
                </table>
                <!-- END Latest Orders Content -->
            </div>
            <!-- END Latest Orders Block -->
        </div>
        <div class="col-lg-6">
            <!-- Top Products Block -->
            <div class="block">
                <!-- Top Products Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="page_ecom_products.php" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2><strong>Top</strong> Products</h2>
                </div>
                <!-- END Top Products Title -->

                <!-- Top Products Content -->
                <table class="table table-borderless table-striped table-vcenter table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th style="width:150px;">Name</th>
                            <th class="hidden-xs text-center">Sale Count</th>
                            <th class="text-right">Sale Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php //var_dump($customers); 
                            if(isset($products)){
                                foreach($products as $prod){
                        ?>
                        <tr>
                            <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.php" class="text-info"><small>PID.<?php echo $prod['id']; ?></small></a></td>
                            <td><a href="javascript:void(0);"><?php echo $prod['product_name']; ?></a></td>
                            <td class="text-center"><strong><?php echo $prod['order_count']; ?></strong></td>
                            <td class="text-right"><strong>₹<?php echo number_format($prod['order_total'],2); ?></strong></td>
                        </tr>
                        <?php } } ?>
                    </tbody>
                </table>
                <!-- END Top Products Content -->
            </div>
            <!-- END Top Products Block -->
        </div>
    </div>
</div>
