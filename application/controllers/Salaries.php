<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Salaries extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('username')) {
      redirect('Auth');
    }
    $this->load->model('M_Karyawan');
  }

  public function index()
  {
    $data['Judul'] = 'Sand-Box - ';
    $data['SubJudul'] = 'Halaman Cetak Slip Gaji';
    $data['Detail'] = $this->M_Karyawan->TakeEmployees();
    $data['user'] =  $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $this->load->view('Templates/header', $data);
    $this->load->view('SalariesPages/detailKaryawan', $data);
    $this->load->view('Templates/footer');
  }

  public function DataInternships()
  {
    $data['Judul'] = 'Sand-Box - ';
    $data['SubJudul'] = 'Halaman Cetak Slip Gaji';
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $data['Detail'] = $this->M_Karyawan->TakeInternships();
    $this->load->view('Templates/header', $data);
    $this->load->view('SalariesPages/detailInternships', $data);
    $this->load->view('Templates/footer');
  }

  public function PrintSalariesEmployees($Id)
  {
    $data['Judul'] = 'Sand-Box - ';
    $data['SubJudul'] = 'Cetak Gaji';
    $data['Print'] = $this->M_Karyawan->printDataEmployees($Id);
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $this->load->view('SalariesPages/cetakGajiKaryawan', $data);
  }
}
