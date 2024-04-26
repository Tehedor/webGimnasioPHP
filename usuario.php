<!-- =========

	Template Name: Play
	Author: UIdeck
	Author URI: https://uideck.com/
	Support: https://uideck.com/support/
	Version: 1.1

========== -->

<?php
    require_once 'phpscripts/restringido.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once 'template/head.php'; ?>
  </head>
  <body>

    <!-- ====== Header Start ====== -->
    <?php include_once 'template/navBar.php'; ?>
    <!-- ====== Header End ====== -->

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-banner-content">
              <h1>Usuario
              </h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->
    
    <!-- 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888  -->
    <!-- 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888  -->
    <!-- 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888  -->

    <!-- ====== Usuario Start ====== -->
    <section class="ud-usuario">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-usuario-wrapper">
              <div class="ud-usuario-logo">
                <img src="assets/images/logo/logo_redondos.png" alt="logo" width="7%"/>
                <h2>GymFit</h2>
              </div>
              <div class="ud-usuario-form">
                <div class="ud-form-group name">
                  <div class="row">
                    <div class="col-md-8">
                      <h3>
                        Username: <span class="php-inserted" style="color: #808080; margin-left: 1em;"> <?php echo $_SESSION['username']; ?> </span>
                      </h3>
                    </div>
                    <div class="col-md-4">
                      <a href="phpscripts/logout.php" class="ud-main-btn w-100">Cerrar sesión</a>
                    </div>  
                  </div>
                  <div class="ud-form-group email">
                    <h3>
                      Email: <span class="php-inserted" style="color: #808080; margin-left: 1em;"> <?php echo $_SESSION['email']; ?> </span>
                    <h3>
                  </div>

                  <div class="ud-form-group gimansio">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="row">
                          <h3>
                            Fecha de vencimiento gimansio:  
                          <h3>
                        </div>
                        <div class="row">
                          <h4>
                            <span class="php-inserted" style="color: #808080; margin-left: 1em;"> 
                              <?php
                                if(isset($_SESSION['last_date']) && !empty($_SESSION['last_date'])) {
                                  $fecha_sesion = new DateTime($_SESSION['last_date']);
                                  $fecha_actual = new DateTime();

                                  $intervalo = $fecha_actual->diff($fecha_sesion);

                                  if ($intervalo->invert == 1) { // La fecha de caducidad ya ha pasado
                                    echo "<span style='color: #993333;'>" . $fecha_sesion->format('d/m/Y') . "</span>";
                                  } elseif ($intervalo->days <= 10) { // Quedan 10 días o menos
                                    echo "<span style='color: #808000;'>" . $fecha_sesion->format('d/m/Y') . "</span>";                                    
                                  } else { // Quedan más de 10 días
                                    echo "<span style='color: green;'>" . $fecha_sesion->format('d/m/Y') . "</span>";
                                  }
                                } else {
                                  echo "<span style='color: #993333;'>Gimnasio no disponible</span>";
                                }
                              ?>
                            </span>
                          </h4>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <form action="phpscripts/change_date.php" method="post">
                          <input type="submit" value="Renovar 30 dias">
                        </form>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 d-flex justify-content-center">
                        <?php if (isset($_GET['errordate'])): ?>
                          <div class="alert alert-danger" style="width: 400px; display: flex; align-items: center; justify-content: center; max-height: 40px; margin-top:22px;">
                            Error
                          </div>
                          <div class="alert alert-panel">
                            <p><?php echo $_GET['errordate']; ?></p>
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ====== Usuario End ====== -->
    <!-- <section id="logout" style="display: flex; flex-direction: column; align-items: center; justify-content: flex-start; margin-top: 50px;">
        <form action="phpscripts/logout.php" method="post">
            <input type="submit" value="Cerrar sesión">
        </form>
    </section> -->

<!-- 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888  -->
<!-- 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888  -->
<!-- 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888  -->


    <!-- ====== Footer Start ====== -->
      <?php include_once 'template/footer.php'; ?>
    <!-- ====== Footer End ====== -->

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <?php include_once 'template/scripts.php'; ?>
  </body>
</html>
