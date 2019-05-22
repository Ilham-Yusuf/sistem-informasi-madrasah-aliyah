<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	function tambahSiswa() 
	{
		$nis = $this->input->post('nis');
		$config = [
			'upload_path'		=> './assets/foto/',
			'allowed_types'		=> 'jpg|jpeg|png',
			'file_name'			=> $nis
		];
		$this->load->library('upload', $config);
		$gambar = 'gambar.jpg';
		if( $this->upload->do_upload('foto') ) {
			$gambar = $this->upload->data('file_name');
		}

		$noKk = '';

		if( ($this->input->post('noKk') AND $this->input->post('noKtpAyah')) AND $this->input->post('noKtpIbu')) {
			$noKk = $this->input->post('noKk');
			$data = [
				'ortuNoKk'				=> $noKk,
				'ortuNamaAyah'			=> $this->input->post('namaAyah'),
				'ortuKtpAyah'			=> $this->input->post('noKtpAyah'),
				'ortuKerjaAyah'			=> $this->input->post('pekerjaanAyah'),
				'ortuPendidikanAyah'	=> $this->input->post('pendidikanAyah'),
				'ortuNamaIbu'			=> $this->input->post('namaIbu'),
				'ortuKtpIbu'			=> $this->input->post('noKtpIbu'),
				'ortuKerjaIbu'			=> $this->input->post('pekerjaanIbu'),
				'ortuPendidikanIbu'		=> $this->input->post('pendidikanIbu')
			];
			$this->db->insert('orangtua', $data);
		}

		$data = [
			'siswaNis'			=> $nis,
			'siswaNisn'			=> $this->input->post('nisn'), 
			'siswaNama'			=> $this->input->post('nama'),
			'siswaTempatLahir'	=> $this->input->post('tempatLahir'),
			'siswaTanggalLahir'	=> $this->input->post('tanggalLahir'),
			'siswaKelamin'		=> $this->input->post('kelamin'),
			'siswaAgama'		=> $this->input->post('agama'),
			'siswaNoHp'			=> $this->input->post('noHp'),
			'siswaEmail'		=> $this->input->post('email'),
			'siswaAlamat'		=> $this->input->post('alamat'),
			'siswaTahunMasuk'	=> $this->input->post('tahunMasuk'),
			'siswaFoto'			=> $gambar,
			'ortuNoKk'			=> $noKk
		];
		$this->db->insert('siswa', $data);
	}

	function rubahSiswa()
	{
		$nis = $this->input->post('nis');
		$config = [
			'upload_path'		=> './assets/foto/',
			'allowed_types'		=> 'jpg|jpeg|png',
			'file_name'			=> $nis
		];
		$this->load->library('upload', $config);
		$gambar = 'gambar.jpg';
		$foto = $this->getProfileSiswa($nis)['siswaFoto'];

		echo $_FILES['foto']['error'];
		die();
		// if( $this->upload->do_upload('foto') ) {
			if($f_FILES['foto'][''])
			if(file_exists('./assets/foto/'.$foto) AND unlink('./assets/foto/'.$foto)) :
				echo 'foto sudah dihapus';
				// $gambar = $this->upload->data('file_name');
			endif;
		// }
		die();
		if( ($this->input->post('noKk') AND $this->input->post('noKtpAyah')) AND $this->input->post('noKtpIbu')) {
			$noKk = $this->input->post('noKk');
			$data = [
				'ortuNoKk'				=> $noKk,
				'ortuNamaAyah'			=> $this->input->post('namaAyah'),
				'ortuKtpAyah'			=> $this->input->post('noKtpAyah'),
				'ortuKerjaAyah'			=> $this->input->post('pekerjaanAyah'),
				'ortuPendidikanAyah'	=> $this->input->post('pendidikanAyah'),
				'ortuNamaIbu'			=> $this->input->post('namaIbu'),
				'ortuKtpIbu'			=> $this->input->post('noKtpIbu'),
				'ortuKerjaIbu'			=> $this->input->post('pekerjaanIbu'),
				'ortuPendidikanIbu'		=> $this->input->post('pendidikanIbu')
			];
			$this->db->insert('orangtua', $data);
		}

		$data = [
			'siswaNis'			=> $nis,
			'siswaNisn'			=> $this->input->post('nisn'), 
			'siswaNama'			=> $this->input->post('nama'),
			'siswaTempatLahir'	=> $this->input->post('tempatLahir'),
			'siswaTanggalLahir'	=> $this->input->post('tanggalLahir'),
			'siswaKelamin'		=> $this->input->post('kelamin'),
			'siswaAgama'		=> $this->input->post('agama'),
			'siswaNoHp'			=> $this->input->post('noHp'),
			'siswaEmail'		=> $this->input->post('email'),
			'siswaAlamat'		=> $this->input->post('alamat'),
			'siswaTahunMasuk'	=> $this->input->post('tahunMasuk'),
			'siswaFoto'			=> $gambar,
			'ortuNoKk'			=> $noKk
		];
		$this->db->insert('siswa', $data);
	}

	function totalSiswa()
	{
		return $this->db->get('siswa')->num_rows();
	}

	function getAllSiswa($perHalaman, $mulai)
	{
		return $this->db->get('siswa', $perHalaman, $mulai)->result_array();
	}

	function getProfileSiswa($nis)
	{
		return $this->db->get_where('siswa', ['siswaNis' => $nis])->row_array();
	}

	function getProfileOrtu($noKk)
	{
		return $this->db->get_where('orangtua', ['ortuNoKk' => $noKk])->row_array();
	}

	function cariDataSiswa()
	{
		$keyword = $this->input->post('cariSiswa');
		$this->db->like('siswaNama', $keyword);
		$this->db->or_like('siswaNis', $keyword);
		return $this->db->get('siswa')->result_array();
	}

	function hapusSiswa($nis) {
		$this->db->delete('siswa', ['siswaNis' => $nis]);
	}
}