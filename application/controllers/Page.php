<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page extends MY_Controller {
  public function welcome(){
    $this->load->model('M_Pegawai');
    // $this->load->view('welcome');
    $recordPgw = $this->M_Pegawai->getDataPegawai();
    $DATA = array('data_pgw' => $recordPgw);
    $this->load->view('home_admin', $DATA);
  }
  // public function thanks(){
  //   $this->load->view('thanks');
  // }
}