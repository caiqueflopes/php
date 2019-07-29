<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Arca</title>
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
  <div class="page">
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

    <!-- BANNERS-->
    <section class="section swiper-container swiper-slider swiper-slider-modern" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="true" data-slide-effect="fade">
      <div class="swiper-wrapper text-left">
        <div class="swiper-slide context-dark" data-slide-bg="images/hanster.jpg">
          <div class="swiper-slide-caption">
            <div class="container">
              <div class="row justify-content-center justify-content-xxl-start">
                <div class="col-md-10 col-xxl-6">
                  <div class="slider-modern-box">
                    <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Comida</span></h1>
                    <p data-caption-animate="fadeInRight" data-caption-delay="400">Aqui na Arca trabalhamos com a melhor
                      comida para seu pet, saúde e sabor no mesmo lugar</p>
                    <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="about-us.php" data-caption-animate="slideInLeft" data-caption-delay="400">Conheça a Arca</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="images/dog-banner.jpg">
          <div class="swiper-slide-caption">
            <div class="container">
              <div class="row justify-content-center justify-content-xxl-start">
                <div class="col-md-10 col-xxl-6">
                  <div class="slider-modern-box">
                    <h1 class="slider-modern-title"><span data-caption-animate="slideInLeft" data-caption-delay="0">Controle</span></h1>
                    <p data-caption-animate="fadeInRight" data-caption-delay="400">Temos um controle amplo em todas
                      nossas areas, proficionais capacitados e protudos de qualidade.</p>
                    <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="about-us.php" data-caption-animate="slideInLeft" data-caption-delay="400">Conheça a Arca</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide" data-slide-bg="images/dog-run.jpg">
          <div class="swiper-slide-caption">
            <div class="container">
              <div class="row justify-content-center justify-content-xxl-start">
                <div class="col-md-10 col-xxl-6">
                  <div class="slider-modern-box">
                    <h1 class="slider-modern-title"><span data-caption-animate="slideInDown" data-caption-delay="0">Amigos</span></h1>
                    <p data-caption-animate="fadeInRight" data-caption-delay="400">Mais que cuidar de seu pet. O mais
                      importate é deixa-lo a vontade, nossa intenção é fazer com que a Arca seja seu segundo lar.</p>
                    <div class="oh button-wrap"><a class="button button-primary button-ujarak" href="about-us.php" data-caption-animate="slideInUp" data-caption-delay="400">Conheça a Arca</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Swiper Navigation-->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination swiper-pagination-style-2"></div>
    </section>
    <!-- END BANNERS -->

    <!-- Icons Ruby-->
    <section class="section section-md bg-default section-top-image">
      <div class="container">
        <h2 class="wow slideInUp" data-wow-delay="0s">Serviços</h2>
      </div>
    </section>

    <!-- Trending products-->
    <section class="section section-md bg-default">
      <div class="container">
        <div class="row row-40 justify-content-center">
          <div class="col-sm-8 col-md-7 col-lg-6 wow fadeInLeft" data-wow-delay="0s">
            <div class="product-banner"><img src="images/raposa.jpg" alt="" width="570" height="715" />
              <div class="product-banner-content">
                <div class="product-banner-inner" style="background-image: url(images/bg-brush.png)">
                  <h3 class="text-secondary-2">SEMPRE</h3>
                  <h2 class="text-primary">COM VOCÊ</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-lg-6">
            <div class="row row-30 justify-content-center">
              <div class="col-sm-6 col-md-12 col-lg-6">
                <div class="oh-desktop">
                  <!-- Product-->
                  <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">
                    <div class="unit flex-row flex-lg-column">
                      <div class="unit-left">
                        <div class="product-figure"><img src="images/vete.jpeg" alt="" width="270" height="280" />
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="calendar.php?calendar=vet">Ver agenda</a></div>
                        </div>
                      </div>
                      <div class="unit-body">
                        <h6 class="product-title"><a href="calendar.php?calendar=vet">Veterinário</a></h6>
                        <div class="product-price-wrap">
                          <!-- <div class="product-price product-price-old">$59.00</div> -->
                          <div class="product-price">Preço médio R$60.00</div>
                        </div><a class="button button-sm button-secondary button-ujarak" href="calendar.php?calendar=vet">Ver agenda</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
              <div class="col-sm-6 col-md-12 col-lg-6">
                <div class="oh-desktop">
                  <!-- Product-->
                  <article class="product product-2 box-ordered-item wow slideInLeft" data-wow-delay="0s">
                    <div class="unit flex-row flex-lg-column">
                      <div class="unit-left">
                        <div class="product-figure"><img src="images/dogwalk.jpeg" alt="" width="270" height="280" />
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="calendar.php?calendar=walk">Ver agenda</a></div>
                        </div>
                      </div>
                      <div class="unit-body">
                        <h6 class="product-title"><a href="calendar.php?calendar=walk">Passeio com o pet</a></h6>
                        <div class="product-price-wrap">
                          <div class="product-price">Preço médio R$27.00</div>
                        </div><a class="button button-sm button-secondary button-ujarak" href="calendar.php?calendar=walk">Ver agenda</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
              <div class="col-sm-6 col-md-12 col-lg-6">
                <div class="oh-desktop">
                  <!-- Product-->
                  <article class="product product-2 box-ordered-item wow slideInLeft" data-wow-delay="0s">
                    <div class="unit flex-row flex-lg-column">
                      <div class="unit-left">
                        <div class="product-figure"><img src="images/dog-boarding.jpg" alt="" width="270" height="280" />
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="calendar.php?calendar=hotel">Ver agenda</a></div>
                        </div>
                      </div>
                      <div class="unit-body">
                        <h6 class="product-title"><a href="calendar.php?calendar=hotel">Hotel pet</a></h6>
                        <div class="product-price-wrap">
                          <div class="product-price">Preço médio R$105.00</div>
                        </div><a class="button button-sm button-secondary button-ujarak" href="calendar.php?calendar=hotel">Ver agenda</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
              <div class="col-sm-6 col-md-12 col-lg-6">
                <div class="oh-desktop">
                  <!-- Product-->
                  <article class="product product-2 box-ordered-item wow slideInRight" data-wow-delay="0s">
                    <div class="unit flex-row flex-lg-column">
                      <div class="unit-left">
                        <div class="product-figure"><img src="images/banhoetosa.jpg" alt="" width="270" height="280" />
                          <div class="product-button"><a class="button button-md button-white button-ujarak" href="calendar.php?calendar=shower">Ver agenda</a></div>
                        </div>
                      </div>
                      <div class="unit-body">
                        <h6 class="product-title"><a href="calendar.php?calendar=shower">Banho e tosa</a></h6>
                        <div class="product-price-wrap">
                          <div class="product-price">Preço médio R$62.00</div>
                        </div><a class="button button-sm button-secondary button-ujarak" href="calendar.php?calendar=shower">Ver agenda</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section CTA 2-->
    <section class="section text-center">
      <div class="parallax-container" data-parallax-img="images/dagwalk.png">
        <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-40">
          <div class="container">
            <h2 class="oh font-weight-normal"><span class="d-inline-block wow slideInDown" data-wow-delay="0s">Como
                trabalhamos</span></h2>
            <p class="oh big text-width-large"><span class="d-inline-block wow slideInUp" data-wow-delay=".2s">Temos
                proficionais estremamente capacitados na area de saude e bem estar de pets.</span></p><a class="button button-primary button-icon button-icon-left button-ujarak wow fadeInUp" href="about-us.php"><span class="mdi mdi-github-circle mdi-36px"> </span> Venha nos conheçer</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Team of professionals-->
    <section class="section section-md bg-default">
      <div class="container">
        <div class="oh">
          <h2 class="wow slideInUp" data-wow-delay="0s">Conheça nossos profissionais</h2>
        </div>
        <div class="row row-30 justify-content-center">
          <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay="0s">
            <!-- Team Classic-->
            <article class="team-classic"><a class="team-classic-figure" href="#"><img src="images/veterinaria.png" alt="" width="370" height="406" /></a>
              <div class="team-classic-caption">
                <h5 class="team-classic-name"><a href="about-us.php">Mary Jane</a></h5>
                <p class="team-classic-status">veterinária</p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
            <!-- Team Classic-->
            <article class="team-classic"><a class="team-classic-figure" href="#"><img src="images/dog-walker.png" alt="" width="370" height="406" /></a>
              <div class="team-classic-caption">
                <h5 class="team-classic-name"><a href="about-us.php">Hal Jordan</a></h5>
                <p class="team-classic-status">Dog Walker</p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
            <!-- Team Classic-->
            <article class="team-classic"><a class="team-classic-figure" href="#"><img src="images/banho-tosa.png" alt="" width="370" height="406" /></a>
              <div class="team-classic-caption">
                <h5 class="team-classic-name"><a href="about-us.php">Diana Prince</a></h5>
                <p class="team-classic-status">Banho e tosa</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- About us-->
    <section class="section">
      <div class="parallax-container" data-parallax-img="images/tiger.png">
        <div class="parallax-content section-xl context-dark bg-overlay-68">
          <div class="container">
            <div class="row row-lg row-50 justify-content-center border-classic border-classic-big">
              <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay="0s">
                <div class="counter-creative">
                  <div class="counter-creative-number"><span class="counter">5</span><span class="icon counter-creative-icon fl-bigmug-line-favourites5"></span>
                  </div>
                  <h6 class="counter-creative-title">Classificação</h6>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".1s">
                <div class="counter-creative">
                  <div class="counter-creative-number"><span class="counter">2</span><span class="symbol">k</span><span class="icon counter-creative-icon fl-bigmug-line-up104"></span>
                  </div>
                  <h6 class="counter-creative-title">Clientes</h6>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".2s">
                <div class="counter-creative">
                  <div class="counter-creative-number"><span class="counter">1780</span><span class="icon counter-creative-icon fl-bigmug-line-like51"></span>
                  </div>
                  <h6 class="counter-creative-title">Pets atendidos</h6>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3 wow fadeInLeft" data-wow-delay=".3s">
                <div class="counter-creative">
                  <div class="counter-creative-number"><span class="counter">310</span><span class="icon counter-creative-icon fl-bigmug-line-cellular9"></span>
                  </div>
                  <h6 class="counter-creative-title">Visitantes</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Improve your interior with deco-->
    <section class="section section-md bg-default section-top-image">
      <div class="container">
        <div class="oh h2-title">
          <h2 class="wow slideInUp" data-wow-delay="0s">Adote um pet!</h2>
        </div>
        <div class="row row-30" data-lightgallery="group">
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft" data-wow-delay="0s">
                <div class="thumbnail-mary-figure"><img src="images/dogadocaolingua.png" alt="" width="370" height="303" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/dogadocaolingua.png" data-lightgallery="item"><img src="images/dogadocaolingua.png" alt="" width="370" height="303" /></a>
                  <h4 class="thumbnail-mary-title"><a href="#">Sorriso</a></h4>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInUp" data-wow-delay=".1s">
                <div class="thumbnail-mary-figure"><img src="images/gatoadocao.png" alt="" width="370" height="303" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gatoadocao.png" data-lightgallery="item"><img src="images/gatoadocao.png" alt="" width="370" height="303" /></a>
                  <h4 class="thumbnail-mary-title"><a href="#">Pardo</a></h4>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInRight" data-wow-delay=".0s">
                <div class="thumbnail-mary-figure"><img src="images/dogadocao.png" alt="" width="370" height="303" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/dogadocao.png" data-lightgallery="item"><img src="images/dogadocao.png" alt="" width="370" height="303" /></a>
                  <h4 class="thumbnail-mary-title"><a href="#">Sonalto</a></h4>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInUp" data-wow-delay=".1s">
                <div class="thumbnail-mary-figure"><img src="images/catadocao.png" alt="" width="370" height="303" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/catadocao.png" data-lightgallery="item"><img src="images/catadocao.png" alt="" width="370" height="303" /></a>
                  <h4 class="thumbnail-mary-title"><a href="#">Junior</a></h4>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft" data-wow-delay="0s">
                <div class="thumbnail-mary-figure"><img src="images/dogadocaoareia.png" alt="" width="370" height="303" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/dogadocaoareia.png" data-lightgallery="item"><img src="images/dogadocaoareia.png" alt="" width="370" height="303" /></a>
                  <h4 class="thumbnail-mary-title"><a href="#">Furacão</a></h4>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-sm wow slideInDown" data-wow-delay=".1s">
                <div class="thumbnail-mary-figure"><img src="images/gatorua.png" alt="" width="370" height="303" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gatorua.png" data-lightgallery="item"><img src="images/gatorua.png" alt="" width="370" height="303" /></a>
                  <h4 class="thumbnail-mary-title"><a href="#">Bolt</a></h4>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
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