<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('username')) {
      redirect('Auth/index');
    }
    $Access = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    if ($Access['role_id'] != 1) {
      redirect('Home');
    }
    $this->load->model('M_Karyawan');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['Judul'] = 'Sand-Box - ';
    $data['SubJudul'] = 'Halaman Aktivasi Akun ';
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $data['Aktivasi'] = $this->M_Karyawan->DataUsers();
    $this->load->view('Templates/header', $data);
    $this->load->view('Admin/indexAdmin', $data);
    $this->load->view('Templates/footer');
  }

  public function doActiveAccount($idUser)
  {
    $data['Judul'] = 'Sand-Box - ';
    $data['SubJudul'] = 'Halaman Aktivasi Akun ';
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $data['Aktivasi'] = $this->M_Karyawan->getDataUsers($idUser);
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('fullname', 'Fullname', 'required|trim');
    $this->form_validation->set_rules('image', 'Gambar', 'required');
    $this->form_validation->set_rules('role_id', 'Role ID', 'required');
    $this->form_validation->set_rules('date_created', 'Date ', 'required');
    $this->form_validation->set_rules('password', 'password ', 'required');
    $this->form_validation->set_rules('confir_password', 'Konfirmasi Password ', 'required|min_length[40]');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('Templates/header', $data);
      $this->load->view('Admin/AktivasiAkun', $data);
      $this->load->view('Templates/footer');
    } else {
      $this->M_Karyawan->ActiveAccount();
      $this->session->set_flashdata('Active', '<div class="alert alert-success" role="alert">
        Akun berhasil <Strong>diaktifkan.</strong>
      </div>');
      redirect('Admin');
    }
  }
}
