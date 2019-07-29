<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Fale conosco</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <?php
  include_once '../api/_lib/config/section.php';
  error_reporting(0);
  ini_set(“display_errors”, 0);
  ?>
</head>

<body>
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container"><span></span><span></span><span></span><span></span>
      </div>
    </div>
  </div>
  <div class="page"><a class="section section-banner d-none d-xl-block" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url(images/banner/background-04-1920x60.jpg); background-image: -webkit-image-set( url(images/banner/background-04-1920x60.jpg) 1x, url(images/banner/background-04-3840x120.jpg) 2x )"><img src="images/banner/foreground-04-1600x60.png" srcset="images/banner/foreground-04-1600x60.png 1x, images/banner/foreground-04-3200x120.png 2x" alt="" width="1600" height="310"></a>
    <!-- Page Header-->
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap rd-navbar-modern-wrap">
        <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="index.php">
                    <img src="images/logo-default-196x47.png" alt="" width="196" height="47" /></a></div>
              </div>
              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Basket-->
                  <div class="rd-navbar-basket-wrap">
                    <button class="rd-navbar-basket fl-bigmug-line-user143" data-rd-navbar-toggle=".cart-inline"><span></span></button>
                    <div class="cart-inline">
                      <div class="cart-inline-header">
                        <h5 class="cart-inline-title">Login</h5>
                      </div>
                      <?php
                      if (isset($_SESSION['user']) || $_SESSION['user'] != "") { ?>
                        <div class="cart-inline-body">
                          <a href="user-area.php">
                            <div class="cart-inline-item">
                              Bem- Vindo<h5><?= $_SESSION['fname']; ?> <?= $_SESSION['lname']; ?></h5>
                            </div>
                          </a>
                        </div>
                        <div class="cart-inline-footer">
                          <div class="group-sm">
                            <a class="button button-sm button-default-outline-2 button-ujarak" href="#" onclick="Elementout()">Sair</a>
                          </div>
                        </div>
                      <?php
                      } else { ?>
                        <div class="cart-inline-body">
                          <div class="cart-inline-item">
                            <div class="unit align-items-center">
                              <input class="form-input" id="txtname" type="email" name="name" placeholder="E-mail" data-constraints="@Required">
                            </div>
                          </div>
                          <div class="cart-inline-item">
                            <div class="unit align-items-center">
                              <input class="form-input" id="txtpassw" type="text" name="passw" placeholder="Senha" data-constraints="@Required">
                            </div>
                          </div>
                        </div>
                        <div class="cart-inline-footer">
                          <div class="group-sm">
                            <a class="button button-md button-primary button-pipaluk" href="#" onclick="newElement()">Entrar</a>
                            <a class="button button-sm button-default-outline-2 button-ujarak" href="new-user.php">Não sou cadastrado</a>
                          </div>
                        </div>
                      <?php
                      } ?>
                    </div>
                  </div>
                  <a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-user144" href="#"><span></span></a>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">

                    <li class="rd-nav-item"><a class="rd-nav-link" href="calendar.php">Agenda</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.php">Fale Conosco</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom-inset">
      <div class="breadcrumbs-custom context-dark bg-overlay-39">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">Fale Conosco</h2>
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active">Fale Conosco</li>
          </ul>
        </div>
        <div class="box-position" style="background-image: url(images/call.png);"></div>
      </div>
    </section>
    <!-- Contact information-->
    <section class="section section-md section-first bg-default">
      <div class="container">
        <div class="row row-30 justify-content-center">
          <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
              <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a href="tel:#">+55 (18)9 97-470642</a></p>
              </div>
            </article>
          </div>
          <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
              <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a href="#">Josino de Andrade, 67 Assis-SP</a></p>
              </div>
            </article>
          </div>
          <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
              <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a href="mailto:#">caiquef.lopes@gmail.com</a></p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Form and Gmap-->
    <section class="section section-md section-last bg-default text-md-left">
      <div class="container">
        <div class="row row-500">
          <div class="col-lg-6 section-map-small">
            <div id="map-container-google-1"  class="z-depth-1-half map-container" >
              <iframe class="google-map-container"  
                src="https://maps.google.com/maps?q=R.+Josino+de+Andrade,+Assis+-+SP,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                style="border:0" allowfullscreen>
              </iframe>
              <div class="google-map"></div>
              <ul class="google-map-markers">
                  <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <h4 class="text-spacing-50">Formulario para contato</h4>
            <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
              <div class="row row-14 gutters-14">
                <div class="col-sm-6">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                    <label class="form-label" for="contact-first-name">Primeiro Nome</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                    <label class="form-label" for="contact-last-name">Sobre Nome</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                    <label class="form-label" for="contact-email">E-mail</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-wrap">
                    <label class="form-label" for="contact-message">Mensagem</label>
                    <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                  </div>
                </div>
              </div>
              <button class="button button-primary button-pipaluk" type="submit">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <a class="section section-banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url(images/banner/background-03-1920x310.jpg); background-image: -webkit-image-set( url(images/banner/background-03-1920x310.jpg) 1x, url(images/banner/background-03-3840x620.jpg) 2x )"><img src="images/banner/foreground-03-1600x310.png" srcset="images/banner/foreground-03-1600x310.png 1x, images/banner/foreground-03-3200x620.png 2x" alt="" width="1600" height="310"></a>
    <!-- Page Footer-->
    <footer class="section footer-variant-2 footer-modern context-dark section-top-image section-top-image-dark">
      <div class="footer-variant-2-content">
        <div class="container">
          <div class="row row-40 justify-content-between">
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="oh-desktop">
                <div class="wow slideInRight" data-wow-delay="0s">
                  <div class="footer-brand"><a href="index.php"><img src="images/logo-inverse-196x42.png" alt="" width="196" height="42" /></a></div>
                  <p>A Arca faz de tudo para que seu pet se sinta em casa, aqui seu pet está salvo.</p>
                  <ul class="footer-contacts d-inline-block d-md-block">
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">+55 (18) 9 9824-6134</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                        <div class="unit-body">
                          <p>Seg-Sab: 09:00AM - 19:00PM</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                        <div class="unit-body"><a class="link-location" href="#">Josino de Andrade, 67 - 19800-290,
                            Assis-SP</a></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-4">
              <div class="oh-desktop">
                <div class="inset-top-18 wow slideInDown" data-wow-delay="0s">
                  <h5>Dicas</h5>
                  <p>Receba dicas e promoções por e-mail.</p>
                  <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                    <div class="form-wrap">
                      <input class="form-input" id="subscribe-form-5-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="subscribe-form-5-email">Seu E-mail</label>
                    </div>
                    <button class="button button-block button-white" type="submit">Enviar</button>
                  </form>
                  <div class="group-lg group-middle">
                    <p class="text-white">Social</p>
                    <div>
                      <ul class="list-inline list-inline-sm footer-social-list-2">
                        <li><a class="icon fa fa-facebook" href="#"></a></li>
                        <li><a class="icon fa fa-twitter" href="#"></a></li>
                        <li><a class="icon fa fa-google-plus" href="#"></a></li>
                        <li><a class="icon fa fa-instagram" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-xl-3">
              <div class="oh-desktop">
                <div class="inset-top-18 wow slideInLeft" data-wow-delay="0s">
                  <h5>Galeria</h5>
                  <div class="row row-10 gutters-10" data-lightgallery="group">
                    <div class="col-6 col-sm-3 col-lg-6">
                      <!-- Thumbnail Classic-->
                      <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="images/120dogsleep.png" alt="" width="129" height="120" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/dogsleep.png" data-lightgallery="item"><img src="images/120dogsleep.png" alt="" width="129" height="120" /></a>
                        </div>
                      </article>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-6">
                      <!-- Thumbnail Classic-->
                      <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="images/babypig.png" alt="" width="129" height="120" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/babypigbig.png" data-lightgallery="item"><img src="images/babypig.png" alt="" width="129" height="120" /></a>
                        </div>
                      </article>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-6">
                      <!-- Thumbnail Classic-->
                      <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="images/120dog.png" alt="" width="129" height="120" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/120dogbig.png" data-lightgallery="item"><img src="images/120dog.png" alt="" width="129" height="120" /></a>
                        </div>
                      </article>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-6">
                      <!-- Thumbnail Classic-->
                      <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure"><img src="images/rabit.png" alt="" width="129" height="120" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/rabitbig.png" data-lightgallery="item"><img src="images/rabit.png" alt="" width="129" height="120" /></a>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-variant-2-bottom-panel">
        <div class="container">
          <!-- Rights-->
        </div>
      </div>
    </footer>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {});
    $('#myInput').keypress(function(event) {
      var keycode = (event.keyCode ? event.keyCode : event.which);
      if (keycode == '13') {
        newElement();
      }

    });

    function newElement() {
      var name = $("#txtname").val();
      var pass = $("#txtpassw").val();
      if (name != "" && pass != "") {
        $.post("../api/_lib/login/login.php", {
          name: name,
          passw: pass

        });
        url = "index.php";
        $(location).attr("href", url);
      } else {
        alert("É preciso informar o usuario e senha!");
      }
    }

    function Elementout() {
      document.location = 'logout.php';
    }
  </script>
</body>

</html>