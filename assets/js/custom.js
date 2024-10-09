var base_url = "";

$(document).ready(function () {

    alertify.set('notifier', 'position', 'top-right');
    startTime();
    base_url = document.getElementById("base_url").value; //$('#base_url').val();

})

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
            $('.category_store').val(res.store_id);
            $('.category_name').val(res.category_name);
            $('.category_details').val(res.details);
        }
    });
}

function deleteCatData(mythis) {
    var id = $(mythis).data('id');

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: base_url + 'admin/delete_by_id',
                type: 'post',
                data: { id: id, tbl_name: 'categories' },
                success: function (res) {

                    $(mythis).parent().parent().parent().remove();

                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });

                    setTimeout(() => {
                        window.location.href = base_url + 'categories';
                    }, 3000);
                }
            });
        }
    });
}

function fetchBrandDetails(mythis) {
    $('.brand_id').val($(mythis).data('id'));
    $('.brand_name').val($(mythis).data('name'));
}

function deleteBrandData(mythis) {
    var id = $(mythis).data('id');
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: base_url + 'admin/delete_by_id',
                type: 'post',
                data: { id: id, tbl_name: 'brands' },
                success: function (res) {

                    $(mythis).parent().parent().parent().remove();

                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });

                    setTimeout(() => {
                        window.location.href = base_url + 'brands';
                    }, 3000);
                }
            });
        }
    });
}

function deleteProductData(mythis) {
    var id = $(mythis).data('id');
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: base_url + 'admin/delete_by_id',
                type: 'post',
                data: { id: id, tbl_name: 'products' },
                success: function (res) {

                    $(mythis).parent().parent().parent().remove();

                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });

                    setTimeout(() => {
                        window.location.href = base_url + 'products';
                    }, 3000);
                }
            });
        }
    });
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
            $('.staff_store').val(res.store_id).change();
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

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: base_url + 'admin/delete_by_id',
                type: 'post',
                data: { id: id, tbl_name: 'employees' },
                success: function (res) {

                    $(mythis).parent().parent().parent().remove();

                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });

                    setTimeout(() => {
                        window.location.href = base_url + 'staffs';
                    }, 3000);
                }
            });
        }
    });
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

function fetchStoreDetails(mythis) {
    var id = $(mythis).data('id');
    $.ajax({
        url: base_url + 'admin/fetch_data',
        type: 'post',
        data: { id: id, tbl_name: 'stores' },
        dataType: "json",
        success: function (res) {
            $('#store_id').val(res.id);
            $('.store_name').val(res.store_name);
            $('.store_address').val(res.store_address);
        }
    });
}

function deleteStoreData(mythis) {
    var id = $(mythis).data('id');

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: base_url + 'admin/delete_by_id',
                type: 'post',
                data: { id: id, tbl_name: 'stores' },
                success: function (res) {

                    $(mythis).parent().parent().parent().remove();

                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });

                    setTimeout(() => {
                        window.location.href = base_url + 'stores';
                    }, 3000);
                }
            });
        }
    });
}

function fetchSupplierDetails(mythis) {
    var id = $(mythis).data('id');
    $.ajax({
        url: base_url + 'admin/fetch_data',
        type: 'post',
        data: { id: id, tbl_name: 'suppliers' },
        dataType: "json",
        success: function (res) {
            $('.supplier_id').val(res.id);
            $('.new_supplier_name').val(res.supplier_name);
            $('.new_supplier_phone').val(res.phone_number);
            $('.new_supplier_gst').val(res.gst_number);
            $('.new_supplier_address').val(res.supplier_address);
            $('.new_supplier_city').val(res.city);
        }
    });
}

function deleteSupplierData(mythis) {
    var id = $(mythis).data('id');

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: base_url + 'admin/delete_by_id',
                type: 'post',
                data: { id: id, tbl_name: 'suppliers' },
                success: function (res) {

                    $(mythis).parent().parent().parent().remove();

                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });

                    setTimeout(() => {
                        window.location.href = base_url + 'suppliers';
                    }, 3000);
                }
            });
        }
    });
}