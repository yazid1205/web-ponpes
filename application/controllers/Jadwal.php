<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	function get_kelas($id=null){

	}

	public function index()
	{
		$VIIA = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VII A'");
		$VIIB = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VII B'");

		$this->data['content'] = "jadwal";
        $this->data['jadwala'] = $VIIA;
        $this->data['jadwalb'] = $VIIB;    

		$this->load->view('main', $this->data);
	}
}