<footer class="main-footer @@extraClassName">
  <div class="main-footer__bg" style="background-image: url(assets/images/backgrounds/footer-bg.webp);"></div>
  <!-- /.main-footer__bg -->
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-3 col-md-4 col-sm-6 col-xl-2 wow animated fadeInUp" data-wow-delay="0.1s">
        <div class="footer-widget footer-widget--links">
          <div class="main-footer__logo-box"> <a href="#"><img src="assets/images/footer-logo-dark.webp" alt="logo-dark"
                class="main-footer__logo"></a>
          </div>
          <!-- /.footer-widget__links -->
        </div>
        <!-- /.footer-widget -->
      </div>
      <!-- /.col-md-6 -->
      <div class="col-lg-3 col-md-4 col-sm-6 col-xl-2 wow animated fadeInUp" data-wow-delay="0.1s">
        <div class="footer-widget footer-widget--links">
          <h2 class="footer-widget__title">Tour Packages</h2>
          <!-- /.footer-widget__title -->
          <ul class="footer-widget__links">
            <li><a href="golden-triangle-tours">Imperial Golden Triangle Tours</a></li>
            <li><a href="same-day-tours">Private Day Experiences </a></li>
            <li><a href="rajasthan-tours">Royal Rajasthan Retreats </a></li>
          </ul>
          <!-- /.footer-widget__links -->
        </div>
        <!-- /.footer-widget -->
      </div>
      <!-- /.col-md-6 -->
      <div class="col-lg-3 col-md-4 col-sm-6 col-xl-2 wow animated fadeInUp" data-wow-delay="0.1s">
        <div class="footer-widget footer-widget--links">
          <h2 class="footer-widget__title">SUPPORT & HELP</h2>
          <!-- /.footer-widget__title -->
          <ul class="footer-widget__links">
            <li><a href="./">HOME</a></li>
            <li><a href="about">ABOUT US</a></li>
            <li><a href="contact">CONTACT US</a></li>
            <li><a href="terms-of-service">TERMS OF SERVICES</a></li>
            <li><a href="privacy-policy">PRIVACY POLICY</a></li>
            <li><a href="cancellation-policy">CANCELLATION AND REFUND POLICY</a></li>
          </ul>
          <!-- /.footer-widget__links -->
        </div>
        <!-- /.footer-widget -->
      </div>
      <div class="col-lg-3 col-md-4 col-xl-4 wow animated fadeInUp" data-wow-delay="0.5s">
        <div class="footer-widget footer-widget--contact">
          <h2 class="footer-widget__title">Contact</h2>
          <!-- /.footer-widget__title -->
          <p class="footer-widget__address">Agra, Uttar Pradesh</p>
          <ul class="footer-widget__info">
            <li> <span class="icon-phone-1"></span> <a href="tel:+919837105911">+91-9837105911</a></li>
            <li> <span class="icon-phone-1"></span> <a href="tel:+917830492929">+91-7830492929</a></li>
            <li> <span class="icon-envelope"></span> <a href="mailto:india@touranzza.com">india@touranzza.com</a>
            </li>
          </ul>
          <!-- /.footer-widget__info -->
          <ul class="main-footer__social">
            <li class="main-footer__social-item"> <a href="https://www.facebook.com/share/1DU6ep6f9V/" target="_blank" rel="noopener noreferrer" class="main-footer__social-link"><i
                  class="fab fa-facebook-f"></i></a> </li>
            <li class="main-footer__social-item"> <a href="https://www.linkedin.com/company/touranzza/" target="_blank" rel="noopener noreferrer" class="main-footer__social-link"><i
                  class="fab fa-linkedin-in"></i></a> </li>
            <li class="main-footer__social-item"> <a href="https://share.google/Bwu2Uwfy6zNyqPp0X" target="_blank" rel="noopener noreferrer" class="main-footer__social-link"><i
                  class="fab fa-google"></i></a> </li>
            <li class="main-footer__social-item"> <a href="https://www.tripadvisor.in/Profile/touranzza" target="_blank" rel="noopener noreferrer" class="main-footer__social-link"><i
                  class="fab fa-tripadvisor"></i></a> </li>
            <li class="main-footer__social-item"> <a href="https://www.instagram.com/touranzza?igsh=MWVqNWhsb2NqcnlvMA==" target="_blank" rel="noopener noreferrer" class="main-footer__social-link"><i
                  class="fab fa-instagram"></i></a> </li>
          </ul>
        </div>
        <!-- /.footer-widget -->
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
  <div class="main-footer__bottom">
    <div class="container">
      <div class="main-footer__bottom-inner">
        <p class="main-footer__copyright"> &copy; Copyright <a href="#">Touranzza</a> | <span
            class="dynamic-year"></span> </p>
      </div>
      <!-- /.main-footer__inner -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.main-footer__bottom -->
</footer>
<!-- /.main-footer -->
</div>
<!-- /.page-wrapper -->



<!-- Sticky Button -->
<div class="sticky-button" onclick="toggleFormPopup()" aria-label="Enquire Now">
  <i class="fas fa-envelope"></i>
  <span class="sticky-button__tooltip">Enquire Now</span>
</div>
</div>

<!-- Popup Form -->
<div class="overlay" id="overlay"></div>
<div class="popup-form" id="enquiryForm">
  <div class="close-popup-icon" onclick="toggleFormPopup()">×</div>
  <div class="tour-listing-details__sidebar-book-tours tour-listing-details__sidebar-single wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms" style="padding: 0; margin: 0; box-shadow: none;">
    <h3 class="tour-listing-details__sidebar-title">Enquire Now</h3>
    <form action="tourmail" method="POST" class="tour-listing-details__sidebar-form">
      <div class="row">
        <div class="col-md-6">
          <div class="tour-listing-details__sidebar-form-input">
            <label>Name</label>
            <input type="text" name="name" id="popup-name" placeholder="Your Name" class="form-one__input">
          </div>
        </div>
        <div class="col-md-6">
          <div class="tour-listing-details__sidebar-form-input">
            <label>Email</label>
            <input type="email" name="email" id="popup-email" placeholder="Your Email" class="form-one__input">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tour-listing-details__sidebar-form-input">
            <label>Contact no with Country Code</label>
            <input id="popup-phone" name="phone" type="tel" class="form-one__input">
            <input id="popup-country" type="hidden" name="country">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
            <script>
              var popupInput = document.querySelector("#popup-phone");
              var popupIti = window.intlTelInput(popupInput, {
                initialCountry: "IN",
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
              });
              popupInput.addEventListener("countrychange", function () {
                var countryData = popupIti.getSelectedCountryData();
                document.querySelector("#popup-country").value = countryData.name;
              });
            </script>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tour-listing-details__sidebar-form-input">
            <label>Travel Date</label>
            <input type="text" name="datepicker" placeholder="Select date" id="popup-datepicker"
              class="tour-listing-details__sidebar-form-date trevlo-datepicker">
            <i class="tour-listing-details__sidebar-form-date-arrow fas fa-angle-down"></i>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tour-listing-details__sidebar-form-input">
                    <label>Travellers</label>
                    <div class="travellers-stepper">
                      <div class="stepper-row">
                        <div class="stepper-info">
                          <span class="stepper-label">Adults</span>
                          <span class="stepper-sub">Ages 13 or above</span>
                        </div>
                        <div class="stepper-control">
                          <button type="button" class="stepper-btn stepper-minus" data-target="adults">&#8722;</button>
                          <input type="number" name="adults" id="adults-count" value="1" min="1" max="20" readonly class="stepper-input">
                          <button type="button" class="stepper-btn stepper-plus" data-target="adults">&#43;</button>
                        </div>
                      </div>
                      <div class="stepper-row">
                        <div class="stepper-info">
                          <span class="stepper-label">Children</span>
                          <span class="stepper-sub">Ages 2-12</span>
                        </div>
                        <div class="stepper-control">
                          <button type="button" class="stepper-btn stepper-minus" data-target="children">&#8722;</button>
                          <input type="number" name="children" id="children-count" value="0" min="0" max="20" readonly class="stepper-input">
                          <button type="button" class="stepper-btn stepper-plus" data-target="children">&#43;</button>
                        </div>
                      </div>
                      <div class="stepper-row">
                        <div class="stepper-info">
                          <span class="stepper-label">Infants</span>
                          <span class="stepper-sub">Under 2</span>
                        </div>
                        <div class="stepper-control">
                          <button type="button" class="stepper-btn stepper-minus" data-target="infants">&#8722;</button>
                          <input type="number" name="infants" id="infants-count" value="0" min="0" max="10" readonly class="stepper-input">
                          <button type="button" class="stepper-btn stepper-plus" data-target="infants">&#43;</button>
                        </div>
                      </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-6">
          
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="tour-listing-details__sidebar-form-input">
            <label>Your Message</label>
            <textarea name="message" id="popup-message" cols="30" rows="3" placeholder="Write a Message"
              class="form-one__message form-one__input"></textarea>
          </div>
        </div>
      </div>
      <input type="hidden" name="hiddenField" value="Global Popup Enquiry">
      <div style="text-align: center;">
        <button type="submit" class="tour-listing-details__sidebar-btn trevlo-btn trevlo-btn--base"><span>Enquire Now</span></button>
      </div>
    </form>
  </div>
  <div class="close-popup" onclick="toggleFormPopup()">Close</div>
</div>

<!-- Custom WhatsApp Sticky Button -->
<a href="https://wa.me/919675155111" class="whatsapp-sticky" target="_blank" aria-label="Chat on WhatsApp">
  <i class="fab fa-whatsapp"></i>
  <span class="whatsapp-sticky__tooltip">Message us</span>
</a>

<!-- Mobile Nav Wrapper -->
<div class="mobile-nav__wrapper">
  <div class="mobile-nav__overlay mobile-nav__toggler"></div>
  <!-- /.mobile-nav__overlay -->
  <div class="mobile-nav__content"> <span class="mobile-nav__close mobile-nav__toggler"><i
        class="fa fa-times"></i></span>
    <div class="logo-box"> <a href="./" aria-label="logo image"><img loading="lazy" decoding="async" src="assets/images/blacklogo1.webp"
          width="155" alt="Touranzza" /></a> </div>
    <!-- /.logo-box -->
    <div class="mobile-nav__container"></div>
    <!-- /.mobile-nav__container -->
    <ul class="mobile-nav__contact list-unstyled">
      <li> <i class="fa fa-envelope"></i> <a href="mailto:india@touranzza.com">india@touranzza.com</a> </li>
      <li> <i class="fa fa-phone-alt"></i> <a href="tel:+919837105911">+91-9837105911</a> </li>
    </ul>
    <!-- /.mobile-nav__contact -->
    <div class="mobile-nav__social">
      <a href="https://www.facebook.com/share/1DU6ep6f9V/" target="_blank" rel="noopener noreferrer"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
      <a href="https://www.linkedin.com/company/touranzza/" target="_blank" rel="noopener noreferrer"> <i class="fab fa-linkedin-in" aria-hidden="true"></i> <span class="sr-only">LinkedIn</span> </a>
      <a href="https://share.google/Bwu2Uwfy6zNyqPp0X" target="_blank" rel="noopener noreferrer"> <i class="fab fa-google" aria-hidden="true"></i> <span class="sr-only">Google</span> </a>
      <a href="https://www.tripadvisor.in/Profile/touranzza" target="_blank" rel="noopener noreferrer"> <i class="fab fa-tripadvisor" aria-hidden="true"></i> <span class="sr-only">TripAdvisor</span> </a>
      <a href="https://www.instagram.com/touranzza?igsh=MWVqNWhsb2NqcnlvMA==" target="_blank" rel="noopener noreferrer"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span> </a>
    </div>
    <!-- /.mobile-nav__social -->
  </div>
  <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<script>
  // Toggle Popup Form and Overlay
  function toggleFormPopup() {
    var overlay = document.getElementById('overlay');
    var formPopup = document.getElementById('enquiryForm');

    if (overlay.style.display === 'block') {
      overlay.style.display = 'none';
      formPopup.style.display = 'none';
    } else {
      overlay.style.display = 'block';
      formPopup.style.display = 'block';
    }
  }

</script>

<script>
/* ── Travellers stepper + mobile itinerary collapse ── */
document.addEventListener('DOMContentLoaded', function() {
  /* Stepper buttons */
  document.querySelectorAll('.stepper-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var input = this.closest('.stepper-control').querySelector('.stepper-input');
      var val = parseInt(input.value) || 0;
      var min = parseInt(input.getAttribute('min')) || 0;
      var max = parseInt(input.getAttribute('max')) || 20;
      if (this.classList.contains('stepper-plus') && val < max) input.value = val + 1;
      if (this.classList.contains('stepper-minus') && val > min) input.value = val - 1;
      this.closest('.stepper-control').querySelector('.stepper-minus').disabled = parseInt(input.value) <= min;
      this.closest('.stepper-control').querySelector('.stepper-plus').disabled = parseInt(input.value) >= max;
    });
  });

  /* Mobile: collapse itinerary by default */
  if (window.innerWidth <= 767) {
    document.querySelectorAll('.trevlo-accrodion[data-grp-name="tour-listing-details__faq"] .accrodion').forEach(function(acc) {
      acc.classList.remove('active');
      var c = acc.querySelector('.accrodion-content');
      if (c) c.style.display = 'none';
    });
  }
});
</script>

