<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{
  public function getDataPegawai(){
    $this->db->select('*');
    $this->db->from('data_pribadi');
    $query = $this->db->get();
    return $query->result();
  }
  public function InsertDataPgw($data){
    $this->db->insert('data_pribadi',$data);
  }
  public function EditDataPgw($data, $id_lmr){
    $this->db->where('id_lmr', $id_lmr);
    $this->db->update('data_pribadi', $data);
  }
  public function getDataPgwDetail($id_lmr){
    $this->db->where('id_lmr', $id_lmr);
    $query = $this->db->get('data_pribadi');
    return $query->row();
  }
  public function DeleteDataPgw($id_lmr){
    $this->db->where('id_lmr', $id_lmr);
    $this->db->delete('data_pribadi');
  }
  public function getPdf($id_lmr){    
    $this->db->select('*');
    $this->db->from('data_pribadi');
    $this->db->where('id_lmr', $id_lmr);
    $query = $this->db->get();
    return $query->result();
  }

  // function login($username, $password)
  // {
  //   $check = $this->db->get_where('users', array('username' => $username, 'password' => $password));
  //   if($check->num_rows()>0){
  //     return 1;
  //   }else{
  //     return 0;
  //   }
  // }

  // function cek_login($table,$where){		
	// 	return $this->db->get_where($table,$where);
  // }
  
  public function get($username){
    $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
    $result = $this->db->get('users')->row(); // Untuk mengeksekusi dan mengambil data hasil query
    return $result;
  }
  public function UserAdd($data){
    $this->db->insert('users',$data);
  }
  public function getDataUser(){
    $this->db->select('*');
    $this->db->from('users');
    $query = $this->db->get();
    return $query->result();
  }
  public function DeleteDataUser($user_id){
    $this->db->where('user_id', $user_id);
    $this->db->delete('users');
  }

  
}



?>