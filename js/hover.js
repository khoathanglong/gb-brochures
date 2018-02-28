$(document).ready(function () {

    //Package-Hover
    $(".package").hover(function () {
        $(this).animate({
            height: '+=5%',
            width: '+=5%',
            marginTop: '-=20px',
            fontSize: '+=3px'
            //paddingBottom: '-=20px'
        });

        $(this).children("img").animate("height", "+=10px");
        $(this).children(".price").animate({paddingTop: '+=10px'});
        $(this).children(".buttons").animate({
            //marginLeft: "+=10px"
            //paddingTop: "+=10px"
        });
    }, function () {
        $(this).animate({
            height: '-=5%',
            width: '-=5%',
            marginTop: '+=20px',
            fontSize: '-=3px'
            //paddingBottom: '+=20px'
        });

        $(this).children("img").animate("height", "-=10px");
        $(this).children(".price").animate({paddingTop: '-=10px'});
        $(this).children(".buttons").animate({
            //marginLeft: "-=10px"
            //paddingTop: "-=10px"
        });
    });


    $('#mobilemenu').click(function() {
        $('#mainmenu').slideToggle('slow');
    });
});