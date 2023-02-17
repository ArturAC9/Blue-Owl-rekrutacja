<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rekrutacja
 */

?>

<footer>
	   <!-- CTA -->
<section class="cta">
  <div class="cta__column">
    
  <h2>Stwórz z nami <br> swój plan już teraz!</h2>
  </div>
  <img class="img-fluid cta__image" src="/rekrutacja/wp-content/uploads/2022/12/arrowCta.png" alt="">
  <div class="cta__column">
  <p>Tylko kilka chwil dzieli Cię od satysfakcji korzystania ze sprawnego marketingu dostosowanego do Twojej firmy.</p>
  </div>
  <img class="img-fluid cta__image" src="/rekrutacja/wp-content/uploads/2022/12/arrowCta.png" alt="">
  <div class="cta__column">

  <button><a href="#">ZACZNIJ JUŻ TERAZ</a></button>
  </div>
</section>

  <!-- koniec sekcji CTA-->
    <div class="container">
      <div class="row">

        <div class="col-md-3">
          <img class="logo" src="/rekrutacja/wp-content/uploads/2022/12/slider_image.png" alt="logo">
          <p class="footer__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, provident molestias magni labore sapiente incidunt?</p>
          <div class="socialmedia">
            <p>Odwiedź nas na:</p>
            <div class="socialmedia__row">
              <div class="socialmedia__box"><img src="/rekrutacja/wp-content/uploads/2022/12/fb.png" alt=""></div>
              <div class="socialmedia__box"><img src="/rekrutacja/wp-content/uploads/2022/12/fi_instagram.png" alt=""></div>
              <div class="socialmedia__box"><img src="/rekrutacja/wp-content/uploads/2022/12/yt.png" alt=""></div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <h3>Nawigacja</h3>
          <ul>
            <li><a href="#">O nas</a></li>
            <li><a href="#">Usługi</a></li>
            <li><a href="#">Kontakt</a></li>
            <li><a href="#">Zaplanuj reklamę</a></li>
          </ul>

          <div class="footer__bottom">
            <a href="#">Polityka prywatności</a>
          </div>
        </div>

        <div class="col-md-3">
          <h3>Usługi</h3>
          <ul>
            <li><a href="#">Numer 1</a></li>
            <li><a href="#">Numer 2</a></li>
            <li><a href="#">Numer 3</a></li>
            <li><a href="#">Numer 4</a></li>
          </ul>

          <div class="footer__bottom">
            <a href="#">Regulamin korzystania z portalu</a>
          </div>
        </div>

        <div class="col-md-3">
          <h3>Kontakt</h3>
          <ul>
            <li><a href="tel:+48 500 500 500"><img src="/rekrutacja/wp-content/uploads/2022/12/fi_phone-call.png" alt=""> +48 500 500 500</a></li>
            <li><a href="mailto:adres@rekrutacja.pl"><img src="/rekrutacja/wp-content/uploads/2022/12/fi_mail.png" alt=""> adres@rekrutacja.pl</a></li>
            <li>&nbsp;</li>
            <li>Biuro obsługi czynne jest:</li>
            <li class="contact__weight">Poniedziałek - piątek: 6.00 - 19.00</li>
            <li class="contact__weight">Sobota: 8.00 - 14.00</li>
          </ul>

          <div class="footer__bottomv2">
            <a href="#">Lorem ipsum dolor sit</a>
          </div>
        </div>
      </div>
    </div>
  </footer>



<?php wp_footer(); ?>

<script src="<?php bloginfo('template_url');?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/popper.js"></script>
<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/main.js"></script>
</body>
</html>
