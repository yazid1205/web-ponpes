<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_Sem extends CI_Controller {

	function get_kelas($id=null){

	}

	public function index()
	{
		$IXA = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX A'");
		$IXB = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX B'");
		$IXC = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX C'");
		$IXD = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX D'");
		$IXE = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX E'");
		$IXF = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX F'");
		$IXG = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX G'");
		$IXH = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX H'");
		$IXI = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX I'");

		$this->data['content'] = "jadwal";
        $this->data['jadwala'] = $IXA;
        $this->data['jadwalb'] = $IXB;
        $this->data['jadwalc'] = $IXC;
        $this->data['jadwald'] = $IXD;
        $this->data['jadwale'] = $IXE;
        $this->data['jadwalf'] = $IXF;
        $this->data['jadwalg'] = $IXG;
        $this->data['jadwalh'] = $IXH;
        $this->data['jadwali'] = $IXI;

		$this->load->view('main', $this->data);
	}
}