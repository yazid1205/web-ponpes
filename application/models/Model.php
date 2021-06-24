<?php
class Model extends CI_Model{
	
	public function user()
	{
		return $this->db->where('level', 2)->get('users');
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

}

?>