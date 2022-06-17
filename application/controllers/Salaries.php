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
    $this->load->library('pagination');
  }

  public function index()
  {
    $data['Judul'] = 'Sand-Box - ';
    $data['SubJudul'] = 'Halaman Cetak Slip Gaji';
    $data['user'] =  $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $config['base_url'] = 'http://localhost/UAS/Salaries/index';
    $config['total_rows'] = $this->M_Karyawan->countAllEmployees();
    $config['per_page'] = 5;
    $config['num_links'] = 3;
    $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul></nav>';

    $config['first_link'] = 'First';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';

    $config['last_link'] = 'Last';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';

    $config['next_link'] = 'Next';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';

    $config['prev_link'] = 'Prev';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';

    $config['cur_tag_open'] = ' <li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';

    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    $config['attributes'] = array('class' => 'page-link');

    $this->pagination->initialize($config);

    $data['start'] = $this->uri->segment('3');
    $data['Detail'] = $this->M_Karyawan->LimitEmployees($config['per_page'], $data['start']);
    $this->load->view('Templates/header', $data);
    $this->load->view('SalariesPages/detailKaryawan', $data);
    $this->load->view('Templates/footer');
  }

  public function DataInternships()
  {
    $data['Judul'] = 'Sand-Box - ';
    $data['SubJudul'] = 'Halaman Cetak Slip Gaji';
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $config['base_url'] = 'http://localhost/UAS/Salaries/DataInternships';
    $config['total_rows'] = $this->M_Karyawan->countAllInternships();
    $config['per_page'] = 3;
    $config['num_links'] = 3;
    $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul></nav>';

    $config['first_link'] = 'First';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';

    $config['last_link'] = 'Last';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';

    $config['next_link'] = 'Next';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';

    $config['prev_link'] = 'Prev';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';

    $config['cur_tag_open'] = ' <li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';

    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    $config['attributes'] = array('class' => 'page-link');

    $this->pagination->initialize($config);

    $data['start'] = $this->uri->segment('3');
    $data['Detail'] = $this->M_Karyawan->LimitInternships($config['per_page'], $data['start']);
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
    $this->load->library('pdf');
    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "KartuGajiKaryawanSand-Box.pdf";
    $this->pdf->load_view('SalariesPages/cetakGajiKaryawan', $data);
  }
  public function PrintSalariesInternships($Id)
  {
    $data['gajiMagang'] = $this->M_Karyawan->getSalariesInternships();
    $data['Print'] = $this->M_Karyawan->printDataInternships($Id);
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $this->load->library('pdf');
    $this->pdf->setPaper('legal', 'potrait');
    $this->pdf->filename = "KartuGajiKaryawanMagangSand-Box.pdf";
    $this->pdf->load_view('SalariesPages/cetakGajiMagang', $data);
  }
}
