<main id="main">
   

    <!-- ======= Contact Section ======= -->
    <section id="registration" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Registration</h2>
          <p>Registration Form</p>
        </div>
      </div>

       

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

        

          <div class="col-lg-12 mt-5 mt-lg-0">

  <form action="<?=base_url()?>home/prosescustomer" method="post">
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail1">Nama</label>
      <input type="text" class="form-control" name="nama" id="inputEmail1" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword2">Email</label>
      <input type="email" class="form-control" id="inputPassword2" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
      <input type="text" class="form-control" id="inputEmail4" name="no_telp" placeholder="Phone">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="alamat" id="inputAddress" placeholder="Address">
  </div>
  
   
     
   
  <button type="submit" class="btn btn-primary">Send</button>
</form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6">
            <div class="footer-info">
              <h3><?=$title?></h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                
              </div>
            </div>
          </div>

          
          <div class="col-lg-6 col-md-6 footer-newsletter">
            <h4>About</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?=$name?></span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url();?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?=base_url();?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?=base_url();?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?=base_url();?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url();?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?=base_url();?>assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url();?>assets/js/main.js"></script>

</body>

</html>