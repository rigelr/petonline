<main id="main" style="margin-top: 60px;min-height: 500px;">

    <!-- ======= About Section ======= -->
    <section id="about" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
          <div class="col-lg">

            <?php
                  if($this->session->flashdata('success')){
                     echo '<p class="alert alert-info text-center">'.$this->session->flashdata('success').'</p>';
                 }?>
                
                <?php
                  if($this->session->flashdata('error')){
                     echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('error').'</p>';
                 }?>

            <div class="card">
              <div class="card-header bg-secondary">
                <h2>Reservasi Hotel</h2>
              </div>
              <div class="card-body">
             <form action="<?=base_url()?>customer/prosesreservasihotel" method="post">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Hewan" required>
                  </div>
                </div>
 

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-9">
                    <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal lahir hewan" required id="tgl1" autocomplete="off">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Jenis</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="jenis_hewan" placeholder="Jenis Hewan" required>
                  </div>
                </div>
               
              </div>

              <!--  -->

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tanggal Stay</label>
                  <div class="col-sm-9">
                    <input type="text" name="tanggal_stay" class="form-control" placeholder="Tanggal stay" required id="tgl2" autocomplete="off">
                  </div>
                </div>
 

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> Jumlah Hari</label>
                  <div class="col-sm-9">
                    <input type="text" name="jumlah_hari" class="form-control" placeholder="jumlah hari" required>
                  </div>
                </div>
 
               
              </div>
            </div>
            <div><input type="submit" name="" value="PESAN" class="btn btn-primary"></div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js" integrity="sha512-RCgrAvvoLpP7KVgTkTctrUdv7C6t7Un3p1iaoPr1++3pybCyCsCZZN7QEHMZTcJTmcJ7jzexTO+eFpHk4OCFAg==" crossorigin="anonymous"></script>
  <!-- Template Main JS File -->
  <script src="<?=base_url();?>assets/js/main.js"></script>
<script type="text/javascript">
  $("#tgl1").datepicker();
  $("#tgl2").datepicker();
</script>
</body>

</html>