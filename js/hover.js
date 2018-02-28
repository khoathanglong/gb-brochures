$(document).ready(function () {

    //Package-Hover
    $(".package").hover(function () {
        $(this).css({
            height: '+=20px',
            width: '+=20px',
            marginTop: '-=20px',
            fontSize: '+=3px'
            //paddingBottom: '-=20px'
        });

        $(this).children("img").css("height", "+=10px");
        $(this).children(".price").css({paddingTop: '+=20px'});
        $(this).children(".buttons").css({
            marginLeft: "+=10px",
            paddingTop: "+=10px"
        });
    }, function () {
        $(this).css({
            height: '-=20px',
            width: '-=20px',
            marginTop: '+=20px',
            fontSize: '-=3px'
            //paddingBottom: '+=20px'
        });

        $(this).children("img").css("height", "-=10px");
        $(this).children(".price").css({paddingTop: '-=20px'});
        $(this).children(".buttons").css({
            marginLeft: "-=10px",
            paddingTop: "-=10px"
        });
    });
});