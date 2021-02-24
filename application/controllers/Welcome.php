<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}

public function simpan()
{
 $npm = $this->input->post('npm');
 $nama = $this->input->post('nama');
 $jurusan = $this->input->post('jurusan');
 $alamat = $this->input->post('alamat');
 $this->db->query("insert into mhs values('$npm','$nama','$jurusan','$alamat')");
 redirect('','refresh');
}

public function tampil()
{
 $d['data'] = $this->db->query("select* from mhs");
 $this->load->view('tampil',$d);
}   

}