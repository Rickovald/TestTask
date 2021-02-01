$(function($){
    $(".phone").mask("8(999) 999-99-99");
});

$(document).on('click', '.buy', function () {
    $('.modal').addClass('active_modal');
    let thisID = parseInt(this.id.match(/\d+/));
    $.getJSON('list.json', function(data) {
        $('#modal_product').text(data.product[thisID].name);
    });
});

$(document).on('click', '.close', function () {
    $('.modal').removeClass('active_modal');
});
    