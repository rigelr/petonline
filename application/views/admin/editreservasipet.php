<?php
$hotel=$this->db->query("SELECT*FROM reservasi_dokter WHERE id_reservasi_dokter ='".$this->uri->segment(3)."'")->row();
$hewan=$this->db->query("SELECT*FROM hewan WHERE id_hewan='$hotel->id_hewan'")->row();
?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-5">
                        <h4 class="page-title">Edit Reservasi Dokter</h4>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-12">
                         <div class="card">
              
              <div class="card-body">
             <form action="<?=base_url()?>admin/proseseditreservasipet" method="post">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="hidden" class="form-control" name="id_reservasi_dokter" required value="<?=$hotel->id_reservasi_dokter?>">
                    <input type="text" class="form-control" name="nama" readonly value="<?=$hewan->nama?>">
                  </div>
                </div>
 

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
                  <div class="col-sm-9">
                    <input type="text" name="tanggal_lahir" class="form-control"  readonly id="tgl1" autocomplete="off" value="<?=$hotel->tanggal_kunjungan?>">
                  </div>
                </div>
 

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> Diagnosa</label>
                  <div class="col-sm-9">
                    <input type="text" name="diagnosa" class="form-control" placeholder="diagnosa" required>
                  </div>
                </div>
 
               
              </div>
            </div>
            <div><input type="submit" name="" value="PROSES" class="btn btn-primary"></div>
              </form>
              </div>
              
            </div>
                </div>
            </div>
            
         
    </div>
    </div>
    <script src="<?=base_url();?>assetsadmin/js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url();?>assetsadmin/js/popper.min.js"></script>
    <script src="<?=base_url();?>assetsadmin/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assetsadmin/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url();?>assetsadmin/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url();?>assetsadmin/js/jquery.slimscroll.js"></script>
    <script src="<?=base_url();?>assetsadmin/js/app.js"></script>
</body>


<!-- departments23:21-->
</html>