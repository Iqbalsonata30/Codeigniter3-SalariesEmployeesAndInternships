<?php
defined('BASEPATH') or exit('No direct script allowed access');
class M_Karyawan extends CI_Model
{
  public function TakeEmployees()
  {
    $query = $this->db->get('karyawan');
    return $query->result_array();
  }
  public function LimitEmployees($limit, $start)
  {
    return $this->db->get('karyawan', $limit, $start)->result_array();
  }
  public function TakeInternships()
  {
    return $this->db->get('karyawan_magang')->result_array();
  }
  public function LimitInternships($limit, $start)
  {
    return $this->db->get('karyawan_magang', $limit, $start)->result_array();
  }
  public function addDataEmployees()
  {
    $data = [
      "id_Karyawan" => $this->input->post('idKaryawan', true),
      "Nama" => $this->input->post('namaKaryawan', true),
      "Jeniskelamin" => $this->input->post('jeniskelamin', true),
      "Jabatan" => $this->input->post('jabatanKaryawan', true),
      "Alamat" => $this->input->post('alamatKaryawan', true)
    ];
    $this->db->insert('karyawan', $data);
  }
  public function addDataInternships()
  {
    $gambar = $_FILES['userfile'];
    if ($gambar = '') {
    } else {
      $config['upload_path'] = 'assets/img/gambarMagang';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size'] = '1000000';
      $config['max_width'] = '1000000';
      $config['max_height'] = '1000000';
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('userfile')) {
        echo "gagal di upload";
      } else {
        $gambar = $this->upload->data('file_name');
      }
    }
    $data = [
      "ID_Magang" => $this->input->post('idMagang', true),
      "Nama" => $this->input->post('namaMagang', true),
      "Jeniskelamin" => $this->input->post('jeniskelaminMagang', true),
      "Tahun_Masuk" => $this->input->post('tahunmasukMagang', true),
      "Alamat" => $this->input->post('alamatMagang', true),
      "Gambar" => $gambar
    ];
    $this->db->insert('karyawan_magang', $data);
  }
  public function deleteDataEmployees($Id_Karyawan)
  {
    $this->db->where('Id', $Id_Karyawan);
    $this->db->delete('karyawan');
  }

  public function deleteDataInternships($ID_Magang)
  {
    $this->db->where('Id', $ID_Magang);
    $this->db->delete('karyawan_magang');
  }

  public function editDataEmployees()
  {
    $data = [
      "Id_Karyawan" => $this->input->post('idKaryawan', true),
      "Nama" => $this->input->post('namaKaryawan', true),
      "Jeniskelamin" => $this->input->post('jeniskelamin', true),
      "Jabatan" => $this->input->post('jabatanKaryawan', true),
      "Alamat" => $this->input->post('alamatKaryawan', true),
    ];
    $this->db->where('Id', $this->input->post('Id'));
    $this->db->update('karyawan', $data);
  }
  public function getDataEmployees($ID_Karyawan)
  {
    return $this->db->get_where('karyawan',  array('Id' => $ID_Karyawan))->row_array();
  }

  public function getDataInternships($ID_Magang)
  {
    return $this->db->get_where('karyawan_magang', ['Id' => $ID_Magang])->row_array();
  }

  public function editDataInternships($ID_Magang)
  {
    $gambar = $_FILES['userfile'];
    if ($gambar = '') {
    } else {
      $config['upload_path'] = 'assets/img/gambarMagang';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size'] = '1000000';
      $config['max_width'] = '1000000';
      $config['max_height'] = '1000000';
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('userfile')) {
        echo "gagal di upload";
      } else {
        $gambar = $this->upload->data('file_name');
      }
    }
    $data = [
      "ID_Magang" => $this->input->post('idMagang', true),
      "Nama" => $this->input->post('namaMagang', true),
      "Jeniskelamin" => $this->input->post('jeniskelaminMagang', true),
      "Tahun_Masuk" => $this->input->post('tahunmasukMagang', true),
      "Alamat" => $this->input->post('alamatMagang', true),
      "Gambar" => $gambar
    ];
    $this->db->where('Id', $ID_Magang);
    $this->db->update('karyawan_magang', $data);
  }

  public function SearchDataEmployees()
  {
    $cari = $this->input->post('cari', true);
    $this->db->like('Nama', $cari);
    $this->db->or_like('id_Karyawan', $cari);
    $this->db->or_like('Jeniskelamin', $cari);
    $this->db->or_like('Jabatan', $cari);
    $this->db->or_like('Alamat', $cari);
    return $this->db->get('karyawan')->result_array();
  }

  public function countAllEmployees()
  {
    return $this->db->get('karyawan')->num_rows();
  }

  public function SearchDataInternships()
  {
    $cari = $this->input->post('cari', true);
    $this->db->like('ID_Magang', $cari);
    $this->db->or_like('Nama', $cari);
    $this->db->or_like('Jeniskelamin', $cari);
    $this->db->or_like('Tahun_Masuk', $cari);
    $this->db->or_like('Alamat', $cari);
    return $this->db->get('karyawan_magang')->result_array();
  }

  public function countAllInternships()
  {
    return $this->db->get('karyawan_magang')->num_rows();
  }

  public function AbsentKaryawan()
  {
    return $this->db->get('absent');
  }
  public function insertUser()
  {
    $data = [
      'username' => $this->input->post('username', true),
      'fullname' => $this->input->post('fullname', true),
      'image' => 'default.svg',
      'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'confir_password' => password_hash($this->input->post('konfirmasipassword'), PASSWORD_DEFAULT),
      'role_id' => $this->input->post('role_id'),
      'is_active' => 0,
      'date_created' => time()
    ];
    $this->db->insert('user', $data);
  }
  public function DataUsers()
  {
    return $this->db->get('user')->result_array();
  }


  public function ActiveAccount()
  {
    $data = [
      'username' => $this->input->post('username', true),
      'fullname' => $this->input->post('fullname', true),
      'image' => $this->input->post('image'),
      'password' => $this->input->post('password'),
      'confir_password' => $this->input->post('confir_password'),
      'role_id' => $this->input->post('role_id'),
      'is_active' => 1,
      'date_created' => $this->input->post('date_created')
    ];
    $this->db->where('id_user', $this->input->post('id_user'));
    $this->db->update('user',   $data);
  }
  public function getDataUsers($idUser)
  {
    return $this->db->get_where('user',  array('id_user' => $idUser))->row_array();
  }
  public function printDataEmployees($Id)
  {
    return $this->db->get_where('karyawan', array('Id' => $Id))->row_array();
  }
}
