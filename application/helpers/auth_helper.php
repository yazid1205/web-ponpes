<?php
	function logged_in() {
		$ci =& get_instance();
		$user = $ci->session->userdata('id');

		if(!$user) {
			redirect('login');
		}
	}

	function role_admin() {
		$ci =& get_instance();
		$level = $ci->session->userdata('level');

		if($level != 1) {
			redirect(404);
		}
	} 

	function role_mahasiswa() {
		$ci =& get_instance();
		$level = $ci->session->userdata('level');

		if($level != 2) {
			redirect(404);
		}
	} 
?>