<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

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
	public function index()
	{

        $data = array(	'title'	=>	'Galeri - Pondok Pesantren Tarbiyatul Furqan',
						'isi'	=>	'home/galeri',
						'galeri' =>  $this->db->query("SELECT * FROM galeri order by id desc")
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function detail($id)
	{
		$this->data['content'] = "content_galeri";
        $this->data['galeri'] = $this->db->query("SELECT * FROM galeri WHERE id ='".$id."'");
        $this->data['komen'] = $this->db->query("SELECT * FROM komentar WHERE id_galeri = '".$id."' AND status_komen='Aktif' ");


		$this->load->view('main', $this->data);
	}
}