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
              <h1>Contacte con nosotros
              </h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== Contact Start ====== -->
    <section id="contact" class="ud-contact">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-4 col-lg-5">

            <div class="ud-contact-content-wrapper">
              <!-- <div class="ud-contact-title">
                <span>CONTACT US</span>
                <h2>
                  Let’s talk about <br />
                  Love to hear from you!
                </h2>
              </div> -->
              <div class="ud-contact-info-wrapper">
                <div class="ud-single-info">
                  <div class="ud-info-icon">
                    <i class="lni lni-map-marker"></i>
                  </div>
                  <div class="ud-info-meta">
                    <h5>Ubicación</h5>
                    <!-- <p>401 Broadway, 24th Floor, Orchard Cloud View, London</p> -->
                    <p>C. de Fina de Calderón, 24, Hortaleza, 28055 Madrid</p>
                  </div>
                </div>
                <div class="ud-single-info">
                  <div class="ud-info-icon">
                    <i class="lni lni-envelope"></i>
                  </div>
                  <div class="ud-info-meta">
                    <h5>Correo de Contacto:</h5>
                    <p>GymFit@gmail.com</p>
                    <!-- <p></p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Carta para rellenar -->
          <div class="col-xl-8 col-lg-7">
            
            <div
              class="ud-contact-form-wrapper wow fadeInUp"
              data-wow-delay=".2s"
            >
              <h3 class="ud-contact-form-title">Mandanos un mensaje</h3>
              <!-- <form class="ud-contact-form" action="contact_code.php" method="post"> -->

<!-- 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888  -->
<!-- 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888  -->
<!-- 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888  -->


<form class="ud-contact-form" action="phpscripts/contact_code.php" method="POST"  enctype="multipart/form-data">
  <div class="ud-form-group">
    <label for="fullName">Nombre Completo*</label>
    <input type="text" name="fullName" placeholder="Juan Ramon" />
  </div>
  <div class="ud-form-group">
    <label for="email">Email*</label>
    <input type="email" name="email" placeholder="example@yourmail.com" />
  </div>
  <div class="ud-form-group">
    <label for="phone">Movil*</label>
    <input type="text" name="phone" placeholder="666 66 66 66" />
  </div>
  <div class="ud-form-group">
    <label for="message">Mensaje*</label>
    <textarea name="message" rows="4" placeholder="Escriba su mensaje aqui..."></textarea>
  </div>
  <div class="file" style="margin-bottom  : 20px;">
     <fieldset>
        <label for="foto"> Introduce Foto</label>
        <input type="file" name="foto" id="foto">  
     </fieldset>
  </div>
  

  <div class="ud-form-group mb-0">
    <input type="submit" value="Enviar Mensaje" class="ud-main-btn" > 
  </div>
</form>

<!-- 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888  -->
<!-- 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888  -->
<!-- 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888 888888888  -->

</div>
</div>
</div>
      </div>
    </section>
    <!-- ====== Contact End ====== -->

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
