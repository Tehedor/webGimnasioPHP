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
              <h1>Contacte con nosotros</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== Error 404 Start ====== -->
    <section class="ud-404">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-404-wrapper">
              <div class="ud-404-content">
                <!-- <h2 class="ud-404-title">404 - We couldn't find that page.</h2> -->
                <h5 class="ud-404-subtitle">
                <h5 class="ud-404-subtitle-file">
                  <!-- Mensaje enviado correctamente. -->
                </h5>
                <ul class="ud-404-links">
                  <!-- <li>
                    <a href="javascript:void(0)">Volver</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Support</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Latest News</a>
                  </li> -->
                  <li>
                    <a href="index.php">Volver</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Error 404 End ====== -->

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
    <!-- Script php -->
    <!-- <script>
      window.onload = function() {
          const urlParams = new URLSearchParams(window.location.search);
          const message = urlParams.get('message');
          if (message) {
              document.querySelector('.ud-404-subtitle').textContent = message;
          }
      }
      </script> -->


      <script>
      window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        const messageMail = urlParams.get('messageMail');
        if (messageMail) {
          document.querySelector('.ud-404-subtitle').textContent = decodeURIComponent(messageMail);
        }
        const messageFile = urlParams.get('messageFile');
        if (messageFile) {
          document.querySelector('.ud-404-subtitle-file').textContent = decodeURIComponent(messageFile);
        }
      }
      </script>
      

  </body>
</html>
