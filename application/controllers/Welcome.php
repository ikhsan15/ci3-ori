<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->library('Pdf');
    $this->load->model('M_Pegawai');
    // $this->load->helper('pos_helper');
    // check_session();
        
    // require_once APPPATH.'third_party/dompdf2/dompdf_config.inc.php';
  }

	public function index(){
    $recordPgw = $this->M_Pegawai->getDataPegawai();
    $DATA = array('data_pgw' => $recordPgw);
    $this->load->view('home', $DATA);
	}
	public function formInput(){
		$this->load->view('form_input');
	}
	public function formEdit($id_lmr){
    $recordPgw = $this->M_Pegawai->getDataPgwDetail($id_lmr);

    $DATA = array('data_pgw' => $recordPgw);    
		$this->load->view('form_edit', $DATA);
  }
  public function AksiInsert(){
    // $id = $this->input->post('id');
    
    $config['upload_path']          = './assets/img/pgw_images/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['max_size']             = 10000;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;

    $this->load->library('upload', $config);
    $u_img_lmr = $this->upload->do_upload('img_lmr');

    if (isset($u_img_lmr)){
      $img_lmr = $this->upload->data();
      $img_lmr = $img_lmr['file_name'];

      $jab_lmr         = $this->input->post('jab_lmr');
      $nama_lmr        = $this->input->post('nama_lmr');
      $no_ktp_lmr      = $this->input->post('no_ktp_lmr');
      $no_npwp_lmr     = $this->input->post('no_npwp_lmr');
      $tmp_lahir_lmr   = $this->input->post('tmp_lahir_lmr');
      $tgl_lahir_lmr   = $this->input->post('tgl_lahir_lmr');
      $alamat_lmr      = $this->input->post('alamat_lmr');
      $telp_lmr        = $this->input->post('telp_lmr');
      $hp_lmr          = $this->input->post('hp_lmr');
      $email_lmr       = $this->input->post('email_lmr');
      $jk_lmr          = $this->input->post('jk_lmr');
      $agama_lmr       = $this->input->post('agama_lmr');
      $stat_nkh_lmr    = $this->input->post('stat_nkh_lmr');

      $n_anggota_1          = $this->input->post('n_anggota_1');
      $stat_anggota_1       = $this->input->post('stat_anggota_1');
      $jk_anggota_1         = $this->input->post('jk_anggota_1');
      $tgl_lahir_anggota_1  = $this->input->post('tgl_lahir_anggota_1');
      $pend_anggota_1       = $this->input->post('pend_anggota_1');
      $pek_anggota_1        = $this->input->post('pek_anggota_1');
      $n_anggota_2          = $this->input->post('n_anggota_2');
      $stat_anggota_2       = $this->input->post('stat_anggota_2');
      $jk_anggota_2         = $this->input->post('jk_anggota_2');
      $tgl_lahir_anggota_2  = $this->input->post('tgl_lahir_anggota_2');
      $pend_anggota_2       = $this->input->post('pend_anggota_2');
      $pek_anggota_2        = $this->input->post('pek_anggota_2');
      $n_anggota_3          = $this->input->post('n_anggota_3');
      $stat_anggota_3       = $this->input->post('stat_anggota_3');
      $jk_anggota_3         = $this->input->post('jk_anggota_3');
      $tgl_lahir_anggota_3  = $this->input->post('tgl_lahir_anggota_3');
      $pend_anggota_3       = $this->input->post('pend_anggota_3');
      $pek_anggota_3        = $this->input->post('pek_anggota_3');
      $n_anggota_4          = $this->input->post('n_anggota_4');
      $stat_anggota_4       = $this->input->post('stat_anggota_4');
      $jk_anggota_4         = $this->input->post('jk_anggota_4');
      $tgl_lahir_anggota_4  = $this->input->post('tgl_lahir_anggota_4');
      $pend_anggota_4       = $this->input->post('pend_anggota_4');
      $pek_anggota_4        = $this->input->post('pek_anggota_4');
      $n_anggota_5          = $this->input->post('n_anggota_5');
      $stat_anggota_5       = $this->input->post('stat_anggota_5');
      $jk_anggota_5         = $this->input->post('jk_anggota_5');
      $tgl_lahir_anggota_5  = $this->input->post('tgl_lahir_anggota_5');
      $pend_anggota_5       = $this->input->post('pend_anggota_5');
      $pek_anggota_5        = $this->input->post('pek_anggota_5');

      $n_pend_1           = $this->input->post('n_pend_1');
      $in_pend_1          = $this->input->post('in_pend_1');
      $out_pend_1         = $this->input->post('out_pend_1');
      $ket_lulus_pend_1   = $this->input->post('ket_lulus_pend_1');
      $n_pend_2           = $this->input->post('n_pend_2');
      $in_pend_2          = $this->input->post('in_pend_2');
      $out_pend_2         = $this->input->post('out_pend_2');
      $ket_lulus_pend_2   = $this->input->post('ket_lulus_pend_2');
      $n_pend_3           = $this->input->post('n_pend_3');
      $in_pend_3          = $this->input->post('in_pend_3');
      $out_pend_3         = $this->input->post('out_pend_3');
      $jur_pend_3         = $this->input->post('jur_pend_3');
      $ket_lulus_pend_3   = $this->input->post('ket_lulus_pend_3');
      $n_pend_4           = $this->input->post('n_pend_4');
      $in_pend_4          = $this->input->post('in_pend_4');
      $out_pend_4         = $this->input->post('out_pend_4');
      $jur_pend_4         = $this->input->post('jur_pend_4');
      $ket_lulus_pend_4   = $this->input->post('ket_lulus_pend_4');
      $n_pend_5           = $this->input->post('n_pend_5');
      $in_pend_5          = $this->input->post('in_pend_5');
      $out_pend_5         = $this->input->post('out_pend_5');
      $jur_pend_5         = $this->input->post('jur_pend_5');
      $ket_lulus_pend_5   = $this->input->post('ket_lulus_pend_5');
      $n_pend_6           = $this->input->post('n_pend_6');
      $in_pend_6          = $this->input->post('in_pend_6');
      $out_pend_6         = $this->input->post('out_pend_6');
      $jur_pend_6         = $this->input->post('jur_pend_6');
      $ket_lulus_pend_6   = $this->input->post('ket_lulus_pend_6');
      
      $n_kursus_1         = $this->input->post('n_kursus_1');
      $in_kursus_1        = $this->input->post('in_kursus_1');
      $out_kursus_1       = $this->input->post('out_kursus_1');
      $ket_kursus_1       = $this->input->post('ket_kursus_1');
      $n_kursus_2         = $this->input->post('n_kursus_2');
      $in_kursus_2        = $this->input->post('in_kursus_2');
      $out_kursus_2       = $this->input->post('out_kursus_2');
      $ket_kursus_2       = $this->input->post('ket_kursus_2');
      $n_kursus_3         = $this->input->post('n_kursus_3');
      $in_kursus_3        = $this->input->post('in_kursus_3');
      $out_kursus_3       = $this->input->post('out_kursus_3');
      $ket_kursus_3       = $this->input->post('ket_kursus_3');

      $n_riw_pek          = $this->input->post('n_riw_pek');
      $j_usaha_riw        = $this->input->post('j_usaha_riw');
      $alamat_riw         = $this->input->post('alamat_riw');
      $telp_pek           = $this->input->post('telp_pek');
      $posisi_riw         = $this->input->post('posisi_riw');
      $div_pek            = $this->input->post('div_pek');
      $posisi_atsn        = $this->input->post('posisi_atsn');
      $tgl_riw_join       = $this->input->post('tgl_riw_join');
      $gaji_p_riw         = $this->input->post('gaji_p_riw');
      $uang_lain          = $this->input->post('uang_lain');
      $uang_lain_ket      = $this->input->post('uang_lain_ket');
      $benefit_riw        = $this->input->post('benefit_riw');
      $min_gaji           = $this->input->post('min_gaji');
      $min_gaji_ket       = $this->input->post('min_gaji_ket');
      $tgl_join           = $this->input->post('tgl_join');

      $n_ref_1            = $this->input->post('n_ref_1');
      $hub_ref_1          = $this->input->post('hub_ref_1');
      $jab_ref_1          = $this->input->post('jab_ref_1');
      $telp_ref_1         = $this->input->post('telp_ref_1');
      $n_ref_2            = $this->input->post('n_ref_2');
      $hub_ref_2          = $this->input->post('hub_ref_2');
      $jab_ref_2          = $this->input->post('jab_ref_2');
      $telp_ref_2         = $this->input->post('telp_ref_2');

      $n_kerabat_1        = $this->input->post('n_kerabat_1');
      $jab_kerabat_1      = $this->input->post('jab_kerabat_1');
      $hub_kerabat_1      = $this->input->post('hub_kerabat_1');
      $n_kerabat_2        = $this->input->post('n_kerabat_2');
      $jab_kerabat_2      = $this->input->post('jab_kerabat_2');
      $hub_kerabat_2      = $this->input->post('hub_kerabat_2');

      $n_skill_1          = $this->input->post('n_skill_1');
      $lv_skill_1         = $this->input->post('lv_skill_1');
      $n_skill_2          = $this->input->post('n_skill_2');
      $lv_skill_2         = $this->input->post('lv_skill_2');
      $n_skill_3          = $this->input->post('n_skill_3');
      $lv_skill_3         = $this->input->post('lv_skill_3');
      $n_skill_4          = $this->input->post('n_skill_4');
      $lv_skill_4         = $this->input->post('lv_skill_4');

      $info_1             = $this->input->post('info_1');
      $info_2             = $this->input->post('info_2');
      $info_3             = $this->input->post('info_3');
      $info_4             = $this->input->post('info_4');
      $info_5             = $this->input->post('info_5');
      $info_6             = $this->input->post('info_6');
      $info_7             = $this->input->post('info_7');
      $info_8             = $this->input->post('info_8');
      $info_9             = $this->input->post('info_9');

      $DataInsert = array(
        'img_lmr'         => $img_lmr,
        'jab_lmr'         => (!empty($jab_lmr)) ? $jab_lmr : NULL,
        'nama_lmr'        => (!empty($nama_lmr)) ? $nama_lmr : NULL,
        'no_ktp_lmr'      => (!empty($no_ktp_lmr)) ? $no_ktp_lmr : NULL,
        'no_npwp_lmr'     => (!empty($no_npwp_lmr)) ? $no_npwp_lmr : NULL,
        'tmp_lahir_lmr'   => (!empty($tmp_lahir_lmr)) ? $tmp_lahir_lmr : NULL,
        'tgl_lahir_lmr'   => (!empty($tgl_lahir_lmr)) ? $tgl_lahir_lmr : NULL,
        // 'tgl_lahir_lmr'   => $tgl_lahir_lmr,
        // 'tgl_lahir_lmr'   => $this->input->post('tgl_lahir_lmr'),
        'alamat_lmr'      => (!empty($alamat_lmr)) ? $alamat_lmr : NULL,
        'telp_lmr'        => (!empty($telp_lmr)) ? $telp_lmr : NULL,
        'hp_lmr'          => (!empty($hp_lmr)) ? $hp_lmr : NULL,
        'email_lmr'       => (!empty($email_lmr)) ? $email_lmr : NULL,
        'jk_lmr'          => (!empty($jk_lmr)) ? $jk_lmr : NULL,
        'agama_lmr'       => (!empty($agama_lmr)) ? $agama_lmr : NULL,
        'stat_nkh_lmr'    => (!empty($stat_nkh_lmr)) ? $stat_nkh_lmr : NULL,

        'n_anggota_1'         => (!empty($n_anggota_1)) ? $n_anggota_1 : NULL,
        'stat_anggota_1'      => (!empty($stat_anggota_1)) ? $stat_anggota_1 : NULL,
        'jk_anggota_1'        => (!empty($jk_anggota_1)) ? $jk_anggota_1 : NULL,
        'tgl_lahir_anggota_1' => (!empty($tgl_lahir_anggota_1)) ? $tgl_lahir_anggota_1 : NULL,
        'pend_anggota_1'      => (!empty($pend_anggota_1)) ? $pend_anggota_1 : NULL,
        'pek_anggota_1'       => (!empty($pek_anggota_1)) ? $pek_anggota_1 : NULL,
        'n_anggota_2'         => (!empty($n_anggota_2)) ? $n_anggota_2 : NULL,
        'stat_anggota_2'      => (!empty($stat_anggota_2)) ? $stat_anggota_2 : NULL,
        'jk_anggota_2'        => (!empty($jk_anggota_2)) ? $jk_anggota_2 : NULL,
        'tgl_lahir_anggota_2' => (!empty($tgl_lahir_anggota_2)) ? $tgl_lahir_anggota_2 : NULL,
        'pend_anggota_2'      => (!empty($pend_anggota_2)) ? $pend_anggota_2 : NULL,
        'pek_anggota_2'       => (!empty($pek_anggota_2)) ? $pek_anggota_2 : NULL,
        'n_anggota_3'         => (!empty($n_anggota_3)) ? $n_anggota_3 : NULL,
        'stat_anggota_3'      => (!empty($stat_anggota_3)) ? $stat_anggota_3 : NULL,
        'jk_anggota_3'        => (!empty($jk_anggota_3)) ? $jk_anggota_3 : NULL,
        'tgl_lahir_anggota_3' => (!empty($tgl_lahir_anggota_3)) ? $tgl_lahir_anggota_3 : NULL,
        'pend_anggota_3'      => (!empty($pend_anggota_3)) ? $pend_anggota_3 : NULL,
        'pek_anggota_3'       => (!empty($pek_anggota_3)) ? $pek_anggota_3 : NULL,
        'n_anggota_4'         => (!empty($n_anggota_4)) ? $n_anggota_4 : NULL,
        'stat_anggota_4'      => (!empty($stat_anggota_4)) ? $stat_anggota_4 : NULL,
        'jk_anggota_4'        => (!empty($jk_anggota_4)) ? $jk_anggota_4 : NULL,
        'tgl_lahir_anggota_4' => (!empty($tgl_lahir_anggota_4)) ? $tgl_lahir_anggota_4 : NULL,
        'pend_anggota_4'      => (!empty($pend_anggota_4)) ? $pend_anggota_4 : NULL,
        'pek_anggota_4'       => (!empty($pek_anggota_4)) ? $pek_anggota_4 : NULL,
        'n_anggota_5'         => (!empty($n_anggota_5)) ? $n_anggota_5 : NULL,
        'stat_anggota_5'      => (!empty($stat_anggota_5)) ? $stat_anggota_5 : NULL,
        'jk_anggota_5'        => (!empty($jk_anggota_5)) ? $jk_anggota_5 : NULL,
        'tgl_lahir_anggota_5' => (!empty($tgl_lahir_anggota_5)) ? $tgl_lahir_anggota_5 : NULL,
        'pend_anggota_5'      => (!empty($pend_anggota_5)) ? $pend_anggota_5 : NULL,
        'pek_anggota_5'       => (!empty($pek_anggota_5)) ? $pek_anggota_5 : NULL,

        'n_pend_1'            => (!empty($n_pend_1)) ? $n_pend_1 : NULL,
        'in_pend_1'           => (!empty($in_pend_1)) ? $in_pend_1 : NULL,
        'out_pend_1'          => (!empty($out_pend_1)) ? $out_pend_1 : NULL,
        'ket_lulus_pend_1'    => (!empty($ket_lulus_pend_1)) ? $ket_lulus_pend_1 : NULL,
        'n_pend_2'            => (!empty($n_pend_2)) ? $n_pend_2 : NULL,
        'in_pend_2'           => (!empty($in_pend_2)) ? $in_pend_2 : NULL,
        'out_pend_2'          => (!empty($out_pend_2)) ? $out_pend_2 : NULL,
        'ket_lulus_pend_2'    => (!empty($ket_lulus_pend_2)) ? $ket_lulus_pend_2 : NULL,
        'n_pend_3'            => (!empty($n_pend_3)) ? $n_pend_3 : NULL,
        'in_pend_3'           => (!empty($in_pend_3)) ? $in_pend_3 : NULL,
        'out_pend_3'          => (!empty($out_pend_3)) ? $out_pend_3 : NULL,
        'jur_pend_3'          => (!empty($jur_pend_3)) ? $jur_pend_3 : NULL,
        'ket_lulus_pend_3'    => (!empty($ket_lulus_pend_3)) ? $ket_lulus_pend_3 : NULL,
        'n_pend_4'            => (!empty($n_pend_4)) ? $n_pend_4 : NULL,
        'in_pend_4'           => (!empty($in_pend_4)) ? $in_pend_4 : NULL,
        'out_pend_4'          => (!empty($out_pend_4)) ? $out_pend_4 : NULL,
        'jur_pend_4'          => (!empty($jur_pend_4)) ? $jur_pend_4 : NULL,
        'ket_lulus_pend_4'    => (!empty($ket_lulus_pend_4)) ? $ket_lulus_pend_4 : NULL,
        'n_pend_5'            => (!empty($n_pend_5)) ? $n_pend_5 : NULL,
        'in_pend_5'           => (!empty($in_pend_5)) ? $in_pend_5 : NULL,
        'out_pend_5'          => (!empty($out_pend_5)) ? $out_pend_5 : NULL,
        'jur_pend_5'          => (!empty($jur_pend_5)) ? $jur_pend_5 : NULL,
        'ket_lulus_pend_5'    => (!empty($ket_lulus_pend_5)) ? $ket_lulus_pend_5 : NULL,
        'n_pend_6'            => (!empty($n_pend_6)) ? $n_pend_6 : NULL,
        'in_pend_6'           => (!empty($in_pend_6)) ? $in_pend_6 : NULL,
        'out_pend_6'          => (!empty($out_pend_6)) ? $out_pend_6 : NULL,
        'jur_pend_6'          => (!empty($jur_pend_6)) ? $jur_pend_6 : NULL,
        'ket_lulus_pend_6'    => (!empty($ket_lulus_pend_6)) ? $ket_lulus_pend_6 : NULL,
        
        'n_kursus_1'          => (!empty($n_kursus_1)) ? $n_kursus_1 : NULL,
        'in_kursus_1'         => (!empty($in_kursus_1)) ? $in_kursus_1 : NULL,
        'out_kursus_1'        => (!empty($out_kursus_1)) ? $out_kursus_1 : NULL,
        'ket_kursus_1'        => (!empty($ket_kursus_1)) ? $ket_kursus_1 : NULL,
        'n_kursus_2'          => (!empty($n_kursus_2)) ? $n_kursus_2 : NULL,
        'in_kursus_2'         => (!empty($in_kursus_2)) ? $in_kursus_2 : NULL,
        'out_kursus_2'        => (!empty($out_kursus_2)) ? $out_kursus_2 : NULL,
        'ket_kursus_2'        => (!empty($ket_kursus_2)) ? $ket_kursus_2 : NULL,
        'n_kursus_3'          => (!empty($n_kursus_3)) ? $n_kursus_3 : NULL,
        'in_kursus_3'         => (!empty($in_kursus_3)) ? $in_kursus_3 : NULL,
        'out_kursus_3'        => (!empty($out_kursus_3)) ? $out_kursus_3 : NULL,
        'ket_kursus_3'        => (!empty($ket_kursus_3)) ? $ket_kursus_3 : NULL,

        'n_riw_pek'           => (!empty($n_riw_pek)) ? $n_riw_pek : NULL,
        'j_usaha_riw'         => (!empty($j_usaha_riw)) ? $j_usaha_riw : NULL,
        'alamat_riw'          => (!empty($alamat_riw)) ? $alamat_riw : NULL,
        'telp_pek'            => (!empty($telp_pek)) ? $telp_pek : NULL,
        'posisi_riw'          => (!empty($posisi_riw)) ? $posisi_riw : NULL,
        'div_pek'             => (!empty($div_pek)) ? $div_pek : NULL,
        'posisi_atsn'         => (!empty($posisi_atsn)) ? $posisi_atsn : NULL,
        'tgl_riw_join'        => (!empty($tgl_riw_join)) ? $tgl_riw_join : NULL,
        'gaji_p_riw'          => (!empty($gaji_p_riw)) ? $gaji_p_riw : NULL,
        'uang_tp_mkn_riw'     => (!empty($uang_tp_mkn_riw)) ? $uang_tp_mkn_riw : NULL,
        'uang_lain'           => (!empty($uang_lain)) ? $uang_lain : NULL,
        'uang_lain_ket'       => (!empty($uang_lain_ket)) ? $uang_lain_ket : NULL,
        'benefit_riw'         => (!empty($benefit_riw)) ? $benefit_riw : NULL,
        'min_gaji'            => (!empty($min_gaji)) ? $min_gaji : NULL,
        'min_gaji_ket'        => (!empty($min_gaji_ket)) ? $min_gaji_ket : NULL,
        'tgl_join'            => (!empty($tgl_join)) ? $tgl_join : NULL,
        
        'n_ref_1'             => (!empty($n_ref_1)) ? $n_ref_1 : NULL,
        'hub_ref_1'           => (!empty($hub_ref_1)) ? $hub_ref_1 : NULL,
        'jab_ref_1'           => (!empty($jab_ref_1)) ? $jab_ref_1 : NULL,
        'telp_ref_1'          => (!empty($telp_ref_1)) ? $telp_ref_1 : NULL,
        'n_ref_2'             => (!empty($n_ref_2)) ? $n_ref_2 : NULL,
        'hub_ref_2'           => (!empty($hub_ref_2)) ? $hub_ref_2 : NULL,
        'jab_ref_2'           => (!empty($jab_ref_2)) ? $jab_ref_2 : NULL,
        'telp_ref_2'          => (!empty($telp_ref_2)) ? $telp_ref_2 : NULL,

        'n_kerabat_1'         => (!empty($n_kerabat_1)) ? $n_kerabat_1 : NULL,
        'jab_kerabat_1'       => (!empty($jab_kerabat_1)) ? $jab_kerabat_1 : NULL,
        'hub_kerabat_1'       => (!empty($hub_kerabat_1)) ? $hub_kerabat_1 : NULL,
        'n_kerabat_2'         => (!empty($n_kerabat_2)) ? $n_kerabat_2 : NULL,
        'jab_kerabat_2'       => (!empty($jab_kerabat_2)) ? $jab_kerabat_2 : NULL,
        'hub_kerabat_2'       => (!empty($hub_kerabat_2)) ? $hub_kerabat_2 : NULL,

        'n_skill_1'           => (!empty($n_skill_1)) ? $n_skill_1 : NULL,
        'lv_skill_1'          => (!empty($lv_skill_1)) ? $lv_skill_1 : NULL,
        'n_skill_2'           => (!empty($n_skill_2)) ? $n_skill_2 : NULL,
        'lv_skill_2'          => (!empty($lv_skill_2)) ? $lv_skill_2 : NULL,
        'n_skill_3'           => (!empty($n_skill_3)) ? $n_skill_3 : NULL,
        'lv_skill_3'          => (!empty($lv_skill_3)) ? $lv_skill_3 : NULL,
        'n_skill_4'           => (!empty($n_skill_4)) ? $n_skill_4 : NULL,
        'lv_skill_4'          => (!empty($lv_skill_4)) ? $lv_skill_4 : NULL,

        'info_1'              => (!empty($info_1)) ? $info_1 : NULL,
        'info_2'              => (!empty($info_2)) ? $info_2 : NULL,
        'info_3'              => (!empty($info_3)) ? $info_3 : NULL,
        'info_4'              => (!empty($info_4)) ? $info_4 : NULL,
        'info_5'              => (!empty($info_5)) ? $info_5 : NULL,
        'info_6'              => (!empty($info_6)) ? $info_6 : NULL,
        'info_7'              => (!empty($info_7)) ? $info_7 : NULL,
        'info_8'              => (!empty($info_8)) ? $info_8 : NULL,
        'info_9'              => (!empty($info_9)) ? $info_9 : NULL,
        'tgl_submit'          => 'now()',
      );
      // print_r($DataInsert);
      // die();
      $this->M_Pegawai->InsertDataPgw($DataInsert);
      redirect (base_url('Welcome/sukses'));
    }
    else{
      array(
        'jab_lmr'         => $this->input->post('jab_lmr'),
        'nama_lmr'        => $this->input->post('nama_lmr'),
        'no_ktp_lmr'      => $this->input->post('no_ktp_lmr'),
        'no_npwp_lmr'     => $this->input->post('no_npwp_lmr'),
        'tmp_lahir_lmr'   => $this->input->post('tmp_lahir_lmr'),
        'tgl_lahir_lmr'   => $this->input->post('tgl_lahir_lmr'),
        'alamat_lmr'      => $this->input->post('alamat_lmr'),
        'telp_lmr'        => $this->input->post('telp_lmr'),
        'hp_lmr'          => $this->input->post('hp_lmr'),
        'email_lmr'       => $this->input->post('email_lmr'),
        'jk_lmr'          => $this->input->post('jk_lmr'),
        'agama_lmr'       => $this->input->post('agama_lmr'),
        'stat_nkh_lmr'    => $this->input->post('stat_nkh_lmr'),

        'n_anggota_1'         => $this->input->post('n_anggota_1'),
        'stat_anggota_1'      => $this->input->post('stat_anggota_1'),
        'jk_anggota_1'        => $this->input->post('jk_anggota_1'),
        'tgl_lahir_anggota_1' => $this->input->post('tgl_lahir_anggota_1'),
        'pend_anggota_1'      => $this->input->post('pend_anggota_1'),
        'pek_anggota_1'       => $this->input->post('pek_anggota_1'),
        'n_anggota_2'         => $this->input->post('n_anggota_2'),
        'stat_anggota_2'      => $this->input->post('stat_anggota_2'),
        'jk_anggota_2'        => $this->input->post('jk_anggota_2'),
        'tgl_lahir_anggota_2' => $this->input->post('tgl_lahir_anggota_2'),
        'pend_anggota_2'      => $this->input->post('pend_anggota_2'),
        'pek_anggota_2'       => $this->input->post('pek_anggota_2'),
        'n_anggota_3'         => $this->input->post('n_anggota_3'),
        'stat_anggota_3'      => $this->input->post('stat_anggota_3'),
        'jk_anggota_3'        => $this->input->post('jk_anggota_3'),
        'tgl_lahir_anggota_3' => $this->input->post('tgl_lahir_anggota_'),
        'pend_anggota_3'      => $this->input->post('pend_anggota_3'),
        'pek_anggota_3'       => $this->input->post('pek_anggota_3'),
        'n_anggota_4'         => $this->input->post('n_anggota_4'),
        'stat_anggota_4'      => $this->input->post('stat_anggota_4'),
        'jk_anggota_4'        => $this->input->post('jk_anggota_4'),
        'tgl_lahir_anggota_4' => $this->input->post('tgl_lahir_anggota_4'),
        'pend_anggota_4'      => $this->input->post('pend_anggota_4'),
        'pek_anggota_4'       => $this->input->post('pek_anggota_4'),
        'n_anggota_5'         => $this->input->post('n_anggota_5'),
        'stat_anggota_5'      => $this->input->post('stat_anggota_5'),
        'jk_anggota_5'        => $this->input->post('jk_anggota_5'),
        'tgl_lahir_anggota_5' => $this->input->post('tgl_lahir_anggota_5'),
        'pend_anggota_5'      => $this->input->post('pend_anggota_5'),
        'pek_anggota_5'       => $this->input->post('pek_anggota_5'),

        'n_pend_1'            => $this->input->post('n_pend_1'),
        'in_pend_1'           => $this->input->post('in_pend_1'),
        'out_pend_1'          => $this->input->post('out_pend_1'),
        'jur_pend_1'          => $this->input->post('jur_pend_1'),
        'ket_lulus_pend_1'    => $this->input->post('ket_lulus_pend_1'),
        'n_pend_2'            => $this->input->post('n_pend_2'),
        'in_pend_2'           => $this->input->post('in_pend_2'),
        'out_pend_2'          => $this->input->post('out_pend_2'),
        'jur_pend_2'          => $this->input->post('jur_pend_2'),
        'ket_lulus_pend_2'    => $this->input->post('ket_lulus_pend_2'),
        'n_pend_3'            => $this->input->post('n_pend_3'),
        'in_pend_3'           => $this->input->post('in_pend_3'),
        'out_pend_3'          => $this->input->post('out_pend_3'),
        'jur_pend_3'          => $this->input->post('jur_pend_3'),
        'ket_lulus_pend_3'    => $this->input->post('ket_lulus_pend_3'),
        'n_pend_4'            => $this->input->post('n_pend_4'),
        'in_pend_4'           => $this->input->post('in_pend_4'),
        'out_pend_4'          => $this->input->post('out_pend_4'),
        'jur_pend_4'          => $this->input->post('jur_pend_4'),
        'ket_lulus_pend_4'    => $this->input->post('ket_lulus_pend_4'),
        'n_pend_5'            => $this->input->post('n_pend_5'),
        'in_pend_5'           => $this->input->post('in_pend_5'),
        'out_pend_5'          => $this->input->post('out_pend_5'),
        'jur_pend_5'          => $this->input->post('jur_pend_5'),
        'ket_lulus_pend_5'    => $this->input->post('ket_lulus_pend_5'),
        'n_pend_6'            => $this->input->post('n_pend_6'),
        'in_pend_6'           => $this->input->post('in_pend_6'),
        'out_pend_6'          => $this->input->post('out_pend_6'),
        'jur_pend_6'          => $this->input->post('jur_pend_6'),
        'ket_lulus_pend_6'    => $this->input->post('ket_lulus_pend_6'),
        
        'n_kursus_1'          => $this->input->post('n_kursus_1'),
        'in_kursus_1'         => $this->input->post('in_kursus_1'),
        'out_kursus_1'        => $this->input->post('out_kursus_1'),
        'ket_kursus_1'        => $this->input->post('ket_kursus_1'),
        'n_kursus_2'          => $this->input->post('n_kursus_2'),
        'in_kursus_2'         => $this->input->post('in_kursus_2'),
        'out_kursus_2'        => $this->input->post('out_kursus_2'),
        'ket_kursus_2'        => $this->input->post('ket_kursus_2'),
        'n_kursus_3'          => $this->input->post('n_kursus_3'),
        'in_kursus_3'         => $this->input->post('in_kursus_3'),
        'out_kursus_3'        => $this->input->post('out_kursus_3'),
        'ket_kursus_3'        => $this->input->post('ket_kursus_3'),

        'n_riw_pek'           => $this->input->post('n_riw_pek'),
        'j_usaha_riw'         => $this->input->post('j_usaha_riw'),
        'alamat_riw'          => $this->input->post('alamat_riw'),
        'telp_pek'            => $this->input->post('telp_pek'),
        'posisi_riw'          => $this->input->post('posisi_riw'),
        'div_pek'             => $this->input->post('div_pek'),
        'posisi_atsn'         => $this->input->post('posisi_atsn'),
        'tgl_riw_join'        => $this->input->post('tgl_riw_join'),
        'gaji_p_riw'          => $this->input->post('gaji_p_riw'),
        'uang_tp_mkn_riw'     => $this->input->post('uang_tp_mkn_riw'),
        'uang_lain'           => $this->input->post('uang_lain'),
        'uang_lain_ket'       => $this->input->post('uang_lain_ket'),
        'benefit_riw'         => $this->input->post('benefit_riw'),
        'min_gaji'            => $this->input->post('min_gaji'),
        'min_gaji_ket'        => $this->input->post('min_gaji_ket'),
        'tgl_join'            => $this->input->post('tgl_join'),

        'n_ref_1'             => $this->input->post('n_ref_1'),
        'hub_ref_1'           => $this->input->post('hub_ref_1'),
        'jab_ref_1'           => $this->input->post('jab_ref_1'),
        'telp_ref_1'          => $this->input->post('telp_ref_1'),
        'n_ref_2'             => $this->input->post('n_ref_2'),
        'hub_ref_2'           => $this->input->post('hub_ref_2'),
        'jab_ref_2'           => $this->input->post('jab_ref_2'),
        'telp_ref_2'          => $this->input->post('telp_ref_2'),

        'n_kerabat_1'         => $this->input->post('n_kerabat_1'),
        'jab_kerabat_1'       => $this->input->post('jab_kerabat_1'),
        'hub_kerabat_1'       => $this->input->post('hub_kerabat_1'),
        'n_kerabat_2'         => $this->input->post('n_kerabat_2'),
        'jab_kerabat_2'       => $this->input->post('jab_kerabat_2'),
        'hub_kerabat_2'       => $this->input->post('hub_kerabat_2'),

        'n_skill_1'           => $this->input->post('n_skill_1'),
        'lv_skill_1'          => $this->input->post('lv_skill_1'),
        'n_skill_2'           => $this->input->post('n_skill_2'),
        'lv_skill_2'          => $this->input->post('lv_skill_2'),
        'n_skill_3'           => $this->input->post('n_skill_3'),
        'lv_skill_3'          => $this->input->post('lv_skill_3'),
        'n_skill_4'           => $this->input->post('n_skill_4'),
        'lv_skill_4'          => $this->input->post('lv_skill_4'),

        'info_1'              => $this->input->post('info_1'),
        'info_2'              => $this->input->post('info_2'),
        'info_3'              => $this->input->post('info_3'),
        'info_4'              => $this->input->post('info_4'),
        'info_5'              => $this->input->post('info_5'),
        'info_6'              => $this->input->post('info_6'),
        'info_7'              => $this->input->post('info_7'),
        'info_8'              => $this->input->post('info_8'),
        'info_9'              => $this->input->post('info_9'),
        'tgl_submit'          => 'now()',
      );
    }
  }
  public function AksiEdit(){
    $id_lmr = $this->input->post('id_lmr');

    $DataUpdate = array(
      'img_lmr'         => $img_lmr,
      'jab_lmr'         => $this->input->post('jab_lmr'),
      'nama_lmr'        => $this->input->post('nama_lmr'),
      'no_ktp_lmr'      => $this->input->post('no_ktp_lmr'),
      'no_npwp_lmr'     => $this->input->post('no_npwp_lmr'),
      'tmp_lahir_lmr'   => $this->input->post('tmp_lahir_lmr'),
      'tgl_lahir_lmr'   => $this->input->post('tgl_lahir_lmr'),
      'alamat_lmr'      => $this->input->post('alamat_lmr'),
      'telp_lmr'        => $this->input->post('telp_lmr'),
      'hp_lmr'          => $this->input->post('hp_lmr'),
      'email_lmr'       => $this->input->post('email_lmr'),
      'jk_lmr'          => $this->input->post('jk_lmr'),
      'agama_lmr'       => $this->input->post('agama_lmr'),
      'stat_nkh_lmr'    => $this->input->post('stat_nkh_lmr'),

      'n_anggota_1'         => $this->input->post('n_anggota_1'),
      'stat_anggota_1'      => $this->input->post('stat_anggota_1'),
      'jk_anggota_1'        => $this->input->post('jk_anggota_1'),
      'tgl_lahir_anggota_1' => $this->input->post('tgl_lahir_anggota_1'),
      'pend_anggota_1'      => $this->input->post('pend_anggota_1'),
      'pek_anggota_1'       => $this->input->post('pek_anggota_1'),
      'n_anggota_2'         => $this->input->post('n_anggota_2'),
      'stat_anggota_2'      => $this->input->post('stat_anggota_2'),
      'jk_anggota_2'        => $this->input->post('jk_anggota_2'),
      'tgl_lahir_anggota_2' => $this->input->post('tgl_lahir_anggota_2'),
      'pend_anggota_2'      => $this->input->post('pend_anggota_2'),
      'pek_anggota_2'       => $this->input->post('pek_anggota_2'),
      'n_anggota_3'         => $this->input->post('n_anggota_3'),
      'stat_anggota_3'      => $this->input->post('stat_anggota_3'),
      'jk_anggota_3'        => $this->input->post('jk_anggota_3'),
      'tgl_lahir_anggota_3' => $this->input->post('tgl_lahir_anggota_'),
      'pend_anggota_3'      => $this->input->post('pend_anggota_3'),
      'pek_anggota_3'       => $this->input->post('pek_anggota_3'),
      'n_anggota_4'         => $this->input->post('n_anggota_4'),
      'stat_anggota_4'      => $this->input->post('stat_anggota_4'),
      'jk_anggota_4'        => $this->input->post('jk_anggota_4'),
      'tgl_lahir_anggota_4' => $this->input->post('tgl_lahir_anggota_4'),
      'pend_anggota_4'      => $this->input->post('pend_anggota_4'),
      'pek_anggota_4'       => $this->input->post('pek_anggota_4'),
      'n_anggota_5'         => $this->input->post('n_anggota_5'),
      'stat_anggota_5'      => $this->input->post('stat_anggota_5'),
      'jk_anggota_5'        => $this->input->post('jk_anggota_5'),
      'tgl_lahir_anggota_5' => $this->input->post('tgl_lahir_anggota_5'),
      'pend_anggota_5'      => $this->input->post('pend_anggota_5'),
      'pek_anggota_5'       => $this->input->post('pek_anggota_5'),

      'n_pend_1'            => $this->input->post('n_pend_1'),
      'in_pend_1'           => $this->input->post('in_pend_1'),
      'out_pend_1'          => $this->input->post('out_pend_1'),
      'jur_pend_1'          => $this->input->post('jur_pend_1'),
      'ket_lulus_pend_1'    => $this->input->post('ket_lulus_pend_1'),
      'n_pend_2'            => $this->input->post('n_pend_2'),
      'in_pend_2'           => $this->input->post('in_pend_2'),
      'out_pend_2'          => $this->input->post('out_pend_2'),
      'jur_pend_2'          => $this->input->post('jur_pend_2'),
      'ket_lulus_pend_2'    => $this->input->post('ket_lulus_pend_2'),
      'n_pend_3'            => $this->input->post('n_pend_3'),
      'in_pend_3'           => $this->input->post('in_pend_3'),
      'out_pend_3'          => $this->input->post('out_pend_3'),
      'jur_pend_3'          => $this->input->post('jur_pend_3'),
      'ket_lulus_pend_3'    => $this->input->post('ket_lulus_pend_3'),
      'n_pend_4'            => $this->input->post('n_pend_4'),
      'in_pend_4'           => $this->input->post('in_pend_4'),
      'out_pend_4'          => $this->input->post('out_pend_4'),
      'jur_pend_4'          => $this->input->post('jur_pend_4'),
      'ket_lulus_pend_4'    => $this->input->post('ket_lulus_pend_4'),
      'n_pend_5'            => $this->input->post('n_pend_5'),
      'in_pend_5'           => $this->input->post('in_pend_5'),
      'out_pend_5'          => $this->input->post('out_pend_5'),
      'jur_pend_5'          => $this->input->post('jur_pend_5'),
      'ket_lulus_pend_5'    => $this->input->post('ket_lulus_pend_5'),
      'n_pend_6'            => $this->input->post('n_pend_6'),
      'in_pend_6'           => $this->input->post('in_pend_6'),
      'out_pend_6'          => $this->input->post('out_pend_6'),
      'jur_pend_6'          => $this->input->post('jur_pend_6'),
      'ket_lulus_pend_6'    => $this->input->post('ket_lulus_pend_6'),
      
      'n_kursus_1'          => $this->input->post('n_kursus_1'),
      'in_kursus_1'         => $this->input->post('in_kursus_1'),
      'out_kursus_1'        => $this->input->post('out_kursus_1'),
      'ket_kursus_1'        => $this->input->post('ket_kursus_1'),
      'n_kursus_2'          => $this->input->post('n_kursus_2'),
      'in_kursus_2'         => $this->input->post('in_kursus_2'),
      'out_kursus_2'        => $this->input->post('out_kursus_2'),
      'ket_kursus_2'        => $this->input->post('ket_kursus_2'),
      'n_kursus_3'          => $this->input->post('n_kursus_3'),
      'in_kursus_3'         => $this->input->post('in_kursus_3'),
      'out_kursus_3'        => $this->input->post('out_kursus_3'),
      'ket_kursus_3'        => $this->input->post('ket_kursus_3'),

      'n_riw_pek'           => $this->input->post('n_riw_pek'),
      'j_usaha_riw'         => $this->input->post('j_usaha_riw'),
      'alamat_riw'          => $this->input->post('alamat_riw'),
      'telp_pek'            => $this->input->post('telp_pek'),
      'posisi_riw'          => $this->input->post('posisi_riw'),
      'div_pek'             => $this->input->post('div_pek'),
      'posisi_atsn'         => $this->input->post('posisi_atsn'),
      'tgl_riw_join'        => $this->input->post('tgl_riw_join'),
      'gaji_p_riw'          => $this->input->post('gaji_p_riw'),
      'uang_lain'           => $this->input->post('uang_lain'),
      'uang_lain_ket'       => $this->input->post('uang_lain_ket'),
      'benefit_riw'         => $this->input->post('benefit_riw'),
      'min_gaji'            => $this->input->post('min_gaji'),
      'min_gaji_ket'        => $this->input->post('min_gaji_ket'),
      'tgl_join'            => $this->input->post('tgl_join'),

      'n_ref_1'             => $this->input->post('n_ref_1'),
      'hub_ref_1'           => $this->input->post('hub_ref_1'),
      'jab_ref_1'           => $this->input->post('jab_ref_1'),
      'telp_ref_1'          => $this->input->post('telp_ref_1'),
      'n_ref_2'             => $this->input->post('n_ref_2'),
      'hub_ref_2'           => $this->input->post('hub_ref_2'),
      'jab_ref_2'           => $this->input->post('jab_ref_2'),
      'telp_ref_2'          => $this->input->post('telp_ref_2'),

      'n_kerabat_1'         => $this->input->post('n_kerabat_1'),
      'jab_kerabat_1'       => $this->input->post('jab_kerabat_1'),
      'hub_kerabat_1'       => $this->input->post('hub_kerabat_1'),
      'n_kerabat_2'         => $this->input->post('n_kerabat_2'),
      'jab_kerabat_2'       => $this->input->post('jab_kerabat_2'),
      'hub_kerabat_2'       => $this->input->post('hub_kerabat_2'),

      'n_skill_1'           => $this->input->post('n_skill_1'),
      'lv_skill_1'          => $this->input->post('lv_skill_1'),
      'n_skill_2'           => $this->input->post('n_skill_2'),
      'lv_skill_2'          => $this->input->post('lv_skill_2'),
      'n_skill_3'           => $this->input->post('n_skill_3'),
      'lv_skill_3'          => $this->input->post('lv_skill_3'),
      'n_skill_4'           => $this->input->post('n_skill_4'),
      'lv_skill_4'          => $this->input->post('lv_skill_4'),

      'info_1'              => $this->input->post('info_1'),
      'info_2'              => $this->input->post('info_2'),
      'info_3'              => $this->input->post('info_3'),
      'info_4'              => $this->input->post('info_4'),
      'info_5'              => $this->input->post('info_5'),
      'info_6'              => $this->input->post('info_6'),
      'info_7'              => $this->input->post('info_7'),
      'info_8'              => $this->input->post('info_8'),
      'info_9'              => $this->input->post('info_9'),
      'tgl_submit'          => $this->input->post('tgl_submit'),
    );

    $this->M_Pegawai->EditDataPgw($DataUpdate, $id_lmr);
    redirect (base_url());
  }
  public function AksiDelete($id_lmr){
    $this->M_Pegawai->DeleteDataPgw($id_lmr);
    redirect (base_url('Page/welcome'));
  }
  public function export_tcpdf($id_lmr){
    $data['data_pribadi'] = $this->M_Pegawai->getPdf($id_lmr);
		$this->load->view('laporan_tcpdf', $data);
  }
  public function sukses(){
    $recordPgw = $this->M_Pegawai->getDataPegawai();
    $DATA = array('data_pgw' => $recordPgw);
    $this->load->view('sukses', $DATA);
  }
  // function home_admin(){
  //   if($this->session->userdata('status') != "login"){
	// 		redirect(base_url("Welcome/v_login"));
  //   }
    
  //   $recordPgw = $this->M_Pegawai->getDataPegawai();
  //   $DATA = array('data_pgw' => $recordPgw);
  //   $this->load->view('home_admin', $DATA);
  // }

  // function login(){
  //   if(isset($_POST['submit'])){
  //     $recordPgw = $this->M_Pegawai->getDataPegawai();
  //     $DATA = array('data_pgw' => $recordPgw);
  //     // proses login
  //     $username = $this->input->post('username');
  //     $password = $this->input->post('password');
  //     $hasil = $this->M_Pegawai->login($username, $password);
  //     if($hasil == 1){
  //       $this->session->userdata(array('status_login' => 'ok'));
  //       // redirect('dashboard');
  //       redirect(base_url('Welcome/home_admin'));
  //     }else{
  //       redirect(base_url('Welcome/login'));
  //     }
  //   }else{
  //     check_session_login();
  //     $this->load->view('formlogin');
  //     // redirect(base_url('Welcome/home_admin'));
  //   }
  // }

  // function logout(){
  //   // session_destroy();
  //   $this->session->sess_destroy();
  //   redirect(base_url('Welcome/login'));
  // }

  // function v_login(){
  //   $this->load->view('v_login');
  // }


  // function aksi_login(){
  //   session_start();
  //   $username = $this->input->post('username');
  //   $password = $this->input->post('password');
  //   $where = array(
  //     'username' => $username,
  //     //  'password' => md5($password)
  //     'password' => $password
  //   );
  //   $cek = $this->M_Pegawai->cek_login("users",$where)->num_rows();
  //   if($cek > 0){
  //     $data_session = array(
  //       'nama' => $username,
  //       'status' => "login"
  //     );
  //     $this->session->set_userdata($data_session);
  //     redirect(base_url("Welcome/home_admin"));
  //   }else{
  //     // echo "Username dan password salah !";
  //     redirect(base_url('Welcome/v_login'));
  //   }
  // }
  // function logout(){
  //   $this->session->sess_destroy();
  //   redirect(base_url('Welcome/v_login'));
  // }




 








}
 