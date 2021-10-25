<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Dgocky – DJ Party & Night Club HTML Template </title>
  <!-- favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?php echo site_url("layout/"); ?>assets/css/bootstrap.min.css">
  <!-- fontawesome icon  -->
  <link rel="stylesheet" href="<?php echo site_url("layout/"); ?>assets/css/fontawesome.min.css">
  <!-- flaticon css -->
  <link rel="stylesheet" href="<?php echo site_url("layout/"); ?>assets/fonts/flaticon.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="<?php echo site_url("layout/"); ?>assets/css/animate.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="<?php echo site_url("layout/"); ?>assets/css/owl.carousel.min.css">
  <!-- magnific popup -->
  <link rel="stylesheet" href="<?php echo site_url("layout/"); ?>assets/css/magnific-popup.css">
  <!-- stylesheet -->
  <link rel="stylesheet" href="<?php echo site_url("layout/"); ?>assets/css/style.css">
  <!-- responsive -->
  <link rel="stylesheet" href="<?php echo site_url("layout/"); ?>assets/css/responsive.css">

  <link rel="stylesheet" href="<?php echo site_url("layout/"); ?>assets/css/botao.enviar.horarios.css">
</head>

<body>

  <!-- preloader begin -->
  <div class="preloader">
    <div class="loader">
      <hr>
      <hr>
    </div>
  </div>
  <!-- preloader end -->

  <!-- header begin -->
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex align-items-center">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-6 d-xl-block d-lg-block d-flex align-items-center">
              <div class="section-title mb-1 mt-1">
                <h2>Mardoniosc</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- banner begin -->
  <div class="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-10">
          <div class="add-space section-title text-center">
            <h2>Gerador de ponto</h2>
          </div>
        </div>
      </div>

      <?php if(session()->has('info')):?>

      <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Informação!</strong> <?php echo session('info');?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?php endif;?>

      <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
          <div class="card background-horarios">
            <div class="card-body">
              <h5 class="card-title text-center" style="color: #fff;">Horários</h5>
              <?php echo form_open("Home/cadastrar"); ?>
                <div class="form-group">
                  <label for="entrada" style="color: #fff;">Entrada</label>
                  <input type="time" class="form-control" id="entrada" name="entrada" value="08:00:00">
                </div>
                <div class="form-group">
                  <label for="saida" style="color: #fff;">Saída</label>
                  <input type="time" class="form-control" id="saida" name="saida" value="18:00:00">
                </div>
                <div class="form-group">
                  <label for="almoco" style="color: #fff;">Tempo de Almoço</label>
                  <input type="time" class="form-control" id="almoco" name="almoco" value="01:00:00">
                </div>


                <button style="cursor: pointer;" class="enviar-horario">Gerar Horários</button>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
        <div class="col-1"></div>
        
        <?php if(isset($entrada_1)): ?>
          <div class="col-1"></div>
          <div class="col-10 table-responsive-sm">
            <table class="table mt-3">
              <thead>
                <tr>
                  <th scope="col">Entrada</th>
                  <th scope="col">Saída Almoço</th>
                  <th scope="col">Volta Almoço</th>
                  <th scope="col">Saída</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo esc($entrada_1);?></th>
                  <td><?php echo esc($saida_1);?></th>
                  <td><?php echo esc($entrada_2);?></th>
                  <td><?php echo esc($saida_2);?></th>
                </tr>
              </tbody>
            </table>
          </div>

        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- contact begin -->
  <div class="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-10">
          <div class="add-space section-title text-center">
            <h2>Nos envie uma mensagem</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-8">
          <div class="contact-form">
            <?php echo form_open("Home/enviarEmail"); ?>
              <div class="row">
                <div class="col-xl-6 col-lg-6">
                  <input type="text" placeholder="Informe seu nome" name="nome">
                  <span></span>
                </div>
                <div class="col-xl-6 col-lg-6">
                  <input type="email" placeholder="Informe seu e-mail" name="email">
                  <span></span>
                </div>
                <div class="col-xl-12 col-lg-12">
                  <input type="text" placeholder="Informe o assunto" name="assunto">
                  <span></span>
                </div>
                <div class="col-xl-12 col-lg-12">
                  <textarea placeholder="Digite a mensagem" name="mensagem"></textarea>
                  <span class="textarea"></span>
                </div>
                <div class="col-xl-6 col-lg-6">
                  <button>Enviar agora</button>
                </div>
              </div>
            <?php echo form_close();?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact end -->

  <!-- footer begin -->
  <div class="footer">

    <div class="col-xl-12 col-lg-12 d-xl-flex d-lg-flex align-items-center">
      <div class="section-title mt-1">
        <h2>Mardonio S Costa</h2>
      </div>
    </div>
  </div>
  <!-- footer end -->

  <!-- jquery -->
  <script src="<?php echo site_url("layout/"); ?>assets/js/jquery.js"></script>
  <!-- bootstrap -->
  <script src="<?php echo site_url("layout/"); ?>assets/js/bootstrap.min.js"></script>
  <!-- owl carousel -->
  <script src="<?php echo site_url("layout/"); ?>assets/js/owl.carousel.js"></script>
  <!-- magnific popup -->
  <script src="<?php echo site_url("layout/"); ?>assets/js/jquery.magnific-popup.js"></script>
  <!-- way poin js-->
  <script src="<?php echo site_url("layout/"); ?>assets/js/waypoints.min.js"></script>
  <!-- wow js-->
  <script src="<?php echo site_url("layout/"); ?>assets/js/wow.min.js"></script>
  <!-- main -->
  <script src="<?php echo site_url("layout/"); ?>assets/js/main.js"></script>
</body>

</html>