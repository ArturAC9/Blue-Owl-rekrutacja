<?php
/* Template Name: Kontakt*/
get_header();?>

<header>
    <div class="container">
      <div class="row">
        <div class="col-md-6 header__content">
          <p>SKONTAKTUJ SIĘ Z NAMI</p>
          <h1>Kontakt</h1>
          <p class="header__breadCrumbs">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>
          </p>
        </div>
        <div class="col-md-6 header__image">
          <img src="/rekrutacja/wp-content/uploads/2022/12/slider_image.png" alt="">
        </div>
      </div>
    </div>
  </header>
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <img src="/rekrutacja/wp-content/uploads/2022/12/slider_image.png" alt="">
        <p>Nasze Biuro Obsługi Klienta chętnie odpowie na Twoje wszelkie pytania.</p>
         <p><b>Zapraszamy do kontaktu!</b></p>
      </div>
      <div class="col-md-6 text-end">
        <a href="tel:+48 555 666 777"><button class="contact__button"><img src="/rekrutacja/wp-content/uploads/2022/12/fi_phone-call.png" alt="">+48 555 666 777</button></a>
      </div>
      <div class="col-md-6 text-start">
        <a data-modal="modal-one" href="mailto:rekrutacja@gmail.com"><button class="contact__button"><img src="/rekrutacja/wp-content/uploads/2022/12/fi_mail.png" alt="">rekrutacja@gmail.com</button></a>
      </div>
      <!-- popup -->
      <div class="modal" id="modal-one">
        <div class="modal-bg modal-exit"></div>
        <div class="container">
          <div class="row">
            <div class="modal-container col-md-12">
              <h4 class="modal-container__title">Porozmawiajmy o Twojej pierwszej kampanii <br>
                z <span class="modal-container__titleCompany">Rekrutacja.</span></h4>
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
                <label for="agree" id="agreeInfo">Wyrażam zgodę na przetwarzanie moich danych osobowych przez Agencję Reklamową Sp. z o.o. zawartych w formularzu kontaktowym, w celu realizacji przesłanego za jego pośrednictwem zgłoszenia. Zapoznałem/zapoznałam się z klauzulą informacyjną.</label>
              </div>

              <button class="formButton" type="submit" value="Submit">WYŚLIJ ZAPYTANIE &nbsp; ❯</button>
            </form>
          </div>
            </div>
          </div>
        </div>
        
      </div>

    </div>
  </div>
</section>
<section class="contactTiles">
  <div class="container">
    <div class="row">
      <!-- lewa kolumna -->
      <div class="col-md-6 contactTiles__column">
        <div class="contactTiles__image">
          <img src="/rekrutacja/wp-content/uploads/2022/12/slider_image.png" alt="">
        </div>
        <div class="contactTiles__content">
          <h5>Dane kontaktowe</h5>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
          <br>
          <p class="contactTiles__content--title">Telefon:</p>
          <h5>+48 123 123 123</h5>
          <br>
          <p class="contactTiles__content--title">E-mail:</p>
          <h5>rekrutacja@gmail.com</h5>
          <br>
          <p class="contactTiles__content--title">Adres:</p>
          <h5>Rzeszów, ul. rekrutacji 99/19, 00-000</h5>
        </div>
      </div>
      <!-- prawa kolumna -->
      <div class="col-md-6 contactTiles__column">
        <div class="contactTiles__image">
          <img src="/rekrutacja/wp-content/uploads/2022/12/slider_image.png" alt="">
        </div>
        <div class="contactTiles__content">
          <h5>Dane kontaktowe</h5>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
          <br>
          <p class="contactTiles__content--title">Telefon:</p>
          <h5>+48 123 123 123</h5>
          <br>
          <p class="contactTiles__content--title">E-mail:</p>
          <h5>rekrutacja@gmail.com</h5>
          <br>
          <p class="contactTiles__content--title">Adres:</p>
          <h5>Rzeszów, ul. rekrutacji 99/19, 00-000</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bottom">
  <img src="/rekrutacja/wp-content/uploads/2022/12/slider_image.png" alt="">
</section>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/dist/js/jquery.min.js"></script>
    <script src="../assets/dist/js/popper.js"></script>
    <script src="../assets/dist/js/bootstrap.min.js"></script>
    <script src="../assets/dist/js/owl.carousel.min.js"></script>
    <script src="../assets/dist/js/main.js"></script>
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

<?php
 get_footer();
?>