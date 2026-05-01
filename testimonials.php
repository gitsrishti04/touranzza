<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="canonical" href="https://touranzza.com/testimonials" />
  <title>Touranzza</title>
  <!-- favicons Icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="48x48" href="assets/images/favicons/favicon-48x48.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
  <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
  <meta name="description" content="Read what travelers say about Touranzza. Genuine reviews from guests who experienced our private Golden Triangle, Rajasthan, and India heritage tours." />
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
  <!-- Testimonial Slider Overrides -->
  <style>
    /* Reduce gap beneath testimonials section */
    .testimonial-one {
      padding-bottom: 40px !important;
    }

    .testimonial-one__carousel .owl-nav {
      position: absolute !important;
      top: 50% !important;
      transform: translateY(-50%) !important;
      width: 100% !important;
      display: flex !important;
      justify-content: space-between !important;
      left: 0 !important;
      z-index: 10 !important;
      pointer-events: none !important;
    }

    .testimonial-one__carousel .owl-nav button {
      pointer-events: auto !important;
      background-color: #ffc202 !important;
      color: #000 !important;
      width: 45px !important;
      height: 45px !important;
      border-radius: 50% !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      transition: all 0.3s ease !important;
      font-size: 18px !important;
    }

    .testimonial-one__carousel .owl-nav button.owl-prev {
      left: -20px !important;
      position: absolute !important;
    }

    .testimonial-one__carousel .owl-nav button.owl-next {
      right: -20px !important;
      position: absolute !important;
    }

    .testimonial-one__carousel .owl-nav button:hover {
      background-color: #000 !important;
      color: #ffc202 !important;
    }

    /* Fix clipping on mobile/small screens */
    @media (max-width: 1200px) {
      .testimonial-one__carousel .owl-nav button.owl-prev { left: 5px !important; }
      .testimonial-one__carousel .owl-nav button.owl-next { right: 5px !important; }
    }
  </style>
</head>

<body>
  <!-- PAGE STARTS -->
  <div class="page-wrapper">
    <?php include("header.php") ?>
    <section class="page-header">
      <div class="page-header__bg testi"></div>
      <!-- /.page-header__bg -->
      <div class="container">
        <h2 class="page-header__title wow animated fadeInLeft" data-wow-delay="0s" data-wow-duration="1500ms">
          Testimonial</h2>
        <div class="page-header__breadcrumb-box">
          <ul class="trevlo-breadcrumb">
            <li><a href="./">Home</a></li>
            <li>Testimonial</li>
          </ul><!-- /.trevlo-breadcrumb -->
        </div><!-- /.page-header__breadcrumb-box -->
      </div><!-- /.container -->
    </section><!-- /.page-header -->

    <!-- About Four Start -->
    <!-- About Four End -->

    <!-- CTA Two Start -->
    <!-- CTA Two End -->
    <!-- Testimonial One Start -->
    <div class="container">
      <div
        class="testimonial-one__carousel trevlo-owl__carousel trevlo-owl__carousel--custom-nav trevlo-owl__carousel--with-shadow owl-theme owl-carousel"
        data-owl-options='{
            "items": 3,
            "margin": 30,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": true,
            "nav":true,
            "dots":false,
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
          <div class="testimonials-card">
            <div class="testimonials-card__image"> <img src="assets/images/testimonial/testimonial-1-1.webp"
                alt="Jacob Jones"> </div>
            <div class="testimonials-card__meta">
              <h5 class="testimonials-card__meta__name">Jacob Jones</h5>
              <p class="testimonials-card__meta__designation">UK</p>
            </div>
            <!-- /.testimonials-card__meta -->
            <div class="testimonials-card__ratings"> <span class="icon-star"></span> <span class="icon-star"></span>
              <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> </div>
            <!-- /.testimonials-card__ratings -->
            <div class="testimonials-card__quote">"Our group of 6 adults just spent the most amazing 5 days with our private guide Touranzza, travelling the Golden Triangle (Delhi - Jaipur - Agra). The team customised the tour perfectly to suit our travel arrangements. They are extremely professional and handle every detail with expertise. Everything we requested was delivered flawlessly."</div>
            <!-- /.testimonials-card__quote -->
          </div>
          <!-- /.testimonials-card -->
        </div>
        <!-- /.owl-slide-item-->
        <div class="item">
          <div class="testimonials-card">
            <div class="testimonials-card__image"> <img src="assets/images/testimonial/testimonial-1-2.webp"
                alt="Robert Fox"> </div>
            <div class="testimonials-card__meta">
              <h5 class="testimonials-card__meta__name">Hanie Fox</h5>
              <p class="testimonials-card__meta__designation">USA</p>
            </div>
            <!-- /.testimonials-card__meta -->
            <div class="testimonials-card__ratings"> <span class="icon-star"></span> <span class="icon-star"></span>
              <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> </div>
            <!-- /.testimonials-card__ratings -->
            <div class="testimonials-card__quote">"AMAZING tour of Taj Mahal! 5 STARS! Highly recommend. Touranzza provided a seamless experience from the private car pickup in Delhi to the customized daily tours. Our assigned guide, Santosh, was absolutely WONDERFUL—kind, patient, and exceptionally knowledgeable."</div>
            <!-- /.testimonials-card__quote -->
          </div>
          <!-- /.testimonials-card -->
        </div>
        <!-- /.owl-slide-item-->
        <div class="item">
          <div class="testimonials-card">
            <div class="testimonials-card__image"> <img src="assets/images/testimonial/testimonial-1-3.webp"
                alt="Guy Hawkins"> </div>
            <div class="testimonials-card__meta">
              <h5 class="testimonials-card__meta__name">Guy Hawkins</h5>
              <p class="testimonials-card__meta__designation">New York</p>
            </div>
            <!-- /.testimonials-card__meta -->
            <div class="testimonials-card__ratings"> <span class="icon-star"></span> <span class="icon-star"></span>
              <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> </div>
            <!-- /.testimonials-card__ratings -->
            <div class="testimonials-card__quote">"Knowledgeable Guide. From first contact Touranzza was very helpful and accommodating to work within our time schedule. Touranzza arranged Ashok to drive us from Delhi and back who was a very safe and considerate driver."</div>
            <!-- /.testimonials-card__quote -->
          </div>
          <!-- /.testimonials-card -->
        </div>
        <!-- /.owl-slide-item-->
        <div class="item">
          <div class="testimonials-card">
            <div class="testimonials-card__image"> <img src="assets/images/testimonial/testimonial-1-1.webp"
                alt="Jacob Jones"> </div>
            <div class="testimonials-card__meta">
              <h5 class="testimonials-card__meta__name">Jacob Jones</h5>
              <p class="testimonials-card__meta__designation">Australia</p>
            </div>
            <!-- /.testimonials-card__meta -->
            <div class="testimonials-card__ratings"> <span class="icon-star"></span> <span class="icon-star"></span>
              <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> </div>
            <!-- /.testimonials-card__ratings -->
            <div class="testimonials-card__quote">"Feeling being with family. Working with Touranzza feels like being with family. The depth of historical knowledge and the care they put into their guest experiences is clear from start to finish. For sure we recomend this experiece."</div>
            <!-- /.testimonials-card__quote -->
          </div>
          <!-- /.testimonials-card -->
        </div>
        <!-- /.owl-slide-item-->
        <div class="item">
          <div class="testimonials-card">
            <div class="testimonials-card__image"> <img src="assets/images/testimonial/testimonial-1-2.webp"
                alt="Robert Fox"> </div>
            <div class="testimonials-card__meta">
              <h5 class="testimonials-card__meta__name">Robert Fox</h5>
              <p class="testimonials-card__meta__designation">Germany</p>
            </div>
            <!-- /.testimonials-card__meta -->
            <div class="testimonials-card__ratings"> <span class="icon-star"></span> <span class="icon-star"></span>
              <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> </div>
            <!-- /.testimonials-card__ratings -->
            <div class="testimonials-card__quote">"Awesome Day Trip. Touranzza organized a flawless one-day excursion from Delhi to Agra, including the Taj Mahal, Inlay Art, Red Fort visits. Touranzza was always available 24/7 via WhatsApp."</div>
            <!-- /.testimonials-card__quote -->
          </div>
          <!-- /.testimonials-card -->
        </div>
        <!-- /.owl-slide-item-->
        <div class="item">
          <div class="testimonials-card">
            <div class="testimonials-card__image"> <img src="assets/images/testimonial/testimonial-1-3.webp"
                alt="Guy Hawkins"> </div>
            <div class="testimonials-card__meta">
              <h5 class="testimonials-card__meta__name">Guy Hawkins</h5>
              <p class="testimonials-card__meta__designation">Hong Kong</p>
            </div>
            <!-- /.testimonials-card__meta -->
            <div class="testimonials-card__ratings"> <span class="icon-star"></span> <span class="icon-star"></span>
              <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> </div>
            <!-- /.testimonials-card__ratings -->
            <div class="testimonials-card__quote">"Best Guide!!! We booked Touranzza through our hotel and couldn't be happier with our 4-hour tour of the Taj Mahal and Agra Fort. We travel often and have met dozens of guides, but Touranzza is easily one of the best we have encountered!"</div>
            <!-- /.testimonials-card__quote -->
          </div>
          <!-- /.testimonials-card -->
        </div>
        <!-- /.owl-slide-item-->
        <div class="item">
          <div class="testimonials-card">
            <div class="testimonials-card__image"> <img src="assets/images/testimonial/testimonial-1-1.webp"
                alt="David"> </div>
            <div class="testimonials-card__meta">
              <h5 class="testimonials-card__meta__name">David Miller</h5>
              <p class="testimonials-card__meta__designation">USA</p>
            </div>
            <!-- /.testimonials-card__meta -->
            <div class="testimonials-card__ratings"> <span class="icon-star"></span> <span class="icon-star"></span>
              <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> </div>
            <!-- /.testimonials-card__ratings -->
            <div class="testimonials-card__quote">"Top-notch hospitality from start to end! Our entire Northern India itinerary was balanced and exciting. Not only did we get VIP treatment, but our driver Ashok was an absolute professional. We simply cannot recommend Touranzza enough. 10/10 experience!"</div>
            <!-- /.testimonials-card__quote -->
          </div>
          <!-- /.testimonials-card -->
        </div>
        <!-- /.owl-slide-item-->
        <div class="item">
          <div class="testimonials-card">
            <div class="testimonials-card__image"> <img src="assets/images/testimonial/testimonial-1-2.webp"
                alt="Elena"> </div>
            <div class="testimonials-card__meta">
              <h5 class="testimonials-card__meta__name">Elena</h5>
              <p class="testimonials-card__meta__designation">Germany</p>
            </div>
            <!-- /.testimonials-card__meta -->
            <div class="testimonials-card__ratings"> <span class="icon-star"></span> <span class="icon-star"></span>
              <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> </div>
            <!-- /.testimonials-card__ratings -->
            <div class="testimonials-card__quote">"Two days in the exciting city of Agra. "Our two-day experience with Touranzza was amazing! We highly recommend choosing this agency and their attentive staff for a premium visit to Agra. Every detail was handled with care and hospitality.""</div>
            <!-- /.testimonials-card__quote -->
          </div>
          <!-- /.testimonials-card -->
        </div>
        <!-- /.owl-slide-item-->
        <div class="item">
          <div class="testimonials-card">
            <div class="testimonials-card__image"> <img src="assets/images/testimonial/testimonial-1-3.webp"
                alt="Arthur"> </div>
            <div class="testimonials-card__meta">
              <h5 class="testimonials-card__meta__name">Arthur</h5>
              <p class="testimonials-card__meta__designation">UK</p>
            </div>
            <!-- /.testimonials-card__meta -->
            <div class="testimonials-card__ratings"> <span class="icon-star"></span> <span class="icon-star"></span>
              <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> </div>
            <!-- /.testimonials-card__ratings -->
            <div class="testimonials-card__quote">"I'll start by saying this was an absolute wonderful experience thanks to Touranzza. The entire team is passionate about sharing India’s rich history. Touranzza provides boutique personalized service."</div>
            <!-- /.testimonials-card__quote -->
          </div>
          <!-- /.testimonials-card -->
        </div>
        <!-- /.owl-slide-item-->
      </div>
      <!-- /.thm-owl__slider -->
    </div>
    <!-- Testimonial One End -->
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
  <script src="assets/js/trevlo.js?v=4"></script>
</body>

</html>