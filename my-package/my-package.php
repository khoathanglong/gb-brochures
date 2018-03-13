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
    <!-- Own stylesheets -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="my-package.css">

    <!------ SCRIPTS ------->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>
<body>
<header>
    <div class="menu">
        <div class="logo"><a href="../index.html"><img src="../img/globuzzerLogo.png" alt="gb-logo"></a></div>
        <div id="mobilemenu" class="show-mobile"><span class="fa fa-bars"></span></div>
        <ul id="mainmenu" class="nav-bar">
            <li><a href="../index.html">Home</a></li>
            <li><a href="my-package.php">My package</a></li>
        </ul>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-12 brochure-container">
            <div class="printable-container">
                <h2 class="grey-heading">
                    Here you can find your<br>
                    <span>printable brochure</span>
                </h2>
                <p class="check-point"><span><i class="fas fa-check"></i></span> 6 hours package</p>
                <p class="check-point"><span><i class="fas fa-check"></i></span> Discover Sweden</p>
                <p class="check-point"><span><i class="fas fa-check"></i></span> 5 services</p>

                <div class="buttons left">
                    <a href="#" class="edge-btn-pink">Save it in PDF</a>
                    <a href="#" class="edge-btn-white">Send it to my email</a>
                </div>
            </div>
            <img src="../img/mockups%2002.png" alt="brochure" id="my-brochure">
        </div>
    </div>
</div>

<div class="light-grey-box">
    <div class="arrow-container">
        <p><i class="fas fa-chevron-circle-down"></i></p>
    </div>
    <div class="service-container">
        <div class="basket">
            <p id="curr-package">Discover Sweden in 6 hours</p>
            <p><span id="amount">5</span> services</p>
            <hr>
            <p class="total-price"><span class="price-label">Price:</span> <span id="price">99€</span></p>
            <hr>
            <div class="buttons">
                <a href="../6-hours-package/6hours.php" class="button-pink">Add more</a>
                <a class="button-white">Checkout</a>
            </div>
        </div>

        <div class="chosen-services">
            <h3>Aren't these the services you wanted?</h3>
            <p>Delete the ones you are not interested in or go back and add the ones you missed.</p>
            <hr class="shortHr">

            <?php
            require '../include/connection.php';

            $result = mysqli_query($conn, 'SELECT * FROM packages');
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0) {
                while ($service = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="service-card">
                        <div class="img" style="background-image: url('<?php echo $service['img']; ?>')"></div>
                        <div class="service-card-desc">
                            <h1><?php echo $service['name']; ?></h1>
                            <p>Lorem ipsum dolor sit amet<br>
                                Lorem ipsum dolor...</p>
                            <hr>
                            <a href="#" class="delete-btn">Delete</a>
                        </div>
                    </div>
                <?php }
            }?>
            <!--div class="service-card">
                <div class="img" style="background-image: url('../img/service1.png')"></div>
                <div class="service-card-desc">
                    <h1>Transport</h1>
                    <p>Lorem ipsum dolor sit amet<br>
                        Lorem ipsum dolor...</p>
                    <hr>
                    <a href="#" class="delete-btn">Delete</a>
                </div>
            </div>
            <div class="service-card">
                <div class="img" style="background-image: url('../img/service2.png')"></div>
                <div class="service-card-desc">
                    <h1>Boat Trip</h1>
                    <p>Lorem ipsum dolor sit amet<br>
                        Lorem ipsum dolor...</p>
                    <hr>
                    <a href="#" class="delete-btn">Delete</a>
                </div>
            </div>
            <div class="service-card">
                <div class="img" style="background-image: url('../img/service5.png')"></div>
                <div class="service-card-desc">
                    <h1>Museum Tour</h1>
                    <p>Lorem ipsum dolor sit amet<br>
                        Lorem ipsum dolor...</p>
                    <hr>
                    <a href="#" class="delete-btn">Delete</a>
                </div>
            </div>
            <div class="service-card">
                <div class="img" style="background-image: url('../img/service6.png')"></div>
                <div class="service-card-desc">
                    <h1>Nature</h1>
                    <p>Lorem ipsum dolor sit amet<br>
                        Lorem ipsum dolor...</p>
                    <hr>
                    <a href="#" class="delete-btn">Delete</a>
                </div>
            </div>
            <div class="service-card">
                <div class="img" style="background-image: url('../img/service7.png')"></div>
                <div class="service-card-desc">
                    <h1>Local food tour</h1>
                    <p>Lorem ipsum dolor sit amet<br>
                        Lorem ipsum dolor...</p>
                    <hr>
                    <a href="#" class="delete-btn">Delete</a>
                </div>
            </div-->
        </div>
    </div>
</div>

<footer>
    <div class="privacy-copyright">
        <ul class="socialmedia">
            <li><a href="https://www.globuzzer.com/"><img class="gb-icon" src="../img/GB%20icon.png" alt="gb-icon"></a>
            </li>
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

<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="my-package.js"></script>
</body>