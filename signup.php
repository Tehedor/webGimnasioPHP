<!-- =========

	Template Name: Play
	Author: UIdeck
	Author URI: https://uideck.com/
	Support: https://uideck.com/support/
	Version: 1.1

========== -->

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
              <h1>Registrarse </h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== registrar Start ====== -->
    <section class="ud-registrar">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-registrar-wrapper">
              <div class="ud-registrar-logo">
                <img src="assets/images/logo/logo_redondos.png" alt="logo" width="20%"/>
                <h1>GymFit</h1>
              </div>
              <form class="ud-registrar-form" action="phpscripts/procesaRegistrar.php" method="post">
              <!-- <form class="ud-registrar-form"> -->
                <div class="ud-form-group">
                  <input
                    type="text"
                    name="username"
                    placeholder="Username"
                  />
                </div>
                <div class="ud-form-group">
                  <input
                    type="email"
                    name="email"
                    placeholder="email@gmail.com "
                  />
                </div>
                <div class="ud-form-group">
                  <input
                    type="password"
                    name="password"
                    placeholder="*********"
                  />
                </div>
                <button style="border: none; background: none; padding: 0; width: 100%;" type="submit">
                    <div class="ud-form-group">
                        <a class="ud-regis-btn">
                            Crear
                        </a>
                    </div>
                </button>

                <?php if (isset($_REQUEST['errorregistrar'])): ?>
                  <div class="alert alert-danger" >
                    Error
                  </div>
                  <div class="alert alert-warning">
                    <p><?php echo isset($_GET['errorregistrar']) ? $_GET['errorregistrar'] : ''; ?></p>
                  </div>
                <?php endif; ?>

              </form>

              <p class="signup-option" style="color: white;">
                ¿Ya tienes cuenta? <a href="login.php" style="color: white;"> <strong> Sign in </strong> </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== registrar End ====== -->

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
