<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Karyawan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('username')) {
      redirect('Auth');
    }

    $this->load->model('M_Karyawan');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->library('pagination');
  }
  public function index()
  {
    $data['Judul'] = "Sand-Box - ";
    $data['SubJudul'] = 'Daftar Karyawan Tetap';
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $config['base_url'] = 'http://localhost/UAS/Karyawan/index';
    $config['total_rows'] = $this->M_Karyawan->countAllEmployees();
    $config['per_page'] = 7;
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
    $data['Karyawan'] = $this->M_Karyawan->LimitEmployees($config['per_page'], $data['start']);
    if ($this->input->post('cari')) {
      $data['Karyawan'] = $this->M_Karyawan->SearchDataEmployees();
    }
    $this->load->view('Templates/header', $data);
    $this->load->view('Pages/index', $data);
    $this->load->view('Templates/footer');
  }

  public function addData()
  {
    $data['Judul'] = "Sand-Box - ";
    $data['SubJudul'] = 'Tambah Data Karyawan';
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $this->form_validation->set_rules('idKaryawan', 'ID Karyawan', 'is_unique[karyawan.id_Karyawan]|required');
    $this->form_validation->set_rules('namaKaryawan', 'Nama ', 'required');
    $this->form_validation->set_rules('alamatKaryawan', 'Alamat ', 'required');
    $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin ', 'required');
    $this->form_validation->set_rules('jabatanKaryawan', 'Jabatan ', 'required');
    if ($data['user']['role_id'] != 1) {
      redirect('Karyawan');
    }
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('Templates/header', $data);
      $this->load->view('Pages/TambahData', $data);
      $this->load->view('Templates/footer');
    } else {
      $this->M_Karyawan->addDataEmployees();
      $this->session->set_flashdata('Flash', 'Ditambahkan');
      redirect('Karyawan/index');
    }
  }
  public function deleteData($ID_Karyawan)
  {
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    if ($data['user']['role_id'] != 1) {
      redirect('Karyawan');
    }
    $this->M_Karyawan->deleteDataEmployees($ID_Karyawan);
    $this->session->set_flashdata('Hapus', 'Dihapus');
    redirect('Karyawan/index');
  }

  public function editData($ID_Karyawan)
  {
    $data['Judul'] = 'Sand-Box - ';
    $data['SubJudul'] = 'Edit Data Karyawan';
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $data['Karyawan'] = $this->M_Karyawan->getDataEmployees($ID_Karyawan);
    $data['jabatan'] = [
      'CEO (Chief Executive Officer)', 'CTO (Chief Technology Officer)', 'CFO (Chief Financial Officer)', 'CMO (Chief Marketing Officer)', 'COO (Chief Operating Officer)', 'Sales Manager'
    ];
    $data['Gender'] = ['Pria', 'Wanita'];
    $this->form_validation->set_rules('idKaryawan', 'ID Karyawan', 'required');
    $this->form_validation->set_rules('namaKaryawan', 'Nama', 'required');
    $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('jabatanKaryawan', 'Jabatan', 'required');
    $this->form_validation->set_rules('alamatKaryawan', 'Alamat', 'required');
    if ($data['user']['role_id'] != 1) {
      redirect('Karyawan');
    }
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('Templates/header', $data);
      $this->load->view('Pages/editData', $data);
      $this->load->view('Templates/footer');
    } else {
      $this->M_Karyawan->editDataEmployees();
      $this->session->set_flashdata('Edit', 'Diedit');
      redirect('Karyawan/index');
    }
  }
}
