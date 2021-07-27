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

    public function dashboard() 
    {
        $data['page'] = 'admin/dashboard';
        $data['active'] = 'dashboard';

        $this->load->view('layouts/app', $data);
    }

    public function user() 
    {
        $data['page'] = 'admin/user';
        $data['active'] = 'user';
        $data['user'] = $this->model->user();

        $this->load->view('layouts/app', $data);
    }

    function tambah_user()
    {
        $password = $this->bcrypt->hash_password($this->input->post('password'));
        
        // Koding Upload Foto
        $path = 'assets/images';
        $config['upload_path']         = $path;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        {
            $data = array('upload_data' => $this->upload->data());
        }
   
        // Akhir koding upload foto

        $filename = $path . '/' . $data['upload_data']['file_name'];

        $attr = [
            'name' => $this->input->post('name'),
            'nip' => $this->input->post('nip'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $password,
            'image' => $filename,
            'level' => $this->input->post('level'),
        ];


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
      
        $password = $this->input->post('password');
        if($password != '') {
            $attr['password'] = $this->bcrypt->hash_password($password);
        }

        if(!empty($_FILES["image"]["name"])) {
           // Koding Upload Foto
       
        $path = 'assets/images';
        $config['upload_path']         = $path;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        {
            $data = array('upload_data' => $this->upload->data());
        }
   
        // Akhir koding upload foto

           $filename = $path . '/' . $data['upload_data']['file_name'];

        $attr = [
            'name' => $this->input->post('name'),
            'nip' => $this->input->post('nip'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $password,
            'image' => $filename,
            'level' => $this->input->post('level'),
        ];
 
            //Koding hapus gambar lama
            file_exists($lok=FCPATH.'/'. $d->image);
            unlink($lok);
        }
        $filename = $path . '/' . $data['upload_data']['file_name'];

        $attr = [
            'name' => $this->input->post('name'),
            'nip' => $this->input->post('nip'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $password,
            'image' => $filename,
            'level' => $this->input->post('level'),
        ];

        
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
        $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan order by id desc");

        $this->load->view('layouts/app', $data);
    }

    function tambah_kegiatan()
    {
        
       // Koding Upload Foto
        $path = 'assets/images/kegiatan';
        $config['upload_path']         = $path;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar'))
        {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        {
            $data = array('upload_data' => $this->upload->data());
        }
   
        // Akhir koding upload foto

        $filename = $path . '/' . $data['upload_data']['file_name'];

        $attr = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'gambar' => $filename,
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
      

        if(!empty($_FILES["gambar"]["name"])) {
            // Koding Upload Foto
        $path = 'assets/images/kegiatan';
        $config['upload_path']         = $path;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar'))
        {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        {
            $data = array('upload_data' => $this->upload->data());
        }
   
            // Akhir koding upload foto
        $filename = $path . '/' . $data['upload_data']['file_name'];

        $attr = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'gambar' => $filename,
        ];
            //Koding hapus gambar lama
            file_exists($lok=FCPATH.'/'. $d->gambar);
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

        public function galeri() 
    {
        $data['page'] = 'admin/galeri';
        $data['active'] = 'galeri';
        $data['galeri'] = $this->db->query("SELECT * FROM galeri order by id desc");

        $this->load->view('layouts/app', $data);
    }

    function tambah_galeri()
    {
        
       // Koding Upload Foto
        $path = 'assets/images/galeri';
        $config['upload_path']         = $path;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        {
            $data = array('upload_data' => $this->upload->data());
        }
   
        // Akhir koding upload foto

        $filename = $path . '/' . $data['upload_data']['file_name'];

        $attr = [
            'caption' => $this->input->post('caption'),
            'image' => $filename,
        ];
       // echo "<pre>";
       // var_dump($attr);
        //exit();

        $this->db->insert('galeri', $attr);
        $this->session->set_flashdata('success', 'Berhasil Menambahkan Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_galeri($id)
    {
       $d = $this->db->get_where('galeri', ['id' => $id])->row();
      

        if(!empty($_FILES["image"]["name"])) {
            // Koding Upload Foto
        $path = 'assets/images/galeri';
        $config['upload_path']         = $path;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        {
            $data = array('upload_data' => $this->upload->data());
        }
   
            // Akhir koding upload foto

        
            //Koding hapus gambar lama
            file_exists($lok=FCPATH.'/'. $d->image);
            unlink($lok);
        }

        $filename = $path . '/' . $data['upload_data']['file_name'];
        $attr = [
            'caption' => $this->input->post('caption'),
            'image' => $filename,
        ];
        
        $this->model->update('galeri', $attr, $id);
        $this->session->set_flashdata('success', 'Berhasil Mengedit Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_galeri()
    {
        $this->model->delete('galeri', $this->input->post('id'));
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
        $path = 'assets/images/pegawai';
        $config['upload_path']         = $path;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        {
            $data = array('upload_data' => $this->upload->data());
        }
   
        // Akhir koding upload foto

        $filename = $path . '/' . $data['upload_data']['file_name'];

        $attr = [
            'name' => $this->input->post('name'),
            'nip' => $this->input->post('nip'),
            'pendidikan' => $this->input->post('pendidikan'),
            'jabatan' => $this->input->post('jabatan'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'j_kelamin' => $this->input->post('j_kelamin'),
            'telp' => $this->input->post('telp'),
            'email' => $this->input->post('email'),
            'status' => $this->input->post('status'),
            'image' => $filename,
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
           // Koding Upload Foto
        $path = 'assets/images/pegawai';
        $config['upload_path']         = $path;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        {
            $data = array('upload_data' => $this->upload->data());
        }
   
        // Akhir koding upload foto

            //Koding hapus gambar lama
            file_exists($lok=FCPATH.'/'. $d->image);
            unlink($lok);
        }
        
        $filename = $path . '/' . $data['upload_data']['file_name'];

        $attr = [
            'name' => $this->input->post('name'),
            'nip' => $this->input->post('nip'),
            'pendidikan' => $this->input->post('pendidikan'),
            'jabatan' => $this->input->post('jabatan'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'j_kelamin' => $this->input->post('j_kelamin'),
            'telp' => $this->input->post('telp'),
            'email' => $this->input->post('email'),
            'status' => $this->input->post('status'),
            'image' => $filename,
        ];

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

   
    public function jadwal() 
    {
        $data['page'] = 'admin/jadwal';
        $data['active'] = 'jadwal';
        $data['jadwal'] = $this->model->jadwal();

        $this->load->view('layouts/app', $data);
    }

    function tambah_jadwal()
    {
        // Koding Upload Foto
        $path = 'assets/images/jadwal';
        $config['upload_path']         = $path;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        {
            $data = array('upload_data' => $this->upload->data());
        }
   
        // Akhir koding upload foto

        $filename = $path . '/' . $data['upload_data']['file_name'];


        $attr = [
            'wali' => $this->input->post('wali'),
            'kelas' => $this->input->post('kelas'),
            'semester' => $this->input->post('semester'),
            'tahun_ajaran' => $this->input->post('tahun'),            
            'image' => $filename,
            ];
       

        $this->db->insert('jadwal', $attr);
        $this->session->set_flashdata('success', 'Berhasil Menambahkan Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_jadwal($id)
    {
       $d = $this->db->get_where('jadwal', ['id' => $id])->row();


        if(!empty($_FILES["image"]["name"])) {
            $path = 'assets/images/jadwal';
        $config['upload_path']         = $path;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $error = 'Gambar yang anda masukan salah. Periksa lagi ekstensi foto';
            $this->session->set_flashdata('danger', $error);
            redirect($_SERVER['HTTP_REFERER']);
        }
        {
            $data = array('upload_data' => $this->upload->data());
        }
   
        // Akhir koding upload foto

        $filename = $path . '/' . $data['upload_data']['file_name'];

            //Koding hapus gambar lama
            file_exists($lok=FCPATH.'/'. $d->image);
            unlink($lok);
        }
            $attr = [
            'wali' => $this->input->post('wali'),
            'kelas' => $this->input->post('kelas'),
            'semester' => $this->input->post('semester'),
            'tahun_ajaran' => $this->input->post('tahun'),           
            'image' => $filename,
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

     public function kritik() 
    {
        $data['page'] = 'admin/kritik';
        $data['active'] = 'kritik';
        $data['kritik'] = $this->model->kritik();

        $this->load->view('layouts/app', $data);
    }

     public function delete_kritik()
    {
        $this->model->delete('kriitik', $this->input->post('id'));
        $this->session->set_flashdata('success', 'Berhasil Menghapus Data');
        echo 1;
    }

}