$(document).ready(function () {
    var $slideshow = $("#slideshow");

    //Initialize turnJS
    $slideshow.turn({
        width: 950,
        height: 535
    });

    // hides brochure content
    $(".lastBrochure").hide();
    $(".heart-check").hide();
    $(".detailTour").hide();

    //show Slider and hide arrow, if booklet is opened
    $slideshow.bind("turning", function (event, page, view) {
        if (page === 1) {
            showWelcomeText();
        }
        else {
            $(".footnote").show();
            $(".heart-check").show();
            $(".normalArrow").hide();
            $(".welcome-text div").hide();
            $(".lastBrochure").hide();
            showPosition(page);
            markChosenService(page);
            if (page === 18) {
                $(".lastBrochure").fadeIn(500);
                $(".heart-check").hide();
            }
        }
    });

    // Go back to the first page
    $(".go-back").click(function (e) {
        e.preventDefault();
        showWelcomeText();
        $slideshow.turn("page", 1);
    });

    //shows Detail description of the current service
    $('.nameTag').click(function () {
        $(this).next('.detailTour').show(500);
    });

    // closes detail view of current service
    $('.close-btn').click(function () {
        $(this).parent().parent().hide(500);
    });

    // adds current Service
    $('.check-btn').click(function () {
        var currPage = $slideshow.turn('page');
        var currService = getCurrentService(currPage);
        addItem(currService);
    });
});

/**
 * Shows the current position on the navigation at the bottom.
 *
 * @param page
 */
function showPosition(page) {
    var currCircle = 0;
    if (page === 2) currCircle = 0;
    else currCircle = Math.floor(page / 2 - 1);
    $('.dots').removeClass('bigCircle');
    $('.dot' + currCircle).addClass('bigCircle');
}

function showWelcomeText() {
    $(".footnote").hide();
    $(".normalArrow").show();
    $(".welcome-text div").show();
    $(".lastBrochure").hide();
    $(".heart-check").hide();
}

function markChosenService(page) {
    var service = getCurrentService(page);
    $(".thumbnail").css('opacity', '0.8');
    $("#"+service + " .thumbnail").css('opacity', '1');
}

/**
 * Returns current service depending on the case.
 *
 * @param page
 * @returns {*} current Service
 */
function getCurrentService(page) {
    switch(page) {
        case 2 || 3:
            return 'service1';
            break;
        case 4 || 5:
            return 'service2';
            break;
        case 6 || 7:
            return 'service3';
            break;
        case 8 || 9:
            return 'service4';
            break;
        case 10 || 11:
            return 'service5';
            break;
        case 12 || 13:
            return 'service6';
            break;
        case 14 || 15:
            return 'service7';
            break;
        case 16 || 17:
            return 'service8';
            break;
    }
}