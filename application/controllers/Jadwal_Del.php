<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_Del extends CI_Controller {

	function get_kelas($id=null){

	}

	public function index()
	{
		$VIIIA = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VIII A'");
		$VIIIB = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VIII B'");

		$this->data['content'] = "jadwal";
        $this->data['jadwala'] = $VIIIA;
        $this->data['jadwalb'] = $VIIIB;   

		$this->load->view('main', $this->data);
	}
}