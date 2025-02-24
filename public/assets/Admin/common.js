$(document).ready(function () {
    $(document).on('click', '.category-delete', function () {
        $('.virat').val($(this).data('id'));
    });



});

$(document).ready(function () {
    let productnameError = false;
    let productpriceError = false;
    let productdescriptionError = false;
    let productquantityError = false;
    let discountpriceError = false;
    let productimageError = false;


    $(".productname").keyup(function () {
        validateproductname();
    });

    function validateproductname() {
        let productnamevalue = $(".productname").val();
        if (productnamevalue.trim() === "") {
            $(".productnameError").html("Please Enter product name");
            $(".productnameError").show();
            productnameError = false;
            checkproduct();
            return false;
        } else {
            $(".productnameError").hide();
            productnameError = true;
            checkproduct();

        }
    }


    $(".productprice").keyup(function () {
        validateproductprice();
    });


    function validateproductprice() {
        let productpricevalue = $(".productprice").val();
        if (productpricevalue.trim() === "") {
            $(".productpriceError").html("Please Enter product price");
            $(".productpriceError").show();
            productpriceError = false;
            checkproduct();
            return false;
        } else {
            $(".productpriceError").hide();
            productpriceError = true;
            checkproduct();

        }
    }

    $(".productquantity").keyup(function () {
        validateproductquantity();
    });


    function validateproductquantity() {
        let productquantityvalue = $(".productquantity").val();
        if (productquantityvalue.trim() === "") {
            $(".productquantityError").html("Please Enter product quantity");
            $(".productquantityError").show();
            productquantityError = false;
            checkproduct();
            return false;
        } else {
            $(".productquantityError").hide();
            productquantityError = true;
            checkproduct();

        }
    }

    $(".productdescription").keyup(function () {
        validateproductdescription();
    });

    function validateproductdescription() {
        let productdescriptionvalue = $(".productdescription").val();
        if (productdescriptionvalue.trim() === "") {
            $(".productdescriptionError").html("Please Enter product description");
            $(".productdescriptionError").show();
            productdescriptionError = false;
            checkproduct();
            return false;
        } else {
            $(".productdescriptionError").hide();
            productdescriptionError = true;
            checkproduct();

        }
    }

    $(".discountprice").keyup(function () {
        validatediscountprice();
    });

    function validatediscountprice() {
        let discountpricevalue = $(".discountprice").val();
        if (discountpricevalue.trim() === "") {
            $(".discountpriceError").html("Please Enter discount price");
            $(".discountpriceError").show();
            discountpriceError = false;
            checkproduct();
            return false;
        } else {
            $(".discountpriceError").hide();
            discountpriceError = true;
            checkproduct();

        }
    }

    // $(".productimage").keyup(function () {
    //     validateproductimage();
    // });

    // function validateproductimage() {
    //     let productimagevalue = $(".productimage").val();
    //     if (productimagevalue.trim() === "") {
    //         $(".productimageError").html("Please Enter product image");
    //         $(".productimageError").show();
    //         productimageError = false;
    //         checkproduct();
    //         return false;
    //     } else {
    //         $(".productimageError").hide();
    //         productimageError = true;
    //         checkproduct();

    //     }
    // }

    $(document).on('change', '.orderstatus', function () {

        var id = $(this).data('id');
        var status = $(this).val();
        var csrf = $("[name=_token]").val();
            var base_url = window.location.origin;
            var url = base_url + '/change-order-status' + '/' + id;
            $.ajax({
                type: 'get',
                url: url,
                data: {
                    "status":status,
                },
                success: function (data){
                    alert('Status Update successful');
                }
            });
    });
    

});

