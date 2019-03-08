<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function index(){
        $data= $this->mod->GetTable('siswa');
        $this->load->view('templates/header');
		$this->load->view('viewcrud', array('data'=>$data));
		$this->load->view('templates/footer');

	}
	public function insert()
	{
		if(isset($_POST['submit'])){
			//mengambil post dr form
			$nis = $this->input->post('nis');
			$nama = $this->input->post('nama');
			$ttl = $this->input->post('ttl');
			$jeniskelamin = $this->input->post('jenis_kelamin');
			$pend = $this->input->post('pend');
			$telp = $this->input->post('telp');
			$alamat = $this->input->post('alamat');

			$data = array('nis'=>$nis, 'nama'=>$nama, 'ttl'=>$ttl,'jenis_kelamin'=>$jeniskelamin,'pend'=>$pend,'telp'=>$telp,'alamat'=>$alamat); //data yang akan di insert

			$this->mod->InsertData('siswa', $data);
			
			redirect('Siswa'); //
		}else{
			$this->load->view('insertcrud'); //menampilkan views insertcrud
		}
	}

	public function delete(){
        $nis = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
        $this->mod->DeleteData('siswa','nis',$nis); //menghapus data
        redirect('Siswa'); //mengalihkan ke tampbali
    }

    	public function update(){
		if(isset($_POST['submit'])){
			//mengambil post dr form
			$nis = $this->input->post('nis');
			$nama = $this->input->post('nama');
			$ttl = $this->input->post('ttl');
			$jeniskelamin = $this->input->post('jenis_kelamin');
			$pend = $this->input->post('pend');
			$telp = $this->input->post('telp');
			$alamat = $this->input->post('alamat');

			$data = array('nis'=>$nis, 'nama'=>$nama, 'ttl'=>$ttl,'jenis_kelamin'=>$jeniskelamin,'pend'=>$pend,'telp'=>$telp,'alamat'=>$alamat); //data yang akan di update

			$this->mod->UpdateData('siswa', $data,'nis',$nis); //mengaupdate data melalui fungsi insertdata pad models mod.php
			redirect('Belajar_crud'); //mengalihkan ke tampbali
		}else{
			$nis = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
			$data = $this->mod->getByID('siswa','nis',$nis)->row_array(); //menselect data yg akan di update
		
			$this->load->view('updatecrud',array('r'=>$data)); //menampilkan views updatecrud
		}
	}

    public function search()
    {
    	$keyword = $this->input->post('keyword');
    	$data['result'] = $this->mod->cariDataPerusahaan($keyword);
    	$this->load->view('cari', $data);
    }



}
