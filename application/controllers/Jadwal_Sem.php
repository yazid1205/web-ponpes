<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_Sem extends CI_Controller {

	function get_kelas($id=null){

	}

	public function index()
	{
		$IXA = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX A'");
		$IXB = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX B'");

		$this->data['content'] = "jadwal";
        $this->data['jadwala'] = $IXA;
        $this->data['jadwalb'] = $IXB;

		$this->load->view('main', $this->data);
	}
}