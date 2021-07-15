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
        $this->data['content'] = "content_berita";
        $this->data['page'] = "berita";

        $this->data['beri'] = $this->db->query("SELECT * FROM kegiatan WHERE id = '".$id."'");
        $this->data['komen'] = $this->db->query("SELECT * FROM komentar WHERE id_kegiatan = '".$id."' AND status_komen='Aktif' ");

        $this->load->view('main', $this->data);
    }
    public function tambah_komentar(){
		
		$attr = [
		'id_kegiatan' => $this->input->post('id'),
		'id_user' => $this->input->post('email'),
        'isi_komen' => $this->input->post('komentar'),
        'status' => "Hide",
            ];

        $this->db->insert('komentar', $attr);
        redirect($_SERVER['HTTP_REFERER']);
	}
}