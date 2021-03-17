<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('M_Pegawai');
  }
  public function index(){
    if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
      redirect (base_url('Page/welcome')); // Redirect ke page welcome
    $this->load->view('login'); // Load view login.php
  }
  public function login(){
    $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
    // $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
    $password = $this->input->post('password');
    $user = $this->M_Pegawai->get($username); // Panggil fungsi get yang ada di UserModel.php
    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
      $this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
      redirect (base_url('Auth')); // Redirect ke halaman login
    }else{
      if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'authenticated' =>  true, // Buat session authenticated dengan value true
          'username'      =>  $user->username,  // Buat session username
          'nama'          =>  $user->nama // Buat session authenticated
        );
        $this->session->set_userdata($session); // Buat session sesuai $session
        redirect (base_url('Page/welcome')); // Redirect ke halaman welcome
      }else{
        $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
        redirect (base_url('Auth')); // Redirect ke halaman login
      }
    }
  }
  public function logout(){
    $this->session->sess_destroy(); // Hapus semua session
    redirect (base_url('Auth')); // Redirect ke halaman login
  }
  function daftar(){
    $this->load->view('register');
  }
  function regis(){
    $DataInsert = array(
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
    );
    // die( print_r($DataInsert));
    $this->M_Pegawai->UserAdd($DataInsert);
    redirect (base_url('Auth'));
  }
  function kel_user(){
    $role	= '';
    $recordPgw = $this->M_Pegawai->getDataUser();
    $DATA = array('data_user' => $recordPgw);
    $this->load->view('kelola_user', $DATA);
  }
  public function AksiDelete($user_id){
    $this->M_Pegawai->DeleteDataUser($user_id);
    redirect (base_url('Auth/kel_user'));
  }



}