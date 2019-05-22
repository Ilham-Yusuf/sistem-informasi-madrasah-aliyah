<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function index()
	{
		$this->load->model('M_auth');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('loginNama','Nama','required');
		$this->form_validation->set_rules('loginPassword','Password','required');
		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('login');
		} else {
			$this->M_auth->login();
		}

	}
}
