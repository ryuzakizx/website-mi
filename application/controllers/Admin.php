<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        ngecek_login();
        $this->load->model('Menu_model');
        // $this->load->model('Berita_model');
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // // Mengambil jumlah pengguna
        // $data['jumlah_pengguna'] = $this->db->count_all('user');
        // // Mengambil jumlah berita
        // $data['jumlah_berita'] = $this->db->count_all('berita');
        // // Mengambil jumlah dokumentasi
        // $data['jumlah_dokumentasi'] = $this->db->count_all('dokumentasi');

        $data['judul'] = 'HMPS-MI | Dashboard';
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function role()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $data['judul'] = 'HMPS-MI | Role';
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function roleAccess($role_id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        // $this->db->where('id !=', 1);
        $this->db->where('id !=', 1);

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $data['judul'] = 'HMPS-MI | Role Access';
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/dashboard_footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">

                <i class="dripicons-checkmark me-2"></i> Selamat <strong>Berhasil</strong> Mengubah Akses!
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
    }

    public function Konfigurasi()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['konfigurasi'] = $this->db->get('konfigurasi')->result_array();

        $data['judul'] = 'HMPS-MI | Konfigurasi Umum';
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('admin/konfigurasi', $data);
        $this->load->view('templates/dashboard_footer');
    }
}
