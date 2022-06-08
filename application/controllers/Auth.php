<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_Karyawan');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if (!$this->form_validation->run() == FALSE) {
      $this->checkUser();
    } else {
      $data = [
        'Judul' => "Sand-Box - ",
        'SubJudul' => "Login"
      ];

      $this->load->view('TemplatesLogin/header', $data);
      $this->load->view('Auth/login');
      $this->load->view('TemplatesLogin/footer');
    }
  }

  private function checkUser()
  {
    $Username = $this->input->post('username');
    $Password = $this->input->post('password');

    $User = $this->db->get_where('user', ['username' => $Username])->row_array();

    if ($User) {
      if ($User['is_active'] == 1) {
        if (password_verify($Password, $User['password'])) {
          $data = [
            'username' => $User['username'],
            'role_id' => $User['role_id'],
          ];
          $this->session->set_userdata($data);
          redirect('Home');
        } else {
          $this->session->set_flashdata('Pesan', ' <div class="alert alert-danger" id="RegisterSession" role="alert">
              <strong>Password</strong> anda salah.
            </div>');
          redirect('Auth');
        }
      } else {
        $this->session->set_flashdata('Pesan', '<div class="alert alert-danger" id="RegisternSession" role="alert">
          <strong>Akun</strong> belum diaktivasi.
        </div>');
        redirect('Auth');
      }
    } else {
      $this->session->set_flashdata('Pesan', '<div  class="alert alert-danger" id="RegisterSession"  role="alert">
      <strong>Akun</strong> tidak terdaftar.
    </div>');
      redirect('Auth');
    }
  }

  public function Registration()
  {
    $this->form_validation->set_rules('fullname', 'Full Name', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
    $this->form_validation->set_rules(
      'password',
      'Password',
      'required|trim|min_length[5]|matches[konfirmasipassword]',
      ['min_length' => "Password minimal 5 kata"]
    );
    $this->form_validation->set_rules('konfirmasipassword', 'Konfirmasi Password', 'required|trim|matches[password]');
    $this->form_validation->set_rules('role_id', 'Jenis Karyawan', 'required');
    if (!$this->form_validation->run() == false) {
      $this->M_Karyawan->insertUser();
      $this->session->set_flashdata('Pesan', ' <div class="alert alert-success alert-dismissible fade show" id="RegisterSession" role="alert">
      <strong>Akun</strong> berhasil dibuat.</div>');
      redirect('Auth');
    } else {
      $data = [
        'Judul' => "Sand-Box - ",
        'SubJudul' => "Register"
      ];
      $this->load->view('TemplatesLogin/header', $data);
      $this->load->view('Auth/Registration');
      $this->load->view('TemplatesLogin/footer');
    }
  }

  public function Logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role_id');
    $this->session->set_flashdata('Pesan', ' <div class="alert alert-success alert-dismissible fade show" id="RegisterSession" role="alert">
    <strong>Anda</strong> berhasil logout.</div>');
    redirect('Auth');
  }
}
