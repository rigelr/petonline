<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
function __construct(){
parent::__construct();
if($this->session->userdata('status') != "login" AND $this->session->userdata('level') != "admin" ){
$this->session->set_flashdata('error','<i class="fa fa-info-circle"></i> <b>Login Gagal, </b>Silahkan Login Lagi');
redirect('home/login');
};
}

public function index(){ 
redirect('dashboard');
}

public function dashboard(){
$data=array('active_dashboard'=>'active','user' => $this->Model_app->getSelectedData('admin','id_admin',$this->session->userdata('id_user'))->row(), );
$this->load->view('admin/header',$data);
$this->load->view('admin/dashboard');
}
 
public function reservasihotel(){
$data=array('active_reservasi'=>'active','user' => $this->Model_app->getSelectedData('admin','id_admin',$this->session->userdata('id_user'))->row(), );
$this->load->view('admin/header',$data);
$this->load->view('admin/reservasihotel');
}
 
public function editreservasihotel(){
$data=array('active_reservasi'=>'active','user' => $this->Model_app->getSelectedData('admin','id_admin',$this->session->userdata('id_user'))->row(), );
$this->load->view('admin/header',$data);
$this->load->view('admin/editreservasihotel');
}

public function proseseditreservasihotel(){
$this->form_validation->set_rules('total_harga', '', 'required');
$this->form_validation->set_rules('id_reservasi_hotel', '', 'required');
if ($this->form_validation->run() == TRUE){
  
$data = array('total_harga'=> $this->input->post('total_harga',true),'status'=> 0);
$this->Model_app->editData('reservasi_hotel','id_reservasi_hotel', $this->input->post('id_reservasi_hotel',true),$data);
$this->session->set_flashdata('success','<i class="fa fa-info-circle"></i> <b>SUKSES,</b> Data berhasil di simpan');

}
else{
$this->session->set_flashdata('error','<i class="fa fa-info-circle"></i> <b>GAGAL,</b> Proses gagal, silahkan ulangi !');
}
redirect('admin/reservasihotel');
} 
public function reservasigrooming(){
$data=array('active_reservasi'=>'active','user' => $this->Model_app->getSelectedData('admin','id_admin',$this->session->userdata('id_user'))->row(), );
$this->load->view('admin/header',$data);
$this->load->view('admin/reservasigrooming');
}

public function editreservasigrooming(){
$data=array('active_reservasi'=>'active','user' => $this->Model_app->getSelectedData('admin','id_admin',$this->session->userdata('id_user'))->row(), );
$this->load->view('admin/header',$data);
$this->load->view('admin/editreservasigrooming');
}

public function proseseditreservasigrooming(){
$this->form_validation->set_rules('total_harga', '', 'required');
$this->form_validation->set_rules('id_reservasi_grooming', '', 'required');
if ($this->form_validation->run() == TRUE){
  
$data = array('total_harga'=> $this->input->post('total_harga',true),'status'=> 0);
$this->Model_app->editData('reservasi_grooming','id_reservasi_grooming', $this->input->post('id_reservasi_grooming',true),$data);
$this->session->set_flashdata('success','<i class="fa fa-info-circle"></i> <b>SUKSES,</b> Data berhasil di simpan');

}
else{
$this->session->set_flashdata('error','<i class="fa fa-info-circle"></i> <b>GAGAL,</b> Proses gagal, silahkan ulangi !');
}
redirect('admin/reservasigrooming');
} 

public function reservasipet(){
$data=array('active_reservasi'=>'active','user' => $this->Model_app->getSelectedData('admin','id_admin',$this->session->userdata('id_user'))->row(), );
$this->load->view('admin/header',$data);
$this->load->view('admin/reservasipet');
}

public function editreservasipet(){
$data=array('active_reservasi'=>'active','user' => $this->Model_app->getSelectedData('admin','id_admin',$this->session->userdata('id_user'))->row(), );
$this->load->view('admin/header',$data);
$this->load->view('admin/editreservasipet');
}

public function proseseditreservasipet(){
$this->form_validation->set_rules('diagnosa', '', 'required');
$this->form_validation->set_rules('id_reservasi_dokter', '', 'required');
if ($this->form_validation->run() == TRUE){
  
$data = array('hasil_diagnosa'=> $this->input->post('diagnosa',true) );
$this->Model_app->editData('rekam_medis','id_reservasi_dokter', $this->input->post('id_reservasi_dokter',true),$data);
$this->session->set_flashdata('success','<i class="fa fa-info-circle"></i> <b>SUKSES,</b> Data berhasil di simpan');

}
else{
$this->session->set_flashdata('error','<i class="fa fa-info-circle"></i> <b>GAGAL,</b> Proses gagal, silahkan ulangi !');
}
redirect('admin/reservasipet');
} 
public function logout(){
$this->session->sess_destroy();
redirect('home/login');
}
}
