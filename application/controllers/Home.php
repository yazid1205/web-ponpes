<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	// Homepage
	public function index()
	{

		$data = array(	'title'	=>	'Sistem Informasi Web Profil',
						'isi'	=>	'home/list',
						'info' =>  $this->db->query("SELECT * FROM kegiatan WHERE status = 'Baru'")
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */