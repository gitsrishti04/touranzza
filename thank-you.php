<!DOCTYPE html>
<html lang="en">
<head>
  <script async src="https://www.googletagmanager.com/gtm.js?id=GTM-5CTVFD86"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  </script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thank You | Touranzza</title>
  <link rel="canonical" href="https://touranzza.com/thank-you" />
  <meta name="robots" content="noindex, nofollow" />
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
  <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
  <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
  <link rel="stylesheet" href="assets/vendors/trevlo-icons/style.css" />
  <link rel="stylesheet" href="assets/css/trevlo.css" />
  <link rel="stylesheet" href="assets/css/touranzza.css" />
  <style>
    /* Thank you hero */
    .thankyou-hero {
      position: relative;
      background: #130f10;
      padding: 80px 0 60px;
      text-align: center;
      overflow: hidden;
    }
    .thankyou-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: url('assets/images/backgrounds/mandala-bg.webp');
      background-size: 500px 500px;
      background-repeat: repeat;
      opacity: 0.08;
      pointer-events: none;
    }
    .thankyou-hero__icon {
      width: 80px;
      height: 80px;
      background: #ffc202;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 24px;
      font-size: 36px;
      color: #130f10;
      position: relative;
      z-index: 1;
    }
    .thankyou-hero__title {
      font-family: 'Playfair Display SC', serif;
      font-size: 42px;
      color: #ffc202;
      margin-bottom: 16px;
      position: relative;
      z-index: 1;
    }
    .thankyou-hero__subtitle {
      font-size: 18px;
      color: rgba(255,255,255,0.85);
      max-width: 600px;
      margin: 0 auto 12px;
      line-height: 1.7;
      position: relative;
      z-index: 1;
    }
    .thankyou-hero__note {
      font-size: 14px;
      color: rgba(255,255,255,0.5);
      position: relative;
      z-index: 1;
    }
    .thankyou-hero__btns {
      margin-top: 32px;
      display: flex;
      gap: 16px;
      justify-content: center;
      flex-wrap: wrap;
      position: relative;
      z-index: 1;
    }
    .thankyou-hero__btns a {
      padding: 12px 28px;
      border-radius: 6px;
      font-weight: 700;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
      text-decoration: none;
    }
    .btn-primary-gold {
      background: #ffc202;
      color: #130f10;
    }
    .btn-primary-gold:hover {
      background: #e6ae00;
      color: #130f10;
    }
    .btn-outline-white {
      border: 2px solid rgba(255,255,255,0.4);
      color: #fff;
    }
    .btn-outline-white:hover {
      border-color: #ffc202;
      color: #ffc202;
    }

    /* Explore section */
    .thankyou-explore {
      background: #fff;
      padding: 60px 0;
    }
    .thankyou-explore__title {
      text-align: center;
      font-size: 28px;
      font-weight: 800;
      margin-bottom: 8px;
      color: #130f10;
    }
    .thankyou-explore__sub {
      text-align: center;
      color: #888;
      margin-bottom: 40px;
      font-size: 15px;
    }
    .explore-card {
      background: #FAF5EE;
      border-radius: 12px;
      padding: 28px 20px;
      text-align: center;
      transition: all 0.3s ease;
      height: 100%;
      text-decoration: none;
      display: block;
      color: inherit;
      position: relative;
      overflow: hidden;
    }
    .explore-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.08);
      color: inherit;
      text-decoration: none;
    }
    .explore-card__icon {
      width: 60px;
      height: 60px;
      background: #ffc202;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 16px;
      font-size: 24px;
      color: #130f10;
    }
    .explore-card__title {
      font-size: 17px;
      font-weight: 800;
      color: #130f10;
      margin-bottom: 8px;
    }
    .explore-card__text {
      font-size: 13px;
      color: #666;
      line-height: 1.6;
    }

    @media (max-width: 767px) {
      .thankyou-hero__title { font-size: 28px; }
      .thankyou-hero__subtitle { font-size: 15px; }
    }
  </style>
</head>
<body>
<div class="page-wrapper">
  <?php include("header.php") ?>

  <!-- THANK YOU HERO -->
  <section class="thankyou-hero">
    <div class="container">
      <div class="thankyou-hero__icon">
        <i class="fas fa-check"></i>
      </div>
      <h1 class="thankyou-hero__title">Thank You!</h1>
      <p class="thankyou-hero__subtitle">Your enquiry has been received. Our travel specialists will get back to you within 24 hours with a personalised itinerary.</p>
      <p class="thankyou-hero__note">A confirmation has been sent to your email address.</p>
      <div class="thankyou-hero__btns">
        <a href="./" class="thankyou-hero__btns a btn-primary-gold">Back to Home</a>
        <a href="tour-packages" class="thankyou-hero__btns a btn-outline-white">Explore Tours</a>
        <a href="contact" class="thankyou-hero__btns a btn-outline-white">Contact Us</a>
      </div>
    </div>
  </section>

  <!-- EXPLORE OPTIONS -->
  <div class="mandala-bg-wrapper">

    <!-- Gallery Carousel — all ChatGPT images -->
    <section class="gallery-one" style="padding: 40px 0 20px;">
      <div class="container">
        <div class="sec-title text-center wow animated fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 20px;">
          <p class="sec-title__tagline">Our Guests' Journeys</p>
          <h2 class="sec-title__title">India Through Our Guests' Eyes</h2>
        </div>
        <div class="gallery-one__carousel trevlo-owl__carousel trevlo-owl__carousel--custom-nav owl-carousel owl-theme"
          data-owl-options='{
          "loop": true,
          "items": 5,
          "autoplay": true,
          "autoplayTimeout": 3500,
          "smartSpeed": 600,
          "nav": true,
          "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
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
          <?php
          $gallery_images = [
            "ChatGPT Image Apr 18, 2026, 01_15_46 AM.webp",
            "ChatGPT Image Apr 18, 2026, 01_25_00 AM.webp",
            "ChatGPT Image Apr 18, 2026, 01_39_20 AM.webp",
            "ChatGPT Image Apr 18, 2026, 01_43_45 AM.webp",
            "ChatGPT Image Apr 18, 2026, 01_49_26 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_28_35 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_29_56 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_33_23 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_33_30 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_34_45 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_35_59 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_38_36 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_39_43 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_41_01 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_42_29 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_44_41 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_46_42 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_48_41 AM.webp",
            "ChatGPT Image Apr 19, 2026, 12_50_43 AM.webp",
          ];
          foreach ($gallery_images as $img) {
            $src = "assets/images/gallery/" . $img;
            echo '<div class="item"><div class="gallery-single"><div class="gallery-single__img-box">';
            echo '<img src="' . $src . '" alt="Touranzza India Tour" class="gallery-single__img">';
            echo '<div class="gallery-single__overlay"><a href="' . $src . '" class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span class="icon-plus"></span></a></div>';
            echo '</div></div></div>';
          }
          ?>
        </div>
      </div>
    </section>

    <section class="thankyou-explore">
      <div class="container">
        <h2 class="thankyou-explore__title">Continue Exploring India</h2>
        <p class="thankyou-explore__sub">While we prepare your personalised itinerary, discover more of what Touranzza offers</p>
        <div class="row gutter-y-30">
          <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
            <a href="golden-triangle-tours" class="explore-card">
              <div class="explore-card__icon"><i class="fas fa-route"></i></div>
              <div class="explore-card__title">Golden Triangle Tours</div>
              <div class="explore-card__text">Delhi, Agra & Jaipur — India's iconic heritage circuit</div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
            <a href="rajasthan-tours" class="explore-card">
              <div class="explore-card__icon"><i class="fas fa-chess-rook"></i></div>
              <div class="explore-card__title">Royal Rajasthan</div>
              <div class="explore-card__text">Forts, palaces, deserts and royal heritage</div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
            <a href="same-day-tours" class="explore-card">
              <div class="explore-card__icon"><i class="fas fa-sun"></i></div>
              <div class="explore-card__title">Same Day Tours</div>
              <div class="explore-card__text">Taj Mahal, Delhi & Jaipur in a single day</div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
            <a href="contact" class="explore-card">
              <div class="explore-card__icon"><i class="fas fa-headset"></i></div>
              <div class="explore-card__title">Talk to a Specialist</div>
              <div class="explore-card__text">Get expert advice on your perfect India journey</div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php include("footer.php") ?>
  <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><span class="scroll-to-top__text">back top</span><span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span></a>
</div>

<script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/jarallax/jarallax.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
<script src="assets/vendors/wow/wow.js"></script>
<script src="assets/vendors/tilt/tilt.jquery.js"></script>
<script src="assets/vendors/isotope/isotope.js"></script>
<script src="assets/js/trevlo.js?v=4"></script>
</body>
</html>
