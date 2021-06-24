<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kritik extends CI_Controller {

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
		$this->data['content'] = "kritik-saran";

		$this->load->view('main', $this->data);
	}
	public function tambah_kritik(){
		
		$attr = [
		'id_user' => $this->input->post('name'),
        'kritik' => $this->input->post('kritik'),
        'saran' => $this->input->post('saran'),
            ];
       

        $this->db->insert('kriitik', $attr);
        redirect($_SERVER['HTTP_REFERER']);
	}
}