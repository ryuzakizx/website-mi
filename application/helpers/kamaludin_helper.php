<?php

function ngecek_login()
{
	$kml = get_instance();
	if (!$kml->session->userdata('username')) {
		redirect('auth');
	} else {
		$role_id = $kml->session->userdata('role_id');
		$menu = $kml->uri->segment(1);

		$queryMenu = $kml->db->get_where('user_menu', ['menu' => $menu])->row_array();

		$menu_id = $queryMenu['id'];


		$userAccess = $kml->db->get_where('user_access_menu', ['role_id' => $role_id, 'menu_id' => $menu_id]);


		if ($userAccess->num_rows() < 1) {
			// code...
			redirect('auth/blokir');
		}
	}
}


function check_access_kamal($role_id, $menu_id)
{
	$kml = get_instance();
	$result = $kml->db->get_where('user_access_menu', ['role_id' => $role_id, 'menu_id' => $menu_id]);
	if ($result->num_rows() > 0) {
		return "checked='checked'";
	}
}
