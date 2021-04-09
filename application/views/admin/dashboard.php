
        <div class="page-wrapper">
            <div class="content">
               
                <div class="row">
                    <?php
                    $h=$this->db->query("SELECT*FROM reservasi_hotel WHERE status='1'")->result();
                    $g=$this->db->query("SELECT*FROM reservasi_grooming WHERE status='1'")->result();
                    $a=count($h) + count($g);
                    if ($a == 0) {
                    	$a=0;
                    }else{
                    	$a=$a;
                    }
                    $g=$this->db->query("SELECT*FROM rekam_medis WHERE hasil_diagnosa=''")->result();
                    $ax=count($g);
                    if ($ax == 0) {
                    	$ax=0;
                    }else{
                    	$ax=$ax;
                    }

                    ?>

                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                        <div class="dash-widget">
							<span class="dash-widget-bg4"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3><?=$ax?></h3>
								<span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?=$a?></h3>
                                <span class="widget-title2">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    
                    
                

                <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
									<h4> Pet</h4>
									
								</div>	
								<canvas id="linegraph"></canvas>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-6 col-xl-6 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
									<h4>Reservasi</h4>
									
								</div>	
								<canvas id="linegraph2"></canvas>
							</div>
						</div>
					</div>


					<div class="col-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">New Reservations </h4> <a href="<?php echo base_url() ?>admin/reservasihotel" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-block">
								<div class="table-responsive">
									<table class="table mb-0 new-patient-table">
										<tbody>

											<?php
											 $h=$this->db->query("SELECT*FROM reservasi_hotel WHERE status='1' order by id_reservasi_hotel desc LIMIT 2")->result();
						                    $g=$this->db->query("SELECT*FROM reservasi_grooming WHERE status='1' order by id_reservasi_grooming desc LIMIT 2")->result();
						                   
						                    $d=$this->db->query("SELECT*FROM rekam_medis WHERE hasil_diagnosa='' order by id_rekmed desc LIMIT 2")->result(); 

						                    foreach ($h as  $vh) {
						                    	
						                    	$hewan=$this->db->query("SELECT*FROM hewan WHERE id_hewan='$vh->id_hewan'")->row();
						                    	$cust=$this->db->query("SELECT*FROM customer WHERE id_customer='$hewan->id_customer'")->row();
						                    	echo "
						                    	<tr>
												<td>$cust->nama</td>
												<td>$cust->no_telp</td>
												<td>
												<button class='btn btn-primary btn-primary-one float-right'>Reservasi Hotel</button>
												</td>
											</tr>";
						                    }

						                    foreach ($g as  $vg) {
						                    	
						                    	$hewan=$this->db->query("SELECT*FROM hewan WHERE id_hewan='$vg->id_hewan'")->row();
						                    	$cust=$this->db->query("SELECT*FROM customer WHERE id_customer='$hewan->id_customer'")->row();
						                    	echo "
						                    	<tr>
												<td>$cust->nama</td>
												<td>$cust->no_telp</td>
												<td>
												<button class='btn btn-warning btn-primary-one float-right'>Reservasi Groming</button>
												</td>
											</tr>";
						                    }

						                    foreach ($d as  $vd) {

						                    	$dokter=$this->db->query("SELECT*FROM reservasi_dokter WHERE id_reservasi_dokter='$vd->id_reservasi_dokter'")->row();

						                    	
						                    	$hewan=$this->db->query("SELECT*FROM hewan WHERE id_hewan='$dokter->id_hewan'")->row();
						                    	$cust=$this->db->query("SELECT*FROM customer WHERE id_customer='$hewan->id_customer'")->row();
						                    	echo "
						                    	<tr>
												<td>$cust->nama</td>
												<td>$cust->no_telp</td>
												<td>
												<button class='btn btn-danger btn-primary-one float-right'>Reservasi Dokter</button>
												</td>
											</tr>";
						                    }

 											?>
											
											 
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

            </div>
            
       
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="<?=base_url();?>assetsadmin/js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url();?>assetsadmin/js/popper.min.js"></script>
    <script src="<?=base_url();?>assetsadmin/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assetsadmin/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url();?>assetsadmin/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url();?>assetsadmin/js/jquery.slimscroll.js"></script>
     <script src="<?=base_url();?>assetsadmin/js/Chart.bundle.js"></script>
  
    <script src="<?=base_url();?>assetsadmin/js/app.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	 
	var lineChartData = {
		labels: [
		<?php $dokter=$this->db->query("SELECT CONCAT(YEAR(tanggal_kunjungan),'-',MONTH(tanggal_kunjungan)) as bulan FROM reservasi_dokter GROUP by CONCAT(YEAR(tanggal_kunjungan),'-',MONTH(tanggal_kunjungan))")->result(); 
		foreach ($dokter as $vdokter) {
			echo "'".$vdokter->bulan."',";
		}?>
		],
		datasets: [{
			label: "Jumlah",
			backgroundColor: "rgba(0, 158, 251, 0.5)",
			data: [
			<?php $dokter=$this->db->query("SELECT COUNT(tanggal_kunjungan) as jumlah FROM reservasi_dokter GROUP by CONCAT(YEAR(tanggal_kunjungan),'-',MONTH(tanggal_kunjungan))")->result();
			foreach ($dokter as $vdokter) {
			echo $vdokter->jumlah.",";
		}?>]
		}]
	};
	
	var linectx = document.getElementById('linegraph').getContext('2d');
	window.myLine = new Chart(linectx, {
		type: 'line',
		data: lineChartData,
		options: {
			responsive: true,
			legend: {
				display: false,
			},
			tooltips: {
				mode: 'index',
				intersect: false,
			}
		}
	});

	var lineChartData2 = {
		labels: [
		<?php $dokter=$this->db->query("SELECT CONCAT(YEAR(tanggal_stay),'-',MONTH(tanggal_stay)) as bulan FROM reservasi_hotel GROUP by CONCAT(YEAR(tanggal_stay),'-',MONTH(tanggal_stay))")->result(); 
		foreach ($dokter as $vdokter) {
			echo "'".$vdokter->bulan."',";
		}?>
		],
		datasets: [{
			label: "Reservasi Hotel",
			backgroundColor: "rgba(0, 158, 251, 0.5)",
			data: [
			<?php $dokter=$this->db->query("SELECT COUNT(tanggal_stay) as jumlah FROM reservasi_hotel GROUP by CONCAT(YEAR(tanggal_stay),'-',MONTH(tanggal_stay))")->result();
			foreach ($dokter as $vdokter) {
			echo $vdokter->jumlah.",";
		}?>
		]
		}, {
		label: "Reservasi Grooming",
		backgroundColor: "rgba(255, 188, 53, 0.5)",
		fill: true,
		data: [<?php $dokterx=$this->db->query("SELECT COUNT(tanggal_grooming) as jumlah FROM reservasi_grooming GROUP by CONCAT(YEAR(tanggal_grooming),'-',MONTH(tanggal_grooming))")->result();
			foreach ($dokterx as $vdokterx) {
			echo $vdokterx->jumlah.",";
		}?>]
		}]
	};
	
	var linectx2 = document.getElementById('linegraph2').getContext('2d');
	window.myLine = new Chart(linectx2, {
		type: 'line',
		data: lineChartData2,
		options: {
			responsive: true,
			legend: {
				display: false,
			},
			tooltips: {
				mode: 'index',
				intersect: false,
			}
		}
	});
	 
});
</script>

</body>


<!-- departments23:21-->
</html>