<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Absensi extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_Karyawan');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_Validation');
  }

  public function index()
  {
    $data['Judul'] = 'Sand-Box';
    $data['Absen'] = $this->M_Karyawan->AbsentKaryawan()->result_array();
    $this->load->view('Templates/header', $data);
    $this->load->view('Absent/index', $data);
    $this->load->view('Templates/footer');
  }
}
