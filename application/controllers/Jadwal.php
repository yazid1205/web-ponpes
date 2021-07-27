<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	function get_kelas($id=null){

	}

	public function index()
	{
		
		$data = array(	'title'	=>	'Sistem Informasi Web Profil',
						'isi'	=>	'home/jadwal',
						'tujuha' =>  $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VII A'"),
						'tujuhb' =>  $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VII B'"),
						'delapana' =>  $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VIII A'"),
						'delapanb' =>  $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VIII B'"),
						'sembilana' =>  $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX A'"),
						'sembilanb' =>  $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX B'")
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}