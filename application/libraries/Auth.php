<?php 
    Class Auth {
        protected $ci;

        function __construct()
        {
            $this->ci =& get_instance();
        }

        function user()
        {
            $user_id = $this->ci->session->userdata('id');
            $user_data = $this->ci->db->get_where('users', ['id' => $user_id])->row();
            return $user_data;
        }
    }
?>