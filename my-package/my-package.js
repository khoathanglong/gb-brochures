$(document).ready(function() {
    $(".arrow-container p").click(function() {
        $('html, body').animate({
            scrollTop: $(".chosen-services").offset().top-100
        }, 500);
    });
});