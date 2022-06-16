<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('username')) {
      $this->session->set_flashdata('Pesan', ' <div class="alert alert-info alert-dismissible fade show" id="RegisterSession" role="alert">
      <strong>Login</strong> terlebih dahulu .</div>');
      redirect('Auth');
    }
    $this->load->model('M_Karyawan');
    $this->load->library('form_validation');
    date_default_timezone_set('Asia/Jakarta');
  }

  public function index()
  {
    if (date('H') < 4) {
      $greet = 'Selamat Malam';
    } else if (date('H') < 11) {
      $greet = 'Selamat Pagi';
    } else if (date('H') < 16) {
      $greet = 'Selamat Siang';
    } else if (date('H') < 18) {
      $greet = 'Selamat Sore';
    } else {
      $greet = 'Selamat Malam';
    }
    $data = [
      'Judul' => "Sand-Box - ",
      'SubJudul' => "Home",
      'user' => $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array(),
      'Salam' => $greet
    ];
    $data['JumlahInternships'] = $this->M_Karyawan->countAllInternships();
    $data['JumlahEmployees'] = $this->M_Karyawan->countAllEmployees();
    $this->load->view('Templates/header', $data);
    $this->load->view('Homes/index', $data);
    $this->load->view('Templates/footer');
  }
  public function Profile()
  {
    $data = [
      'Judul' => 'Sand-Box - ',
      'SubJudul' => 'Profile',
      'user' => $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array(),
      'jabatan' => $this->M_Karyawan->TakeEmployees(),
    ];
    $this->load->view('Templates/header', $data);
    $this->load->view('Homes/Profile', $data);
    $this->load->view('Templates/footer');
  }

  public function changePassword()
  {
    $data['Judul'] = 'Sand-Box - ';
    $data['SubJudul'] = 'Ganti Password ';
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $this->form_validation->set_rules('oldPassword', 'Password Lama', 'required|trim');
    $this->form_validation->set_rules('newPassword', 'Password Baru', 'required|trim|min_length[5]|matches[confirmPassword]');
    $this->form_validation->set_rules('confirmPassword', 'Konfirmasi Password', 'required|trim|min_length[5]|matches[newPassword]');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('Templates/header', $data);
      $this->load->view('Homes/changePassword', $data);
      $this->load->view('Templates/footer');
    } else {
      $oldPassword = $this->input->post('oldPassword');
      if (!password_verify($oldPassword, $data['user']['password'])) {
        $this->session->set_flashdata('password', '<div class="alert alert-danger" role="alert">
        Password lama<Strong> salah.</strong>
      </div>');
        redirect('Home/changePassword');
      } {
        if ($oldPassword == $this->input->post('newPassword')) {
          $this->session->set_flashdata('password', '<div class="alert alert-danger" role="alert">
          Password lama tidak bisa  sama dengan Password Baru.
        </div>');
          redirect('Home/changePassword');
        } else {
          $password_hash = password_hash($this->input->post('newPassword'), PASSWORD_DEFAULT);
          $this->db->set('password', $password_hash);
          $this->db->where('username', $this->session->userdata('username'));
          $this->db->update('user');
          $this->session->set_flashdata('password', '<div class="alert alert-success" role="alert">
          Password berhasil<Strong> diubah.</strong>
        </div>');
          redirect('Home/changePassword');
        }
      }
    }
  }
}
