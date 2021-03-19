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
                <h2>Reservasi Pet</h2>
              </div>
              <div class="card-body">
             <form action="<?=base_url()?>customer/prosesreservasipet" method="post">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama Hewan</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="id_hewan" required>
                      <option value=""> </option>
                      <?php
                      $pet=$this->db->query("SELECT no_antrean FROM reservasi_dokter WHERE tanggal_kunjungan ='".date('Y-m-d')."'")->num_rows();
                      if ($pet < 1) {
                        $no=1;
                      }else{
                        $pet=$this->db->query("SELECT no_antrean FROM reservasi_dokter WHERE tanggal_kunjungan ='".date('Y-m-d')."'")->row();
                        $no=$pet->no_antrean + 1;

                      }

                      $hewan=$this->db->query("SELECT*FROM hewan")->result();
                      foreach ($hewan as $v) {
                        echo "<option value='$v->id_hewan'> $v->nama </option>";
                      }
                      ?>

                      
                    </select>
                  </div>
                </div>
 

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
                  <div class="col-sm-9">
                    <input type="text" name="tanggal_kunjungan" class="form-control" placeholder="Tanggal lahir hewan" required id="tgl1" autocomplete="off">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">No Antrean</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="no_antrean" value="<?=$no;?>" required readonly>
                  </div>
                </div>
               
              </div>

              <!--  -->

                
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