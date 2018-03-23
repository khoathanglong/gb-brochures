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

    // Store service in local storage, if check symbol is clicked
    $(".check").click(function() {
        addItem($(this).parent().attr('id'));
    });

    // Shows the number of chosen services in the package
    if (localStorage.clickcount && localStorage.clickcount != 0) {
        $("#num-packages").html(localStorage.clickcount);
    } else {
        $("#num-packages").hide();
    }
});

// adds Item to local storage and increases the counter by 1
function addItem(id) {
    var $numPackages = $("#num-packages");
    console.log(id);
    console.log(localStorage[id]);
    if(localStorage[id]) {
        alert("You have already chosen this service!");
    } else {
        if(typeof(Storage) !== "undefined") {
            if (localStorage.clickcount) {
                localStorage.clickcount = Number(localStorage.clickcount)+1;
            } else {
                localStorage.clickcount = 1;
            }
            $numPackages.html(localStorage.clickcount);
            $numPackages.show();
        }
        localStorage.setItem(id, id);
    }
}