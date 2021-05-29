<?php
class Login extends CI_Controller {

    public function index() 
    {
       $this->load->view('login');
    }

    public function ceklogin() 
    {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $cek = $this->db->where('username', $username)->get('users');

      if ($cek->num_rows() > 0) {
            foreach ($cek->result() as $d) {
                if (password_verify($password, $d->password)) {
                    $session['id']    = $d->id;
                    $session['level'] = $d->level;
                    $this->session->set_userdata($session);

                    if($d->level == 1){
                        redirect('admin');
                    } else{
                        redirect('home');
                    }
                } else{
                    $this->session->set_flashdata('warning', 'Password Anda Salah!');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }
      } else{
        $this->session->set_flashdata('danger', 'Akun Tidak Terdaftar!');
        redirect($_SERVER['HTTP_REFERER']);
      }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}