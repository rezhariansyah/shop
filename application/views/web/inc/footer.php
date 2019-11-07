  </div>
  <footer class="site__footer">
      <div class="site-footer">
          <div class="container" style="color: white;">
              <div class="site-footer__widgets">
                  <div class="row">
                      <div class="col-12 col-md-6 col-lg-4">
                          <div class="site-footer__widget footer-contacts">
                              <h5 class="footer-contacts__title">Contact Us</h5>
                              <div class="footer-contacts__text">This tracking device is equipped with SiRFstar III and IV chipsets which are able to track 20 or 48 satellites. This device after being provided also with A-GPS LBS technology from cellular networks where this device can help many things especially in urban areas (Metropolitan areas) where satellite visibility is very limited.</div>
                              <ul class="footer-contacts__contacts">
                                  <li><i class="footer-contacts__icon fas fa-globe-americas"></i> Ruko Boulevard Tekno Blok F/8 Jln Tekno Widya, kawasan Taman Tekno BSD City - Tangerang Selatan Banten - INDONESIA</li>
                                  <li><i class="footer-contacts__icon far fa-envelope"></i> yugo@cudocomm.com</li>
                                  <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> (+62-21) 78840833</li>
                                  <li><i class="footer-contacts__icon far fa-clock"></i> Mon-Fri 10:00pm - 7:00pm</li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-6 col-md-3 col-lg-2">
                          <div class="site-footer__widget footer-links">
                              <h5 class="footer-links__title">Information</h5>
                              <ul class="footer-links__list">
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">About Us</a></li>
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">Delivery Information</a></li>
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">Privacy Policy</a></li>
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">Brands</a></li>
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">Contact Us</a></li>
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">Returns</a></li>
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">Site Map</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-6 col-md-3 col-lg-2">
                          <div class="site-footer__widget footer-links">
                              <h5 class="footer-links__title">My Account</h5>
                              <ul class="footer-links__list">
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">Store Location</a></li>
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">Order History</a></li>
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">Wish List</a></li>
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">Newsletter</a></li>
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">Specials</a></li>
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">Gift Certificates</a></li>
                                  <li class="footer-links__item"><a href="#" class="footer-links__link">Affiliate</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-12 col-md-12 col-lg-4">
                          <div class="site-footer__widget footer-newsletter">
                              <h5 class="footer-newsletter__title">Newsletter</h5>
                              <!-- <div class="footer-newsletter__text">Praesent pellentesque volutpat ex, vitae auctor lorem pulvinar mollis felis at lacinia.</div> -->
                              <form action="#" class="footer-newsletter__form">
                                  <label class="sr-only" for="footer-newsletter-address">Email Address</label>
                                  <input type="text" class="footer-newsletter__form-input form-control" id="footer-newsletter-address" placeholder="Email Address...">
                                  <button class="footer-newsletter__form-button btn btn-primary">Subscribe</button>
                              </form>
                              <div class="footer-newsletter__text footer-newsletter__text--social">Follow us on social networks</div>
                              <ul class="footer-newsletter__social-links">
                                  <li class="footer-newsletter__social-link footer-newsletter__social-link--facebook"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                  <li class="footer-newsletter__social-link footer-newsletter__social-link--twitter"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                  <li class="footer-newsletter__social-link footer-newsletter__social-link--youtube"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                  <li class="footer-newsletter__social-link footer-newsletter__social-link--instagram"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                  <li class="footer-newsletter__social-link footer-newsletter__social-link--rss"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fas fa-rss"></i></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="site-footer__bottom" style="color:white;">
                  <div class="site-footer__copyright">Powered by <a style="color:white;" href="https://www.cudocomm.com/" target="_blank"> Cudo Communications — &copy; 2019 All Rights Reserved</a></div>
                  <div class="site-footer__payments"><img src="images/payments.png" alt=""></div>
              </div>
          </div>
          
      </div>
  </footer>
  <script type="text/javascript">
      $(document).ready(function() {
          /*
           var defaults = {
           containerID: 'toTop', // fading element id
           containerHoverID: 'toTopHover', // fading element hover id
           scrollSpeed: 1200,
           easingType: 'linear' 
           };
           */

          $().UItoTop({
              easingType: 'easeOutQuart'
          });

      });
  </script>
  <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
  <link href="<?php echo base_url() ?>assets/web/css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="<?php echo base_url() ?>assets/web/js/jquery.flexslider.js"></script>
  <script type="text/javascript">
      $(window).load(function() {
          $('.flexslider').flexslider({
              animation: "slide",
              start: function(slider) {
                  $('body').removeClass('loading');
              }
          });
      });
  </script>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  </html>