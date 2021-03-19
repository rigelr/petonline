<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
function __construct(){
parent::__construct();
 
}


public function index(){
$data=array('title' =>"PET ONLINE");
$this->load->view('header',$data);
$this->load->view('home');
} 

public function contact(){
$data=array('title' =>"PET ONLINE");
$this->load->view('header',$data);
$this->load->view('contact');
} 

public function service(){
$data=array('title' =>"PET ONLINE");
$this->load->view('header',$data);
$this->load->view('service');
} 


public function login(){
$data=array('title' =>"PET ONLINE");
$this->load->view('header',$data);
$this->load->view('login');
} 

public function registration(){
$data=array('title' =>"PET ONLINE");
$this->load->view('header',$data);
$this->load->view('registration');
} 
 
 
public function prosescustomer(){
$this->form_validation->set_rules('nama', '', 'required');
$this->form_validation->set_rules('alamat', '', 'required');
$this->form_validation->set_rules('no_telp', '', 'required');
$this->form_validation->set_rules('email', '', 'required');
$this->form_validation->set_rules('password', '', 'required');

if ($this->form_validation->run() == TRUE){
$data = array('id_customer'=> '','nama'=> $this->input->post('nama',true),'email'=> $this->input->post('email',true),'alamat'=> $this->input->post('alamat',true),'password'=> $this->input->post('password',true),'no_telp'=> $this->input->post('no_telp',true));
$this->Model_app->addData('customer',$data);
$this->session->set_flashdata('success','<i class="fa fa-info-circle"></i> <b>SUKSES,</b> Data berhasil di simpan');

}
else{
$this->session->set_flashdata('error','<i class="fa fa-info-circle"></i> <b>GAGAL,</b> Proses gagal, silahkan ulangi !');
}
redirect('home/login');
} 


public function proseslogin(){
$this->form_validation->set_rules('email','','required');
$this->form_validation->set_rules('password','','required');
if ($this->form_validation->run() == TRUE){
$cekadmin=$this->db->query("SELECT*FROM admin WHERE username='".$this->input->post('email',true)."'")->num_rows();
if($cekadmin > 0){
$admin=$this->db->query("SELECT*FROM admin WHERE username='".$this->input->post('email',true)."'")->row();
 
 if ($admin->password == $this->input->post('password',true)) {
 $sess_data['status'] ="login";
 $sess_data['level'] ="Admin";
 $sess_data['id_user'] =$admin->id_admin;
 $this->session->set_userdata($sess_data);
redirect('admin/dashboard');
}else{
	$this->session->set_flashdata('error','<i class="fa fa-info-circle"></i> <b> Login Gagal, </b> Password salah !');
		redirect('home/login');

}

}else{
	$cekcustomer=$this->db->query("SELECT*FROM customer WHERE email='".$this->input->post('email',true)."'")->num_rows();
	if ($cekcustomer > 0) {
		$admin=$this->db->query("SELECT*FROM customer WHERE email='".$this->input->post('email',true)."'")->row();
		if ($admin->password == $this->input->post('password',true)) {
		 $sess_data['status'] ="login";
		 $sess_data['level'] ="Customer";
		 $sess_data['id_user'] =$admin->id_customer;
		 $this->session->set_userdata($sess_data);
		redirect('customer/dashboard');

	}else{
		$this->session->set_flashdata('error','<i class="fa fa-info-circle"></i> <b> Login Gagal, </b> Password salah !');
		redirect('home/login');
	}
}else{
	$this->session->set_flashdata('error','<i class="fa fa-info-circle"></i> <b> Login Gagal, </b> Username / Email tidak terdaftar !');
		redirect('home/login');
}

 
}}
else{
	//val
$this->session->set_flashdata('error','<i class="fa fa-info-circle"></i> <b> Login Gagal, </b>silahkan ulangi !');
	redirect('home/login');
}
}

}
