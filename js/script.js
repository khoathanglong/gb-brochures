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
                imgURL = 'img/Oslo.jpg';
                intro = 'Discover Norway';
                break;
            case 'helsinki':
                imgURL = 'img/Helsinki.jpg';
                intro = 'Discover Finland';
                break;
            case 'copenhagen':
                imgURL = 'img/Copenhagen2.jpg';
                intro = 'Discover Denmark';
                break;
            default:
                break;
        }

        $('.img-header').css("background-image", "url('" + imgURL + "'");
        $('.intro h2').text(intro);
    });
});