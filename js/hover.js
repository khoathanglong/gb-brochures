$(document).ready(function () {

    //Package-Hover
    $(".package").hover(function () {
        $(this).css({
            height: '+=5%',
            width: '+=5%',
            marginTop: '-=20px',
            fontSize: '+=3px'
            //paddingBottom: '-=20px'
        });

        $(this).children("img").css("height", "+=10px");
        $(this).children(".price").css({paddingTop: '+=10px'});
        $(this).children(".buttons").css({
            //marginLeft: "+=10px"
            //paddingTop: "+=10px"
        });
    }, function () {
        $(this).css({
            height: '-=5%',
            width: '-=5%',
            marginTop: '+=20px',
            fontSize: '-=3px'
            //paddingBottom: '+=20px'
        });

        $(this).children("img").css("height", "-=10px");
        $(this).children(".price").css({paddingTop: '-=10px'});
        $(this).children(".buttons").css({
            //marginLeft: "-=10px"
            //paddingTop: "-=10px"
        });
    });


    $('#mobilemenu').click(function() {
        $('#mainmenu').slideToggle('slow');
    });
});