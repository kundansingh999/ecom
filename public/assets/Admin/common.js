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

});

