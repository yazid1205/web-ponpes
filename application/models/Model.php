<?php
class Model extends CI_Model{
	
	public function user()
	{
		return $this->db->where('level', 1)->get('users');
	}

	function update($table, $data, $id) {
    	return $this->db->where('id', $id)->update($table, $data);
    }

    function delete($table, $id) {
    	return $this->db->where('id', $id)->delete($table);
    }

	function get_where($table, $id) {
        $this->db->where('id', $id);
        return $this->db->get($table);
    }

    function kegiatan() {
        return $this->db->get('kegiatan');
    }

    function kegiatanduatabel() {
        $this->db->select('*');
        $this->db->from('kegiatan');
        $this->db->join('komentar','komentar.id=kegiatan.id');
        $query = $this->db->get();
        return $query->result();
    }

    function prestasi() {
        return $this->db->get('prestasi');
    }

    function ekstra() {
        return $this->db->get('ekstrakulikuler');
    }

    function fasilitas() {
        return $this->db->get('fasilitas');
    }

    function jadwal() {
        return $this->db->get('jadwal');
    }
    
    function get_kelas($kelas) {
        $res = $this->db->query("SELECT * FROM jadwal WHERE kelas ='".$kelas."'");
        return $res->result();
    }

    function staff() {
        return $this->db->get('pegawai');
    }

    function galeri() {
        return $this->db->get('galeri');
    }

    function kritik() {
        return $this->db->get('kriitik');
    }

    function komentar() {
        return $this->db->get('komentar');
    }

    function komentarkegiatan() {
        $this->db->select('*');
        $this->db->from('komentar');
        $this->db->join('kegiatan','kegiatan.id=komentar.id_kegiatan');
        $this->db->order_by('komentar.id desc');
        $query = $this->db->get();
        return $query->result();
    }

    function komentargaleri() {
        $this->db->select('*');
        $this->db->from('komentar');
        $this->db->join('galeri','galeri.id=komentar.id_galeri');
        $this->db->order_by('komentar.id desc');
        $query = $this->db->get();
        return $query->result();
    }

    function Is_already_register($id)
    {
        $this->db->where('login_oauth_uid', $id);
        $query = $this->db->get('chat_user');
        if($query->num_rows() > 0)
        {
        return true;
        }
        else
        {
        return false;
        }
    }

    function Update_user_data($data, $id)
    {
        $this->db->where('login_oauth_uid', $id);
        $this->db->update('chat_user', $data);
    }

        function Insert_user_data($data)
    {
        $this->db->insert('chat_user', $data);
        }
}
?>