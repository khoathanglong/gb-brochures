<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Globuzzer - 6-hours</title>

    <!------ STYLESHEETS ------->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:900" rel="stylesheet">
    <!-- Simple grid -->
    <link rel="stylesheet" href="../css/simple-grid.css">
    <!-- Own stylesheet -->
    <link rel="stylesheet" href="../css/style.css">

    <!------ SCRIPTS ------->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>
<body>
<header>
<div>
    <div class="menu">
        <div class="logo"><a href="#"><img src="../img/globuzzerLogo.png" alt="gb-logo"></a></div>
        <div id="mobilemenu" class="show-mobile"><span class="fa fa-bars"></span></div>
        <ul id="mainmenu" class="nav-bar">
            <li><a href="#">Home</a></li>
            <li><a href="#">My package</a></li>
        </ul>
    </div>
    <div class="img-header package-view">
        <div class="intro">
            <p class="curr-package"><span>06</span> hours package</p>
            <h2>Discover Sweden<br>
                in 6 hours
            </h2>
        </div>
        <div id='header-moving-down'>
            <a href="#book-cover">
                <i  class="fas fa-chevron-circle-down"></i>
            </a>
            
        </div>
    </div>
    <div class="white-box"></div>
</div>
</header>

<div class="brochure-viewer">
     <div class="extend-resize">
                <img src="../img/resize.png" alt="" class="resize">
                <a href="#services-block">
                    <img src="../img/extend.png" alt="" class="extend">
                </a><!-- this should be called jumping down -->
        </div>
    <div class="container brochure-container">
        
      <!--   cover book -->


        <div class="row introduction">
            <div class='col-6 welcome-text'>
                <div>
                    <h1>Welcome!</h1>
                    <p>Are you interested in discovering Sweden?</p>
                    <p>Just open the brochure, take a look at our</p>
                    <p>services and choose the ones you like.</p>
                </div>
            </div>

            <div class="arrow">
                <img class='normalArrow' src="../img/secondPage-arrow.png" alt="arrow">
            </div>
            <div class="arrow">
                <img class='mobileArrow' src="../img/mobile-secondPage-arrow.png" alt="arrow">
            </div>

            <div class='col-6'>
                <a href="#slideshow">
                    <img class='img-responsive book-cover' id="book-cover" src="../img/BROCHURE 6 hours mockup.jpg" alt="BROCHURE">
                </a>

            </div>        
        </div>
        
    <!-- Brochure viewer slideshow  -->
       
        <div class="row" id='slideshow'>
             <div class="brochure slider0">
                <img src="../img/service1.jpg" class="img-responsive">
                 <div class="nameTag">BUS TRIP</div>  
            </div>
             <div class="brochure slider1">
                <img src="../img/service2.jpg" class="img-responsive">
                 <div class="nameTag">BOAT TRIP</div>
                
            </div>
             <div class="brochure slider2">
                <img src="../img/service3.jpg" class="img-responsive">
                 <div class="nameTag">SURF TRIP</div>
                
            </div>
             <div class="brochure slider3">
                <img src="../img/service4.jpg" class="img-responsive">
                 <div class="nameTag">CABIN TRIP</div>
                

            </div>

            <div class="brochure slider4">
                <img src="../img/service5.jpg" class="img-responsive">
                 <div class="color-overlay"></div>
                 <div class="nameTag">MUSEUM TOUR</div>
                    <!-- <div class="detailTour">
                    <div>
                        <h1>MUSEUM TOUR</h1>
                        <p>some text some text some text some textsome text some text some text</p>
                        <a href="#" class='button-pink'>Read more</a>
                    </div> -->
                 <!-- </div> -->

            </div>

            <div class="brochure slider5">
                <img src="../img/service6.jpg" class="img-responsive">

                 <div class="nameTag">FOREST TRIP</div>
            </div>
            
            <div class="brochure slider6">
                <img src="../img/service7.jpg" class="img-responsive">
                 <div class="nameTag">DESSERT TRIP</div>
            </div>

            <div class="brochure slider7">
                <img src="../img/service8.jpg" class="img-responsive">

                 <div class="nameTag">FUN PARK TRIP</div>

            </div>

            <div class="brochure slider8">
                <img src="../img/service9.jpg" class="img-responsive">
                <div class="lastBrochure">
                    <h2>Thank you for choosing our services!</h2>
                    <div>
                        <a href="../my-package/my-package.php" class="button-pink">See My Package</a>
                        <a href="#services-block" class="button-pink">All Services</a>
                        <a href="#book-cover" class="button-pink go-back">Go Back</a>
                    </div>                        

                </div>

            </div>
            <div class="nextPage">
                <a class="next">&#10095;</a>
            </div>
            <div class="prevPage">
                <a class="prev">&#10094;</a>
            </div>

            <div class="heart-check">

              
                   <svg class="svg-inline--fa fa-heart fa-w-18 icon unHoverHeart" aria-hidden="true" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M257.3 475.4L92.5 313.6C85.4 307 24 248.1 24 174.8 24 84.1 80.8 24 176 24c41.4 0 80.6 22.8 112 49.8 31.3-27 70.6-49.8 112-49.8 91.7 0 152 56.5 152 150.8 0 52-31.8 103.5-68.1 138.7l-.4.4-164.8 161.5a43.7 43.7 0 0 1-61.4 0zM125.9 279.1L288 438.3l161.8-158.7c27.3-27 54.2-66.3 54.2-104.8C504 107.9 465.8 72 400 72c-47.2 0-92.8 49.3-112 68.4-17-17-64-68.4-112-68.4-65.9 0-104 35.9-104 102.8 0 37.3 26.7 78.9 53.9 104.3z"></path>
                    </svg>

                   <svg class="svg-inline--fa fa-check-circle fa-w-16 icon unHoverCheck" aria-hidden="true" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg>               <!-- heart and check icons -->
            </div>
        </div>
        
        <div class="footnote">
                <i class="fas fa-circle dot0"></i>
                <i class="fas fa-circle dot1"></i>
                <i class="fas fa-circle dot2"></i>
                <i class="fas fa-circle dot3"></i>
                <i class="fas fa-circle dot4 bigCircle"></i>
                <i class="fas fa-circle dot5"></i>
                <i class="fas fa-circle dot6"></i>
                <i class="fas fa-circle dot7"></i>
                <i class="fas fa-circle dot8"></i> <!-- Circle -->
            </div>

        <div id="moving-down-icon">
            <p>Or jump to see all the services</p>
            <a href="#services-block">
                <i  class="fas fa-chevron-circle-down"></i>
            </a>

        </div>
    </div>
    
</div>
<div id='supplementalDiv'></div>

<div id='mobileButtons'>
        <div id="filterButton">Filters</div>
        <div id="featureButton">Featured</div>
</div>

<div class="container" id='filterForm'>
            <form id="filter" method="POST">
                <select name="filter" >
                    <option value="filter" selected hidden disabled>Filters</option>
                    <option value="arts-museums">Arts & Museums</option>
                    <option value="city-tour">City Tour</option>
                    <option value="food-related">Food Related</option>
                    <option value="inside-programs">Inside Programs</option>
                    <option value="outside-programs">Outside Programs</option>
                    <option value="water-related">Water Related</option>
                </select>
            </form>
 
            <form id="featured" method="POST">
                <select name="featured" class="pink-select">
                    <option value="featured" selected hidden disabled>Featured</option>
                    <option value="most-view">Most Viewed</option>
                    <option value="most-cheered">Most Cheered</option>
                    <option value="most-chosen">Most Chosen</option>
                    <option value="lowest-price">Lowest Price</option>
                    <option value="highest-price">Highest Price</option>

                </select>
            </form>
</div>   

<div id='services-block' class="container">
    <hr class="fine-hr">
    <div class="row">
        <div class="services">
            <div class="thumbnail-container col-4 service1" >
                <div class="hover-container">
                    <div class="thumbnail" style="background-image:url(../img/service1.png)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Bus Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
            <div class="thumbnail-container col-4 service2">
                <div class="hover-container">
                    <div class="thumbnail" style="background-image:url(../img/service2.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Boat Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
            <div class="thumbnail-container col-4 service3">
                <div class="hover-container">
                    <div class="thumbnail" style="background-image:url(../img/service3.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Surf Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
            <div class="thumbnail-container col-4 service4">
                <div class="hover-container">
                    <div class="thumbnail" style="background-image:url(../img/service4.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Cabin Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
        </div>
    </div>
    <div class="row">
        <div class=" services">
            <div class="thumbnail-container col-4 service5">
                <div class="hover-container ">
                    <div class="thumbnail" style="background-image:url(../img/service5.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Museum Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.jpg" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
            <div class="thumbnail-container col-4 service6">
                <div class="hover-container">
                    <div class="thumbnail" style="background-image:url(../img/service6.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Forest Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
            <div class="thumbnail-container col-4 service7">
                <div class="hover-container" >
                    <div class="thumbnail" style="background-image:url(../img/service7.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Dessert Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
            <div class="thumbnail-container col-4 service8">
                <div class="hover-container" >
                    <div class="thumbnail" style="background-image:url(../img/service8.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Fun Park Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="privacy-copyright">
        <ul class="socialmedia">
            <li><a href="https://www.globuzzer.com/"><img class="gb-icon" src="../img/GB%20icon.png" alt="gb-icon"></a></li>
            <li><a href="https://www.facebook.com/Globuzzer/"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/globuzzer"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.pinterest.at/globuzzer/"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="https://www.linkedin.com/company/globuzzer"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
        <ul class="nav-bar">
            <li><a href="#">Home</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
        <br>
        <p class="copyright">&copy; Copyright statement</p>
    </div>
</footer>

<script>

$(document).ready(function () {
    var mobileFilterItems= '<div>'+
                    '<p value="All" style="text-decoration:underline">All</p>'+
                    '<p value="arts-museums">Arts & Museums</p>'+
                    '<p value="city-tour">City Tour</p>'+
                    '<p value="food-related">Food Related</p>'+
                '</div>'
                   //  '<li value="inside-programs">Inside Programs</li>'+
                   //  '<li value="outside-programs">Outside Programs</li>'+
                   // '<li value="water-related">Water Related</li>'+
    var mobileFeatureItem =
             '<div>'+
                    '<p value="All" style="text-decoration:underline">All</p>'+
                    '<p  value="most-view">Most Viewed</p>'+
                    '<p value="most-cheered">Most Cheered</p>'+
                    '<p value="most-chosen">Most Chosen</p>'+
                '</div>'



    function responsiveFilters(){
        if( $('#header-moving-down').css('font-size')=='64px'){ //when the screen is small
            $('#supplementalDiv').show();
            $('#mobileButtons').show();
            $('#featured').hide()
            $('#filter select').replaceWith(mobileFilterItems);

            // $('#featured div').replaceWith(
            //    '<ul name="featured"  style="list-style-type:none;display:none">'+
            //         '<li value="oslo">Oslo</li>'+
            //     '</ul>' 
            // );
            $('#featureButton').click(function(){
                $(this).css('background-color','#949494');
                $('#filterButton').css('background-color','#BDBDBD');
                $('#filter div').replaceWith(mobileFeatureItem);
            });
            $('#filterButton').click(function(){
                $(this).css('background-color','#949494');
                $('#featureButton').css('background-color','#BDBDBD');
                $('#filter div').replaceWith(mobileFilterItems);
            });
        }else{
            $('#supplementalDiv').hide();
            $('#mobileButtons').hide();
            $('#featured').show()
            $('#filter div').replaceWith(
               '<select name="filter" >'+
                    '<option value="filter" selected hidden disabled>Filters</option>'+
                    '<option value="arts-museums">Arts & Museums</option>'+
                    '<option value="city-tour">City Tour</option>'+
                    '<option value="food-related">Food Related</option>'+
                    '<option value="inside-programs">Inside Programs</option>'+
                    '<option value="outside-programs">Outside Programs</option>'+
                    '<option value="water-related">Water Related</option>'+
                '</select>'
            );

            $('#featured div').replaceWith(
              '<select name="featured" class="pink-select">'+
                   '<option value="featured" selected hidden disabled>Featured</option>'+
                    '<option value="most-view">Most Viewed</option>'+
                    '<option value="most-cheered">Most Cheered</option>'+
                    '<option value="most-chosen">Most Chosen</option>'+
                    '<option value="lowest-price">Lowest Price</option>'+
                    '<option value="highest-price">Highest Price</option>'+
                '</select>'
            );
        }
    }

    responsiveFilters()
    $(window).resize(responsiveFilters)

    // heart-check icons hovering
  
    var hoverHeart= '<path fill="currentColor" d="M414.9 24C361.8 24 312 65.7 288 89.3 264 65.7 214.2 24 161.1 24 70.3 24 16 76.9 16 165.5c0 72.6 66.8 133.3 69.2 135.4l187 180.8c8.8 8.5 22.8 8.5 31.6 0l186.7-180.2c2.7-2.7 69.5-63.5 69.5-136C560 76.9 505.7 24 414.9 24z"></path>';


    var hoverCheck='<path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>';

    var unHoverHeart='<path fill="currentColor" d="M257.3 475.4L92.5 313.6C85.4 307 24 248.1 24 174.8 24 84.1 80.8 24 176 24c41.4 0 80.6 22.8 112 49.8 31.3-27 70.6-49.8 112-49.8 91.7 0 152 56.5 152 150.8 0 52-31.8 103.5-68.1 138.7l-.4.4-164.8 161.5a43.7 43.7 0 0 1-61.4 0zM125.9 279.1L288 438.3l161.8-158.7c27.3-27 54.2-66.3 54.2-104.8C504 107.9 465.8 72 400 72c-47.2 0-92.8 49.3-112 68.4-17-17-64-68.4-112-68.4-65.9 0-104 35.9-104 102.8 0 37.3 26.7 78.9 53.9 104.3z"></path>';
    
    var unHoverCheck='<path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path>';

    $('.unHoverHeart').mouseenter(
        function(){
            $(this).html(hoverHeart)
        });
    $('.unHoverHeart').mouseleave(function(){
            $(this).html(unHoverHeart)
    });
    $('.unHoverCheck').mouseenter(
        function(){
            $(this).html(hoverCheck)
        })
    $('.unHoverCheck').mouseleave(function(){
            $(this).html(unHoverCheck)
    })


$(".nextPage").click(function(){plusSlides(1)});
$(".prevPage").click(function(){plusSlides(-1)});

// flip the cover
$('.brochure-container .book-cover').click(function(){
    $('.slider4').css('display', "block");
    $('.brochure-container .introduction').css('display','none');
    $('.heart-check, .footnote, .extend-resize').css('visibility','visible')
  })
// go back the book cover
$('.go-back').click(function(){
    $('.brochure-container .introduction').css('display','block');
    $('.slider8').css('display', "none");
    $('.heart-check, .footnote, .extend-resize').css('visibility','hidden')
})

// Create the slideshow

var slideIndex = 5;
showSlides(slideIndex);

    // Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}


function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("brochure");
  var dots = document.getElementsByClassName("fa-circle");
  if (n > slides.length) {slideIndex = 1};
  if (n < 1) {slideIndex = slides.length};
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  };
  for (i = 0; i < dots.length; i++) {
        $('.dot'+i).removeClass('bigCircle')
  };

  if( $('.brochure-container .introduction').css('display')=='none'){
    $('.slider'+(slideIndex-1)).css('display', "block");
  }

  $('.dot'+(slideIndex-1)).addClass('bigCircle');

  $('.nextPage').css('background-image','url(../img/service'+(slideIndex+1)+'.jpg)')
  $('.prevPage').css('background-image','url(../img/service'+(slideIndex-1)+'.jpg)')
} 

//resize the brochure

$('.resize').click(function(){
    if($('.brochure-container').hasClass('container')){
        $('.brochure-container').removeClass('container');
        $('.brochure-viewer').css('padding','0');             
    }else{
        $('.brochure-container').addClass('container');
        $('.brochure-viewer').css('padding','75px 0');
    }
});

//display detail tour
$('.slider4 .nameTag').click(function(){
    $('.slider4').append('<div class="detailTour"><div><h1>MUSEUM TOUR</h1>'+
                        '<p>some text some text some text some textsome text some text some text</p>'+
                        '<a href="#" class="button-pink">Read more</a></div>')
    $(this).html('')
})

});

</script>

</body>