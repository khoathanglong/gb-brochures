$(document).ready(function() {
    // arrow to scroll down
    $(".arrow-container p").click(function() {
        $('html, body').animate({
            scrollTop: $(".chosen-services").offset().top-100
        }, 500);
    });

    // get and display data from local storage
    getChosenPackages();

    // set amount in cart to the right number
    if (localStorage.clickcount) {
        $("#amount").html(localStorage.clickcount);
    } else {
        $("#amount").html(0);
    }

    // Delete Service
    $(".delete-btn").click(function(e) {
        e.preventDefault();
        deletePackage($(this).parent().parent().attr('id'));
    })
});

// Deletes html and removes package from local storage
function deletePackage(id) {
    localStorage.removeItem(id);
    $("#"+id).remove();
    localStorage.clickcount = Number(localStorage.clickcount)-1;
    $("#num-packages").html(localStorage.clickcount);
    $("#amount").html(localStorage.clickcount);
}

// Fetches chosen packages from local storage
function getChosenPackages() {
    for(var i = 0; i < localStorage.length; i++) {
        var key = localStorage.key(i);
        if(key !== 'clickcount') {
            showPackage(localStorage.getItem(localStorage.key(i)));
        }
    }
}

// shows the chosen packages
function showPackage(item) {
    var imageURL = '';
    var name = '';

    switch(item) {
        case 'service1':
            imageURL = '../img/service1.jpg';
            name = 'Transport';
            id = 'service1';
            break;
        case 'service2':
            imageURL = '../img/service2.jpg';
            name = 'Boat Trip';
            break;
        case 'service3':
            imageURL = '../img/service3.jpg';
            name = 'Surf Trip';
            break;
        case 'service4':
            imageURL = '../img/service4.jpg';
            name = 'Cabin Trip';
            break;
        case 'service5':
            imageURL = '../img/service5.jpg';
            name = 'Museum Tour';
            break;
        case 'service6':
            imageURL = '../img/service6.jpg';
            name = 'Nature';
            break;
        case 'service7':
            imageURL = '../img/service7.jpg';
            name = 'Local food tour';
            break;
        case 'service8':
            imageURL = '../img/service8.jpg';
            name = 'Fun park trip';
            break;
    }

    var html = '<div id="'+ item + '" class=\"service-card\">' +
        '                <div class=\"img\" style=\"background-image: url(' + imageURL + ')"></div>' +
        '                <div class=\"service-card-desc\">' +
        '                    <h1>'+ name + '</h1>' +
    '                    <p>Lorem ipsum dolor sit amet<br>' +
    '                        Lorem ipsum dolor...</p>' +
    '                    <hr>' +
    '                    <a href=\"#\" class=\"delete-btn\">Delete</a>' +
    '                </div>' +
    '            </div>';

    $(".chosen-services").append(html);
}