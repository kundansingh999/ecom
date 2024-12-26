$(document).on('click', '.cart', function () {
    var user_id = $('.user_id').val();
    var product_id = $(this).data('productid');
    if (user_id){
        var csrf = $("[name=_token]").val();
        var base_url = window.location.origin;
        var url = base_url + '/add-cart' + '/' + product_id + '/' + user_id;
        $.ajax({
            type: 'get',
            url: url,
            success: function (data){
                alert('Add to cart successful');
            }
        });
    } else {
        window.location.href = '/login';
    }
});
