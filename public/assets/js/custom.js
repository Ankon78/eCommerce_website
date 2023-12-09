
function addToCart(e, id) {
    let count = $('.cart-count').html();

    $.ajax({
        type: "GET",
        url: "/add-to-cart/" + id,
        cache: false,
        success: function (data) {
            $('.cart-count').html(data);
        }
    });
}

function removeCart(e,id){
    $.ajax({
        type: "GET",
        url: "/remove-from-cart/" + id,
        cache: false,
        success: function (data) {
            $('.cart-count').html(data);
            $(e).parent().parent().hide();
        }
    });
}
