<html>
<head>
<style>
    .invoice-logo img {
    width: 200px;
}

.invoice-logo h5,
.customer-details table tr td h5 {
    font-size: 15px;
    font-weight: 600;
    padding-right: 5px;
}

.customer-details {
    padding-top: 30px;
}

.company-details table {
    width: 100%;
    border-left: 1px solid;
}

.phone-section {
    border-bottom: 1px solid;
}

.qr-section {
    border-left: 1px solid;
}

.company-details table tr td {
    padding: 10px;
}

.company-details table tr td h5 {
    font-size: 16px;
    font-weight: 600;
    margin: 0px;
    padding-bottom: 5px;
}

.company-details table tr td h3 {
    font-size: 18px;
    font-weight: 600;
    margin: 0px;
    padding-bottom: 5px;
}

.gst-section {
    border-top: 1px solid;
    border-bottom: 1px solid;
}

.gst-section h5 {
    padding: 5px 0px;
}

.social-section h6 {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 0px;
    margin-top: 5px;
}

.address-section h5 {
    line-height: 1.5;
}

.products_list {
    background-image: url('../img/lee_gray1.png');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
}

.products_list thead tr th {
    font-weight: bold;
}

.products_list tbody tr td {
    height: 50px;
}

.products_list tbody tr td h5 {
    font-weight: 400;
}

.descrip-block {
    background-size: cover;
}

.footer-block {
    margin-top: 30px;
}

.footer-block table tr td h5 {
    font-size: 16px;
    font-weight: 600;
}

.footer-block table tr td p {
    font-size: 12px;
    width: 60%;
    margin-bottom: 5px;
}

.footer-block table tr td h6 {
    font-weight: 600;
}

.sale-person {
    width: 40%;
    text-align: center;
}

.signature-row td {
    padding-top: 80px;
}

.signature-row td:first-child h5 {
    padding-left: 50px;
}

/* .products_list thead tr th,
.products_list tbody tr td {
    border: 1px solid !important;
} */

.discount_row td {
    height: 10px !important;
}

.discount_row td h5 {
    font-size: 14px;
    font-weight: 600 !important;
}
.text-center{
    text-align: center;
}
.text-right{
    text-align: right;
}
</style>
</head>
<!-- Page content -->
<div id="page-content">
    <!-- Invoice Block -->
    <div class="block full">
        <!-- Invoice Content -->
            <div class="block-section" style="width:100%">
                <!-- Customer Info -->

                <table> <tr>
                <td style="width:65%">
                <div class="col-sm-5" style="width:50%">
                    
                    <div class="invoice-logo" style="display:flex;">
                        <table>
                            <tr>
                            <td style="width: 50%">
                                <img src="http://localhost/Git_projects/leestore_billing/assets/img/lee_store.png" alt="photo" style="width: 150px;">
                            </td>
                            <td style="width: 40%">
                                <table> 
                                    <tr>
                                        <td class="text-right"><h5 style="padding-bottom:50px;">Invoice No: </h5></td>
                                        <td><h5><?php echo $order->invoice_no; ?></h5></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><h5>Invoice Date: </h5></td>
                                        <td><h5>02-10-2024</h5></td>
                                    </tr>
                                </table>
                            </td> <td></td>
                            </tr>
                        </table>
                    </div>

                    <div class="customer-details">
                        <table>
                            <tr>
                                <td><h5>M/S :</h5></td>
                                <td class="dotted-line"><h5> <?php echo $order->customer_name; ?> </h5></td>
                            </tr>
                            <tr>
                                <td><h5>Contact :</h5></td>
                                <td class="dotted-line"><h5><?php echo $order->customer_phone; ?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Address :</h5></td>
                                <td class="dotted-line"><h5><?php echo $order->customer_address; ?></h5></td>
                            </tr>
                        </table>
                    </div>
                </div>
                </td>
                <!-- END Customer Info -->
                <td style="width:35%">
                <!-- Company Info -->
                <div class="col-sm-4 company-details" style="width:50%">
                    <table>
                        <tr rowspan="2">
                            <td class="phone-section">
                                <h3>+91 99945 78802</h3>
                                <h3>+91 96265 89922</h3>
                            </td>
                            <td class="qr-section" rowspan="2">whatsapp2</td>
                        </tr>
                        <tr class="text-left">
                            <td class="link-section">
                                <h5>info@leestoreindia.com</h5>
                                <h5>www.leestoreindia.com</h5>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="social-section">
                                <h6>@leestore_india</h6>
                                <h6>@pandijegan.k</h6> 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="gst-section">
                                <h5>GSTIN : 33DRNPP3773C1ZM </h5> 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="address-section">
                                <h5>
                                    #4765/5, Ayyanarpuram 1st Street, <br/>
                                    Alangudi Road, Pudukkottai - 622001<br/>
                                    Tamilnadu, India.
                                </h5>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END Company Info -->
                </td>
                </tr></table>
            </div>

            <!-- Products Table -->
            <div class="table-responsive descrip-block">
                <table class="table table-vcenter products_list" border="1">
                    <thead>
                        <tr>
                            <th class="text-center">S.NO</th>
                            <th style="width: 40%;">DESCRIPTION OF GOODS</th>
                            <th style="width: 10%;" class="text-center">HSN/SAC</th>
                            <th class="text-center">QTY</th>
                            <th class="text-center">UNIT PRICE</th>
                            <th class="text-right">AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php //var_dump($order_items); ?>
                        <?php if(!empty($order_items)) {
                            $count = count($order_items);
                            $i = 1;  $quantity = 0;
                            foreach($order_items as $items){
                        
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $i; ?></td>
                            <td>
                                <h5><?php echo $items['product_name']; ?></h5>
                            </td>
                            <td></td>
                            <td class="text-center"><strong><?php echo $items['quantity']; ?></strong></td>
                            <td class="text-center"><?php echo number_format($items['price']); ?></td>
                            <td class="text-right"><strong><?php echo number_format($items['sub_total'],2); ?></strong></td>
                        </tr>
                        <?php $i++; 
                        $quantity = $quantity + $items['quantity'];
                                } 
                            } 
                        ?>
                        <?php
                            for ($x = $count; $x < 5; $x++) {
                                echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
                            }
                        ?>
                        <?php if($order->order_discount !== 0){ ?>
                            <tr class="discount_row">
                                <td></td><td></td><td></td><td></td>
                                <td class="text-left"> 
                                    <h5>Discount : <?php echo $order->order_discount; ?>%</h5>
                                </td>
                                <td class="text-right">
                                    <h5>
                                        <?php 
                                            $disAmt = ($order->order_discount / 100) * $order->gross_amount; 
                                            echo number_format($disAmt,2);
                                        ?>
                                    </h5>
                                </td>
                            </tr>
                        <?php  } ?>
                        <tr>
                            <td colspan="3"></td>
                            <td class="text-center"> 
                                <?php echo $quantity; ?>
                            </td>
                            <td>
                                <h4>CSGT : 9%</h4>
                                <h4>SSGT : 9%</h4>
                            </td>
                            <td class="text-right">
                                <h4>TOTAL</h4>
                                <h4><?php echo number_format($order->net_amount,2); ?></h4>
                            </td>
                        </tr>
                
                    </tbody>
                </table>
            </div>
            <!-- END Products Table -->
            <div class="table-responsive footer-block">
                <table>
                    <tr>
                        <td style="width:60%">
                            <h5>Terms & Conditions</h5>
                            <p>Note: Mobile handset and laptop system and all electronics goods are warranted for a period defined by the respective manufactures against defect in material & workmanship Lee Store is not given warrant and does not hold out any warranty of product sold.</p>
                            <h6>GOODS RECEIVED IN WORKING CONDITION</h6>
                        </td>
                        <td class="sale-person">
                            <h4>SALES PERSON:</h4>
                        </td>
                    </tr>

                    <tr class="signature-row">
                        <td>
                            <h5>Customer Signature</h5>
                        </td>
                        <td class="sale-person">
                            <h5>Signature</h5>
                        </td>
                    </tr>
                </table>
            </div>

        <!-- END Invoice Content -->
    </div>
    <!-- END Invoice Block -->
</div>

</html>
