// Added successfully dialog
var success = $("#service-added").dialog({
    autoOpen: false,
    resizable: false,
    draggable: false,
    height: "auto",
    modal: true,
    show: {
        effect: "fadeIn", duration: 300
    },
    hide: {
        effect: "fadeOut", duration: 300
    },
    open: function(event, ui){
        setTimeout("$('#service-added').dialog('close')",1000);
    }
});

// Service exists dialog
var fail = $("#service-exists").dialog({
    autoOpen: false,
    resizable: false,
    draggable: false,
    height: "auto",
    modal: true,
    show: {
        effect: "fadeIn", duration: 300
    },
    hide: {
        effect: "fadeOut", duration: 300
    },
    buttons: {
        "OK": function () {
            $(this).dialog("close");
        }
    }
});

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
    $(".check").click(function(e) {
        e.preventDefault();
        addItem($(this).parent().attr('id'));
        setThumbnailState();
        // looks if the current service in the brochure has been chosen
        // to mark it as checked if necessary.
        var currPage = $slideshow.turn('page');
        var currService = getCurrentService(currPage);
        console.log(currService);
        if(localStorage[currService]) {
            setChosenState();
        }
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
        fail.dialog("open");
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
        success.dialog("open");
    }
}