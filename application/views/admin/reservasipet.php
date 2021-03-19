
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-5">
                        <h4 class="page-title">Reservasi Pet</h4>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-12">
                 <?php
                  if($this->session->flashdata('success')){
                     echo '<p class="alert alert-info text-center">'.$this->session->flashdata('success').'</p>';
                 }?>
                
                <?php
                  if($this->session->flashdata('error')){
                     echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('error').'</p>';
                 }?>


                        <div class="table-responsive">
                             <table class="table table-striped">
                                 <thead class="bg-secondary">
                                     <tr>
                                         <th>NO</th>
                                         <th>NAMA HEWAN</th>
                                         <th>TANGGAL KUNJUNGAN</th>
                                         <th>NOMOR ANTREAN</th>
                                         <th>DIAGNOSA</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                <?php
                                  $no=1;
                                  $hotel=$this->db->query("SELECT*FROM reservasi_dokter")->result();
                                  foreach ($hotel as $v) {
                                    $hewan=$this->db->query("SELECT*FROM hewan WHERE id_hewan='$v->id_hewan' ")->row();
                                    $medis=$this->db->query("SELECT*FROM rekam_medis WHERE id_reservasi_dokter='$v->id_reservasi_dokter' ")->row();
                                 

                                    if ($medis->hasil_diagnosa == "") {
                                        $hasil_diagnosa="<a href ='".base_url()."admin/editreservasipet/$v->id_reservasi_dokter'class='btn btn-info'><i class='fa fa-pencil'></i></a>";
                                         
                                    }else{
                                        
                                        $hasil_diagnosa=$medis->hasil_diagnosa;
                                    }


                                      echo "
                                        <tr>
                                        <td>".$no++."</td>
                                        <td>$hewan->nama</td>
                                        
                                        <td>$v->tanggal_kunjungan</td>
                                        <td>$v->no_antrean</td>
                                         
                                        <td>$hasil_diagnosa</td>
                                        </tr>
                                      ";
                                  }
                                  ?>
                                 </tbody>
                             </table>
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