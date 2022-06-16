<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Salaries extends CI_Controller
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
    $data['gajiCeo'] = $this->db->query('Select * From datagajikaryawan where id_gaji = 1')->row_array();
    $data['gajiCMO'] = $this->db->query('Select * From datagajikaryawan where id_gaji = 2')->row_array();
    $data['gajiCTO'] = $this->db->query('Select * From datagajikaryawan where id_gaji = 3')->row_array();
    $data['gajiCFO'] = $this->db->query('Select * From datagajikaryawan where id_gaji = 4')->row_array();
    $data['gajiCOO'] = $this->db->query('Select * From datagajikaryawan where id_gaji = 5')->row_array();
    $data['gajiSales'] = $this->db->query('Select * From datagajikaryawan where id_gaji = 7')->row_array();
    $data['Print'] = $this->M_Karyawan->printDataEmployees($Id);
    $data['gajiKaryawan'] = $this->M_Karyawan->getSalariesEmployees();
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $this->load->view('SalariesPages/cetakGajiKaryawan', $data);
  }
  public function PrintSalariesInternships($Id)
  {
    $data['gajiMagang'] = $this->M_Karyawan->getSalariesInternships();
    $data['Print'] = $this->M_Karyawan->printDataInternships($Id);
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $this->load->view('SalariesPages/cetakGajiMagang', $data);
  }
}
