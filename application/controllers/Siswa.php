<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function index(){
        $data= $this->mod->GetTable('prak');
        $this->load->view('templates/header');
		$this->load->view('templates/footer');
		$config['base_url'] = site_url('Siswa/index'); //site url
        $config['total_rows'] = $this->db->count_all('prak'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->mod->get_mahasiswa_list($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

        //load view mahasiswa view
        $this->load->view('viewcrud',$data);

	}
	public function insert()
	{
		if(isset($_POST['submit'])){
			
			$nama = $this->input->post('nama');
			$nim = $this->input->post('nim');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$ipk = $this->input->post('ipk');
			$kelas = $this->input->post('kelas');

			$data = array('nama'=>$nama, 'nim'=>$nim, 'tgl_lahir'=>$tgl_lahir,'ipk'=>$ipk,'kelas'=>$kelas); 
			$this->mod->InsertData('prak', $data);
			
			redirect('Siswa'); 
		}else{
			$this->load->view('insertcrud'); 
		}
	}

	public function delete(){
       $nim = $this->uri->segment(3); 
        $this->mod->DeleteData('prak','nim',$nim);
        redirect('Siswa'); 
    }

    	public function update(){
		if(isset($_POST['submit'])){
			//mengambil post dr form
			$nama = $this->input->post('nama');
			$nim = $this->input->post('nim');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$ipk = $this->input->post('ipk');
			$kelas = $this->input->post('kelas');

			$data = array('nama'=>$nama, 'nim'=>$nim, 'tgl_lahir'=>$tgl_lahir,'ipk'=>$ipk,'kelas'=>$kelas); 

			$this->mod->UpdateData('prak', $data,'nim',$nim); 
			redirect('Belajar_crud'); 
		}else{
			$nim = $this->uri->segment(3);
			$data = $this->mod->getByID('prak','nim',$nim)->row_array(); 
		
			$this->load->view('updatecrud',array('r'=>$data));
		}
	}

    public function search()
    {
    	$keyword = $this->input->post('keyword');
    	$data['result'] = $this->mod->cariDataPerusahaan($keyword);
    	$this->load->view('cari', $data);
    
}

}