<?php
class Model extends CI_Model{
	
	public function mahasiswa()
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

}

?>