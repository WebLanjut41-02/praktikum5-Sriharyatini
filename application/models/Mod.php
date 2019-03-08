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
    public  function getByID($tabel,$pk,$nis){
        $this->db->where($pk,$nis);
        return $this->db->get($tabel);
    }
    public function UpdateData($tabel, $data, $pk, $nis) {
        $this->db->where($pk,$nis);
        $res = $this->db->update($tabel,$data);
        return $res;
    }
    public function DeleteData($tabel, $pk, $nis) {
        $this->db->where($pk,$nis);
        $res = $this->db->delete($tabel);
        return $res;
    }


    public function cariDataPerusahaan($keyword)
 {
  $this->db->like('nis', $keyword);
  $query = $this->db->get('siswa');
  return $query->result();
 }


 public function getAllPerusahaan()
 {
  return $this->db->get('siswa')->result_array();
 }

}
?>