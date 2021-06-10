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
        $data['page'] = 'admin/user';
        $data['active'] = 'user';
        $data['user'] = $this->model->mahasiswa();

        $this->load->view('layouts/app', $data);
    }

    function tambah_user()
    {
        $password = $this->bcrypt->hash_password($this->input->post('password'));

        $attr = [
            'name' => $this->input->post('name'),
            'nip' => $this->input->post('nip'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $password,
            'level' => $this->input->post('level'),
        ];

        
        // Koding Upload Foto
        $ext = pathinfo($_FILES["image"]["name"]);
        $filename = time() . '.' . $ext;
        $path = 'assets/images/';

        $config['upload_path']          = $path;
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['file_name']            = $filename;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('image')) {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        // Akhir koding upload foto

        $attr['image'] = $path . $filename;

       // echo "<pre>";
       // var_dump($attr);
        //exit();

        $this->db->insert('users', $attr);
        $this->session->set_flashdata('success', 'Berhasil Menambahkan Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_user($id)
    {
       $d = $this->db->get_where('users', ['id' => $id])->row();
       $attr = [
            'name' => $this->input->post('name'),
            'nip' => $this->input->post('nip'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'level' => $this->input->post('level'),
        ];

        $password = $this->input->post('password');
        if($password != '') {
            $attr['password'] = $this->bcrypt->hash_password($password);
        }

        if(!empty($_FILES["foto"]["name"])) {
            $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            $filename = time() . '.' . $ext;
            $path = 'assets/images/';

            $config['upload_path']          = $path;
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1024;
            $config['file_name']            = $filename;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('image')) {
                $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
                $this->session->set_flashdata('danger', $error);
            }
            // Akhir koding upload foto

            $attr['image'] = $path . $filename;

            //Koding hapus gambar lama
            file_exists($lok=FCPATH.'/'. $d->image);
            unlink($lok);
        }
        
        $this->model->update('users', $attr, $id);
        $this->session->set_flashdata('success', 'Berhasil Mengedit Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_user()
    {
        $this->model->delete('users', $this->input->post('id'));
        $this->session->set_flashdata('success', 'Berhasil Menghapus Data');
        echo 1;
    }

    public function kegiatan() 
    {
        $data['page'] = 'admin/kegiatan';
        $data['active'] = 'kegiatan';
        $data['kegiatan'] = $this->model->kegiatan();

        $this->load->view('layouts/app', $data);
    }

    function tambah_kegiatan()
    {
        
        // Koding Upload Foto
        $ext = pathinfo($_FILES["image"]["name"]);
        $filename = time() . '.' . $ext;
        $path = 'assets/images/';

        $config['upload_path']          = $path;
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['file_name']            = $filename;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('gambar')) {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        // Akhir koding upload foto

        $attr = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
        ];
       // echo "<pre>";
       // var_dump($attr);
        //exit();

        $this->db->insert('kegiatan', $attr);
        $this->session->set_flashdata('success', 'Berhasil Menambahkan Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_kegiatan($id)
    {
       $d = $this->db->get_where('kegiatan', ['id' => $id])->row();
      

        if(!empty($_FILES["foto"]["name"])) {
            $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            $filename = time() . '.' . $ext;
            $path = 'assets/images/';

            $config['upload_path']          = $path;
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1024;
            $config['file_name']            = $filename;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('image')) {
                $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
                $this->session->set_flashdata('danger', $error);
            }
            // Akhir koding upload foto

            $attr = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'image' => $path . $filename,
            ];
            //Koding hapus gambar lama
            file_exists($lok=FCPATH.'/'. $d->image);
            unlink($lok);
        }
        
        $this->model->update('kegiatan', $attr, $id);
        $this->session->set_flashdata('success', 'Berhasil Mengedit Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_kegiatan()
    {
        $this->model->delete('kegiatan', $this->input->post('id'));
        $this->session->set_flashdata('success', 'Berhasil Menghapus Data');
        echo 1;
    }

    public function fasilitas() 
    {
        $data['page'] = 'admin/fasilitas';
        $data['active'] = 'fasilitas';
        $data['fasilitas'] = $this->model->fasilitas();

        $this->load->view('layouts/app', $data);
    }

    function tambah_fasilitas()
    {
        
        // Koding Upload Foto
        $ext = pathinfo($_FILES["image"]["name"]);
        $filename = time() . '.' . $ext;
        $path = 'assets/images/';

        $config['upload_path']          = $path;
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['file_name']            = $filename;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('gambar')) {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        // Akhir koding upload foto

        $attr = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
        ];
       // echo "<pre>";
       // var_dump($attr);
        //exit();

        $this->db->insert('fasilitas', $attr);
        $this->session->set_flashdata('success', 'Berhasil Menambahkan Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_fasilitas($id)
    {
       $d = $this->db->get_where('fasilitas', ['id' => $id])->row();
      

        if(!empty($_FILES["foto"]["name"])) {
            $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            $filename = time() . '.' . $ext;
            $path = 'assets/images/';

            $config['upload_path']          = $path;
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1024;
            $config['file_name']            = $filename;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('image')) {
                $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
                $this->session->set_flashdata('danger', $error);
            }
            // Akhir koding upload foto

            $attr = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'image' => $path . $filename,
            ];
            //Koding hapus gambar lama
            file_exists($lok=FCPATH.'/'. $d->image);
            unlink($lok);
        }
        
        $this->model->update('fasilitas', $attr, $id);
        $this->session->set_flashdata('success', 'Berhasil Mengedit Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_fasilitas()
    {
        $this->model->delete('fasilitas', $this->input->post('id'));
        $this->session->set_flashdata('success', 'Berhasil Menghapus Data');
        echo 1;
    }

    public function staff() 
    {
        $data['page'] = 'admin/staff';
        $data['active'] = 'staff';
        $data['staff'] = $this->model->staff();

        $this->load->view('layouts/app', $data);
    }

    function tambah_staff()
    {
        
        // Koding Upload Foto
        $ext = pathinfo($_FILES["image"]["name"]);
        $filename = time() . '.' . $ext;
        $path = 'assets/images/';

        $config['upload_path']          = $path;
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['file_name']            = $filename;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('gambar')) {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        // Akhir koding upload foto

        $attr = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
        ];
       // echo "<pre>";
       // var_dump($attr);
        //exit();

        $this->db->insert('pegawai', $attr);
        $this->session->set_flashdata('success', 'Berhasil Menambahkan Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_staff($id)
    {
       $d = $this->db->get_where('pegawai', ['id' => $id])->row();
      

        if(!empty($_FILES["foto"]["name"])) {
            $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            $filename = time() . '.' . $ext;
            $path = 'assets/images/';

            $config['upload_path']          = $path;
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1024;
            $config['file_name']            = $filename;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('image')) {
                $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
                $this->session->set_flashdata('danger', $error);
            }
            // Akhir koding upload foto

            $attr = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'image' => $path . $filename,
            ];
            //Koding hapus gambar lama
            file_exists($lok=FCPATH.'/'. $d->image);
            unlink($lok);
        }
        
        $this->model->update('pegawai', $attr, $id);
        $this->session->set_flashdata('success', 'Berhasil Mengedit Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_staff()
    {
        $this->model->delete('pegawai', $this->input->post('id'));
        $this->session->set_flashdata('success', 'Berhasil Menghapus Data');
        echo 1;
    }

    public function ekschool() 
    {
        $data['page'] = 'admin/ekstra';
        $data['active'] = 'ekschool';
        $data['ekstra'] = $this->model->ekstra();

        $this->load->view('layouts/app', $data);
    }

    function tambah_ekstra()
    {
        
        // Koding Upload Foto
        $ext = pathinfo($_FILES["image"]["name"]);
        $filename = time() . '.' . $ext;
        $path = 'assets/images/';

        $config['upload_path']          = $path;
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['file_name']            = $filename;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('gambar')) {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        // Akhir koding upload foto

        $attr = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
        ];
       // echo "<pre>";
       // var_dump($attr);
        //exit();

        $this->db->insert('ekstrakulikuler', $attr);
        $this->session->set_flashdata('success', 'Berhasil Menambahkan Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_ekstra($id)
    {
       $d = $this->db->get_where('ekstrakulikuler', ['id' => $id])->row();
      

        if(!empty($_FILES["foto"]["name"])) {
            $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            $filename = time() . '.' . $ext;
            $path = 'assets/images/';

            $config['upload_path']          = $path;
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1024;
            $config['file_name']            = $filename;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('image')) {
                $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
                $this->session->set_flashdata('danger', $error);
            }
            // Akhir koding upload foto

            $attr = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'image' => $path . $filename,
            ];
            //Koding hapus gambar lama
            file_exists($lok=FCPATH.'/'. $d->image);
            unlink($lok);
        }
        
        $this->model->update('ekstrakulikuler', $attr, $id);
        $this->session->set_flashdata('success', 'Berhasil Mengedit Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_ekstra()
    {
        $this->model->delete('ekstrakulikuler', $this->input->post('id'));
        $this->session->set_flashdata('success', 'Berhasil Menghapus Data');
        echo 1;
    }

    public function jadwal() 
    {
        $data['page'] = 'admin/jadwal';
        $data['active'] = 'jadwal';
        $data['jadwal'] = $this->model->jadwal();

        $this->load->view('layouts/app', $data);
    }

    function tambah_jadwal()
    {

        $attr = [
            'mapel' => $this->input->post('mapel'),
            'kelas' => $this->input->post('kelas'),
            'semester' => $this->input->post('semester'),
            'tahun_ajaran' => $this->input->post('tahun'),
            ];
       

        $this->db->insert('jadwal', $attr);
        $this->session->set_flashdata('success', 'Berhasil Menambahkan Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_jadwal($id)
    {
       $d = $this->db->get_where('jadwal', ['id' => $id])->row();

            $attr = [
            'mapel' => $this->input->post('mapel'),
            'kelas' => $this->input->post('kelas'),
            'semester' => $this->input->post('semester'),
            'tahun_ajaran' => $this->input->post('tahun'),
            ];
           
        
        $this->model->update('jadwal', $attr, $id);
        $this->session->set_flashdata('success', 'Berhasil Mengedit Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_jadwal()
    {
        $this->model->delete('jadwal', $this->input->post('id'));
        $this->session->set_flashdata('success', 'Berhasil Menghapus Data');
        echo 1;
    }

}