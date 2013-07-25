$(function() {
    $('#divselector').change(function() {
        $('.divsection').hide();
        $('#' + $(this).val()).show();
    });
});

$(function() {
    $(".currency").maskMoney();
});

$(function() {
    $('.footmenu').change(function() {
        var page = $(this).val();
        $.mobile.changePage( '#' + page );
    });
});