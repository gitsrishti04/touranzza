<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Touranzza</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,400;0,700;0,800;1,800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="assets/vendors/trevlo-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/daterangepicker-master/daterangepicker.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />
    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/trevlo.css" />
    <link rel="stylesheet" href="assets/css/influxinfotech.css" />
    <style>
        /* Uniform proportions for tour cards */
        .tour-listing-one .row {
            display: flex;
            flex-wrap: wrap;
        }

        /* Ensures equal height for all columns in a row */
        .tour-listing-one [class*="col-"] {
            display: flex;
        }

        .tour-listing__card {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
            background: #fff;
        }

        /* Fixed aspect ratio for all images */
        .tour-listing__card-image-box {
            aspect-ratio: 5 / 3.5;
            width: 100%;
            overflow: hidden;
            background: #eee;
            /* Placeholder color */
        }

        .tour-listing__card-image {
            height: 100% !important;
            width: 100% !important;
            object-fit: cover !important;
        }

        /* Aligning card content */
        .tour-listing__card-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .tour-listing__card-inner-content {
            margin-top: auto;
        }

        .tour-listing__card-title {
            min-height: 2.4em;
            /* Ensures titles with 1 or 2 lines match */
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <!-- PAGE STARTS -->
    <div class="page-wrapper">
        <?php include("header.php") ?>
        <section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title wow animated fadeInLeft" data-wow-delay="0s" data-wow-duration="1500ms">
                    Tour Packages</h2>
                <div class="page-header__breadcrumb-box">
                    <ul class="trevlo-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Tour Packages</li>
                    </ul><!-- /.trevlo-breadcrumb -->
                </div><!-- /.page-header__breadcrumb-box -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <!-- About Four Start -->
        <!-- About Four End -->

        <!-- CTA Two Start -->
        <!-- CTA Two End -->
        <!-- Tour Listing Page One Start -->

        <!-- Venue Category Start -->
        <section class="tour-listing-one tour-listing section-space-top">
            <div class="container">
                <div class="sec-title text-center">
                    <p class="sec-title__tagline">Explore by Destination</p>
                    <h2 class="sec-title__title">Packages according to the venues</h2>
                </div>
                <!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <!-- Golden Triangle -->
                    <div class="col-xl-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="tour-listing__card">
                            <a href="golden-triangle-tours.php" class="tour-listing__card-image-box">
                                <img src="assets/images/tours/agrai-tour-1.jpg" alt="Golden Triangle Tours" class="tour-listing__card-image">
                                <div class="tour-listing__card-btn-group">
                                    <div class="tour-listing__card-discount @@innerExtraClassName">GT</div>
                                </div>
                                <div class="tour-listing__card-image-overlay"></div>
                            </a>
                            <a href="javascript:void(0);" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                            <div class="tour-listing__card-content">
                                <div class="tour-listing__card-camera-group">
                                    <a href="javascript:void(0);" class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{"items": [{"src": "assets/images/tours/delhi-tour-3.jpg"}, {"src": "assets/images/tours/jaipur-tour-1.jpg"}, {"src": "assets/images/tours/agratour2.jpg"}], "gallery": {"enabled": true}, "type": "image"}'>
                                        <span class="icon-photo-camera-1"></span>
                                    </a>
                                </div>
                                <h3 class="tour-listing__card-title"><a href="golden-triangle-tours.php">Golden Triangle Tours</a></h3>
                                <p class="tour-listing__card-text text-small">A perfect introduction to India's rich heritage across three iconic cities.</p>
                                <div class="tour-listing__card-inner-content">
                                    <div class="tour-listing__card-review-box">
                                        <span class="icon-star"></span>
                                        <p class="tour-listing__card-review-text text-small">4.9 (45 Reviews)</p>
                                    </div>
                                    <div class="tour-listing__card-location-box">
                                        <span class="icon-location-1"></span>
                                        <p class="tour-listing__card-location-text text-small">Delhi - Agra - Jaipur</p>
                                    </div>
                                    <div class="tour-listing__card-divider"></div>
                                    <div class="tour-listing__card-bottom">
                                        <div class="tour-listing__card-bottom-left">
                                            <div class="tour-listing__card-day">
                                                <span class="icon-clock-1"></span>
                                                <p class="tour-listing__card-day-text text-small">Flexible</p>
                                            </div>
                                            <div class="tour-listing__card-people">
                                                <span class="icon-Duration"></span>
                                                <p class="tour-listing__card-people-text text-small">12+</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Rajasthan -->
                    <div class="col-xl-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="tour-listing__card">
                            <a href="rajasthan-tours.php" class="tour-listing__card-image-box">
                                <img src="assets/images/tours/jaipur-tour-1.jpg" alt="Rajasthan Tours" class="tour-listing__card-image">
                                <div class="tour-listing__card-btn-group">
                                    <div class="tour-listing__card-discount @@innerExtraClassName">Rajasthan</div>
                                </div>
                                <div class="tour-listing__card-image-overlay"></div>
                            </a>
                            <a href="javascript:void(0);" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                            <div class="tour-listing__card-content">
                                <div class="tour-listing__card-camera-group">
                                    <a href="javascript:void(0);" class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{"items": [{"src": "assets/images/tours/jaipur-tours1.jpg"}, {"src": "assets/images/tours/jaipur-tours2.jpg"}], "gallery": {"enabled": true}, "type": "image"}'>
                                        <span class="icon-photo-camera-1"></span>
                                    </a>
                                </div>
                                <h3 class="tour-listing__card-title"><a href="rajasthan-tours.php">Rajasthan Tours</a></h3>
                                <p class="tour-listing__card-text text-small">Experience the royal heritage, majestic forts, and desert life of Rajasthan.</p>
                                <div class="tour-listing__card-inner-content">
                                    <div class="tour-listing__card-review-box">
                                        <span class="icon-star"></span>
                                        <p class="tour-listing__card-review-text text-small">4.8 (38 Reviews)</p>
                                    </div>
                                    <div class="tour-listing__card-location-box">
                                        <span class="icon-location-1"></span>
                                        <p class="tour-listing__card-location-text text-small">Multiple Cities</p>
                                    </div>
                                    <div class="tour-listing__card-divider"></div>
                                    <div class="tour-listing__card-bottom">
                                        <div class="tour-listing__card-bottom-left">
                                            <div class="tour-listing__card-day">
                                                <span class="icon-clock-1"></span>
                                                <p class="tour-listing__card-day-text text-small">Flexible</p>
                                            </div>
                                            <div class="tour-listing__card-people">
                                                <span class="icon-Duration"></span>
                                                <p class="tour-listing__card-people-text text-small">10+</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- Venue Category End -->

        <!-- Days Category Start -->
        <section class="tour-listing-one tour-listing section-space">
            <div class="container">
                <div class="sec-title text-center">
                    <p class="sec-title__tagline">Find your Perfect Duration</p>
                    <h2 class="sec-title__title">Tours according to days</h2>
                </div>
                <!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <!-- 1 Day -->
                    <div class="col-xl-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="tour-listing__card">
                            <a href="1-day-tours.php" class="tour-listing__card-image-box">
                                <img src="assets/images/tours/agra-3.jpg" alt="1 Day Tours" class="tour-listing__card-image">
                                <div class="tour-listing__card-btn-group">
                                    <div class="tour-listing__card-discount @@innerExtraClassName">1 Day</div>
                                </div>
                                <div class="tour-listing__card-image-overlay"></div>
                            </a>
                            <div class="tour-listing__card-content">
                                <h3 class="tour-listing__card-title"><a href="1-day-tours.php">1 Day Tours</a></h3>
                                <div class="tour-listing__card-inner-content">
                                    <div class="tour-listing__card-location-box">
                                        <span class="icon-location-1"></span>
                                        <p class="tour-listing__card-location-text text-small">Local Excursions</p>
                                    </div>
                                    <div class="tour-listing__card-divider"></div>
                                    <div class="tour-listing__card-bottom">
                                        <div class="tour-listing__card-bottom-left">
                                            <div class="tour-listing__card-day">
                                                <span class="icon-clock-1"></span>
                                                <p class="tour-listing__card-day-text text-small">1 Day</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3-5 Days -->
                    <div class="col-xl-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="tour-listing__card">
                            <a href="3-to-5-days-tours.php" class="tour-listing__card-image-box">
                                <img src="assets/images/tours/jaipur-tour-2.jpg" alt="3-5 Day Tours" class="tour-listing__card-image">
                                <div class="tour-listing__card-btn-group">
                                    <div class="tour-listing__card-discount @@innerExtraClassName">3-5 Days</div>
                                </div>
                                <div class="tour-listing__card-image-overlay"></div>
                            </a>
                            <div class="tour-listing__card-content">
                                <h3 class="tour-listing__card-title"><a href="3-to-5-days-tours.php">3-5 Day Tours</a></h3>
                                <div class="tour-listing__card-inner-content">
                                    <div class="tour-listing__card-location-box">
                                        <span class="icon-location-1"></span>
                                        <p class="tour-listing__card-location-text text-small">Regional Circuits</p>
                                    </div>
                                    <div class="tour-listing__card-divider"></div>
                                    <div class="tour-listing__card-bottom">
                                        <div class="tour-listing__card-bottom-left">
                                            <div class="tour-listing__card-day">
                                                <span class="icon-clock-1"></span>
                                                <p class="tour-listing__card-day-text text-small">3-5 Days</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6-10 Days -->
                    <div class="col-xl-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                        <div class="tour-listing__card">
                            <a href="6-to-10-days-expeditions.php" class="tour-listing__card-image-box">
                                <img src="assets/images/tours/gt1.jpg" alt="6-10 Day Tours" class="tour-listing__card-image">
                                <div class="tour-listing__card-btn-group">
                                    <div class="tour-listing__card-discount @@innerExtraClassName">6-10 Days</div>
                                </div>
                                <div class="tour-listing__card-image-overlay"></div>
                            </a>
                            <div class="tour-listing__card-content">
                                <h3 class="tour-listing__card-title"><a href="6-to-10-days-expeditions.php">6-10 Day Tours</a></h3>
                                <div class="tour-listing__card-inner-content">
                                    <div class="tour-listing__card-location-box">
                                        <span class="icon-location-1"></span>
                                        <p class="tour-listing__card-location-text text-small">Grand Expeditions</p>
                                    </div>
                                    <div class="tour-listing__card-divider"></div>
                                    <div class="tour-listing__card-bottom">
                                        <div class="tour-listing__card-bottom-left">
                                            <div class="tour-listing__card-day">
                                                <span class="icon-clock-1"></span>
                                                <p class="tour-listing__card-day-text text-small">6-10 Days</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 10+ Days -->
                    <div class="col-xl-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s" data-wow-duration="1500ms">
                        <div class="tour-listing__card">
                            <a href="10-plus-days-grand-tours.php" class="tour-listing__card-image-box">
                                <img src="assets/images/tours/colorful-rajasthan.jpg" alt="10+ Day Tours" class="tour-listing__card-image">
                                <div class="tour-listing__card-btn-group">
                                    <div class="tour-listing__card-discount @@innerExtraClassName">10+ Days</div>
                                </div>
                                <div class="tour-listing__card-image-overlay"></div>
                            </a>
                            <div class="tour-listing__card-content">
                                <h3 class="tour-listing__card-title"><a href="10-plus-days-grand-tours.php">10+ Day Tours</a></h3>
                                <div class="tour-listing__card-inner-content">
                                    <div class="tour-listing__card-location-box">
                                        <span class="icon-location-1"></span>
                                        <p class="tour-listing__card-location-text text-small">Grand Odyssey</p>
                                    </div>
                                    <div class="tour-listing__card-divider"></div>
                                    <div class="tour-listing__card-bottom">
                                        <div class="tour-listing__card-bottom-left">
                                            <div class="tour-listing__card-day">
                                                <span class="icon-clock-1"></span>
                                                <p class="tour-listing__card-day-text text-small">10+ Days</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- Days Category End -->
        <!-- Days Category End -->
        <!-- Tour Listing Page One End -->
        <!-- Why Choose Two Start -->
        <!-- /.trevlo-progress -->
    </div>
    <!-- /.col-lg-6 col-xl-6 -->
    <!-- /.col-lg-6 col-xl-6 -->
    </div><!-- /.row -->
    </div><!-- /.container -->
    </section>
    <!-- Why Choose Two End -->
    <!-- Offer One Start -->

    <!-- Offer End Start -->

    <!-- Counter One Start -->
    <?php include("footer.php") ?>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"> <span class="scroll-to-top__text">back
            top</span> <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span> </a>
    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/tilt/tilt.jquery.js"></script>
    <script src="assets/vendors/simpleParallax/simpleParallax.min.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/daterangepicker-master/moment.min.js"></script>
    <script src="assets/vendors/daterangepicker-master/daterangepicker.js"></script>
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <!-- template js -->
    <script src="assets/js/trevlo.js"></script>
</body>

</html>