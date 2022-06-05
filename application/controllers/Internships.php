<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Internships extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('username')) {
      redirect('Auth');
    }
    $this->load->model('M_Karyawan');
    $this->load->helper(array('form', 'url'));
    $this->load->library('pagination');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['Judul'] = "Sand-Box - ";
    $data['SubJudul'] = 'Daftar Karyawan Magang';
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $config['base_url'] = 'http://localhost/UAS/Internships/index';
    $config['total_rows'] = $this->M_Karyawan->countAllInternships();
    $config['per_page'] = 6;
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
    $data['Magang'] = $this->M_Karyawan->LimitInternships($config['per_page'], $data['start']);
    if ($this->input->post('cari')) {
      $data['Magang'] = $this->M_Karyawan->SearchDataInternships();
    }
    $this->load->view('Templates/header', $data);
    $this->load->view('Pages/internship', $data);
    $this->load->view('Templates/footer');
  }
  public function tambahDataMagang()
  {
    $data["Judul"] = "Sand-Box - ";
    $data['SubJudul'] = 'Tambah Data Karyawan Magang';
    $data['user'] =  $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $this->form_validation->set_rules('idMagang', 'ID Karyawan Magang', 'is_unique[karyawan_magang.ID_Magang]|required');
    $this->form_validation->set_rules('namaMagang', 'Nama', 'required');
    $this->form_validation->set_rules('jeniskelaminMagang', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('tahunmasukMagang', 'Tanggal Awal Magang', 'required');
    $this->form_validation->set_rules('alamatMagang', 'Alamat', 'required');
    if ($data['user']['role_id'] != 1) {
      redirect('Internships');
    }
    if ($this->form_validation->run() != FALSE) {
      $this->M_Karyawan->addDataInternships();
      $this->session->set_flashdata('Kilat', 'Ditambahkan');
      redirect('Internships/index');
    } else {
      $this->load->view("Templates/header", $data);
      $this->load->view("Pages/TambahDataMagang");
      $this->load->view("Templates/footer");
    }
  }
  public function deleteDataMagang($ID_Magang)
  {
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    if ($data['user']['role_id'] != 1) {
      redirect('Internships');
    }
    $this->M_Karyawan->deleteDataInternships($ID_Magang);
    $this->session->set_flashdata('Hapus', 'Dihapus');
    redirect('Internships');
  }

  public function editDataMagang($ID_Magang)
  {
    $data['Judul'] = 'Sand-Box - ';
    $data['Judul'] = 'Edit Data Karyawan Magang';
    $data['user'] =  $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $data['Magang'] = $this->M_Karyawan->getDataInternships($ID_Magang);
    $data['Gender'] = ['Pria', 'Wanita'];

    $this->form_validation->set_rules('idMagang', 'ID Magang', 'required');
    $this->form_validation->set_rules('namaMagang', 'Nama', 'required');
    $this->form_validation->set_rules('jeniskelaminMagang', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('tahunmasukMagang', 'Tanggal Awal Magang', 'required');
    $this->form_validation->set_rules('alamatMagang', 'Alamat', 'required');
    if ($data['user']['role_id'] != 1) {
      redirect('Internships');
    }
    if ($this->form_validation->run() == FALSE) {
      $this->load->view("Templates/header", $data);
      $this->load->view("Pages/editDataMagang", $data);
      $this->load->view("Templates/footer");
    } else {
      $this->M_Karyawan->editDataInternships($ID_Magang);
      $this->session->set_flashdata('Edit', 'Diedit');
      redirect('Internships');
    }
  }
  public function DataMagang($ID_Magang)
  {
    $data['Judul'] = 'Sand-Box - ';
    $data['SubJudul'] = 'Data Lengkap Karyawan Magang';
    $data['Magang'] = $this->M_Karyawan->getDataInternships($ID_Magang);
    $data['user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->row_array();
    $this->load->view('Templates/header', $data);
    $this->load->view('Pages/dataLengkapMagang', $data);
    $this->load->view('Templates/footer');
  }
}
