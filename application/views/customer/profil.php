<main id="main" style="margin-top: 60px;min-height: 500px;">

    <!-- ======= About Section ======= -->
    <section id="about" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
          <div class="col-lg">
            <div class="card">
              <div class="card-header bg-secondary">
                <h2>Profil</h2>
              </div>
              <div class="card-body">
                <form>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" value="<?=$user->nama?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" value="<?=$user->alamat?>">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" value="<?=$user->email?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">No Tlp</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" value="<?=$user->no_telp?>">
                </div>
              </div>
            </form>
                
              </div>
              
            </div>
            
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
 

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
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