<?php
$hotel=$this->db->query("SELECT*FROM reservasi_grooming WHERE id_reservasi_grooming ='".$this->uri->segment(3)."'")->row();
$hewan=$this->db->query("SELECT*FROM hewan WHERE id_hewan='$hotel->id_hewan'")->row();
?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-5">
                        <h4 class="page-title">Edit Reservasi Grooming</h4>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-12">
                         <div class="card">
              
              <div class="card-body">
             <form action="<?=base_url()?>admin/proseseditreservasigrooming" method="post">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="hidden" class="form-control" name="id_reservasi_grooming" required value="<?=$hotel->id_reservasi_grooming?>">
                    <input type="text" class="form-control" name="nama" readonly value="<?=$hewan->nama?>">
                  </div>
                </div>
 

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-9">
                    <input type="text" name="tanggal_lahir" class="form-control"  readonly id="tgl1" autocomplete="off" value="<?=$hewan->tanggal_lahir?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Jenis</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="jenis_hewan"   readonly value="<?=$hewan->jenis_hewan?>">
                  </div>
                </div>
               
              
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tanggal Grooming</label>
                  <div class="col-sm-9">
                    <input type="text" name="tanggal_grooming" class="form-control"   readonly id="tgl2" autocomplete="off" value="<?=$hotel->tanggal_grooming?>">
                  </div>
                </div>
 

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> Jenis Treatment</label>
                  <div class="col-sm-9">
                    <input type="text" name="jumlah_hari" class="form-control"  readonly value="<?=$hotel->jenis_treatment?> ">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label"> Total Biaya</label>
                  <div class="col-sm-9">
                    <input type="text" name="total_harga" class="form-control" placeholder="Total Biaya" required>
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