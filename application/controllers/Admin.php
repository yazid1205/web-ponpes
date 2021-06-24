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

    public function prestasi() 
    {
        $data['page'] = 'admin/prestasi';
        $data['active'] = 'prestasi';
        $data['prestasi'] = $this->model->prestasi();

        $this->load->view('layouts/app', $data);
    }

    public function tambah_prestasi()
    {        
       // Koding Upload Foto
        $path = 'assets/images/prestasi';
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
            'name_peserta' => $this->input->post('name'),
            'name_lomba' => $this->input->post('lomba'),
            'prestasi' => $this->input->post('prestasi'),
            'tingkat' => $this->input->post('tingkat'),
            'image' => $filename,
        ];
       // echo "<pre>";
       // var_dump($attr);
        //exit();

        $this->db->insert('prestasi', $attr);
        $this->session->set_flashdata('success', 'Berhasil Menambahkan Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_prestasi($id)
    {
       $d = $this->db->get_where('prestasi', ['id' => $id])->row();
      

        if(!empty($_FILES["gambar"]["name"])) {
            // Koding Upload Foto
        $path = 'assets/images/prestasi';
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
            'name_peserta' => $this->input->post('name'),
            'name_lomba' => $this->input->post('lomba'),
            'prestasi' => $this->input->post('prestasi'),
            'tingkat' => $this->input->post('tingkat'),
            'image' => $filename,
        ];
        
        $this->model->update('prestasi', $attr, $id);
        $this->session->set_flashdata('success', 'Berhasil Mengedit Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_prestasi()
    {
        $this->model->delete('prestasi', $this->input->post('id'));
        $this->session->set_flashdata('success', 'Berhasil Menghapus Data');
        echo 1;
    }

        public function galeri() 
    {
        $data['page'] = 'admin/galeri';
        $data['active'] = 'galeri';
        $data['galeri'] = $this->model->galeri();

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
        $path = 'assets/images/fasilitas';
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
            'jmh' => $this->input->post('jmh'),
            'image' => $filename,
        ];

        $this->db->insert('fasilitas', $attr);
        $this->session->set_flashdata('success', 'Berhasil Menambahkan Data');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_fasilitas($id)
    {
       $d = $this->db->get_where('fasilitas', ['id' => $id])->row();
      

        if(!empty($_FILES["foto"]["name"])) {
             // Koding Upload Foto
        $path = 'assets/images/fasilitas';
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
            'jmh' => $this->input->post('jmh'),
            'image' => $filename,
        ];
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
        $path = 'assets/images/ekstra';
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
            'pembina' => $this->input->post('pembina'),
            'hari' => $this->input->post('hari'),
            'jam' => $this->input->post('jam'),
            'image' => $filename,
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
            $path = 'assets/images/ekstra';
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
            'name' => $this->input->post('name'),
            'pembina' => $this->input->post('pembina'),
            'hari' => $this->input->post('hari'),
            'jam' => $this->input->post('jam'),
            'image' => $filename,
        ];
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

     public function komentar() 
    {
        $data['page'] = 'admin/komentar';
        $data['active'] = 'komentar';
        $data['komentar'] = $this->model->komentar();

        $this->load->view('layouts/app', $data);
    }

      public function delete_komentar()
    {
        $this->model->delete('komentar', $this->input->post('id'));
        $this->session->set_flashdata('success', 'Berhasil Menghapus Data');
        echo 1;
    }

}