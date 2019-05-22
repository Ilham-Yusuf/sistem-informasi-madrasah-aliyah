<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * berisikan pengaturan untuk akun dengan hak akses admin
 */
class Admin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->view('template/admin/header');
		$this->load->library(['form_validation','pagination']);
		$this->load->model('M_admin');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('admin/dashboard');
		$this->load->view('template/admin/footer');
	}

	public function d_master()
	{
		$this->load->view('admin/d_master');
		$this->load->view('template/admin/footer');
	}

	public function d_siswa($mulai = 0)
	{
		// konfigurasi pagination
		$perPage = 4;
		$config = [
			'total_rows'		=> $this->M_admin->totalSiswa(),
			'base_url'			=> base_url('index.php/admin/d_siswa'),
			'per_page'			=> $perPage,
			'full_tag_open'		=> "<ul class='pagination justify-content-center'>",
			'full_tag_close'	=> "</ul>",
			'num_tag_open'		=> "<li class='page-item'>",
			'num_tag_close'		=> "</li>",
			'cur_tag_open'		=> "<li class='page-link bg-primary text-light' style='cursor:pointer'>",
			'cur_tag_close'		=> "</li>",
			'next_tag_open'		=> "<li class='page-item'>",
			'next_tag_close'	=> "</li>",
			'prev_tag_open'		=> "<li class='page-item'>",
			'prev_tag_close'	=> "</li>",
			'first_tag_open'	=> "<li class='page-item'>",
			'first_tag_close'	=> "</li>",
			'last_tag_open'		=> "<li class='page-item'>",
			'last_tag_close'	=> "</li>"
		];

		// masukan konfigurasi ke sistem
		$this->pagination->initialize($config);

		$data['page']	= $this->pagination->create_links();
		$data['siswa'] 	= $this->M_admin->getAllSiswa($perPage, $mulai);
		if($this->input->post('cariSiswa')) {
			$data['page']	= '';
			$data['siswa'] 	= $this->M_admin->cariDataSiswa();
		}
		$this->load->view('admin/d_siswa', $data);
		$this->load->view('template/admin/footer');
	}

	public function t_guru()
	{
		$this->load->view('admin/t_guru');
		$this->load->view('template/admin/footer');
	}

	public function t_siswa()
	{
		$this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tahunMasuk', 'tahunMasuk', 'required');
		if($this->form_validation->run() == FALSE) {
			$data['kelamin']	= ['L', 'P'];
			$data['agama'] 		= ['islam','kristen','budha','hindu','konghucu'];
			$data['pendidikan'] = ['SD','SMP','SMA','S1','S2', 'S3'];
			$this->load->view('admin/t_siswa', $data);
			$this->load->view('template/admin/footer');
		} else {
			$this->M_admin->tambahSiswa();
			$this->session->set_flashdata('info', 'menambah');
			redirect('index.php/admin/d_siswa');
		}
	}

	public function	p_siswa($nis)
	{
		$noKk = $this->M_admin->getProfileSiswa($nis)['ortuNoKk'];
		$data['siswa'] 	= $this->M_admin->getProfileSiswa($nis);
		$data['ortu']	= $this->M_admin->getProfileOrtu($noKk);
		$this->load->view('admin/p_siswa', $data);
		$this->load->view('template/admin/footer');
	}

	public function h_siswa($nis)
	{
		$this->M_admin->hapusSiswa($nis);
		$this->session->set_flashdata('info', 'menghapus');
		redirect('index.php/admin/d_siswa');
	}

	public function e_siswa($nis)
	{
		$this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tempatLahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tahunMasuk', 'tahunMasuk', 'required');
		if($this->form_validation->run() == FALSE) {
			$noKk = $this->M_admin->getProfileSiswa($nis)['ortuNoKk'];
			$data['siswa'] 	= $this->M_admin->getProfileSiswa($nis);
			$data['ortu']	= $this->M_admin->getProfileOrtu($noKk);
			$this->load->view('admin/e_siswa', $data);
			$this->load->view('template/admin/footer');
		} else {
			$this->M_admin->rubahSiswa();
			die();
			$this->session->set_flashdata('info', 'merubah');
			redirect('index.php/admin/d_siswa');	
		}
	}
}