
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-5">
                        <h4 class="page-title">Reservasi Hotel</h4>
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
                                         <th>TANGGAL STAY</th>
                                         <th>JUMLAH HARI</th>
                                         <th>TOTAL BIAYA</th>
                                         <th>STATUS</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                <?php
                                  $no=1;
                                  $hotel=$this->db->query("SELECT*FROM reservasi_hotel")->result();
                                  foreach ($hotel as $v) {
                                    $hewan=$this->db->query("SELECT*FROM hewan WHERE id_hewan='$v->id_hewan' ")->row();
                                    if ($v->status == 1) {
                                        $status='PENDING';
                                        $bg='bg-warning';
                                    }else{
                                        $status='SUKSES';
                                        $bg='bg-info';
                                    }

                                    if ($v->total_harga == 0) {
                                        $total="<a href ='".base_url()."admin/editreservasihotel/$v->id_reservasi_hotel'class='btn btn-info'><i class='fa fa-pencil'></i></a>";
                                         
                                    }else{
                                        
                                        $total=$v->total_harga;
                                    }


                                      echo "
                                        <tr>
                                        <td>".$no++."</td>
                                        <td>$hewan->nama</td>
                                        <td>$v->tanggal_stay</td>
                                        <td>$v->jumlah_hari</td>
                                        <td>$total</td>
                                        <td class='$bg'>$status</td>
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