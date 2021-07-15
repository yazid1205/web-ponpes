<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	function get_kelas($id=null){

	}

	public function index()
	{
		$VIIA = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VII A'");
		$VIIB = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VII B'");
		$VIIC = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VII C'");
		$VIID = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VII D'");
		$VIIE = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VII E'");
		$VIIF = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VII F'");

		$this->data['content'] = "jadwal";
        $this->data['jadwala'] = $VIIA;
        $this->data['jadwalb'] = $VIIB;
        $this->data['jadwalc'] = $VIIC;
        $this->data['jadwald'] = $VIID; 
        $this->data['jadwale'] = $VIIE;
        $this->data['jadwalf'] = $VIIF;    

		$this->load->view('main', $this->data);
	}
}