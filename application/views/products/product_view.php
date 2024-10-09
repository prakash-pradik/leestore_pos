
<div id="page-content">
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-table"></i>Product View
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="javascript:window.history.go(-1);" class="text-info"><h5>Back Page</h5></a></li>
    </ul>
    
    <div class="row">
        <form action="<?php echo base_url('products/update_product'); ?>" id="product-update-validation" method="post" class="form-horizontal form-bordered product-form" enctype="multipart/form-data">
            <div class="col-md-7">
                <div class="block">
                    <div class="block-title">
                        <h2><strong>Product</strong> Details</h2>
                    </div>
                        <div class="row" style="margin:0px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Store</label>
                                    <p class="form-control-static"><?php echo $product->store_name; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Product Type </label>
                                    <p class="form-control-static text-capitalize"><?php echo $product->product_type; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Product Name </label>
                                    <p class="form-control-static"><?php echo $product->product_name; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Category Name </label>
                                    <p class="form-control-static"><?php if(isset($product->category_name)) echo $product->category_name; else echo '-'; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Brand Name</label>
                                    <p class="form-control-static"><?php if(isset($product->brand_name)) echo $product->brand_name; else echo '-'; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">IMEI Number 1</label>
                                    <p class="form-control-static"><?php if(isset($product->imei_number1) && $product->imei_number1 !== '') echo $product->imei_number1; else echo '-'; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">IMEI Number 2</label>
                                    <p class="form-control-static"><?php if(isset($product->imei_number2) && $product->imei_number2 !== '') echo $product->imei_number2; else echo '-'; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Serial Number</label>
                                    <p class="form-control-static"><?php if(isset($product->serial_number) && $product->serial_number !== '') echo $product->serial_number; else echo '-'; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Barcode</label>
                                    <p class="form-control-static"><?php echo $product->barcode; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Image</label><br/>
                                    <img src="<?php echo base_url(UPLOADS).'products/'.$product->image.'.jpg'; ?>" style="width:100px">
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>

            <div class="col-md-5">
                <!------ Price Block ----->
                <div class="block">
                    <div class="block-title">
                        <h2><strong>Price</strong> Detail</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">MRP  </label>
                                <p class="form-control-static"><?php echo $product->price; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Cost Price  </label>
                                <p class="form-control-static"><?php echo $product->cost_price; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Selling Price  </label>
                                <p class="form-control-static"><?php echo $product->sell_price; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Margin(%)</label>
                                <p class="form-control-static"><?php echo '-'; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!------ Price Block ----->

                <!------ Stock Block ----->
                <div class="block">
                    <div class="block-title">
                        <h2><strong>Stock</strong> Detail</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Quantity</label>
                                <p class="form-control-static"><?php echo $product->qnty; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Re-order Quantity</label>
                                <p class="form-control-static"><?php echo $product->reorder_qnty; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!------ Stock Block ----->
            </div>


        </form>

    </div>

</div>
