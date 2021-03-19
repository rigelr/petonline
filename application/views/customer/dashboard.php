<main id="main" style="margin-top: 60px;min-height: 500px;">

    <!-- ======= About Section ======= -->
    <section id="about" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
          <div class="col-lg">

            <div class="card">
              <div class="card-header bg-info">
                <h2>Data Reservasi Hotel</h2>
              </div>
              <div class="card-body">
                
                <?php
                $hewan=$this->db->query("SELECT*FROM hewan WHERE  id_customer ='".$this->session->userdata('id_user')."'")->result();
                
                      foreach ($hewan as $v) {

                 $cekhotel=$this->db->query("SELECT*FROM reservasi_hotel WHERE id_hewan ='".$v->id_hewan."'")->num_rows();
                 if($cekhotel > 0){
                   
                  $hotel=$this->db->query("SELECT*FROM reservasi_hotel WHERE id_hewan ='".$v->id_hewan."'")->row();
                      echo "
                      
                      <div class='row'>

                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Nama Hewan</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $v->nama
                      </div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Jenis Hewan</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $v->jenis_hewan
                      </div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Tanggal  Lahir</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $v->tanggal_lahir
                      </div>

                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Tanggal Stay</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $hotel->tanggal_stay
                      </div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Jumlah hari</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $hotel->jumlah_hari
                      </div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Total Biaya</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $hotel->total_harga
                      </div>
                  
                    </div>

                      <p style='height:30px;'></p>




                      ";
                      }
                     
                     }
                ?>

              </div>
            </div>
            

            <div class="card">
              <div class="card-header bg-warning">
                <h2>Data Reservasi Grooming</h2>
              </div>
              <div class="card-body">
                
                <?php
                $hewan=$this->db->query("SELECT*FROM hewan WHERE  id_customer ='".$this->session->userdata('id_user')."'")->result();
                
                      foreach ($hewan as $v) {

                 $cekhotel=$this->db->query("SELECT*FROM reservasi_grooming WHERE id_hewan ='".$v->id_hewan."'")->num_rows();
                 if($cekhotel > 0){
                   
                  $grooming=$this->db->query("SELECT*FROM reservasi_grooming WHERE id_hewan ='".$v->id_hewan."'")->row();
                      echo "
                      
                      <div class='row'>

                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Nama Hewan</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $v->nama
                      </div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Jenis Hewan</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $v->jenis_hewan
                      </div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Tanggal  Lahir</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $v->tanggal_lahir
                      </div>

                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Tanggal Gooming</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $grooming->tanggal_grooming
                      </div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Jenis Treatment</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $grooming->jenis_treatment
                      </div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Total Biaya</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $grooming->total_harga
                      </div>
                  
                    </div>

                      <p style='height:30px;'></p>




                      ";
                      }
                     
                     }
                ?>

              </div>
            </div>

            <div class="card">
              <div class="card-header bg-danger">
                <h2>Data Reservasi Pet</h2>
              </div>
              <div class="card-body">
                
                <?php
                $hewan=$this->db->query("SELECT*FROM hewan WHERE  id_customer ='".$this->session->userdata('id_user')."'")->result();
                
                      foreach ($hewan as $v) {

                 $cekhotel=$this->db->query("SELECT*FROM reservasi_dokter WHERE id_hewan ='".$v->id_hewan."'")->num_rows();
                 if($cekhotel > 0){
                   
                  $pet=$this->db->query("SELECT*FROM reservasi_dokter WHERE id_hewan ='".$v->id_hewan."'")->row();
                  $medis=$this->db->query("SELECT*FROM rekam_medis WHERE id_reservasi_dokter ='".$pet->id_reservasi_dokter."'")->row();
                      echo "
                      
                      <div class='row'>

                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Nama Hewan</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $v->nama
                      </div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Jenis Hewan</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $v->jenis_hewan
                      </div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Tanggal  Lahir</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $v->tanggal_lahir
                      </div>

                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Tanggal Kunjungan</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $pet->tanggal_kunjungan
                      </div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Nomor Antrean</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $pet->no_antrean
                      </div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      Hasil Diagnosa</div>
                      <div class='col-lg-6 col-md-6 col-sm-6'>
                      : $medis->hasil_diagnosa
                      </div>
                      
                  
                    </div>

                      <p style='height:30px;'></p>




                      ";
                      }
                     
                     }
                ?>

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