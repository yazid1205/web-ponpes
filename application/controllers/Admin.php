<?php
class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library(['auth']);
        $this->load->model('model');
        logged_in();
        role_admin();
    }


    public function index() 
    {
        $data['page'] = 'admin/dashboard';
        $data['active'] = 'dashboard';

        $this->load->view('layouts/app', $data);
    }

    public function mahasiswa() 
    {
        $data['page'] = 'admin/mahasiswa';
        $data['active'] = 'mahasiswa';
        $data['mahasiswa'] = $this->model->mahasiswa();

        $this->load->view('layouts/app', $data);
    }

    function tambah_mahasiswa()
    {
        $password = $this->bcrypt->hash_password($this->input->post('password'));

        $attr = [
            'admin_name' => $this->input->post('admin_name'),
            'nip' => $this->input->post('nip'),
            'username' => $this->input->post('username'),
            'password' => $password,
            'level' => 1,
        ];

        // Koding Upload Foto
        $ext = pathinfo($_FILES["foto"]["admin_name"], PATHINFO_EXTENSION);
        $filename = time() . '.' . $ext;
        $path = 'assets/images/';

        $config['upload_path']          = $path;
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 1024;
        $config['file_name']            = $filename;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('foto')) {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        // Akhir koding upload foto

        $attr['foto'] = $path . $filename;

        // echo "<pre>";
        // var_dump($attr);
        // exit;


        $this->db->insert('admin', $attr);
        $this->session->set_flashdata('success', 'Berhasil Menambahkan Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_mahasiswa($id)
    {
       $d = $this->db->get_where('admin', ['id' => $id])->row();
       $attr = [
            'admin_name'      => $this->input->post('admin_name'),
            'nip'   => $this->input->post('nip'),
            'username'  => $this->input->post('username'),
        ];

        $password = $this->input->post('password');
        if($password != '') {
            $attr['password'] = $this->bcrypt->hash_password($password);
        }

        if(!empty($_FILES["foto"]["admin_name"])) {
            $ext = pathinfo($_FILES["foto"]["admin_name"], PATHINFO_EXTENSION);
            $filename = time() . '.' . $ext;
            $path = 'assets/images/';

            $config['upload_path']          = $path;
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1024;
            $config['file_name']            = $filename;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('foto')) {
                $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
                $this->session->set_flashdata('danger', $error);
            }
            // Akhir koding upload foto

            $attr['foto'] = $path . $filename;

            //Koding hapus gambar lama
            file_exists($lok=FCPATH.'/'. $d->image);
            unlink($lok);
        }
        
        $this->model->update('admin', $attr, $id);
        $this->session->set_flashdata('success', 'Berhasil Mengedit Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_mahasiswa()
    {
        $this->model->delete('users', $this->input->post('id'));
        $this->session->set_flashdata('success', 'Berhasil Menghapus Data');
        echo 1;
    }

    public function kegiatan() 
    {
        $data['page'] = 'admin/kegiatan';
        $data['active'] = 'kegiatan';
        $data['mahasiswa'] = $this->model->mahasiswa();

        $this->load->view('layouts/app', $data);
    }

    public function fasilitas() 
    {
        $data['page'] = 'admin/fasilitas';
        $data['active'] = 'fasilitas';
        $data['mahasiswa'] = $this->model->mahasiswa();

        $this->load->view('layouts/app', $data);
    }

    public function staff() 
    {
        $data['page'] = 'admin/staff';
        $data['active'] = 'staff';
        $data['mahasiswa'] = $this->model->mahasiswa();

        $this->load->view('layouts/app', $data);
    }

    public function ekschool() 
    {
        $data['page'] = 'admin/ekstra';
        $data['active'] = 'ekschool';
        $data['mahasiswa'] = $this->model->mahasiswa();

        $this->load->view('layouts/app', $data);
    }

    public function jadwal() 
    {
        $data['page'] = 'admin/jadwal';
        $data['active'] = 'jadwal';
        $data['mahasiswa'] = $this->model->mahasiswa();

        $this->load->view('layouts/app', $data);
    }
}