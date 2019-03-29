<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod extends CI_Model {

	public function GetTable($tabel)
	{
		$data=$this->db->get($tabel);
		return $data->result_array();
    }
    public function InsertData($tabel, $data) {
        $res = $this->db->insert($tabel, $data);
        return $res;
    }
    public  function getByID($tabel,$pk,$nim){
        $this->db->where($pk,$nim);
        return $this->db->get($tabel);
    }
    public function UpdateData($tabel, $data, $pk, $nim) {
        $this->db->where($pk,$nim);
        $res = $this->db->update($tabel,$data);
        return $res;
    }
    public function DeleteData($tabel, $pk, $nim) {
        $this->db->where($pk,$nim);
        $res = $this->db->delete($tabel);
        return $res;
    }

     public function get_mahasiswa_list($limit, $start){
        $query = $this->db->get('prak', $limit, $start);
        return $query->result_array();
    }
    public function cariDataPerusahaan($keyword){
      $this->db->like('nim', $keyword);
      $query = $this->db->get('prak');
      return $query->result();
 }


 public function getAllPerusahaan()
 {
  return $this->db->get('prak')->result_array();
 }
  
}
?>