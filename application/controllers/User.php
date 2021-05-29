<?php
class Mahasiswa extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library(['auth']);
        logged_in();
        role_mahasiswa();
    }


    public function index() 
    {
        $data['page'] = 'user/dashboard';
        $data['active'] = 'dashboard';

        $this->load->view('layouts/app', $data);
    }
}