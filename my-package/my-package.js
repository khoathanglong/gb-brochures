var pdf = '';
var newLoaded = true;

$(document).ready(function () {
    // arrow to scroll down
    $(".arrow-container p").click(function () {
        $('html, body').animate({
            scrollTop: $(".chosen-services").offset().top - 100
        }, 500);
    });

    // hides all brochure elements
    hideBrochure();


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
    $("#email-btn").click(function (e) {
        e.preventDefault();
        dialog.dialog("open");
    });

    // Downloads pdf
    $("#pdf-btn").click(function (e) {
        e.preventDefault();

        pdf = new jsPDF("1", "pt");
        pdf.deletePage(1);

        for (var i = 0; i < localStorage.length; i++) {
            var key = localStorage.key(i);
            if (key !== 'clickcount') {
                var item = localStorage.getItem(localStorage.key(i));
                addToPdf(item);
            }
        }
        pdf.save('My-package.pdf');
    });
});

function hideBrochure() {
    $("#my-brochure").children().hide();
}

// Adds the chosen services to the pdf to download.
function addToPdf(item) {
    pdf.addPage(239.75, 582.25);
    var currService = getService(item);
    var width = pdf.internal.pageSize.width;
    var height = pdf.internal.pageSize.height;
    pdf.addImage(currService.getImgData(), 'JPEG', 0, 0, width, height);
}

// Deletes html and removes package from local storage
function deletePackage(id) {
    localStorage.removeItem(id);
    $("#" + id).remove();
    localStorage.clickcount = Number(localStorage.clickcount) - 1;
    $("#num-packages").html(localStorage.clickcount);
    $("#amount").html(localStorage.clickcount);
    hideBrochure();
    getChosenPackages();
}

// Fetches chosen packages from local storage
function getChosenPackages() {
    for (var i = 0; i < localStorage.length; i++) {
        var key = localStorage.key(i);
        if (key !== 'clickcount') {
            var item = localStorage.getItem(localStorage.key(i));
            if(newLoaded) showPackage(item);
            showInBrochure(item, i);
        }
    }
    newLoaded = false;
}

// Shows the chosen services in a brochure
function showInBrochure(item, i) {
    var $page = $(".s"+i);
    var service = getService(item);
    $page.css("background-image", "url('" + service.getBrochureImg() + "'");
    $page.show();
}

// Goes through the service array and fetches the current service.
function getService(service) {
    for (var i = 0; i < window.services.length; i++)
        if (window.services[i].id === service) return services[i];
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