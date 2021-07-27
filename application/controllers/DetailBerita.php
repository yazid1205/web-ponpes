<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailBerita extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($id) {
		 $data = array(	'title'	=>	'Detail Pengumuman atau Kegiatan - Pondok Pesantren Tarbiyatul Furqan',
						'isi'	=>	'home/content_info',
						'beri' =>  $this->db->query("SELECT * FROM kegiatan WHERE id = '".$id."'")
					);
		$this->load->view('layout/wrapper', $data, FALSE);

       
    }
    
}