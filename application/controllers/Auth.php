<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
  }

  public function index()
  {
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $data['judul']= 'HMPS-MI | Login Admin';
      $this->load->view('templates/auth_header',$data);
      $this->load->view('auth/login');  
      $this->load->view('templates/auth_footer');
    } else {
      $this->_login();
    }

  }

  private function _login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['username' => $username])->row_array(); //row_array() untuk mengambil data dari database yang satu baris saja

    if ($user) {
      if ($user['is_active'] == 1) {
        if (password_verify($password, $user['password'])) {
          $data = [
            'username' => $user['username'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);
          if ($user['role_id'] == 1) {
            redirect('admin');
          } else {
            redirect('user');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Maaf
            <strong>Password</strong> Salah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Maaf
            <strong>Akun</strong> Belum diaktivasi!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Maaf
            <strong>Username atau Password</strong> Salah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
      redirect('auth');
    }
    
  }

  public function registration()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => 'Email ini sudah terdaftar!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
      'matches' => 'Password tidak sama!',
      'min_length' => 'Password terlalu pendek!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


    if ($this->form_validation->run() == false) {
      $data['judul']= 'HMPS-MI | Registrasi';
      $this->load->view('templates/auth_header',$data);
      $this->load->view('auth/registration', $data);  
      $this->load->view('templates/auth_footer');
    } else {
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'image' => 'default.jpg',
        'username' => htmlspecialchars($this->input->post('username', true)),
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'role_id' => 2,
        'is_active' => 1,
        'date_created' => time()
      ];

      $this->db->insert('user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Selamat akun telah di registrasi!</div>');
      redirect('auth');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role_id');

    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Selamat
            <strong>Kamu Berhasil</strong> Logout!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
    redirect('auth');
  }

}