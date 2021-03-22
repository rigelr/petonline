<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller {
function __construct(){
parent::__construct();
if($this->session->userdata('status') != "login" AND $this->session->userdata('level') != "Customer" ){
$this->session->set_flashdata('error','<i class="fa fa-info-circle"></i> <b>Login Gagal, </b>Silahkan Login Lagi');
redirect('home/login');
};
}

public function index(){ 
redirect('dashboard');
}

public function dashboard(){
$data=array('active_dashboard'=>'active','user' => $this->Model_app->getSelectedData('customer','id_customer',$this->session->userdata('id_user'))->row(), );
$this->load->view('customer/header',$data);
$this->load->view('customer/dashboard');
}

public function dashboardhistory(){
    $data=array('active_dashboard'=>'active','user' => $this->Model_app->getSelectedData('customer','id_customer',$this->session->userdata('id_user'))->row(), );
    $this->load->view('customer/header',$data);
    $this->load->view('customer/dashboardhistory');
    }

public function profil(){
$data=array('active_profil'=>'active','user' => $this->Model_app->getSelectedData('customer','id_customer',$this->session->userdata('id_user'))->row(), );
$this->load->view('customer/header',$data);
$this->load->view('customer/profil');
}
public function reservasihotel(){
$data=array('active_drop'=>'active','user' => $this->Model_app->getSelectedData('customer','id_customer',$this->session->userdata('id_user'))->row(), );
$this->load->view('customer/header',$data);
$this->load->view('customer/reservasihotel');
}
public function reservasigrooming(){
$data=array('active_drop'=>'active','user' => $this->Model_app->getSelectedData('customer','id_customer',$this->session->userdata('id_user'))->row(), );
$this->load->view('customer/header',$data);
$this->load->view('customer/reservasigrooming');
}

public function reservasipet(){
$data=array('active_drop'=>'active','user' => $this->Model_app->getSelectedData('customer','id_customer',$this->session->userdata('id_user'))->row(), );
$this->load->view('customer/header',$data);
$this->load->view('customer/pet');
}

public function prosesreservasihotel(){
$this->form_validation->set_rules('nama', '', 'required');
$this->form_validation->set_rules('jenis_hewan', '', 'required');
$this->form_validation->set_rules('tanggal_lahir', '', 'required');
$this->form_validation->set_rules('tanggal_stay', '', 'required');
$this->form_validation->set_rules('jumlah_hari', '', 'required');
if ($this->form_validation->run() == TRUE){
$tanggal_lahir=explode("/", $this->input->post('tanggal_lahir',true));
$tanggal_lahir=$tanggal_lahir[2]."-".$tanggal_lahir[0]."-".$tanggal_lahir[1];
$tanggal_stay=explode("/", $this->input->post('tanggal_stay',true));
$tanggal_stay=$tanggal_stay[2]."-".$tanggal_stay[0]."-".$tanggal_stay[1];
$datahewan = array('id_hewan'=> '','id_customer'=> $this->session->userdata('id_user'),'nama'=> $this->input->post('nama',true),'jenis_hewan'=> $this->input->post('jenis_hewan',true),'tanggal_lahir'=> $tanggal_lahir,'status'=>'1');
$this->Model_app->addData('hewan',$datahewan);
$id=$this->db->query("SELECT id_hewan FROM hewan ORDER BY id_hewan DESC LIMIT 1")->row();
$data = array('id_reservasi_hotel'=> '','id_hewan'=> $id->id_hewan,'tanggal_stay'=> $tanggal_stay,'jumlah_hari'=> $this->input->post('jumlah_hari',true),'total_harga'=> 0,'status'=>'1');
$this->Model_app->addData('reservasi_hotel',$data);
$this->session->set_flashdata('success','<i class="fa fa-info-circle"></i> <b>SUKSES,</b> Data berhasil di simpan');

}
else{
$this->session->set_flashdata('error','<i class="fa fa-info-circle"></i> <b>GAGAL,</b> Proses gagal, silahkan ulangi !');
}
redirect('customer/reservasihotel');
} 



public function prosesreservasigrooming(){
$this->form_validation->set_rules('nama', '', 'required');
$this->form_validation->set_rules('jenis_hewan', '', 'required');
$this->form_validation->set_rules('tanggal_lahir', '', 'required');
$this->form_validation->set_rules('tanggal_grooming', '', 'required');
$this->form_validation->set_rules('jenis_treatment', '', 'required');
 

if ($this->form_validation->run() == TRUE){
$tanggal_lahir=explode("/", $this->input->post('tanggal_lahir',true));
$tanggal_lahir=$tanggal_lahir[2]."-".$tanggal_lahir[0]."-".$tanggal_lahir[1];

$tanggal_grooming=explode("/", $this->input->post('tanggal_grooming',true));
$tanggal_grooming=$tanggal_grooming[2]."-".$tanggal_grooming[0]."-".$tanggal_grooming[1];


$datahewan = array('id_hewan'=> '','id_customer'=> $this->session->userdata('id_user'),'nama'=> $this->input->post('nama',true),'jenis_hewan'=> $this->input->post('jenis_hewan',true),'tanggal_lahir'=> $tanggal_lahir,'status'=>'1');
$this->Model_app->addData('hewan',$datahewan);
$id=$this->db->query("SELECT id_hewan FROM hewan ORDER BY id_hewan DESC LIMIT 1")->row();
$data = array('id_reservasi_grooming'=> '','id_hewan'=> $id->id_hewan,'tanggal_grooming'=> $tanggal_grooming,'jenis_treatment'=> $this->input->post('jenis_treatment',true),'total_harga'=> 0,'status'=>'1');
$this->Model_app->addData('reservasi_grooming',$data);
$this->session->set_flashdata('success','<i class="fa fa-info-circle"></i> <b>SUKSES,</b> Data berhasil di simpan');

}
else{
$this->session->set_flashdata('error','<i class="fa fa-info-circle"></i> <b>GAGAL,</b> Proses gagal, silahkan ulangi !');
}
redirect('customer/reservasigrooming');
} 


public function prosesreservasipet(){
$this->form_validation->set_rules('id_hewan', '', 'required');
$this->form_validation->set_rules('tanggal_kunjungan', '', 'required');
$this->form_validation->set_rules('no_antrean', '', 'required');
if ($this->form_validation->run() == TRUE){
$tanggal_kunjungan=explode("/", $this->input->post('tanggal_kunjungan',true));
$tanggal_kunjungan=$tanggal_kunjungan[2]."-".$tanggal_kunjungan[0]."-".$tanggal_kunjungan[1];
 

$data = array('id_reservasi_dokter'=> '','id_hewan'=> $this->input->post('id_hewan'),'tanggal_kunjungan'=> $tanggal_kunjungan,'no_antrean'=>$this->input->post('no_antrean'));
$this->Model_app->addData('reservasi_dokter',$data);

$id=$this->db->query("SELECT id_reservasi_dokter FROM reservasi_dokter ORDER BY id_reservasi_dokter DESC LIMIT 1")->row();
$data = array('id_rekmed'=> '','id_reservasi_dokter'=> $id->id_reservasi_dokter,'hasil_diagnosa'=>'');
$this->Model_app->addData('rekam_medis',$data);
$this->session->set_flashdata('success','<i class="fa fa-info-circle"></i> <b>SUKSES,</b> Data berhasil di simpan');

}
else{
$this->session->set_flashdata('error','<i class="fa fa-info-circle"></i> <b>GAGAL,</b> Proses gagal, silahkan ulangi !');
}
redirect('customer/reservasipet');
} 


public function logout(){
$this->session->sess_destroy();
redirect('home/login');
}
}
