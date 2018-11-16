console.log("connected");

$("tr").hover(function () {
    $(this).addClass('is-selected');
}, function () {
    $(this).removeClass('is-selected');
});