<?php
class Blog extends CI_Controller {

    public function index()
    {
        $users = $this->db->where('level', 2)->get('users');

        $data = [
            'title' => 'Halaman Utama',
            'page'  => 'home',
            'users' => $users,
        ];

        $this->load->view('layouts/body', $data);
    }

    public function berita() 
    {
        $data = [
            'title' => 'Halaman Berita',
            'page' => 'berita',
        ];

        $this->load->view('layouts/body', $data);
    }
}