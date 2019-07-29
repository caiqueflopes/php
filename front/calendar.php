<!DOCTYPE html>
<?php
include_once '../api/_lib/config/section.php';
error_reporting(0);
ini_set(“display_errors”, 0);
if ($_GET["calendar"] == "") {
  $_GET["calendar"] = "vet";
}
?>
<html class="wide wow-animation" lang="pt-br">

<head>
  <title>Agenda</title>
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

  <!-- CALENDARIO -->
  <link href='css/fullcalendar.css' rel='stylesheet' />
  <link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
  <script src='js/jquery.min.js'></script>
  <script src='js/moment.min.js'></script>
  <script src='js/fullcalendar.js'></script>
  <!-- script de tradução -->
  <script src='js/pt-br.js'></script>
  <!-- END CALENDARIO -->

</head>

<body>
  <div>
    <!-- Page Header-->
    <header class="section page-header">
      <nav class="navbar fixed-top" style=" background-color: #fff;box-shadow: 5px 5px 5px rgba(68,68,68,0.6);">
        <div class="rd-navbar-brand ml-5">
          <a class="brand" href="index.php">
            <img src="images/logo-default-196x47.png" alt="" width="110" height="27" />
          </a>
        </div>
        <div>
          <a href="user-area.php" class="mr-5 rd-navbar-basket fl-bigmug-line-user143" data-rd-navbar-toggle=".cart-inline"><span></span>
          </a>
        </div>
      </nav>
    </header>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom-inset">
      <div class="breadcrumbs-custom context-dark bg-overlay-46">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">Angende seu horário</h2>
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li class="active">agenda</li>
          </ul>
        </div>
        <div class="box-position" style="background-image: url(images/veter.jpg);"></div>
      </div>
    </section>
    <!-- CORPO-->
    <section class="section section-md section-first bg-default text-md-left">
      <div class="container">
        <div class="row row-50 justify-content-center">
          <div class="col-md-12 col-lg-3 col-xl-2">
            <a href="http://localhost/yapay/TheArc/front/calendar.php?calendar=vet"><img src="images/vtee.png" alt="" width="519" height="446" class="mb-3" /></a>
            <a href="http://localhost/yapay/TheArc/front/calendar.php?calendar=walk"><img src="images/dogwalkletnew.png" alt="" width="519" height="446" class="mb-3" /></a>
            <a href="http://localhost/yapay/TheArc/front/calendar.php?calendar=hotel"><img src="images/hotelparapetlet.png" alt="" width="519" height="446" /></a>
            <a href="http://localhost/yapay/TheArc/front/calendar.php?calendar=shower"><img src="images/banhoetosalet.png" alt="" width="519" height="446" class="mb-3" /></a>
          </div>
          <div class="col-md-12 col-lg-9 col-xl-10">
            <h3>
              <?php
              if ($_GET["calendar"] == 'vet') {
                echo "Veterinário";
              } elseif ($_GET["calendar"] == 'walk') {
                echo "Passeio com o pet";
              } elseif ($_GET["calendar"] == 'hotel') {
                echo "Hotel para pet";
              } else {
                echo "Banho e tosa";
              }
              ?>
            </h3>
            <!-- CALENDARIO -->
            <form class="row mb-4" id="novo_evento" action="" method="post">
              <input type="hidden" id="custId" name="user_id" value="<?= $_SESSION['user'] ?>">
              <div class="col-md-4 mt-4"><input class="form-control" type="text" placeholder="Nome do Pet" name="nome" required /> </div>
              <div class="col-md-4 mt-4"><input class="form-control" type="datetime-local" name="data" required /> </div>

              <?php
              if (!isset($_SESSION['user'])) { ?>
                <button type="button" class="button button-secondary button-ujarak button-white col-md-4" data-toggle="modal" data-target="#modalsenha">Logar</button>
              <?php
              } else { ?>
                <button type="submit" class="button button-secondary button-ujarak button-white col-md-4">Agendar</button>
              <?php
              } ?>
            </form>
            <div id='calendar'>
            </div>
            <!-- END CALENDARIO -->
          </div>
        </div>
      </div>
      <div class="modal fade" id="modalsenha" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Salvar mudanças</button>
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

  <script>
    $(document).ready(function() {

      $.getJSON("../api/_lib/calendar/read_date.php", function(result) {
        $.each(result, function(i, agenda) {
          alert(agenda.cal_NOME);
        });
      });
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: new Date(),
        businessHours: true, // display business hours
        editable: true,
        events: '../api/_lib/calendar/read_date.php'
      });

      // $('#calendar').fullCalendar({
      //   header: {
      //     left: 'prev,next today',
      //     center: 'title',
      //     right: 'month,agendaWeek,agendaDay'
      //   },
      //   defaultDate: new Date(),
      //   businessHours: true, // display business hours
      //   editable: true,
      //   events: [
      //     {
      //       title: 'Business Lunch',
      //       start: '2019-07-03T13:00:00',
      //       constraint: 'businessHours'
      //     },
      //     {
      //       title: 'Meeting',
      //       start: '2019-07-13T11:00:00',
      //       constraint: 'availableForMeeting', // defined below
      //       color: '#257e4a'
      //     },
      //     {
      //       title: 'Conference',
      //       start: '2019-07-18',
      //       end: '2019-07-20'
      //     },
      //     {
      //       title: 'Party',
      //       start: '2019-07-29T20:00:00'
      //     },

      //     // areas where "Meeting" must be dropped
      //     {
      //       id: 'availableForMeeting',
      //       start: '2019-07-11T10:00:00',
      //       end: '2019-07-11T16:00:00',
      //       rendering: 'background'
      //     },
      //     {
      //       id: 'availableForMeeting',
      //       start: '2019-07-13T10:00:00',
      //       end: '2019-07-13T16:00:00',
      //       rendering: 'background'
      //     },

      //     // red areas where no events can be dropped
      //     {
      //       start: '2019-07-24',
      //       end: '2019-07-28',
      //       overlap: false,
      //       rendering: 'background',
      //       color: '#ff9f89'
      //     },
      //     {
      //       start: '2019-07-06',
      //       end: '2019-07-08',
      //       overlap: false,
      //       rendering: 'background',
      //       color: '#ff9f89'
      //     }
      //   ]
      // });

      //Cadastra nova consulta
      $('#novo_evento').submit(function() {
        //serialize() junta todos os dados do form e deixa pronto pra ser enviado pelo ajax
        var dados = jQuery(this).serialize();
        $.ajax({
          type: "POST",
          url: "../api/_lib/calendar/add_date.php",
          data: dados,
          success: function(data) {
            if (data == "1") {
              alert("Cadastrado com sucesso! ");
              //atualiza a página!
              location.reload();
            } else {
              alert("Houve algum problema.. ");
            }
          }
        });
        return false;
      });
    });
  </script>
  
  <style>
    body {
      margin: 40px 10px;
      padding: 0;
      font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
      font-size: 14px;
    }

    #calendar {
      max-width: 900px;
      margin: 0 auto;
    }
  </style>
</body>

</html>