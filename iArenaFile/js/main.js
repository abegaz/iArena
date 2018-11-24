console.log("connected");

$("tr").not("thead tr").hover(function () {
    $(this).addClass('is-selected');
}, function () {
    $(this).removeClass('is-selected');
});