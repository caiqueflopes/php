<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Bem vindo</title>
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
    <?php
    if (!isset($_SESSION['user'])) { ?>
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-46">
          <div class="container">
            <a href="new-user.php">
              <h2 class="breadcrumbs-custom-title">Ainda não fez o cadasto?</h2>
            </a>
            <ul class="breadcrumbs-custom-path">
              <li><a href="new-user.php">Login</a></li>
              <li class="active">Cadastro</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(images/lontra.png);"></div>
        </div>
      </section>
    <?php
    } else { ?>
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-46">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Bem vindo <?= $_SESSION['fname']; ?>!</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">minha area</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(images/red-panda.png);"></div>
        </div>
      </section>
      <!-- Why choose us-->

      <section class="section section-md section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center">
            <div class="col-md-10 col-lg-3 col-xl-3">
              <img src="images/dogstiker.png" alt="" width="519" height="446" />
              <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modalsenha">
                Alterar senha
              </button>
              <a href="calendar.php">agenda</a>
            </div>
            <div class="col-md-10 col-lg-9 col-xl-9">
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Meus dados</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">agenda</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Pets</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <div class="text-center text-sm-left offset-top-30">
                      <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                        <li>
                          <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required" placeholder="NOME">
                        </li>
                        <li>
                          <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required" placeholder="SOBENOME">
                        </li>
                        <li>
                          <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required" placeholder="TELEFONE">
                        </li>
                        <li>
                          <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required" placeholder="ENDEREÇO">
                        </li>
                        <li>
                          <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required" placeholder="NUMERO">
                        </li>
                      </ul>
                    </div>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Atualizar</a>
                  </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-2">
                    <table class="table">
                      
                    </table>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Novo</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-3">
                    <table class="table">
                    </table>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Novo</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modalsenha" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Alterar Senha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Salvar</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Latest Projects-->
      <section class="section section-md section-fluid bg-default">
        <div class="container">
          <h2>Historico</h2>
        </div>
        <!-- Owl Carousel-->
        <!-- <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-stage-padding="15" data-xxl-stage-padding="0" data-autoplay="true" data-nav="true" data-dots="true">
          <div class="owl-item">
            
            <article class="thumbnail thumbnail-mary thumbnail-md">
              <div class="thumbnail-mary-figure"><img src="images/project-1-420x308.jpg" alt="" width="420" height="308" />
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-11-800x1200.jpg" data-lightgallery="item"><img src="images/project-1-420x308.jpg" alt="" width="420" height="308" /></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Farm Establishment</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
                <time datetime="1999">1999</time>
              </h5>
            </div>
          </div>
          <div class="owl-item">
  
            <article class="thumbnail thumbnail-mary thumbnail-md">
              <div class="thumbnail-mary-figure"><img src="images/project-2-420x308.jpg" alt="" width="420" height="308" />
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-5-800x1200.jpg" data-lightgallery="item"><img src="images/project-2-420x308.jpg" alt="" width="420" height="308" /></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">New Partners</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
                <time datetime="2005">2005</time>
              </h5>
            </div>
          </div>
          <div class="owl-item">
          
            <article class="thumbnail thumbnail-mary thumbnail-md">
              <div class="thumbnail-mary-figure"><img src="images/project-3-420x308.jpg" alt="" width="420" height="308" />
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-4-800x1200.jpg" data-lightgallery="item"><img src="images/project-3-420x308.jpg" alt="" width="420" height="308" /></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Opening Our Online Store</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
                <time datetime="2010">2010</time>
              </h5>
            </div>
          </div>
          <div class="owl-item">
           
            <article class="thumbnail thumbnail-mary thumbnail-md">
              <div class="thumbnail-mary-figure"><img src="images/project-4-420x308.jpg" alt="" width="420" height="308" />
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-3-800x1200.jpg" data-lightgallery="item"><img src="images/project-4-420x308.jpg" alt="" width="420" height="308" /></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Farming Industry Leader</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
                <time datetime="2013">2013</time>
              </h5>
            </div>
          </div>
          <div class="owl-item">
            
            <article class="thumbnail thumbnail-mary thumbnail-md">
              <div class="thumbnail-mary-figure"><img src="images/project-5-420x308.jpg" alt="" width="420" height="308" />
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-1-1200x800.jpg" data-lightgallery="item"><img src="images/project-5-420x308.jpg" alt="" width="420" height="308" /></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="#">Farming Innovations</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
                <time datetime="2019">2019</time>
              </h5>
            </div>
          </div>
        </div> -->
      </section>
      <a class="section section-banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url(images/banner/background-03-1920x310.jpg); background-image: -webkit-image-set( url(images/banner/background-03-1920x310.jpg) 1x, url(images/banner/background-03-3840x620.jpg) 2x )"><img src="images/banner/foreground-03-1600x310.png" srcset="images/banner/foreground-03-1600x310.png 1x, images/banner/foreground-03-3200x620.png 2x" alt="" width="1600" height="310"></a>
    <?php
    } ?>
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
  <script>
    function Elementout() {
      document.location = 'logout.php';
    }
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