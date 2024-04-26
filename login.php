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
              <h1>Login </h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== Login Start ====== -->
    <section class="ud-login">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-login-wrapper">
              <div class="ud-login-logo">
                <img src="assets/images/logo/logo_redondos.png" alt="logo" width="20%"/>
                <h1>GymFit</h1>
              </div>
              <form class="ud-login-form" action="phpscripts/procesaLogin.php" method="post">
              <!-- <form class="ud-login-form"> -->
                <div class="ud-form-group">
                  <input
                    type="text"
                    name="username"
                    placeholder="Username"
                  />
                </div>
                <div class="ud-form-group">
                  <input
                    type="password"
                    name="password"
                    placeholder="*********"
                  />
                </div>
                <div class="ud-form-group">
                  <button type="submit" class="ud-main-btn w-100">Login</button>
                </div>

                <?php if (isset($_REQUEST['errorLogin'])): ?>
                  <div class="alert alert-danger" >
                    Error
                  </div>
                  <div class="alert alert-panel">
                    <p><?php echo "Nombre o contraseña incorrectas"; ?></p>
                  </div>
                  <?php endif; ?>
                  
              <?php if(isset($_GET['userCreated']) && $_GET['userCreated'] == 1): ?>
                    <div class="alert alert-success" >
                  <p style="color: green;">Usuario creado correctamente</p>
                  </div>
              <?php endif; ?>

              </form>

              <!-- <a class="forget-pass" href="javascript:void(0)">
                ¿Olvidaste la contraseña?
              </a> -->
              <p class="signup-option">
                ¿No eres miembro? <a href="signup.php"> Sign Up </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Login End ====== -->

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
