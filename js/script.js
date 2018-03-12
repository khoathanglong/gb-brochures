$(document).ready(function () {
    //toggle mobile menu
    $('#mobilemenu').click(function() {
        $('#mainmenu').slideToggle('slow');
    });

    //Change header-image and text on city change
    $('#city-select').change(function() {
        var currCity = $(this).val();
        var imgURL = '';
        var intro = '';

        switch(currCity) {
            case 'stockholm':
                imgURL = 'img/raphael-andres-430356.png';
                intro = 'Discover Sweden';
                break;
            case 'oslo':
                imgURL = 'img/raphael-andres-430356.png';
                intro = 'Discover Norway';
                break;
            case 'rome':
                imgURL = 'img/raphael-andres-430356.png';
                intro = 'Discover Italy';
                break;
            default:
                break;
        }

        $('.img-header').css("background-image", "url('" + imgURL + "'");
        $('.intro h2').text(intro);
    });
});