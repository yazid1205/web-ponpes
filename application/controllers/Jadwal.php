<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	function get_kelas($id=null){

	}

	public function index()
	{
		$VIIA = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VII A'");
		$VIIB = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VII B'");
		$VIIIA = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VIII A'");
		$VIIIB = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VIII B'");
		$IXA = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX A'");
		$IXB = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'IX B'");

		$this->data['content'] = "jadwal";
        $this->data['tujuha'] = $VIIA;
        $this->data['tujuhb'] = $VIIB;        
        $this->data['delapana'] = $VIIIA;
        $this->data['delapanb'] = $VIIIB;   
        $this->data['sembilana'] = $IXA;
        $this->data['sembilanb'] = $IXB;

		$this->load->view('main', $this->data);
	}
}