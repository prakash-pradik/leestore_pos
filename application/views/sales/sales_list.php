<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Sales List
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->
    <?php 
        $url_segment = $this->uri->segment(2);
        if($url_segment == 'all') $filter_name = 'All'; 
        if($url_segment == 'week') $filter_name = 'This Week'; 
        if($url_segment == 'last_week') $filter_name = 'Last Week'; 
        if($url_segment == 'month') $filter_name = 'This Month'; 
        if($url_segment == 'last_month') $filter_name = 'Last Month'; 
        if($url_segment == 'custom') $filter_name = 'Custom'; 
    ?>
    <div class="row text-center" style="display: flex;justify-content: center;">
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-success">
                    <h4 class="widget-content-light"><strong>Sales</strong> <?php echo $filter_name; ?></h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><?php if(isset($stats) && $stats->today_sales) echo $stats->today_sales; else echo '0'; ?></span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-amethyst">
                    <h4 class="widget-content-light"><strong>Earnings</strong> <?php echo $filter_name; ?></h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">₹<?php if(isset($stats) && $stats->total_income) echo number_format($stats->total_income,2); else echo '0.00'; ?></span></div>
            </a>
        </div>
        <!-- <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-info">
                    <h4 class="widget-content-light"><strong>Sales</strong> Rate</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">
                    <?php if(isset($prev_amount) && $prev_amount->yesterday_sales != 0) echo number_format(100 * ($stats->total_income - $prev_amount->yesterday_sales) / $prev_amount->yesterday_sales, 2); else echo '0'?>%
                </span></div>
            </a>
        </div> -->
        <div class="col-sm-6 col-lg-3">
            <a href="<?php echo base_url('sales_draft/'.$url_segment); ?>" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-autumn">
                    <h4 class="widget-content-light"><strong>Pending</strong> Sales</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 animation-expandOpen"><?php if(isset($stats) && $stats->total_pending) echo $stats->total_pending; else echo '0'; ?></span></div>
            </a>
        </div>
    </div>
    
    <!-- Datatables Content -->
	<div class="block full">
        <div class="block-title">
            <h2><strong>Sale</strong> Table</h2>
            <div class="block-options pull-right">
                <a href="<?php echo base_url('payments'); ?>" target="_blank" class="btn btn-success" data-toggle="tooltop" title="Add New"><i class="fa fa-plus"></i> Add New</a>

                <div class="btn-group btn-group-md">
                    <a href="javascript:void(0)" class="btn btn-alt btn-default dropdown-toggle" data-toggle="dropdown"><?php echo $filter_name; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="<?php if($url_segment == 'all') echo 'active'; ?>">
                            <a href="<?php echo base_url('sales_list/all'); ?>">Sales All</a>
                        </li>
                        <li class="<?php if($url_segment == 'week') echo 'active'; ?>">
                            <a href="<?php echo base_url('sales_list/week'); ?>">This Week</a>
                        </li>
                        <li class="<?php if($url_segment == 'last_week') echo 'active'; ?>">
                            <a href="<?php echo base_url('sales_list/last_week'); ?>">Last Week</a>
                        </li>
                        <li class="<?php if($url_segment == 'month') echo 'active'; ?>">
                            <a href="<?php echo base_url('sales_list/month'); ?>">This Month</a>
                        </li>
                        <li class="<?php if($url_segment == 'last_month') echo 'active'; ?>">
                            <a href="<?php echo base_url('sales_list/last_month'); ?>">Last Month</a>
                        </li>
                        <!-- <li class="<?php if($url_segment == 'custom') echo 'active'; ?>">
                            <a href="#modal-custom-range" data-toggle="modal">Custom</a>
                        </li> -->
                    </ul>
                </div>

            </div>
        </div>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Sl.No</th>
                        <th>Invoice #</th>
                        <th>Customer Name</th>
                        <th>Customer Phone</th>
                        <th>Net Amount(₹)</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($orders)) {
                        $i = 1; 
                        foreach($orders as $order){
                            
                            if($order['order_status'] == 'paid')
                                $orderStatus = '<a href="javascript:void(0)" class="label label-success">Paid</a>';
                            else
                                $orderStatus = '';
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="text-capitalize">
                            <a href="<?php echo base_url('sales/invoice/'.$order['id']); ?>" class="text-info"><?php echo $order['invoice_no']; ?></a>
                        </td>
						<td class="text-capitalize"><?php if(!empty($order['customer_name'])) echo $order['customer_name']; else echo '-'; ?></td>
                        <td class="text-capitalize"><?php echo $order['customer_phone']; ?></td>
                        <td class="text-capitalize"><?php echo '₹ '.number_format($order['net_amount'],2); ?></td>
                        <td class="text-capitalize"><?php echo $orderStatus; ?></td>
                        <td class="text-capitalize"><?php echo date('d-m-Y', strtotime($order['order_date'])); ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="<?php echo base_url('sales/invoice_pdf/'.$order['id']); ?>" data-toggle="tooltip" title="Invoice" class="btn btn-warning btn-xs"><i class="fa fa-print"></i></a>

                                <a href="<?php echo base_url('sales/invoice/'.$order['id']); ?>" data-toggle="tooltip" title="View" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>

                                <a href="<?php echo base_url('pos_update/'.$order['id']); ?>" data-toggle="tooltip" title="Update" class="btn btn-info btn-xs" target="_blank"><i class="fa fa-pencil"></i></a>

                                <a href="javascript:void(0)" data-id="<?php echo $order['id']; ?>" onclick="deleteSalesData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php
                    $i++;
                        }
                    }?>
                    
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Content -->
</div>

