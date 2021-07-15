<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_Del extends CI_Controller {

	function get_kelas($id=null){

	}

	public function index()
	{
		$VIIIA = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VIII A'");
		$VIIIB = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VIII B'");
		$VIIIC = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VIII C'");
		$VIIID = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VIII D'");
		$VIIIE = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VIII E'");
		$VIIIF = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VIII F'");
		$VIIIG = $this->db->query("SELECT * FROM jadwal WHERE kelas = 'VIII G'");

		$this->data['content'] = "jadwal";
        $this->data['jadwala'] = $VIIIA;
        $this->data['jadwalb'] = $VIIIB;
        $this->data['jadwalc'] = $VIIIC;
        $this->data['jadwald'] = $VIIID;
        $this->data['jadwale'] = $VIIIE;
        $this->data['jadwalf'] = $VIIIF;   
        $this->data['jadwalg'] = $VIIIG;

		$this->load->view('main', $this->data);
	}
}