<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Brands List
            </h1>
        </div>
    </div>
    <!-- END Datatables Header -->
    <?php
        $message = $this->session->flashdata('message');
        if(isset($message) && $message != "")
        echo successmessage($message);
    ?>
    <!-- Datatables Content -->
	<div class="block full">
        <div class="block-title">
            <h2><strong>Brand</strong> Table</h2>
            <div class="block-options pull-right">
                <a href="#modal-new-brand" class="btn btn-success" data-toggle="modal" title="Add New"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Sl.No</th>
                        <th>Brand Name</th>
						<th>Status</th>
                        <th>Date Added</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($brands)) {
                        $i = 1; 
                        foreach($brands as $brand){
                    ?>
                    <tr>
                        <td class="text-center"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></td>
                        <td class="text-capitalize"><?php echo $brand['brand_name']; ?></td>
						<td class="">
                            <?php 
                            if($brand['status'] == 1) 
                                echo '<span class="label label-success">Active</span>';
                            else
                                echo '<span class="label label-warning">Deactive</span>';
                            ?>
                        </td>
                        <td class=""><?php echo date('d-m-Y H:i a', strtotime($brand['date_added'])); ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="#modal-update-brand" data-id="<?php echo $brand['id']; ?>" data-name="<?php echo $brand['brand_name']; ?>" onclick="fetchBrandDetails(this);" data-toggle="modal" title="Update" class="btn btn-info enable-tooltip"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-id="<?php echo $brand['id']; ?>" onclick="deleteBrandData(this);" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
