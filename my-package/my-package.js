var pdf = new jsPDF("1", "mm", "a4");

$(document).ready(function () {
    // arrow to scroll down
    $(".arrow-container p").click(function () {
        $('html, body').animate({
            scrollTop: $(".chosen-services").offset().top - 100
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
    $(".delete-btn").click(function (e) {
        e.preventDefault();
        deletePackage($(this).parent().parent().attr('id'));
    });

    // Email dialog
    var dialog = $("#dialog-confirm").dialog({
        autoOpen: false,
        resizable: false,
        draggable: false,
        height: "auto",
        width: 400,
        modal: true,
        show: {
            effect: "drop", duration: 300
        },
        hide: {
            effect: "drop", duration: 300
        },
        buttons: {
            "Send": function () {
                $(this).dialog("close");
            },
            Cancel: function () {
                $(this).dialog("close");
            }
        }
    });

    // Open email modal
    $("#email-btn").click(function(e) {
        e.preventDefault();
        dialog.dialog("open");
    });

    // Downloads pdf
    $("#pdf-btn").click(function(e) {
       e.preventDefault();
       pdf.save('My-package.pdf');
    });
});

// Deletes html and removes package from local storage
function deletePackage(id) {
    localStorage.removeItem(id);
    $("#" + id).remove();
    localStorage.clickcount = Number(localStorage.clickcount) - 1;
    $("#num-packages").html(localStorage.clickcount);
    $("#amount").html(localStorage.clickcount);
}

// Fetches chosen packages from local storage
function getChosenPackages() {
    for (var i = 0; i < localStorage.length; i++) {
        var key = localStorage.key(i);
        if (key !== 'clickcount') {
            var item = localStorage.getItem(localStorage.key(i));
            showPackage(item);
            addToPdf(item);
        }
    }
}

// Adds the chosen services to the pdf to download.
function addToPdf(item) {
    var currService = getService(item);
    pdf.addImage(currService.getImgData(), 'JPEG', 10, 10, 180, 130);
    pdf.addPage();
}

// Goes through the service array and fetches the current service.
function getService(service) {
    for(var i = 0; i < window.services.length; i++)
        if(window.services[i].id === service) return services[i];
}

// shows the chosen packages
function showPackage(item) {
    var currObj = getService(item);
    var imageURL = currObj.getImgURL();
    var name = currObj.getName();

    var html = '<div id="' + item + '" class=\"service-card\">' +
        '                <div class=\"img\" style=\"background-image: url(' + imageURL + ')"></div>' +
        '                <div class=\"service-card-desc\">' +
        '                    <h1>' + name + '</h1>' +
        '                    <p>Lorem ipsum dolor sit amet<br>' +
        '                        Lorem ipsum dolor...</p>' +
        '                    <hr>' +
        '                    <a href=\"#\" class=\"delete-btn\">Delete</a>' +
        '                </div>' +
        '            </div>';

    $(".chosen-services").append(html);
}