var base_url = "";

$(document).ready(function () {

    alertify.set('notifier', 'position', 'top-right');

    startTime();

    base_url = document.getElementById("base_url").value; //$('#base_url').val();

    triggerInput();

    $('#bill_date').datepicker("setDate", "today");
    $(".input-select2").select2();

    customerFetch();

    console.log(globalData);
    if (globalData) {
        setTimeout(() => {
            $('#pos_customer').val(globalData.customer_id).trigger('change');

        }, 1000);
    }
})
function triggerInput() {
    $('.numeric').on('input', function (event) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
}

function startTime() {
    const today = new Date();
    let hours = checkTime(today.getHours());
    let minutes = checkTime(today.getMinutes());
    let seconds = checkTime(today.getSeconds());
    let ampm = hours >= 12 ? 'PM' : 'AM';

    hours = hours % 12;
    hours = hours ? hours : 12;
    hours = checkTime(hours);

    let day = checkTime(today.getUTCDate());
    let month = checkTime(today.getUTCMonth() + 1); // months from 1-12
    let year = today.getUTCFullYear();

    document.getElementById('time_txt').innerHTML = day + "-" + month + "-" + year + " " + hours + ":" + minutes + ":" + seconds + " " + ampm;
    setTimeout(startTime, 1000);
}

function checkTime(i) {
    if (i < 10) { i = "0" + i };  // add zero in front of numbers < 10
    return i;
}

$('#stock_category').change(function () {
    var SelectedValue = $('option:selected', this).val();
    var prodOptions = '<option value="">Please select</option>';
    $.ajax({
        url: base_url + 'admin/fetch_data_array',
        type: 'post',
        data: { id: SelectedValue, tbl_name: 'products' },
        dataType: 'json',
        success: function (res) {

            if (res.status == 1) {
                $.each(res.data, function (key, value) {
                    prodOptions += '<option value="' + value.id + '">' + value.product_name + '</option>';
                });
                $('#stock_product_id').html(prodOptions);
            } else {
                prodOptions = '<option value="">Please select</option>';
                $('#stock_product_id').html(prodOptions);
            }
        }
    });

});

function showSupplierBlock(show) {
    //alert(show);
    if (show == 'new') {
        $("#new_supplier_block").show();
        $("#old_supplier_block").hide();
        $("#supplier_type").val(show);
    } else {
        $("#old_supplier_block").show();
        $("#new_supplier_block").hide();
        $("#supplier_type").val(show);
    }
}

function fetchCatDetails(mythis) {
    var id = $(mythis).data('id');
    $.ajax({
        url: base_url + 'admin/fetch_data',
        type: 'post',
        data: { id: id, tbl_name: 'categories' },
        dataType: "json",
        success: function (res) {
            $('.category_id').val(res.id);
            $('.category_name').val(res.category_name);
            $('.category_details').val(res.details);
        }
    });
}

function deleteCatData(mythis) {
    //$.fn.dataTable.ext.errMode = 'none';
    var id = $(mythis).data('id');
    swal({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        confirmButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!",
        showCancelButton: true
    })
        .then((result) => {
            if (result.value) {
                $.ajax({
                    url: base_url + 'admin/delete_by_id',
                    type: 'post',
                    data: { id: id, tbl_name: 'categories' },
                    success: function (res) {

                        $(mythis).parent().parent().parent().remove();
                        swal("Deleted!", "Data Successfully Deleted", "success");
                        setTimeout(() => {
                            window.location.href = base_url + 'categories';
                        }, 3000);
                    }
                });
            }
        })
}

function fetchBrandDetails(mythis) {
    $('.brand_id').val($(mythis).data('id'));
    $('.brand_name').val($(mythis).data('name'));
}
function deleteBrandData(mythis) {
    var id = $(mythis).data('id');
    swal({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        confirmButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!",
        showCancelButton: true
    })
        .then((result) => {
            if (result.value) {
                $.ajax({
                    url: base_url + 'admin/delete_by_id',
                    type: 'post',
                    data: { id: id, tbl_name: 'brands' },
                    success: function (res) {

                        $(mythis).parent().parent().parent().remove();
                        swal("Deleted!", "Data Successfully Deleted", "success");
                        setTimeout(() => {
                            window.location.href = base_url + 'brands';
                        }, 3000);
                    }
                });
            }
        })
}


function deleteProductData(mythis) {
    var id = $(mythis).data('id');
    swal({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        confirmButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!",
        showCancelButton: true
    })
        .then((result) => {
            if (result.value) {
                $.ajax({
                    url: base_url + 'admin/delete_by_id',
                    type: 'post',
                    data: { id: id, tbl_name: 'products' },
                    success: function (res) {

                        $(mythis).parent().parent().parent().remove();
                        swal("Deleted!", "Data Successfully Deleted", "success");
                        setTimeout(() => {
                            window.location.href = base_url + 'products';
                        }, 3000);
                    }
                });
            }
        })
}

function fetchStaffDetails(mythis) {
    var id = $(mythis).data('id');
    $.ajax({
        url: base_url + 'admin/fetch_data',
        type: 'post',
        data: { id: id, tbl_name: 'employees' },
        dataType: "json",
        success: function (res) {

            $('#assign_emp_id').val(res.id);
            $('#staff_role_type').val(res.role_type).change();

            $('.staff_edit_id').val(res.id);
            $('.staff_full_name').val(res.full_name);
            $('.staff_phone_number').val(res.phone_number);
            $('.staff_user_name').val(res.user_name);
            $('.staff_password').val(res.password);
            $('.staff_email').val(res.email);
            $('.staff_dob').val(res.dob);
            $('.staff_gender').val(res.gender).change();
            $('.staff_address').val(res.address);
        }
    });
}

function deleteStaffData(mythis) {
    var id = $(mythis).data('id');
    swal({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        confirmButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!",
        showCancelButton: true
    })
        .then((result) => {
            if (result.value) {
                $.ajax({
                    url: base_url + 'admin/delete_by_id',
                    type: 'post',
                    data: { id: id, tbl_name: 'employees' },
                    success: function (res) {

                        $(mythis).parent().parent().parent().remove();
                        swal("Deleted!", "Data Successfully Deleted", "success");
                        setTimeout(() => {
                            window.location.href = base_url + 'staffs';
                        }, 3000);
                    }
                });
            }
        })
}

function fetchCustomerDetails(mythis) {
    var id = $(mythis).data('id');
    $.ajax({
        url: base_url + 'admin/fetch_data',
        type: 'post',
        data: { id: id, tbl_name: 'customers' },
        dataType: "json",
        success: function (res) {
            $('#customer_id').val(res.id);
            $('#update_customer_name').val(res.name);
            $('#update_customer_phone').val(res.phone_number);
            $('#update_customer_address').val(res.address);
        }
    });
}
function deleteCustomerData(mythis) {
    var id = $(mythis).data('id');
    swal({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        confirmButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!",
        showCancelButton: true
    })
        .then((result) => {
            if (result.value) {
                $.ajax({
                    url: base_url + 'admin/delete_by_id',
                    type: 'post',
                    data: { id: id, tbl_name: 'customers' },
                    success: function (res) {

                        $(mythis).parent().parent().parent().remove();
                        swal("Deleted!", "Data Successfully Deleted", "success");
                        setTimeout(() => {
                            window.location.href = base_url + 'customers';
                        }, 3000);
                    }
                });
            }
        })
}

var productRow = '';
var prodObj = [];
let count = 1;

$('#pos_category').change(function () {
    var SelectedValue = $('option:selected', this).val();
    var prodOptions = '<option value="">Please select</option>';

    if (SelectedValue == "") {
        $('#pos_product').html('<option value="">Select category first</option>');
        return false;
    }
    $.ajax({
        url: base_url + 'admin/fetch_data_array',
        type: 'post',
        data: { id: SelectedValue, tbl_name: 'products' },
        dataType: 'json',
        success: function (res) {
            console.log(res);
            if (res.status == 1) {
                $.each(res.data, function (key, value) {
                    prodOptions += '<option value="' + value.id + '">' + value.product_name + '</option>';
                });
                $('#pos_product').html(prodOptions);
            } else {
                prodOptions = '<option value="">Please select</option>';
                $('#pos_product').html(prodOptions);
            }
        }
    });

});

$("#pos_product").change(function () {
    var SelectedValue = $('option:selected', this).val();

    $.ajax({
        url: base_url + 'payments/get_data',
        type: 'post',
        data: { id: SelectedValue, tbl_name: 'products' },
        dataType: 'json',
        success: function (res) {

            if (res.status == 1) {
                var prodData = res.data;
                //let dynamicRowHTML = '<tr> <td>' + prodData.product_name + '</td> <td>' + prodData.price + '</td> <td>' + prodData.price + '</td> <td>' + prodData.price + '</td> <td class="text-center"><button class="btn btn-danger btn-xs" onclick="deleteFunc(this);" data-id="' + prodData + '"><i class="fa fa-close"></i></button></td> </tr>';
                var subTotal = parseInt(prodData.price * 1);
                prodObj.push({ productId: prodData.id, name: prodData.product_name, unitPrice: prodData.price, quantity: 1, subTotal: subTotal });

            } else {
                console.log("empty");
            }

            dynamicHtml();
        }
    });

})


function dynamicHtml() {
    $('#product_tbody').empty();

    if (prodObj.length > 0) {
        $.each(prodObj, function (key, value) {
            console.log(value.quantity);
            var dynamicRowHTML = '<tr class="qtyBox"> <input type="hidden" class="prodId" value="' + key + '"/> <td>' + value.name + '</td> <td><input value="' + value.unitPrice + '" class="form-control numeric unit_price" maxlength="6"></td> <td class="text-center quantity-td"><div class="input-group"> <span class="input-group-btn"> <button type="button" class="btn btn-primary decrement"><i class="fa fa-minus"></i></button></span> <input type="text" name="pos_qty" value="' + value.quantity + '" class="form-control text-center numeric pos_qty" maxlength="2" > <span class="input-group-btn "><button type="button" class="btn btn-primary increment"><i class="fa fa-plus"></i></button></span></div></td > <td class="text-right"><span class="sub_total">' + numberWithCommas(value.subTotal) + '</span></td> <td class="text-center"><button class="btn btn-danger btn-xs" onclick="deleteFunc(' + key + ');" ><i class="fa fa-close"></i></button></td> </tr > ';
            $('#product_tbody').append(dynamicRowHTML);

        });
        fetchNetAmt();
    }
    triggerInput();
}

$(document).on('input', '.unit_price', function () {

    var quanInput = $(this).closest('.qtyBox').find('.pos_qty').val();
    var prodId = $(this).closest('.qtyBox').find('.prodId').val();
    var currentVal = parseInt(quanInput);

    var unitPriceInput = $(this).closest('.qtyBox').find('.unit_price').val();
    var subInput = $(this).closest('.qtyBox').find('.sub_total');

    if (!isNaN(unitPriceInput)) {
        var subTotal = parseInt(unitPriceInput * currentVal);
        subInput.text(numberWithCommas(subTotal));
        updateUnitPrice(prodId, unitPriceInput, subTotal);
    }
    fetchNetAmt();
});

function updateUnitPrice(prodId, unitVal, subTotal) {
    var objIndex = prodId;
    prodObj[objIndex].unitPrice = unitVal;
    prodObj[objIndex].subTotal = subTotal;
}

$(document).on('click', '.increment', function () {

    var quanInput = $(this).closest('.qtyBox').find('.pos_qty');
    var prodId = $(this).closest('.qtyBox').find('.prodId').val();
    var currentVal = parseInt(quanInput.val());

    var unitPriceInput = $(this).closest('.qtyBox').find('.unit_price').val();
    var subInput = $(this).closest('.qtyBox').find('.sub_total');

    if (!isNaN(currentVal)) {
        var qtyVal = currentVal + 1;
        quanInput.val(qtyVal);

        var subTotal = parseInt(unitPriceInput * qtyVal);
        subInput.text(numberWithCommas(subTotal));
        qtyIncDec(prodId, qtyVal, subTotal);
    }

})

$(document).on('click', '.decrement', function () {

    var quanInput = $(this).closest('.qtyBox').find('.pos_qty');
    var prodId = $(this).closest('.qtyBox').find('.prodId').val();
    var currentVal = parseInt(quanInput.val());

    var unitPriceInput = $(this).closest('.qtyBox').find('.unit_price').val();
    var subInput = $(this).closest('.qtyBox').find('.sub_total');

    if (!isNaN(currentVal) && currentVal > 1) {
        var qtyVal = currentVal - 1;
        quanInput.val(qtyVal);

        var subTotal = parseInt(unitPriceInput * qtyVal);
        subInput.text(numberWithCommas(subTotal));
        qtyIncDec(prodId, qtyVal, subTotal);
    }

})

$(document).on('input', '#net_discount', function () {

    var percentageVal = $(this).val();

    netDiscountCal(percentageVal);

})

function netDiscountCal(percentageVal) {

    var grossInputVal = $("#gross_amount").val();

    if (percentageVal == "") {
        $(".discount_amount").text('0.00');
        $("#discount_amount").val('');
        var grossVal = parseFloat(grossInputVal).toFixed(2);
        $("#total_payable").val(grossVal);
        $(".net_amount, .total_payable").text(numberWithCommas(grossVal));
        return false;
    }
    if ((isNaN(percentageVal))) {
        alertify.error("Invalid Number!");
        return false;
    }
    if (parseFloat(percentageVal) >= 0 && parseFloat(percentageVal) <= 100) {
        var grossAmount = discountAmt = 0;
        discountAmt = (percentageVal / 100) * grossInputVal;
        $("#discount_amount").val(discountAmt);
        $(".discount_amount").text(discountAmt.toFixed(2));

        grossAmount = parseFloat(grossInputVal - discountAmt);
        $("#total_payable").val(grossAmount);
        grossAmount = grossAmount.toFixed(2);
        $(".net_amount, .total_payable").text(numberWithCommas(grossAmount));
        return true;

    } else {
        $(this).val('');
        $(".discount_amount").text('0.00');
        $("#discount_amount").val('');
        $("#total_payable").val(grossInputVal);
        var grossVal = parseFloat(grossInputVal).toFixed(2);
        $(".net_amount, .total_payable").text(numberWithCommas(grossVal));
        alertify.error("Enter number between 0 to 100!");
        return false;
    }
}

function qtyIncDec(prodId, qtyVal, subTotal) {
    var objIndex = prodId;
    prodObj[objIndex].quantity = qtyVal;
    prodObj[objIndex].subTotal = subTotal;
    fetchNetAmt();
}

function deleteFunc(id) {
    const index = prodObj.indexOf(id);
    if (index == -1) {
        prodObj.splice(id, 1);
    }
    dynamicHtml();
    fetchNetAmt();
}


function fetchNetAmt() {
    var netAmount = 0;

    if (prodObj.length !== 0) {
        $.each(prodObj, function (key, value) {
            netAmount = parseInt(netAmount) + parseInt((value.unitPrice * value.quantity));
        });
    } else {
        $("#net_discount").val('');
    }
    $("#gross_amount").val(netAmount);
    $("#total_payable").val(netAmount);

    netAmount = netAmount.toFixed(2);

    $(".net_amount, .gross_amount, .total_payable").text(numberWithCommas(netAmount));
    setTimeout(() => {
        $("#net_discount").trigger("input");
    }, 500);
}


function saveCash(saleType) {

    var billDate = $("#bill_date").val();
    var customerId = $("#pos_customer").val();
    var discountVal = $("#net_discount").val();
    var grossVal = $("#gross_amount").val();
    var totalPayable = $('#total_payable').val();

    if (customerId == 0) {
        alertify.error("Please select the customer!");
        return;
    }

    if (prodObj.length == 0) {
        alertify.error("Please select at least one product!");
        return;
    }

    $.ajax({
        url: base_url + 'payments/addPos',
        type: 'post',
        data: {
            customerId: customerId,
            saleType: saleType,
            billDate: billDate,
            grossVal: grossVal,
            discountVal: discountVal,
            totalPayable: totalPayable,
            data: prodObj
        },
        dataType: 'json',
        success: function (res) {

            if (res.status == 200) {
                alertify.success(res.message);
                setTimeout(() => {
                    window.location.href = base_url + 'sales_list';
                }, 3000);
            }
            else {
                alertify.error(res.message);
            }
        }
    });
}


function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


function deleteSalesData(mythis) {
    var id = $(mythis).data('id');
    swal({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        confirmButtonColor: "#3085d6",
        confirmButtonText: "Yes, delete it!",
        showCancelButton: true
    })
        .then((result) => {
            if (result.value) {
                $.ajax({
                    url: base_url + 'admin/delete_by_id',
                    type: 'post',
                    data: { id: id, tbl_name: 'orders' },
                    success: function (res) {

                        $(mythis).parent().parent().parent().remove();
                        swal("Deleted!", "Data Successfully Deleted", "success");
                        setTimeout(() => {
                            location.reload();
                        }, 3000);
                    }
                });
            }
        })
}

function customerFetch() {
    var cusOptions = [{ id: '0', text: 'Please select' }];
    $.ajax({
        url: base_url + 'customers/get_all',
        type: 'get',
        dataType: 'json',
        success: function (res) {
            if (res.length !== 0) {
                $.each(res, function (key, value) {
                    cusOptions.push({ id: value.id, text: value.name + ' - ' + value.phone_number });
                });
                $('#pos_customer').html('').select2({ data: cusOptions });
            }
        }
    });
}

function addCustomer() {
    var customer_name = $("#customer_name").val();
    var customer_phone = $("#customer_phone").val();
    var customer_address = $("#customer_address").val();

    $.ajax({
        url: base_url + 'customers/insert_customer_ajax',
        type: 'post',
        data: {
            customer_name: customer_name,
            customer_phone: customer_phone,
            customer_address: customer_address
        },
        dataType: 'json',
        success: function (res) {
            console.log(res);
            if (res.status == 200) {
                $('#modal-new-customer').modal('toggle');
                alertify.success("Customer successfully added!");
                $("#pos_customer").append('<option selected="selected" value="' + res.customer_id + '">' + customer_name + ' - ' + customer_phone + '</option>');
                setTimeout(() => {
                    $("#pos_customer").val(res.customer_id);
                }, 1000);
            } else {
                alertify.error("Something went wrong!");
            }
        }
    });
}
