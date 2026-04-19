<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Touranzza</title>
  <!-- favicons Icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="48x48" href="assets/images/favicons/favicon-48x48.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
  <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
  <meta name="description" content="" />
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,400;0,700;0,800;1,800&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Manrope&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;1,400&amp;display=swap"
    rel="stylesheet">
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
  <link rel="stylesheet" href="assets/css/touranzza.css" />
  <style>
    /* ── Luxury font for slider subtitle ── */
    .main-slider-one__sub-title {
      font-family: 'Playfair Display SC', serif !important;
      font-size: 18px !important;
      letter-spacing: 1.5px !important;
      text-transform: capitalize !important;
    }

    /* ── Position yellow brush stroke under "Touranzza" ── */
    .main-slider-one__title {
      position: relative !important;
      display: inline-block !important;
      /* Forces the relative container to wrap text only */
    }

    .main-slider-one__title img {
      position: absolute !important;
      left: 77% !important;
      /* Slightly adjusted to center under 'Touranzza' more broadly */
      top: 75% !important;
      /* Shifted more upwards */
      transform: translateX(-50%) !important;
      width: 280px !important;
      /* Significantly larger */
      z-index: -5;
      /* Place slightly behind text for a natural brush look */
    }

    /* ── Increase size of ALL Yellow Section Taglines ── */
    .sec-title__tagline {
      font-size: 22px !important;
      letter-spacing: 2px !important;
    }

    @media (max-width: 767px) {
      .main-slider-one__title img {
        transform: translate(0, 10px) !important;
        /* Center shape under text on mobile */
        max-width: 150px;
        margin: 0 auto;
      }

      .sec-title__tagline {
        font-size: 16px !important;
        letter-spacing: 1px !important;
      }
    }

    /* ── Mandala art background wrapper for white sections ── */
    .mandala-bg-wrapper {
      position: relative;
      background-color: #ffffff;
      overflow: hidden;
    }

    .mandala-bg-wrapper::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: url('assets/images/backgrounds/mandala-bg.png');
      background-size: 600px 600px;
      background-repeat: repeat;
      opacity: 0.28;
      pointer-events: none;
      z-index: 0;
    }

    .mandala-bg-wrapper>* {
      position: relative;
      z-index: 1;
    }

    /* Clean up individual sections to use the common bg */
    .tour-listing-one,
    .gallery-one,
    .blog-one {
      background: transparent !important;
    }

    /* ── Consistent box shape regardless of content ── */
    .why-choose-one__box {
      display: flex;
      flex-direction: column;
      min-height: 180px;
    }

    .why-choose-one__box__title {
      flex: 1;
    }

    /* ── Custom why-choose icons: black PNG → golden yellow ── */
    .why-choose-custom-icon {
      width: 60px;
      height: 60px;
      object-fit: contain;
      filter: brightness(0) saturate(100%) invert(72%) sepia(80%) saturate(500%) hue-rotate(5deg) brightness(105%);
    }

    /* ── Section spacing normalisation ── */
    .tour-listing-one {
      padding: 80px 0;
    }

    /* Gallery → reduced top, tight bottom so Most Popular feels closer */
    .gallery-one {
      padding: 30px 0 30px;
    }

    /* Most Popular Tours → reduced top to sit snug under gallery */
    .blog-one {
      padding: 30px 0 80px;
    }

    .why-choose-one {
      padding: 80px 0;
    }

    /* Special Offer → extra bottom gap before Get to Know Us */
    .offer-one {
      padding-top: 80px;
      padding-bottom: 120px;
    }

    /* Get to Know Us → extra top gap after Special Offer */
    .benefit-one {
      padding: 100px 0 80px;
    }

    /* Testimonials → squeezed bottom */
    .testimonial-one {
      padding: 80px 0 60px;
    }

    @media (max-width: 767px) {

      .tour-listing-one,
      .gallery-one,
      .blog-one,
      .why-choose-one,
      .offer-one,
      .benefit-one,
      .testimonial-one {
        padding: 50px 0;
      }
    }





    /* ── Perfectly Centered Testimonial Cards ── */
    .centered-card {
      text-align: center !important;
      padding: 50px 25px 40px !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      justify-content: flex-start !important;
      border-radius: 12px !important;
      background: #fff !important;
      transition: all 0.3s ease !important;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04) !important;
      position: relative !important;
      margin-top: 40px !important;
      min-height: 360px !important;
      overflow: visible !important;
    }

    .centered-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08) !important;
    }

    .enlarge-image {
      position: relative !important;
      top: 0 !important;
      left: 0 !important;
      width: 110px !important;
      /* Significantly enlarged as requested */
      height: 110px !important;
      margin: 0 auto 25px !important;
      border: 5px solid #fcfcfc !important;
      border-radius: 50% !important;
      overflow: hidden !important;
      background-color: #fff !important;
      z-index: 1 !important;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06) !important;
    }

    .enlarge-image img {
      width: 100% !important;
      height: 100% !important;
      object-fit: cover !important;
      border-radius: 50% !important;
    }



    /* Flag-style badge attached to the right edge */
    .centered-card .testimonials-card__meta {
      position: absolute !important;
      top: 20px !important;
      right: 0 !important;
      background-color: #ffc202 !important;
      padding: 6px 12px 6px 15px !important;
      border-radius: 4px 0 0 4px !important;
      /* Rounded only on the left side to look like a flag */
      text-align: right !important;
      min-width: 90px !important;
      z-index: 5 !important;
      box-shadow: -2px 4px 10px rgba(0, 0, 0, 0.08) !important;
    }

    .centered-card .testimonials-card__meta__name {
      font-size: 13px !important;
      margin: 0 !important;
      line-height: 1.1 !important;
      color: #000 !important;
      font-weight: 800 !important;
      display: block !important;
      text-transform: uppercase !important;
    }

    .centered-card .testimonials-card__meta__designation {
      font-size: 10px !important;
      margin: 0 !important;
      line-height: 1.1 !important;
      color: #333 !important;
      font-weight: 600 !important;
      display: block !important;
    }

    .centered-card .testimonials-card__quote {
      font-style: italic !important;
      font-size: 15px !important;
      line-height: 1.8 !important;
      color: #555 !important;
      max-width: 100% !important;
      margin-top: 15px !important;
      padding: 0 10px !important;
    }

    /* Reset Owl stage padding */
    .testimonial-one__carousel .owl-stage-outer {
      padding-top: 20px !important;
      margin-top: 0 !important;
    }
  </style>
</head>

<body>
  <!-- PAGE STARTS -->
  <div class="page-wrapper">
    <?php include("header.php") ?>
    <!-- main-slider-start -->
    <section class="main-slider-one">
      <div class="main-slider-one__carousel trevlo-owl__carousel owl-carousel owl-theme" data-owl-options='{
    "items": 1,
    "margin": 0,
    "loop": true,
    "smartSpeed": 700,
    "animateOut": "fadeOut",
    "autoplayTimeout": 5000, 
    "nav": true,
    "navText": ["<span class=&apos;icon-left-arrow&apos;></span>","<span class=&apos;icon-right-arrow&apos;></span>"],
    "dots": false,
    "autoplay": true
    }'>
        <div class="item">
          <div class="main-slider-one__image" style="background-image: url(assets/images/backgrounds/silder-2.jpg);">
          </div>
          <div class="container">
            <div class="main-slider-one__content">
              <h5 class="main-slider-one__sub-title">Your compass to India <img
                  src="assets/images/shapes/slider-1-shape-1.png" alt="trevlo"></h5>
              <h3 class="main-slider-one__title">Explore India with Touranzza<img
                  src="assets/images/shapes/slider-1-shape-2.png" alt="trevlo"
                  style="display: block; margin-top: 15px;"></h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="main-slider-one__image" style="background-image: url(assets/images/backgrounds/silder-1.jpg);">
          </div>
          <div class="container">
            <div class="main-slider-one__content">
              <h5 class="main-slider-one__sub-title">Your compass to India <img
                  src="assets/images/shapes/slider-1-shape-1.png" alt="trevlo"></h5>
              <h3 class="main-slider-one__title">Explore India with Touranzza <img
                  src="assets/images/shapes/slider-1-shape-2.png" alt="trevlo"
                  style="display: block; margin-top: 15px;"></h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="main-slider-one__image" style="background-image: url(assets/images/backgrounds/silder-3.jpg);">
          </div>
          <div class="container">
            <div class="main-slider-one__content">
              <h5 class="main-slider-one__sub-title">Your compass to India <img
                  src="assets/images/shapes/slider-1-shape-1.png" alt="trevlo"></h5>
              <h3 class="main-slider-one__title">Explore India with Touranzza <img
                  src="assets/images/shapes/slider-1-shape-2.png" alt="trevlo"
                  style="display: block; margin-top: 15px;"></h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="main-slider-one__image" style="background-image: url(assets/images/backgrounds/silder-4.jpg);">
          </div>
          <div class="container">
            <div class="main-slider-one__content">
              <h5 class="main-slider-one__sub-title">Your compass to India <img
                  src="assets/images/shapes/slider-1-shape-1.png" alt="trevlo"></h5>
              <h3 class="main-slider-one__title">Explore India with Touranzza <img
                  src="assets/images/shapes/slider-1-shape-2.png" alt="trevlo"
                  style="display: block; margin-top: 15px;"></h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="main-slider-one__image" style="background-image: url(assets/images/backgrounds/silder-5.jpg);">
          </div>
          <div class="container">
            <div class="main-slider-one__content">
              <h5 class="main-slider-one__sub-title">Your compass to India <img
                  src="assets/images/shapes/slider-1-shape-1.png" alt="trevlo"></h5>
              <h3 class="main-slider-one__title">Explore India with Touranzza <img
                  src="assets/images/shapes/slider-1-shape-2.png" alt="trevlo"
                  style="display: block; margin-top: 15px;"></h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="main-slider-one__image" style="background-image: url(assets/images/backgrounds/silder-6.jpg);">
          </div>
          <div class="container">
            <div class="main-slider-one__content">
              <h5 class="main-slider-one__sub-title">Your compass to India <img
                  src="assets/images/shapes/slider-1-shape-1.png" alt="trevlo"></h5>
              <h3 class="main-slider-one__title">Explore India with Touranzza <img
                  src="assets/images/shapes/slider-1-shape-2.png" alt="trevlo"
                  style="display: block; margin-top: 15px;"></h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="main-slider-one__image" style="background-image: url(assets/images/backgrounds/silder-7.jpg);">
          </div>
          <div class="container">
            <div class="main-slider-one__content">
              <h5 class="main-slider-one__sub-title">Your compass to India <img
                  src="assets/images/shapes/slider-1-shape-1.png" alt="trevlo"></h5>
              <h3 class="main-slider-one__title">Explore India with Touranzza <img
                  src="assets/images/shapes/slider-1-shape-2.png" alt="trevlo"
                  style="display: block; margin-top: 15px;"></h3>
            </div>
          </div>
        </div>
      </div>
      <!-- banner-slider -->
    </section>
    <!-- main-slider-end -->
    <!-- MANDALA BACKGROUND WRAPPER START -->
    <div class="mandala-bg-wrapper">
      <!-- Tour Listing One Start -->
      <section class="tour-listing-one" style="background-image: url(assets/images/backgrounds/tour-bg-1.jpg);">
        <div class="container">
          <div class="sec-title text-center">
            <p class="sec-title__tagline">Most Famous Tours</p>
            <!-- /.sec-title__tagline -->
            <h2 class="sec-title__title">Explore Golden Triangle Tours</h2>
            <!-- /.sec-title__title -->
          </div>
          <!-- /.sec-title -->
          <!-- /.sec-title -->
          <div
            class="tour-listing-one__carousel trevlo-owl__carousel trevlo-owl__carousel--custom-nav trevlo-owl__carousel--with-shadow owl-theme owl-carousel"
            data-owl-options='{
            "items": 6,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 3000,
            "nav":true,
            "dots":true,
            "navText": ["<span class=&apos;icon-left-arrow&apos;></span>","<span class=&apos;icon-right-arrow&apos;></span>"],
            "responsive":{
                "0":{
                    "items": 1
                },
                "768":{
                    "items": 2
                },
                "1200":{
                    "items": 3
                }
            }
            }'>
            <div class="item">
              <div class="tour-listing__card"> <a href="golden-triangle-tour-3-days.php"
                  class="tour-listing__card-image-box"> <img src="assets/images/tours/gt1.jpg"
                    alt="assets/images/tours/tour-3-1.jpg" class="tour-listing__card-image">
                  <div class="tour-listing__card-btn-group">
                    <div class="tour-listing__card-discount @@innerExtraClassName">GT</div>

                  </div>
                  <!-- /.tour-listing__card-btn-group -->
                  <div class="tour-listing__card-image-overlay"></div>
                  <!-- /.tour-listing__card-image-overlay -->
                </a>
                <!-- /.tour-listing__card-image-box -->
                <a href="javascript:void(0);" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                <div class="tour-listing__card-content">
                  <div class="tour-listing__card-camera-group"> <a href="javascript:void(0);"
                      class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                "items": [
                  {
                    "src": "assets/images/tours/tour-3-1.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-2.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-3.jpg"
                  }
                ],
                "gallery": {
                  "enabled": true
                },
                "type": "image"
            }'> <span class="icon-photo-camera-1"></span> </a> <a href="golden-triangle-tour-3-days.php"
                      class="tour-listing__card-camera-btn video-popup"> <span class="icon-video-camera-1-1"></span>
                    </a>
                  </div>
                  <!-- /.tour-listing__card-camera-group -->
                  <h3 class="tour-listing__card-title"><a href="golden-triangle-tour-3-days.php">Golden Triangle Tour 3
                      Days</a></h3>
                  <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem Ipsum
                    agtilable.</p>
                  <div class="tour-listing__card-inner-content">
                    <div class="tour-listing__card-review-box"> <span class="icon-star"></span>
                      <p class="tour-listing__card-review-text text-small">4.5 (30 Reviews)</p>
                    </div>
                    <!-- /.tour-listing__card-review-box -->
                    <div class="tour-listing__card-location-box"> <span class="icon-location-1"></span>
                      <p class="tour-listing__card-location-text text-small">Delhi - Agra - Jaipur - Delhi</p>
                    </div>
                    <!-- /.tour-listing__card-location-box -->
                    <div class="tour-listing__card-divider"></div>
                    <!-- /.tour-listing__card-divider -->
                    <div class="tour-listing__card-bottom">
                      <div class="tour-listing__card-bottom-left">
                        <div class="tour-listing__card-day"> <span class="icon-clock-1"></span>
                          <p class="tour-listing__card-day-text text-small">3 Days 2 Nights</p>
                        </div>
                        <!-- /.tour-listing__card-day -->
                      </div>
                      <!-- /.tour-listing__card-bottom-left -->
                      <div class="tour-listing__card-bottom-right">
                        <!-- <h4 class="tour-listing__card-price">$160</h4> -->
                      </div>
                      <!-- /.tour-listing__card-bottom-right -->
                    </div>
                    <!-- /.tour-listing__card-bottom -->
                  </div>
                  <!-- /.tour-listing__card-inner-content -->
                </div>
                <!-- /.tour-listing__card-content -->
              </div>
              <!-- /.tour-listing__card -->
            </div>
            <!-- /.item -->
            <div class="item">
              <div class="tour-listing__card"> <a href="golden-triangle-tour-4-days.php"
                  class="tour-listing__card-image-box"> <img src="assets/images/tours/gt2.jpg"
                    alt="assets/images/tours/tour-3-1.jpg" class="tour-listing__card-image">
                  <div class="tour-listing__card-btn-group">
                    <div class="tour-listing__card-discount @@innerExtraClassName">GT</div>

                  </div>
                  <!-- /.tour-listing__card-btn-group -->
                  <div class="tour-listing__card-image-overlay"></div>
                  <!-- /.tour-listing__card-image-overlay -->
                </a>
                <!-- /.tour-listing__card-image-box -->
                <a href="javascript:void(0);" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                <div class="tour-listing__card-content">
                  <div class="tour-listing__card-camera-group"> <a href="javascript:void(0);"
                      class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                "items": [
                  {
                    "src": "assets/images/tours/tour-3-1.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-2.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-3.jpg"
                  }
                ],
                "gallery": {
                  "enabled": true
                },
                "type": "image"
            }'> <span class="icon-photo-camera-1"></span> </a> <a href="golden-triangle-tour-4-days.php"
                      class="tour-listing__card-camera-btn video-popup"> <span class="icon-video-camera-1-1"></span>
                    </a>
                  </div>
                  <!-- /.tour-listing__card-camera-group -->
                  <h3 class="tour-listing__card-title"><a href="golden-triangle-tour-4-days.php">Golden Triangle Tour 4
                      Days</a></h3>
                  <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem Ipsum
                    agtilable.</p>
                  <div class="tour-listing__card-inner-content">
                    <div class="tour-listing__card-review-box"> <span class="icon-star"></span>
                      <p class="tour-listing__card-review-text text-small">4.5 (30 Reviews)</p>
                    </div>
                    <!-- /.tour-listing__card-review-box -->
                    <div class="tour-listing__card-location-box"> <span class="icon-location-1"></span>
                      <p class="tour-listing__card-location-text text-small">Delhi - Agra - Jaipur - Delhi</p>
                    </div>
                    <!-- /.tour-listing__card-location-box -->
                    <div class="tour-listing__card-divider"></div>
                    <!-- /.tour-listing__card-divider -->
                    <div class="tour-listing__card-bottom">
                      <div class="tour-listing__card-bottom-left">
                        <div class="tour-listing__card-day"> <span class="icon-clock-1"></span>
                          <p class="tour-listing__card-day-text text-small">4 Days 3 Nights</p>
                        </div>
                        <!-- /.tour-listing__card-day -->
                      </div>
                      <!-- /.tour-listing__card-bottom-left -->
                      <div class="tour-listing__card-bottom-right">
                        <!-- <h4 class="tour-listing__card-price">$160</h4> -->
                      </div>
                      <!-- /.tour-listing__card-bottom-right -->
                    </div>
                    <!-- /.tour-listing__card-bottom -->
                  </div>
                  <!-- /.tour-listing__card-inner-content -->
                </div>
                <!-- /.tour-listing__card-content -->
              </div>
              <!-- /.tour-listing__card -->
            </div>
            <!-- /.item -->
            <div class="item">
              <div class="tour-listing__card"> <a href="golden-triangle-tour-5-days.php"
                  class="tour-listing__card-image-box"> <img src="assets/images/tours/gt3.jpg"
                    alt="assets/images/tours/tour-3-1.jpg" class="tour-listing__card-image">
                  <div class="tour-listing__card-btn-group">
                    <div class="tour-listing__card-discount @@innerExtraClassName">GT</div>

                  </div>
                  <!-- /.tour-listing__card-btn-group -->
                  <div class="tour-listing__card-image-overlay"></div>
                  <!-- /.tour-listing__card-image-overlay -->
                </a>
                <!-- /.tour-listing__card-image-box -->
                <a href="javascript:void(0);" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                <div class="tour-listing__card-content">
                  <div class="tour-listing__card-camera-group"> <a href="javascript:void(0);"
                      class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                "items": [
                  {
                    "src": "assets/images/tours/tour-3-1.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-2.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-3.jpg"
                  }
                ],
                "gallery": {
                  "enabled": true
                },
                "type": "image"
            }'> <span class="icon-photo-camera-1"></span> </a> <a href="golden-triangle-tour-5-days.php"
                      class="tour-listing__card-camera-btn video-popup"> <span class="icon-video-camera-1-1"></span>
                    </a>
                  </div>
                  <!-- /.tour-listing__card-camera-group -->
                  <h3 class="tour-listing__card-title"><a href="golden-triangle-tour-5-days.php">Golden Triangle Tour 5
                      Days</a></h3>
                  <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem Ipsum
                    agtilable.</p>
                  <div class="tour-listing__card-inner-content">
                    <div class="tour-listing__card-review-box"> <span class="icon-star"></span>
                      <p class="tour-listing__card-review-text text-small">4.5 (30 Reviews)</p>
                    </div>
                    <!-- /.tour-listing__card-review-box -->
                    <div class="tour-listing__card-location-box"> <span class="icon-location-1"></span>
                      <p class="tour-listing__card-location-text text-small">Delhi - Agra - Jaipur - Delhi</p>
                    </div>
                    <!-- /.tour-listing__card-location-box -->
                    <div class="tour-listing__card-divider"></div>
                    <!-- /.tour-listing__card-divider -->
                    <div class="tour-listing__card-bottom">
                      <div class="tour-listing__card-bottom-left">
                        <div class="tour-listing__card-day"> <span class="icon-clock-1"></span>
                          <p class="tour-listing__card-day-text text-small">5 Days 4 Nights</p>
                        </div>
                        <!-- /.tour-listing__card-day -->
                      </div>
                      <!-- /.tour-listing__card-bottom-left -->
                      <div class="tour-listing__card-bottom-right">
                        <!-- <h4 class="tour-listing__card-price">$160</h4> -->
                      </div>
                      <!-- /.tour-listing__card-bottom-right -->
                    </div>
                    <!-- /.tour-listing__card-bottom -->
                  </div>
                  <!-- /.tour-listing__card-inner-content -->
                </div>
                <!-- /.tour-listing__card-content -->
              </div>
              <!-- /.tour-listing__card -->
            </div>
            <!-- /.item -->
            <div class="item">
              <div class="tour-listing__card"> <a href="#" class="tour-listing__card-image-box"> <img
                    src="assets/images/tours/gt4.jpg" alt="assets/images/tours/tour-3-1.jpg"
                    class="tour-listing__card-image">
                  <div class="tour-listing__card-btn-group">
                    <div class="tour-listing__card-discount @@innerExtraClassName">GT+Spritual</div>

                  </div>
                  <!-- /.tour-listing__card-btn-group -->
                  <div class="tour-listing__card-image-overlay"></div>
                  <!-- /.tour-listing__card-image-overlay -->
                </a>
                <!-- /.tour-listing__card-image-box -->
                <a href="javascript:void(0);" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                <div class="tour-listing__card-content">
                  <div class="tour-listing__card-camera-group"> <a href="javascript:void(0);"
                      class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                "items": [
                  {
                    "src": "assets/images/tours/tour-3-1.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-2.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-3.jpg"
                  }
                ],
                "gallery": {
                  "enabled": true
                },
                "type": "image"
            }'> <span class="icon-photo-camera-1"></span> </a> <a href="#"
                      class="tour-listing__card-camera-btn video-popup"> <span class="icon-video-camera-1-1"></span>
                    </a>
                  </div>
                  <!-- /.tour-listing__card-camera-group -->
                  <h3 class="tour-listing__card-title"><a href="#">Golden Triangle Tour with Mathura Vrindavan</a></h3>
                  <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem Ipsum
                    agtilable.</p>
                  <div class="tour-listing__card-inner-content">
                    <div class="tour-listing__card-review-box"> <span class="icon-star"></span>
                      <p class="tour-listing__card-review-text text-small">4.5 (30 Reviews)</p>
                    </div>
                    <!-- /.tour-listing__card-review-box -->
                    <div class="tour-listing__card-location-box"> <span class="icon-location-1"></span>
                      <p class="tour-listing__card-location-text text-small">Delhi - Agra - Jaipur - Delhi</p>
                    </div>
                    <!-- /.tour-listing__card-location-box -->
                    <div class="tour-listing__card-divider"></div>
                    <!-- /.tour-listing__card-divider -->
                    <div class="tour-listing__card-bottom">
                      <div class="tour-listing__card-bottom-left">
                        <div class="tour-listing__card-day"> <span class="icon-clock-1"></span>
                          <p class="tour-listing__card-day-text text-small">6 Days 5 Nights</p>
                        </div>
                        <!-- /.tour-listing__card-day -->
                      </div>
                      <!-- /.tour-listing__card-bottom-left -->
                      <div class="tour-listing__card-bottom-right">
                        <!-- <h4 class="tour-listing__card-price">$160</h4> -->
                      </div>
                      <!-- /.tour-listing__card-bottom-right -->
                    </div>
                    <!-- /.tour-listing__card-bottom -->
                  </div>
                  <!-- /.tour-listing__card-inner-content -->
                </div>
                <!-- /.tour-listing__card-content -->
              </div>
              <!-- /.tour-listing__card -->
            </div>
            <!-- /.item -->
            <div class="item">
              <div class="tour-listing__card"> <a href="golden-triangle-tour-with-varanasi.php"
                  class="tour-listing__card-image-box"> <img src="assets/images/tours/gt5.jpg"
                    alt="assets/images/tours/tour-3-1.jpg" class="tour-listing__card-image">
                  <div class="tour-listing__card-btn-group">
                    <div class="tour-listing__card-discount @@innerExtraClassName">GT+Spritual</div>

                  </div>
                  <!-- /.tour-listing__card-btn-group -->
                  <div class="tour-listing__card-image-overlay"></div>
                  <!-- /.tour-listing__card-image-overlay -->
                </a>
                <!-- /.tour-listing__card-image-box -->
                <a href="javascript:void(0);" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                <div class="tour-listing__card-content">
                  <div class="tour-listing__card-camera-group"> <a href="javascript:void(0);"
                      class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                "items": [
                  {
                    "src": "assets/images/tours/tour-3-1.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-2.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-3.jpg"
                  }
                ],
                "gallery": {
                  "enabled": true
                },
                "type": "image"
            }'> <span class="icon-photo-camera-1"></span> </a> <a href="golden-triangle-tour-with-varanasi.php"
                      class="tour-listing__card-camera-btn video-popup"> <span class="icon-video-camera-1-1"></span>
                    </a>
                  </div>
                  <!-- /.tour-listing__card-camera-group -->
                  <h3 class="tour-listing__card-title"><a href="golden-triangle-tour-with-varanasi.php">Golden Triangle
                      Tour
                      with Varanasi</a></h3>
                  <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem Ipsum
                    agtilable.</p>
                  <div class="tour-listing__card-inner-content">
                    <div class="tour-listing__card-review-box"> <span class="icon-star"></span>
                      <p class="tour-listing__card-review-text text-small">4.5 (30 Reviews)</p>
                    </div>
                    <!-- /.tour-listing__card-review-box -->
                    <div class="tour-listing__card-location-box"> <span class="icon-location-1"></span>
                      <p class="tour-listing__card-location-text text-small">Delhi - Jaipur - Agra - Varanasi - Delhi
                      </p>
                    </div>
                    <!-- /.tour-listing__card-location-box -->
                    <div class="tour-listing__card-divider"></div>
                    <!-- /.tour-listing__card-divider -->
                    <div class="tour-listing__card-bottom">
                      <div class="tour-listing__card-bottom-left">
                        <div class="tour-listing__card-day"> <span class="icon-clock-1"></span>
                          <p class="tour-listing__card-day-text text-small">10 Days 9 Nights</p>
                        </div>
                        <!-- /.tour-listing__card-day -->
                      </div>
                      <!-- /.tour-listing__card-bottom-left -->
                      <div class="tour-listing__card-bottom-right">
                        <!-- <h4 class="tour-listing__card-price">$160</h4> -->
                      </div>
                      <!-- /.tour-listing__card-bottom-right -->
                    </div>
                    <!-- /.tour-listing__card-bottom -->
                  </div>
                  <!-- /.tour-listing__card-inner-content -->
                </div>
                <!-- /.tour-listing__card-content -->
              </div>
              <!-- /.tour-listing__card -->
            </div>
            <!-- /.item -->
            <div class="item">
              <div class="tour-listing__card"> <a href="golden-triangle-tour-with-ajmer-and-pushkar.php"
                  class="tour-listing__card-image-box"> <img src="assets/images/tours/gt6.jpg"
                    alt="assets/images/tours/tour-3-1.jpg" class="tour-listing__card-image">
                  <div class="tour-listing__card-btn-group">
                    <div class="tour-listing__card-discount @@innerExtraClassName">GT+Spritual</div>

                  </div>
                  <!-- /.tour-listing__card-btn-group -->
                  <div class="tour-listing__card-image-overlay"></div>
                  <!-- /.tour-listing__card-image-overlay -->
                </a>
                <!-- /.tour-listing__card-image-box -->
                <a href="javascript:void(0);" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                <div class="tour-listing__card-content">
                  <div class="tour-listing__card-camera-group"> <a href="javascript:void(0);"
                      class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                "items": [
                  {
                    "src": "assets/images/tours/tour-3-1.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-2.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-3.jpg"
                  }
                ],
                "gallery": {
                  "enabled": true
                },
                "type": "image"
            }'> <span class="icon-photo-camera-1"></span> </a> <a
                      href="golden-triangle-tour-with-ajmer-and-pushkar.php"
                      class="tour-listing__card-camera-btn video-popup"> <span class="icon-video-camera-1-1"></span>
                    </a>
                  </div>
                  <!-- /.tour-listing__card-camera-group -->
                  <h3 class="tour-listing__card-title"><a href="golden-triangle-tour-with-ajmer-and-pushkar.php">Golden
                      Triangle Tour with Ajmer Pushkar</a></h3>
                  <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem Ipsum
                    agtilable.</p>
                  <div class="tour-listing__card-inner-content">
                    <div class="tour-listing__card-review-box"> <span class="icon-star"></span>
                      <p class="tour-listing__card-review-text text-small">4.5 (30 Reviews)</p>
                    </div>
                    <!-- /.tour-listing__card-review-box -->
                    <div class="tour-listing__card-location-box"> <span class="icon-location-1"></span>
                      <p class="tour-listing__card-location-text text-small">Delhi - Agra - Ajmer - Pushkar - Jaipur</p>
                    </div>
                    <!-- /.tour-listing__card-location-box -->
                    <div class="tour-listing__card-divider"></div>
                    <!-- /.tour-listing__card-divider -->
                    <div class="tour-listing__card-bottom">
                      <div class="tour-listing__card-bottom-left">
                        <div class="tour-listing__card-day"> <span class="icon-clock-1"></span>
                          <p class="tour-listing__card-day-text text-small">7 Days 6 Nights</p>
                        </div>
                        <!-- /.tour-listing__card-day -->
                      </div>
                      <!-- /.tour-listing__card-bottom-left -->
                      <div class="tour-listing__card-bottom-right">
                        <!-- <h4 class="tour-listing__card-price">$160</h4> -->
                      </div>
                      <!-- /.tour-listing__card-bottom-right -->
                    </div>
                    <!-- /.tour-listing__card-bottom -->
                  </div>
                  <!-- /.tour-listing__card-inner-content -->
                </div>
                <!-- /.tour-listing__card-content -->
              </div>
              <!-- /.tour-listing__card -->
            </div>
            <!-- /.item -->
            <div class="item">
              <div class="tour-listing__card"> <a href="golden-triangle-tour-with-rajasthan.php"
                  class="tour-listing__card-image-box"> <img src="assets/images/tours/gt7.jpg"
                    alt="assets/images/tours/tour-3-1.jpg" class="tour-listing__card-image">
                  <div class="tour-listing__card-btn-group">
                    <div class="tour-listing__card-discount @@innerExtraClassName">GT+Spritual</div>

                  </div>
                  <!-- /.tour-listing__card-btn-group -->
                  <div class="tour-listing__card-image-overlay"></div>
                  <!-- /.tour-listing__card-image-overlay -->
                </a>
                <!-- /.tour-listing__card-image-box -->
                <a href="javascript:void(0);" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                <div class="tour-listing__card-content">
                  <div class="tour-listing__card-camera-group"> <a href="javascript:void(0);"
                      class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                "items": [
                  {
                    "src": "assets/images/tours/tour-3-1.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-2.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-3.jpg"
                  }
                ],
                "gallery": {
                  "enabled": true
                },
                "type": "image"
            }'> <span class="icon-photo-camera-1"></span> </a> <a href="golden-triangle-tour-with-rajasthan.php"
                      class="tour-listing__card-camera-btn video-popup"> <span class="icon-video-camera-1-1"></span>
                    </a>
                  </div>
                  <!-- /.tour-listing__card-camera-group -->
                  <h3 class="tour-listing__card-title"><a href="golden-triangle-tour-with-rajasthan.php">Golden Triangle
                      Tour with Rajasthan</a></h3>
                  <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem Ipsum
                    agtilable.</p>
                  <div class="tour-listing__card-inner-content">
                    <div class="tour-listing__card-review-box"> <span class="icon-star"></span>
                      <p class="tour-listing__card-review-text text-small">4.5 (30 Reviews)</p>
                    </div>
                    <!-- /.tour-listing__card-review-box -->
                    <div class="tour-listing__card-location-box"> <span class="icon-location-1"></span>
                      <p class="tour-listing__card-location-text text-small">Delhi - Agra - Fatehpur Sikri - Jaipur -
                        Ajmer
                        - Pushkar - Udaipur - Jaisalmer - Bikaner - Mandawa</p>
                    </div>
                    <!-- /.tour-listing__card-location-box -->
                    <div class="tour-listing__card-divider"></div>
                    <!-- /.tour-listing__card-divider -->
                    <div class="tour-listing__card-bottom">
                      <div class="tour-listing__card-bottom-left">
                        <div class="tour-listing__card-day"> <span class="icon-clock-1"></span>
                          <p class="tour-listing__card-day-text text-small">9 Days 8 Nights</p>
                        </div>
                        <!-- /.tour-listing__card-day -->
                      </div>
                      <!-- /.tour-listing__card-bottom-left -->
                      <div class="tour-listing__card-bottom-right">
                        <!-- <h4 class="tour-listing__card-price">$160</h4> -->
                      </div>
                      <!-- /.tour-listing__card-bottom-right -->
                    </div>
                    <!-- /.tour-listing__card-bottom -->
                  </div>
                  <!-- /.tour-listing__card-inner-content -->
                </div>
                <!-- /.tour-listing__card-content -->
              </div>
              <!-- /.tour-listing__card -->
            </div>
            <!-- /.item -->
            <div class="item">
              <div class="tour-listing__card"> <a href="golden-triangle-tour-with-ranthambore.php"
                  class="tour-listing__card-image-box"> <img src="assets/images/tours/gt8.jpg"
                    alt="assets/images/tours/tour-3-1.jpg" class="tour-listing__card-image">
                  <div class="tour-listing__card-btn-group">
                    <div class="tour-listing__card-discount @@innerExtraClassName">GT+Wildlife</div>

                  </div>
                  <!-- /.tour-listing__card-btn-group -->
                  <div class="tour-listing__card-image-overlay"></div>
                  <!-- /.tour-listing__card-image-overlay -->
                </a>
                <!-- /.tour-listing__card-image-box -->
                <a href="javascript:void(0);" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                <div class="tour-listing__card-content">
                  <div class="tour-listing__card-camera-group"> <a href="javascript:void(0);"
                      class="tour-listing__card-camera-btn trevlo-image-popup" data-gallery-options='{
                "items": [
                  {
                    "src": "assets/images/tours/tour-3-1.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-2.jpg"
                  },
                  {
                    "src": "assets/images/tours/tour-3-3.jpg"
                  }
                ],
                "gallery": {
                  "enabled": true
                },
                "type": "image"
            }'> <span class="icon-photo-camera-1"></span> </a> <a href="golden-triangle-tour-with-ranthambore.php"
                      class="tour-listing__card-camera-btn video-popup"> <span class="icon-video-camera-1-1"></span>
                    </a>
                  </div>
                  <!-- /.tour-listing__card-camera-group -->
                  <h3 class="tour-listing__card-title"><a href="golden-triangle-tour-with-ranthambore.php">Golden
                      Triangle
                      Tour with Ranthambore</a></h3>
                  <p class="tour-listing__card-text text-small">There are many variations of passages of Lorem Ipsum
                    agtilable.</p>
                  <div class="tour-listing__card-inner-content">
                    <div class="tour-listing__card-review-box"> <span class="icon-star"></span>
                      <p class="tour-listing__card-review-text text-small">4.5 (30 Reviews)</p>
                    </div>
                    <!-- /.tour-listing__card-review-box -->
                    <div class="tour-listing__card-location-box"> <span class="icon-location-1"></span>
                      <p class="tour-listing__card-location-text text-small">Delhi - Agra - Fatehpur Sikri - Jaipur -
                        Ranthambore</p>
                    </div>
                    <!-- /.tour-listing__card-location-box -->
                    <div class="tour-listing__card-divider"></div>
                    <!-- /.tour-listing__card-divider -->
                    <div class="tour-listing__card-bottom">
                      <div class="tour-listing__card-bottom-left">
                        <div class="tour-listing__card-day"> <span class="icon-clock-1"></span>
                          <p class="tour-listing__card-day-text text-small">7 Days 6 Nights</p>
                        </div>
                        <!-- /.tour-listing__card-day -->
                      </div>
                      <!-- /.tour-listing__card-bottom-left -->
                      <div class="tour-listing__card-bottom-right">
                        <!-- <h4 class="tour-listing__card-price">$160</h4> -->
                      </div>
                      <!-- /.tour-listing__card-bottom-right -->
                    </div>
                    <!-- /.tour-listing__card-bottom -->
                  </div>
                  <!-- /.tour-listing__card-inner-content -->
                </div>
                <!-- /.tour-listing__card-content -->
              </div>
              <!-- /.tour-listing__card -->
            </div>
            <!-- /.item -->
          </div>
          <!-- /.tour-listing-one__carousel -->
        </div>
        <!-- /.container -->
      </section>
      <!-- Tour Listing One End -->


      <!-- Gallery One Start -->
      <section class="gallery-one" style="padding: 4px 0 4px;">
        <div class="container">
          <div class="sec-title text-center wow animated fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 6px;">
            <h2 class="sec-title__title" style="margin-bottom: 0;">Memories from Our Tours</h2>
          </div>
          <div
            class="gallery-one__carousel trevlo-owl__carousel trevlo-owl__carousel--custom-nav owl-carousel owl-theme"
            data-owl-options='{
            "loop": true,
            "items": 5,
            "autoplay": true,
            "autoplayTimeout": 4000,
            "smartSpeed": 600,
            "nav": true,
            "navText": ["<span class=&apos;icon-left-arrow&apos;></span>","<span class=&apos;icon-right-arrow&apos;></span>"],
            "dots": false,
            "margin": 10,
            "responsive": {
              "0": { "items": 1 },
              "576": { "items": 2 },
              "992": { "items": 3 },
              "1200": { "items": 4 },
              "1400": { "items": 5 }
            }
          }'>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery1.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery1.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery2.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery2.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery3.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery3.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery4.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery4.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery5.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery5.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery6.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery6.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery7.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery7.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery8.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery8.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery9.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery9.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery10.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery10.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery11.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery11.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery12.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery12.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery13.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery13.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery14.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery14.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="gallery-single">
                <div class="gallery-single__img-box"><img src="assets/images/gallery/gallery15.jpg" alt="gallery"
                    class="gallery-single__img">
                  <div class="gallery-single__overlay"><a href="assets/images/gallery/gallery15.jpg"
                      class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                        class="icon-plus"></span></a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.gallery-one__carousel -->
        </div>
        <!-- /.container -->
      </section>
      <!-- Gallery One End -->
      <!-- blog-one Start -->
      <div class="blog-one" style="padding-top: 30px;">
        <div class="container">
          <div class="sec-title text-center">
            <p class="sec-title__tagline">Explore Indian Culture</p>
            <!-- /.sec-title__tagline -->
            <h2 class="sec-title__title">Most Popular Tours</h2>
            <!-- /.sec-title__title -->
          </div>
          <!-- /.sec-title -->
          <div class="blog-page__carousel trevlo-owl__carousel trevlo-owl__carousel--basic-nav owl-theme owl-carousel"
            data-owl-options='{
            "items": 5,
            "margin": 30,
            "smartSpeed": 700,
            "loop":false,
            "autoplay": 6000,
            "nav":false,
            "dots":true,
            "navText": ["<span class=&apos;fa fa-angle-left&apos;></span>","<span class=&apos;fa fa-angle-right&apos;></span>"],
            "responsive":{
                "0":{
                    "items": 1
                },
                "768":{
                    "items": 2
                },
                "1200":{
                    "items": 3
                }
            }
            }'>
            <div class="item">
              <div class="blog-card"> <a href="same-day-tours.php" class="blog-card__image-link"> <img
                    src="assets/images/blog/blog-1-1.jpg" alt="You Should See Things when visiting Japan"
                    class="blog-card__image">
                  <div class="blog-card__overlay"> <span class="blog-card__plus icon-plus"></span> </div>
                  <!-- /.blog-card__overlay -->
                </a>
                <!-- /.blog-card__image-link -->
                <div class="blog-card__content">
                  <div class="blog-card__date">
                    <h4 class="blog-card__date-number">01</h4>
                    <h4 class="blog-card__date-month">Day</h4>
                  </div>
                  <!-- /.blog-card__meta -->
                  <h3 class="blog-card__title"><a href="same-day-tours.php">Same Day Tours</a></h3>
                  <!-- /.blog-card__title -->
                  <a href="same-day-tours.php" class="blog-card__link"> Read more <i class="fas fa-arrow-right"></i>
                  </a>
                  <!-- /.blog-card__link -->
                </div>
                <!-- /.blog-card__content -->
              </div>
              <!-- /.blog-card -->
            </div>
            <!-- /.col-md-6 col-xl-4 -->
            <div class="item">
              <div class="blog-card"> <a href="golden-triangle-tours.php" class="blog-card__image-link"> <img
                    src="assets/images/blog/blog-1-2.jpg" alt="You Should See Things when visiting Japan"
                    class="blog-card__image">
                  <div class="blog-card__overlay"> <span class="blog-card__plus icon-plus"></span> </div>
                  <!-- /.blog-card__overlay -->
                </a>
                <!-- /.blog-card__image-link -->
                <div class="blog-card__content">
                  <div class="blog-card__date">
                    <h4 class="blog-card__date-number">All</h4>
                    <h4 class="blog-card__date-month">Tours</h4>
                  </div>
                  <!-- /.blog-card__meta -->
                  <h3 class="blog-card__title"><a href="golden-triangle-tours.php">Golden Triangle Tours</a>
                  </h3>
                  <!-- /.blog-card__title -->
                  <a href="golden-triangle-tours.php" class="blog-card__link"> Read more <i
                      class="fas fa-arrow-right"></i> </a>
                  <!-- /.blog-card__link -->
                </div>
                <!-- /.blog-card__content -->
              </div>
              <!-- /.blog-card -->
            </div>
            <!-- /.col-md-6 col-xl-4 -->
            <div class="item">
              <div class="blog-card"> <a href="rajasthan-tours.php" class="blog-card__image-link"> <img
                    src="assets/images/blog/blog-1-3.jpg" alt="You Should See Things when visiting Japan"
                    class="blog-card__image">
                  <div class="blog-card__overlay"> <span class="blog-card__plus icon-plus"></span> </div>
                  <!-- /.blog-card__overlay -->
                </a>
                <!-- /.blog-card__image-link -->
                <div class="blog-card__content">
                  <div class="blog-card__date">
                    <h4 class="blog-card__date-number">All</h4>
                    <h4 class="blog-card__date-month">Tours</h4>
                  </div>
                  <!-- /.blog-card__meta -->
                  <h3 class="blog-card__title"><a href="rajasthan-tours.php">Rajasthan Tours</a></h3>
                  <!-- /.blog-card__title -->
                  <a href="rajasthan-tours.php" class="blog-card__link"> Read more <i class="fas fa-arrow-right"></i>
                  </a>
                  <!-- /.blog-card__link -->
                </div>
                <!-- /.blog-card__content -->
              </div>
              <!-- /.blog-card -->
            </div>
            <!-- /.col-md-6 col-xl-4 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.blog-one -->

      <!-- Testimonial One End -->
    </div>
    <!-- MANDALA BACKGROUND WRAPPER END -->


    <!-- Offer One Start -->
    <section class="offer-one" style="background-image: url('assets/images/backgrounds/offer-1-bg.png');">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-6">
            <div class="offer-one__content sec-title">
              <p class="offer-one__top-title">Special offer for you</p>
              <h2 class="offer-one__heading sec-title__heading">Start your Journey with a Single Click</h2>
              <p class="offer-one__text">There are many variations of passages of Lorem Ipsum available, but the
                majority
                have</p>
              <div class="offer-one__btn-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms"> <a
                  href="contact.php" class="offer-one__btn trevlo-btn trevlo-btn--primary"><span>Start
                    Booking</span></a>
              </div>
              <!-- /.offer-one__btn-box -->
            </div>
            <!-- /.offer-one__content -->
          </div>
          <!-- /.col-xl-5 col-lg-6 -->
          <div class="col-xl-7 col-lg-6 wow animated fadeInRight" data-wow-delay="0.1s" data-wow-duration="1500ms">
            <div class="offer-one__img-box">
              <div class="offer-one__inner-img-box"> <img src="assets/images/offer/offer-1-1.jpg" alt="offer"
                  class="offer-one__img-one"> <img src="assets/images/offer/offer-1-2.jpg" alt="offer"
                  class="offer-one__img-three" style="border-radius: 50%; object-fit: cover; aspect-ratio: 1 / 1;">
              </div>
              <!-- /.offer-one__inner-img-box -->
            </div>
            <!-- /.offer-one__img-box -->
          </div>
          <!-- /.col-xl-7 col-lg-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
      <div class="offer-one__shape-one trevlo-splax"
        data-para-options='{ "orientation": "left", "scale": 1.5, "overflow": true }'
        style="background-image: url('assets/images/shapes/offer-shape-1.png');"></div>
      <!-- /.bg -->
      <div class="offer-one__shape-two trevlo-splax"
        data-para-options='{ "orientation": "right", "scale": 1.5, "overflow": true }'
        style="background-image: url('assets/images/shapes/offer-shape-2.png');"></div>
      <!-- /.bg -->
      <div class="offer-one__bottom-bg" style="background-image: url('assets/images/offer/offer-1-4.png');"></div>
      <!-- /.bg -->
    </section>
    <!-- Offer End Start -->
    <section class="why-choose-one">
      <div class="why-choose-one__bg" style="background-image: url(assets/images/backgrounds/why-choose-bg-1.jpg);">
      </div>
      <!-- /.why-choose__bg -->
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
            <div class="sec-title text-left">
              <p class="sec-title__tagline">Are you ready to travel</p>
              <!-- /.sec-title__tagline -->
              <h2 class="sec-title__title">Choose Our Tour Types<br>
                & Enjoy Now</h2>
              <!-- /.sec-title__title -->
            </div>
            <!-- /.sec-title -->
            <!-- /.sec-title -->
          </div>
          <div class="col-xl-7 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
            <p class="why-choose-one__text"> There are many variations of passages of Lorem Ipsum available, but the
              majority have
              suffered alteradution in some form by injected humour, some form </p>
          </div>
        </div>
        <div class="row gutter-y-30">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
            <div class="why-choose-one__box">
              <div class="why-choose-one__box__bg"
                style="background-image: url(assets/images/backgrounds/why-choose-bg-1-1.png);"></div>
              <div class="why-choose-one__box__icon"><img src="assets/images/icons/taj-mahal.png" alt="Taj Mahal"
                  class="why-choose-custom-icon"></div>
              <h3 class="why-choose-one__box__title">One Day Tour</h3>
              <a href="1-day-tours.php"
                style="position: absolute; bottom: 15px; right: 20px; color: #ffeb3b; font-size: 14px; font-weight: bold; z-index: 2; text-decoration: none; display: flex; align-items: center; gap: 5px;">Discover
                More <span class="icon-right-arrow"></span></a>
            </div>
            <!-- /.why-choose-box -->
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
            <div class="why-choose-one__box">
              <div class="why-choose-one__box__bg"
                style="background-image: url(assets/images/backgrounds/why-choose-bg-1-2.png);"></div>
              <div class="why-choose-one__box__icon"><img src="assets/images/icons/city.png" alt="City"
                  class="why-choose-custom-icon"></div>
              <h3 class="why-choose-one__box__title">Under 3-5 Days Journey</h3>
              <a href="3-to-5-days-tours.php"
                style="position: absolute; bottom: 15px; right: 20px; color: #ffeb3b; font-size: 14px; font-weight: bold; z-index: 2; text-decoration: none; display: flex; align-items: center; gap: 5px;">Discover
                More <span class="icon-right-arrow"></span></a>
            </div>
            <!-- /.why-choose-box -->
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
            <div class="why-choose-one__box">
              <div class="why-choose-one__box__bg"
                style="background-image: url(assets/images/backgrounds/why-choose-bg-1-3.png);"></div>
              <div class="why-choose-one__box__icon"><img src="assets/images/icons/temple.png" alt="Temple"
                  class="why-choose-custom-icon"></div>
              <h3 class="why-choose-one__box__title">6-10 days Tours</h3>
              <a href="6-to-10-days-expeditions.php"
                style="position: absolute; bottom: 15px; right: 20px; color: #ffeb3b; font-size: 14px; font-weight: bold; z-index: 2; text-decoration: none; display: flex; align-items: center; gap: 5px;">Discover
                More <span class="icon-right-arrow"></span></a>
            </div>
            <!-- /.why-choose-box -->
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
            <div class="why-choose-one__box">
              <div class="why-choose-one__box__bg"
                style="background-image: url(assets/images/backgrounds/why-choose-bg-1-4.png);"></div>
              <div class="why-choose-one__box__icon"><img src="assets/images/icons/tower.png" alt="Tower"
                  class="why-choose-custom-icon"></div>
              <h3 class="why-choose-one__box__title">10+ Days Grand Tours</h3>
              <a href="10-plus-days-grand-tours.php"
                style="position: absolute; bottom: 15px; right: 20px; color: #ffeb3b; font-size: 14px; font-weight: bold; z-index: 2; text-decoration: none; display: flex; align-items: center; gap: 5px;">Discover
                More <span class="icon-right-arrow"></span></a>
            </div>
            <!-- /.why-choose-box -->
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.why-choose-one -->
    <!-- <div class="client-carousel @@extraClassName">
    <div class="container">
      <h5 class="client-carousel__title"><span>2k + Brands Trust Us</span></h5>
      <div class="client-carousel__one trevlo-owl__carousel owl-theme owl-carousel" data-owl-options='{
            "items": 5,
            "margin": 65,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=&apos;fa fa-angle-left&apos;></span>","<span class=&apos;fa fa-angle-right&apos;></span>"],
            "responsive":{
                "0":{
                    "items":1,
                    "margin": 0
                },
                "450":{
                    "items":2,
                    "margin": 0
                },
                "768":{
                    "items":3,
                    "margin": 40
                },
                "992":{
                    "items": 4,
                    "margin": 40
                },
                "1200":{
                    "items": 5
                }
            }
            }'>
        <div class="client-carousel__one__item"> <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-normal.png" alt="trevlo"> <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-hover.png" alt="trevlo"> </div>
        
        <div class="client-carousel__one__item"> <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-normal.png" alt="trevlo"> <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-hover.png" alt="trevlo"> </div>
        
        <div class="client-carousel__one__item"> <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-normal.png" alt="trevlo"> <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-hover.png" alt="trevlo"> </div>
        
        <div class="client-carousel__one__item"> <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-normal.png" alt="trevlo"> <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-hover.png" alt="trevlo"> </div>
        
        <div class="client-carousel__one__item"> <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-normal.png" alt="trevlo"> <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-hover.png" alt="trevlo"> </div>
        
        <div class="client-carousel__one__item"> <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-normal.png" alt="trevlo"> <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-hover.png" alt="trevlo"> </div>
        
        <div class="client-carousel__one__item"> <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-normal.png" alt="trevlo"> <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-hover.png" alt="trevlo"> </div>
        
        <div class="client-carousel__one__item"> <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-normal.png" alt="trevlo"> <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-hover.png" alt="trevlo"> </div>
        
        <div class="client-carousel__one__item"> <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-normal.png" alt="trevlo"> <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-hover.png" alt="trevlo"> </div>
        
        <div class="client-carousel__one__item"> <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-normal.png" alt="trevlo"> <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-hover.png" alt="trevlo"> </div>
        
      </div>
      
    </div>
    
  </div> -->
    <!-- /.client-carousel -->
    <!-- About Start -->
    <!-- About End -->
    <!-- Benefit One Start -->
    <section class="benefit-one">
      <div class="benefit-one__bg"></div>
      <!-- /.benefit-bg -->
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="benefit-one__content">
              <div class="sec-title text-left">
                <p class="sec-title__tagline">GET TO KNOW US</p>
                <!-- /.sec-title__tagline -->
                <h2 class="sec-title__title">Why You Should Choose Our Company</h2>
                <!-- /.sec-title__title -->
              </div>
              <!-- /.sec-title -->
              <!-- /.sec-title -->
              <h5 class="benefit-one__content__heading">Best ways to enjoy adventures</h5>
              <p class="benefit-one__content__text"> There are many variations of passages of Lorem Ipsum simply free
                text
                available, but the majority. </p>
              <div class="benefit-one__box-wrapper">
                <div class="benefit-one__box">
                  <div class="benefit-one__box__icon"><span class="icon-airplane-1"></span></div>
                  <h3 class="benefit-one__box__title">Professional & Certified</h3>
                </div>
                <!-- /.benefit-box -->
                <div class="benefit-one__box">
                  <div class="benefit-one__box__icon"><span class="icon-ticket-1"></span></div>
                  <h3 class="benefit-one__box__title">Get Instant Tour Bookings</h3>
                </div>
                <!-- /.benefit-box -->
              </div>
              <a href="about.php" class="trevlo-btn"><span>Discover More</span></a>
              <!-- /.button -->
            </div>
          </div>
          <div class="col-lg-7 wow fadeInRight" data-wow-delay="200ms">
            <div class="benefit-one__image"><img src="assets/images/resources/benefit-1-1.jpg" alt="trevlo"></div>
            <div class="benefit-one__counter">
              <div class="benefit-one__counter__icon"><span class="icon-satisfied"></span></div>
              <!-- /.counter__icon -->
              <div class="benefit-one__counter__number count-box"><span class="count-text" data-stop="5000"
                  data-speed="1500"></span> </div>
              <!-- /.counter__number -->
              <p class="benefit-one__counter__title">Satisfied Customers</p>
              <!-- /.counter__title -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Benefit One End -->

    <!-- MANDALA BACKGROUND WRAPPER START -->
    <div class="mandala-bg-wrapper">
      <!-- Testimonial One Start -->
      <section class="testimonial-one testimonial-one--home"
        style="padding-top: 60px !important; background: transparent !important;">
        <div class="container" style="max-width: 1200px;">
          <div class="sec-title text-center" style="margin-bottom: 20px;">
            <p class="sec-title__tagline">Testimonial</p>
            <!-- /.sec-title__tagline -->
            <h2 class="sec-title__title">What Our Customers are<br>
              Saying?</h2>
            <!-- /.sec-title__title -->
          </div>
        </div>
        <div class="container" style="max-width: 1200px;">
          <div
            class="testimonial-one__carousel trevlo-owl__carousel trevlo-owl__carousel--basic-nav trevlo-owl__carousel--with-shadow owl-theme owl-carousel"
            data-owl-options='{
            "items": 3,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": true,
            "nav":true,
            "dots":false,
            "navText": ["<span class=&apos;fa fa-angle-left&apos;></span>","<span class=&apos;fa fa-angle-right&apos;></span>"],
            "responsive":{
                "0":{
                    "items": 1
                },
                "768":{
                    "items": 2
                },
                "1200":{
                    "items": 3
                }
            }
            }'>
            <div class="item">
              <div class="testimonials-card centered-card">
                <div class="testimonials-card__image enlarge-image"> <img
                    src="assets/images/testimonial/testimonial-1-1.jpg" alt="Jacob Jones"> </div>
                <div class="testimonials-card__meta">
                  <h5 class="testimonials-card__meta__name">Jacob Jones</h5>
                  <p class="testimonials-card__meta__designation">UK</p>
                </div>
                <div class="testimonials-card__quote">"His SUV was immaculate and his attitude was wonderful; always
                  caring for our comfort and convenience."</div>
              </div>
            </div>
            <div class="item">
              <div class="testimonials-card centered-card">
                <div class="testimonials-card__image enlarge-image"> <img
                    src="assets/images/testimonial/testimonial-1-2.jpg" alt="Hanie Fox"> </div>
                <div class="testimonials-card__meta">
                  <h5 class="testimonials-card__meta__name">Hanie Fox</h5>
                  <p class="testimonials-card__meta__designation">USA</p>
                </div>
                <div class="testimonials-card__quote">"There was no way we could have seen what we were able to see
                  without such an excellent driver."</div>
              </div>
            </div>
            <div class="item">
              <div class="testimonials-card centered-card">
                <div class="testimonials-card__image enlarge-image"> <img
                    src="assets/images/testimonial/testimonial-1-3.jpg" alt="Guy Hawkins"> </div>
                <div class="testimonials-card__meta">
                  <h5 class="testimonials-card__meta__name">Guy Hawkins</h5>
                  <p class="testimonials-card__meta__designation">New York</p>
                </div>
                <div class="testimonials-card__quote">"The tour was amazing. We have seen a lot of monuments and sights.
                  Thank you very much!"</div>
              </div>
            </div>
            <div class="item">
              <div class="testimonials-card centered-card">
                <div class="testimonials-card__image enlarge-image"> <img
                    src="assets/images/testimonial/testimonial-1-1.jpg" alt="Charlotte Parker"> </div>
                <div class="testimonials-card__meta">
                  <h5 class="testimonials-card__meta__name">Charlotte Parker</h5>
                  <p class="testimonials-card__meta__designation">Canada</p>
                </div>
                <div class="testimonials-card__quote">"Everything was perfectly organized. The attention to detail made
                  our family trip memorable."</div>
              </div>
            </div>
            <div class="item">
              <div class="testimonials-card centered-card">
                <div class="testimonials-card__image enlarge-image"> <img
                    src="assets/images/testimonial/testimonial-1-2.jpg" alt="Arjun Mehta"> </div>
                <div class="testimonials-card__meta">
                  <h5 class="testimonials-card__meta__name">Arjun Mehta</h5>
                  <p class="testimonials-card__meta__designation">India</p>
                </div>
                <div class="testimonials-card__quote">"The best Agra tour I've had. Professional, polite, and very
                  knowledgeable about the history."</div>
              </div>
            </div>
            <div class="item">
              <div class="testimonials-card centered-card">
                <div class="testimonials-card__image enlarge-image"> <img
                    src="assets/images/testimonial/testimonial-1-3.jpg" alt="Sophia de Luca"> </div>
                <div class="testimonials-card__meta">
                  <h5 class="testimonials-card__meta__name">Sophia de Luca</h5>
                  <p class="testimonials-card__meta__designation">Italy</p>
                </div>
                <div class="testimonials-card__quote">"Incredible attention to detail. Every moment was a delightful
                  surprise. Highly recommended!"</div>
              </div>
            </div>
            <div class="item">
              <div class="testimonials-card centered-card">
                <div class="testimonials-card__image enlarge-image"> <img
                    src="assets/images/testimonial/testimonial-1-1.jpg" alt="Mark Thompson"> </div>
                <div class="testimonials-card__meta">
                  <h5 class="testimonials-card__meta__name">Mark Thompson</h5>
                  <p class="testimonials-card__meta__designation">Australia</p>
                </div>
                <div class="testimonials-card__quote">"Seamless cross-city travel and wonderful accommodation choices.
                  Touranzza is top-tier."</div>
              </div>
            </div>
            <div class="item">
              <div class="testimonials-card centered-card">
                <div class="testimonials-card__image enlarge-image"> <img
                    src="assets/images/testimonial/testimonial-1-2.jpg" alt="Yuki Tanaka"> </div>
                <div class="testimonials-card__meta">
                  <h5 class="testimonials-card__meta__name">Yuki Tanaka</h5>
                  <p class="testimonials-card__meta__designation">Japan</p>
                </div>
                <div class="testimonials-card__quote">"Polite guides and safe driving. We felt very comfortable
                  traveling across Northern India."</div>
              </div>
            </div>
            <div class="item">
              <div class="testimonials-card centered-card">
                <div class="testimonials-card__image enlarge-image"> <img
                    src="assets/images/testimonial/testimonial-1-3.jpg" alt="Elena Rossi"> </div>
                <div class="testimonials-card__meta">
                  <h5 class="testimonials-card__meta__name">Elena Rossi</h5>
                  <p class="testimonials-card__meta__designation">Germany</p>
                </div>
                <div class="testimonials-card__quote">"The sunrise at Taj Mahal was magical. Our guide knew the best
                  spots for photos!"</div>
              </div>
            </div>
            <div class="item">
              <div class="testimonials-card centered-card">
                <div class="testimonials-card__image enlarge-image"> <img
                    src="assets/images/testimonial/testimonial-1-1.jpg" alt="David Miller"> </div>
                <div class="testimonials-card__meta">
                  <h5 class="testimonials-card__meta__name">David Miller</h5>
                  <p class="testimonials-card__meta__designation">USA</p>
                </div>
                <div class="testimonials-card__quote">"Top-notch hospitality from start to end. The itinerary was
                  well-balanced and exciting."</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonial One End -->
    </div>
    <!-- MANDALA BACKGROUND WRAPPER END -->
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