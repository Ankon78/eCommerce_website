import './bootstrap';

window.getSubCategory = function (url, e) {
    var id = $(e).val();
    $.ajax({
        type: "GET",
        url: url+id,
        success: function (response) {
            $('#sub_category_id').html(response);
        },
    });
}
