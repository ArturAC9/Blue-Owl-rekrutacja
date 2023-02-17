<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rekrutacja
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">

<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_url');?>/css/carousel.css" rel="stylesheet">





	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rekrutacja' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 header__menu">
				<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$rekrutacja_description = get_bloginfo( 'description', 'display' );
			if ( $rekrutacja_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $rekrutacja_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'rekrutacja' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

		</nav><!-- #site-navigation -->
		<a  data-modal="modal-one" href="#" ><button class="menu__button">ZAPLANUJ REKLAMĘ</button></a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
<!-- popup -->
<div class="modal" id="modal-one">
        <div class="modal-bg modal-exit"></div>
        <div class="container">
          <div class="row">
            <div class="modal-container col-md-12">
              <h4 class="modal-container__title">Porozmawiajmy o Twojej pierwszej kampanii <br>
                z <span class="modal-container__titleCompany">Rekrtuacja Agency.</span></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <span class="modal-close modal-exit"><img src="/rekrutacja/wp-content/uploads/2022/12/close.png" alt=""></span>

          <div class="form-container">
            <form name="contactForm" method="post" onsubmit = "return validate()" action="#">
              <div class="inputBox">
                <div class="inputBox__field">
                  <label for="name">Imię i nazwisko</label>
                  <input type="text" id="name" name="name" placeholder="Z kim mamy przyjemność?" >
                  <span class="errors"></span>
                </div>
                <div class="inputBox__field">
                  <label for="name">Nazwa firmy</label>
                  <input type="text" id="name" name="name" placeholder="Pełna nazwa firmy" >
                  <span class="errors"></span>
                </div>
            </div>
          
            <div class="inputBox">
              <div class="inputBox__field">
                <label for="email">E-mail</label>
                <input type="text" placeholder="Twój adres e-mail" id="email" name="email" >
                <span class="errors"></span>
              </div>
              <div class="inputBox__field">
                <label for="phone">Telefon</label>
                <input type="text" placeholder="Twój numer telefonu" id="phone" name="phone" >
                <span class="errors"></span>
              </div>
            </div>
              
              <label for="subject">Wiadomość</label>
              <textarea placeholder="Opisz nam czego potrzebujesz" cols="132" rows="5" name="subject" id="subject"></textarea>
              <span class="errors"></span>

              <div class="myChecbox">
                <input type="checkbox" id="agree" name="agree">
                <label for="agree" id="agreeInfo">Wyrażam zgodę na przetwarzanie moich danych osobowych przez Agencję Reklamową ROXart Sp. z o.o. zawartych w formularzu kontaktowym, w celu realizacji przesłanego za jego pośrednictwem zgłoszenia. Zapoznałem/zapoznałam się z klauzulą informacyjną.</label>
              </div>

              <button class="formButton" type="submit" value="Submit">WYŚLIJ ZAPYTANIE &nbsp; ❯</button>
            </form>
          </div>
            </div>
          </div>
        </div>
        
      </div>
	   <!-- popup -->
	   <script>
      
      const modals = document.querySelectorAll("[data-modal]");

modals.forEach(function (trigger) {
  trigger.addEventListener("click", function (event) {
    event.preventDefault();
    const modal = document.getElementById(trigger.dataset.modal);
    modal.classList.add("open");
    const exits = modal.querySelectorAll(".modal-exit");
    exits.forEach(function (exit) {
      exit.addEventListener("click", function (event) {
        event.preventDefault();
        modal.classList.remove("open");
      });
    });
  });
});

















var validate = function(e) {
    var fields = document.querySelectorAll('.form-container textarea, .form-container input[type="text"]');
    var regEx;
    var removeSpan;
    var par;
    var check = false;
    var val;
    var errArr = [];

    for (var i = 0; i < fields.length; i++) {
        if (fields[i].value === "") {
          
            if (fields[i].nextElementSibling.classList.contains('error')) {
              removeSpan = fields[i].nextElementSibling;
              par = fields[i].parentNode;
              par.removeChild(removeSpan);
              fields[i].nextElementSibling.innerHTML = "Spróbuj ponownie. Treść błędu.";
              fields[i].style.boxShadow = "0 0 2px 1px #cc0001";
              check = false;
              errArr.push(fields[i]);
            }
            fields[i].nextElementSibling.innerHTML = "Spróbuj ponownie. Treść błędu.";
            fields[i].style.boxShadow = "0 0 2px 1px #cc0001";
            check = false;
            errArr.push(fields[i]);
        } else {

            if (fields[i].id !== 'email' && fields[i].id !== 'phone') {
                val = isValidChar(fields[i]);
                if(val === false) {
                  fields[i].nextElementSibling.innerHTML = "Nie oszukuj!";
                  fields[i].style.boxShadow = "0 0 2px 1px #cc0001";
                  check = false;
                  errArr.push(fields[i]);
                } else {
                  fields[i].nextElementSibling.innerHTML = "";
                  fields[i].style.boxShadow = "none";
                  check = true;
                }
            }
          
            if(fields[i].id === 'phone') {
              val = isValidPhone(fields[i]);
              if(val === false) {
                fields[i].nextElementSibling.innerHTML = "Hmmm! Your phone number is not valid?";
                fields[i].style.boxShadow = "0 0 2px 1px #cc0001";
                check = false;
                errArr.push(fields[i]);
              } else {
                fields[i].nextElementSibling.innerHTML = "";
                fields[i].style.boxShadow = "none";
                check = true;  
              }
            }

            if (fields[i].id === 'email') {
                val = isValidEmail(fields[i]);
                if(val === false) {
                    fields[i].nextElementSibling.innerHTML = "Hmmm! Your email address is not valid?";
                    fields[i].style.boxShadow = "0 0 2px 1px #cc0001";
                    check = false;
                    errArr.push(fields[i]);
                } else {
                    fields[i].nextElementSibling.innerHTML = "";
                    fields[i].style.boxShadow = "none";
                    check = true;
                }
            }
        }
    }
  
    if(check === false) {
      var count = 0;
      var toErr = setInterval(function() {
        var e = errArr[0].offsetTop + -25;
        var pos = Math.abs(e);
        if(count < pos) {
          count ++;
          window.scrollTo(0, count);
        } else {
          clearInterval(toErr);
        }
      }, 1);
    }
    
    return check

    function isValidEmail(e) {
        regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var email = e.value;
        if (!regEx.test(email)) {
            return false;
        }
    }

    function isValidChar(e) {
        regEx = /^[a-zA-Z@#$%!?^&*()_+\-=\[\]{};':"\\|,.\/? ]*$/;
        var value = e.value;
        if (!regEx.test(value)) {
            return false;
        }
    }
  
    function isValidPhone(e) {
      regEx = /^[+]?[(]?[+]?\d{2,4}[)]?[-\s]?\d{2,8}[-\s]?\d{2,8}$/;
      var value = e.value;
      if(!regEx.test(value)) {
        return false;
      }
    }
};
    </script>